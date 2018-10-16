<?php
ob_clean();
ob_start();
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../config.php.inc";

require '../vendor/Exception.php';
require '../vendor/PHPMailer.php';
require '../vendor/SMTP.php';


if (!empty($_POST)) {
    $categories = $_POST['category'];
    $accountType = $_POST['rdn'];
    $fullName = $_POST['name'];
    $productLink = $_POST['link'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $referrer = $_POST['referrer'];

    sendMail($_POST);
} else {
    header("location: /order.php");
}

function sendMail(array $data) {
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->Port = 26;

        //Recipients
        $mail->addAddress('hello@adosmint.com', 'Adosmint!');
        $mail->setFrom(MAILER_FROM, MAILER_FULLNAME);
        $mail->isHTML(true);
        $mail->Subject = 'You have a new Order';
        $body = 'New order from: '.$data['name']." with phone number:".$data['phone'];
        $body .= "<hr/>";
        $body .= "Account Type: ".$data['rdn']."<br/>";
        $body .= "Link: <a href='".$data['link']."'>".$data['link']."</a><br/>";
        $body .= "<ul>";
        if (!empty($data['category'])) {
            foreach ($data['category'] as $category) {
                $body .= "<li>".$category."</li>";
            }
        }
        $body .= "</ul>";

        $body .="<hr/>".$data['message'];

        $mail->Body = $body;

        $mail->send();
        $_SESSION['success'] = "Your order has been received and we will get back to you shortly";
        header("location: /order.php");
    } catch (Exception $e) {
        $_SESSION['error']['failure'] = "Failed to send message. Please try again later.";
        header("location: /order.php");
    }
}