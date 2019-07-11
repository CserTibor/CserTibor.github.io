<?php


$contact_name =  $_POST["contact_name"];
$contact_email = $_POST["contact_email"];
$contact_message = $_POST["contact_message"];

if($contact_message === ""){
    header("Location: index.php?page=contact&message_error=1");
    die;
}

if($contact_name === ""){
    header("Location: index.php?page=contact&name_error=1");
}

if(!filter_var($contact_email, FILTER_VALIDATE_EMAIL)){
    header("Location: index.php?page=contact&email_error=1");
}


require_once("modules/phpmailer/PHPMailer.php");
require_once("modules/phpmailer/SMTP.php");
require_once("modules/phpmailer/Exception.php");

$mailer = new \PHPMailer\PHPMailer\PHPMailer(true);
$mailer->setFrom($contact_email, $contact_name);
$mailer->addAddress("info@njszk.project");
$mailer->isHTML(false);
$mailer->Subject = "Új kapcsolatfelvétel";
$mailer->Body = $contact_message;
$mailer->isSMTP();

try{
        $mailer->send();
}catch(Exception $exception){
    header("Location: index.php?page=contact&failed_smtp=1");
    die;
}


smarty("contact_process.tpl", []);