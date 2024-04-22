<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);  // Passing true enables exceptions

try {
    //Server settings
    $mail->SMTPDebug = 0;  // Enable verbose debug output (set to 0 for production)
    $mail->isSMTP();  // Set mailer to use SMTP
    $mail->Host = 'smtp-relay.brevo.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;  // Enable SMTP authentication
    $mail->Username = 'establishmentkhalid1@gmail.com';  // SMTP username
    $mail->Password = 'xsmtpsib-16bd46d5a817c0ace63239e02a881d1b2d2e7b21fa5d375d050ed0c7ee2df07d-YkwS6CV0b1RD2vmj';  // SMTP password
    $mail->SMTPSecure = 'tls';  // Enable TLS encryption, ssl also accepted
    $mail->Port = 587;  // TCP port to connect to

    //Recipients
    $mail->setFrom('establishmentkhalid1@gmail.com', 'Mailer');
    $mail->addAddress('establishmentkhalid1@gmail.com', 'Recipient Name');  // Add a recipient

    //Content
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = 'New registration from ' . strip_tags(trim($_POST["fullname"]));
    $mail->Body    = 'This is the HTML message body <strong>in bold!</strong>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>