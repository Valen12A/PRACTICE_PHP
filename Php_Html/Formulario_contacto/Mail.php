<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;


function sendMail($name, $number, $email, $body, $html = false) {

    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer-> Host= "smtp.gmail.com";
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port =465;
    $phpmailer->Username = "avila17valen@gmail.com";
    $phpmailer->Password = "velhtfhtdsnhpgjh";
    $phpmailer->setFrom("from@example.com","Empresa");
    $phpmailer->addAddress($email, $name);
    $phpmailer->isHTML(true);
    $phpmailer->Body = $body;
    $phpmailer->send();
}
?>
