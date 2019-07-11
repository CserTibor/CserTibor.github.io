<?php

$failed_login = isset($_GET["failed_login"]);
$wrong_password = isset($_GET["wrong_password"]);
$wrong_passwords = isset($_GET["wrong_passwords"]);
$password_changed = isset($_GET["password_changed"]);
$all_pw_wrong = isset($_GET["all_pw_wrong"]);

$tomb = [
    "failed_login" => $failed_login,
    "user" =>$_SESSION["user"],
    "wrong_password" => $wrong_password,
    "wrong_passwords" => $wrong_passwords,
    "password_changed" => $password_changed,
    "all_pw_wrong" => $all_pw_wrong,
    ];

smarty("password.tpl", $tomb);