<?php

/**
 * Author: Kevin Akerberg
 * CSCE 464
 * contactForm.php
 * 
 * This script powers the contact form on each listing page to inquire about it
 * Documentation: https://mailtrap.io/blog/php-email-contact-form/
 */

use PHPMailer\PHPMailer\PHPMailer;

include '../PHPMailer-master/src/Exception.php';
include '../PHPMailer-master/src/PHPMailer.php';
include '../PHPMailer-master/src/SMTP.php';

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST["firstName"] . " " . $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }

    if (empty($errors)) {
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kevinakerberg03@gmail.com';
        $mail->Password = 'cddu szoc clym dumx';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom($email, 'Bids & Cars Interest Form');
        $mail->addAddress('kevinakerberg03@gmail.com', 'Kevin');
        $mail->Subject = 'New message from Bids & Cars!';

        $body = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Phone: " . $phone . "\n" .
            "Message: " . $message . "\n";
        $mail->Body = $body;
        echo $body;


        if ($mail->send()) {
            header('Location: ../pages/home.html');
        } else {
            $errorMessage = 'We\'re sorry, but we can\'t process this message at this time. Please try again later. Error: ' . $mail->ErrorInfo;
        }

    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}