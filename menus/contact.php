<?php


$failed_contact = isset($_GET["failed_contact"]);
$failed_smtp = isset($_GET["failed_smtp"]);
$name_error = isset($_GET["name_error"]);
$email_error = isset($_GET["email_error"]);
$message_error = isset($_GET["message_error"]);



$tomb = [
    "failed_smtp" => $failed_smtp,
    "failed_contact" => $failed_contact,
    "name_error" => $name_error,
    "email_error" => $email_error,
    "message_error" => $message_error,
];



smarty("contact.tpl", $tomb);