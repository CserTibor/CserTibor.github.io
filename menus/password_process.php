<?php

if (!isset($_POST["inputOldPW"]) || !isset($_POST["inputPW1"]) || !isset($_POST["inputPW2"])){
    die("Hiányzó űrlapadatok!");
};

$get_id=$_SESSION["user"];
$id = $get_id["user_id"];
$ID = intval($id);

$user_oldPW = md5($_POST["inputOldPW"]."njszk");
$get_oldPW = query("SELECT user_password FROM users WHERE user_id ='$ID'");
$oldPW = $get_oldPW[0]['user_password'];
$inputPW1 = $_POST["inputPW1"];
$inputPW2 = $_POST["inputPW2"];
$newPW = md5($inputPW1."njszk");




if ($user_oldPW == $oldPW && $inputPW1 == $inputPW2){
    execute("UPDATE users SET user_password = '$newPW' WHERE user_id='$ID'");
    header("Location: index.php?page=password&password_changed");
    die;
}
if ($user_oldPW != $oldPW && $inputPW1 != $inputPW2) {
    header("Location: index.php?page=password&all_pw_wrong");
    die;
}

if ($user_oldPW != $oldPW) {
    header("Location: index.php?page=password&wrong_password");
    die;
}
if ($inputPW1 != $inputPW2){
    header("Location: index.php?page=password&wrong_passwords");
    die;
}








