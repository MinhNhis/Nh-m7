<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/PHPMailer/src/Exception.php';
require '../vendor/PHPMailer/src/PHPMailer.php';
require '../vendor/PHPMailer/src/SMTP.php';

function sendMail(){

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'nhidmpc05632@fpt.edu.vn';                     //SMTP username
        $mail->Password   = 'tmcxbviuhotdtdwp';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            // tls    Enable implicit TLS encryption
        $mail->Port       = 465;              // 587 TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom('nhidmpc05632@fpt.edu.vn', 'Mailer');
        $mail->addAddress('nhidmpc05632@fpt.edu.vn', 'Joe User');     //Add a recipient
        $mail->addAddress('nhidmpc05632@fpt.edu.vn.com');               //Name is optional
        $mail->addReplyTo('nhidmpc05632@fpt.edu.vn', 'Information');

        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        //code chuc nang ghi log do day
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
sendMail();
?>


