<?php

require_once '../src/functions.php';

$mail_data = [];
$err = 0;

if (isset($_POST['ime'])) {
    $mail_data["ime"] = strip_tags(trim($_POST['ime']));
} else {
    $err++;
}

if (isset($_POST['brtelefona'])) {
    $mail_data["brtelefona"] = strip_tags(trim($_POST['brtelefona']));
} else {
    $err++;
}

if (isset($_POST['email'])) {
    $mail_data["email"] = strip_tags(trim($_POST['email']));
} else {
    $err++;
}

if (isset($_POST['tema'])) {
    $mail_data["tema"] = strip_tags(trim($_POST['tema']));
} else {
    $err++;
}

if (isset($_POST['poruka'])) {
    $mail_data["poruka"] = strip_tags(trim($_POST['poruka']));
} else {
    $err++;
}

require '../vendor/autoload.php';

use Exception as GlobalException;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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

    $mail->setFrom('stefanbvts@gmail.com', 'Digitalna priroda');
    $mail->addAddress('stefanbvts@gmail.com', 'Stefan');


    $mail->isHTML(true);
    $mail->Subject = $mail_data['tema'];
    $mail->Body = $mail_data['poruka'];
    $mail->CharSet = 'UTF-8';

    $mail->send();
} catch (Exception $ex) {
    "Mailer error: {$mail->ErrorInfo}";
}
