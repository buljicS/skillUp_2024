<?php

require_once '../conf/config.php';
require '../vendor/autoload.php';

use Exception as GlobalException;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



function connectDatabase(string $dsn, array $pdoOptions): PDO
{

    try {
        $pdo = new PDO($dsn, PARAMS['USER'], PARAMS['PASSWORD'], $pdoOptions);
    } catch (\PDOException $e) {
        var_dump($e->getCode());
        throw new \PDOException($e->getMessage());
    }

    return $pdo;
}

$GLOBALS['pdo'] = connectDatabase($dsn, $pdoOptions);

function insertNewComment(array $commentData): bool
{
    $sql = "INSERT INTO comments (fname, mail, comment) VALUES (:fname, :mail, :comment)";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->bindValue(":fname", $commentData['name'], PDO::PARAM_STR);
    $stmt->bindValue(":mail", $commentData['mail'], PDO::PARAM_STR);
    $stmt->bindValue(":comment", $commentData['comment'], PDO::PARAM_STR);
    $isDone = $stmt->execute();
    return $isDone;
}

function insertNewBlog(array $blog_data): bool
{
    $sql = "INSERT INTO blogs (user_fname, user_lname, user_email, blog_photo, blog_title, blog_content) VALUES (:user_fname, :user_lname, :user_email, :blog_photo, :blog_title, :blog_content)";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->bindValue(":user_fname", $blog_data['user_fname'], PDO::PARAM_STR);
    $stmt->bindValue(":user_lname", $blog_data['user_lname'], PDO::PARAM_STR);
    $stmt->bindValue(":user_email", $blog_data['user_email'], PDO::PARAM_STR);
    $stmt->bindValue(":blog_photo", $blog_data['blog_photo'], PDO::PARAM_STR);
    $stmt->bindValue(":blog_title", $blog_data['blog_title'], PDO::PARAM_STR);
    $stmt->bindValue(":blog_content", $blog_data['blog_content'], PDO::PARAM_STR);
    $isDone = $stmt->execute();
    return $isDone;
}

function readAllBlogs(): array
{
    $sql = "SELECT * FROM blogs";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function readActiveBlogs(): array
{
    $sql = "SELECT * FROM blogs WHERE is_approved = 1";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function sendEmail(array $data): bool
{
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                             //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                     //Enable SMTP authentication
        $mail->Username = 'stefanbvts@gmail.com';                   //SMTP username
        $mail->Password = 'wbovuqjkzhxijojq';                       //SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('stefanbvts@gmail.com', 'PHP Mailer');

        $mail->isHTML(true);
        $mail->Subject = $data['tema'];
        $mail->Body = $data['poruka'];
        $mail->CharSet = 'UTF-8';

        $mail->send();
    } catch (Exception $ex) {
        "Mailer error: {$mail->ErrorInfo}";
    }

    return true;
}
