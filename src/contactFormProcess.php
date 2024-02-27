<?php

require_once './functions.php';

$blog_data = [];

if (isset($_POST['user_fname'])) {
    $blog_data["user_fname"] = strip_tags(trim($_POST['user_fname']));
}

if (isset($_POST['user_lname'])) {
    $blog_data["user_lname"] = strip_tags(trim($_POST['user_lname']));
}

if (isset($_POST['user_email'])) {
    $blog_data["user_email"] = strip_tags(trim($_POST['user_email']));
}

if (isset($_POST['blog_title'])) {
    $blog_data["blog_title"] = strip_tags(trim($_POST['blog_title']));
}

if (isset($_POST['blog_content'])) {
    $blog_data["blog_content"] = strip_tags(trim($_POST['blog_content']));
}

$temp = $_FILES["file"]["tmp_name"];
if (isset($_FILES["file"]) and is_uploaded_file($temp)) {
    $fileName = $blog_data["user_fname"] . $blog_data["user_lname"] . "-" . time() . ".jpg";
    $path = "../images/img_uploaded/$fileName";
    if (move_uploaded_file($temp, $path)) {
        $blog_data["blog_photo"] = "images/img_uploaded/$fileName";
    }
}

var_dump($blog_data);

$isInserted = insertNewBlog($blog_data);

if ($isInserted) {
    header("Location: ../blog.php");
} else {
    die("error");
}
