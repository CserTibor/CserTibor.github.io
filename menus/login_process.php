<?php
require_once("view.php");
var_dump($_POST);

if (!isset($_POST["inputEmail"]) || !isset($_POST["inputPassword"])){
  die("Hiányzó űrlapadatok!");
};

$email = $_POST["inputEmail"];
$password = $_POST["inputPassword"];

$email = mysqli_escape_string($connection,$email);
$password = mysqli_escape_string($connection, md5($password."njszk"));

$query = "SELECT * FROM users WHERE user_email='$email' AND user_password='$password' AND user_login_attempt<3";
$rows = query($query);

$query2 = "SELECT user_login_attempt FROM users WHERE user_email='$email' AND user_login_attempt>=3";
$login_attempt= query($query2);
$login=intval($login_attempt);

if($login==1) {
    header( "Location: index.php?page=login&login=3");
    die;
}

if (count($rows) != 1){
    execute("
        UPDATE users SET user_login_attempt = user_login_attempt + 1 WHERE user_email = '$email';
    ");
    header("Location: index.php?page=login&failed_login=1");
    die;
}

elseif (count($rows) == 1)
    {
    execute("
        UPDATE users SET user_login_attempt = 0 WHERE user_email = '$email';
    ");
}



$_SESSION["user"] = $rows[0];
$_SESSION["email"] = $_POST["inputEmail"];


var_dump($query,$rows);

header("Location: index.php");
die;


