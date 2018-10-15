<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../config.php.inc";

require '../vendor/Exception.php';
require '../vendor/PHPMailer.php';
require '../vendor/SMTP.php';

function sendEmail(array $data) {
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 465;
    
        //Recipients
        $mail->addAddress('hello@adosmint.com', 'Adosmint!');
        $mail->setFrom(MAILER_FROM, MAILER_FULLNAME);
        $mail->isHTML(true);
        $mail->Subject = 'New Mail from Contact Page';
        $mail->Body    = 'New message from: '.$data['email']." with phone number:".$data['phone'].
            "<br/>".$data['message'];

        
        $mail->send();
        $_SESSION['success'] = "Your message has been sent. We will get back to you shortly";
        header("location: /contact_us.php");
    } catch (Exception $e) {
        $_SESSION['error']['failure'] = "Failed to send message. Please try again later.";
        header("location: /contact_us.php");
    }
}

if (!empty($_POST) && isset($_POST['submit'])) {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (trim($username) == "") {
        $_SESSION['error']['username'] = "Username cannot be blank";
    }
    if (trim($phone) == "") {
        $_SESSION['error']['phone'] = "Phone number cannot be blank";
    }
    if (trim($email) == "") {
        $_SESSION['error']['email'] = "Email address cannot be blank";
    }
    if (trim($message) == "") {
        $_SESSION['error']['message'] = "Message cannot be blank";
    }

    if (!empty($_SESSION['error'])) {
        header("location: /contact_us.php");
            exit();
    }

    sendEmail($_POST);

}
else {
    header("location: /contact_us.php");
    exit();
}
