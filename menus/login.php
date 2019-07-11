<?php


$failed_login = isset($_GET["failed_login"]);
$login = isset($_GET["login"]);
$query="SELECT * FROM `users` WHERE user_active = 'aktiv' ";
$string = query($query);
$online_users=count($string);


$tomb = [
  "failed_login" => $failed_login,
    "login" => $login,
    "online_users" => $online_users

];


smarty("login.tpl", $tomb);