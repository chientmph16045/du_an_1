<?php

use PHPMailer\PHPMailer\PHPMailer;

//Import the PHPMailer class into the global namespace


if(isset($_POST['send'])){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = 'ndat165@gmail.com';
    $mail->Password = 'fwsfoyulsrplggsb';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 456;

    $mail->setFrom('ndat165@gmail.com');
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);
    $mail->Subject  = 'Xin chao';
    $mail->Body = 'xinchao';
    $mail->send();

    header('index.php');

}
