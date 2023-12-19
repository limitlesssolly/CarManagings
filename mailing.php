<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../../Mail/src/Exception.php';
require '../../../Mail/src/PHPMailer.php';
require '../../../Mail/src/SMTP.php';

if (isset($_POST["submit"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username ='247LimousineOfficial@gmail.com';
    $mail->Password ='buwhpjbrxjdpywaz';
    $mail->SMTPSecure ='ssl';
    $mail->Port = 465;

    $mail->setFrom($_POST['email']);
    
    $mail->addAddress('247LimousineOfficial@gmail.com');

    $mail->isHTML(true);

    $mail->Subject = "Contacting Mail";
    $mail->Body = $_POST["message"];

    $mail->send();

    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href='contactus.php';
    </script>
    ";
}