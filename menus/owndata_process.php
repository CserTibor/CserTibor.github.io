<?php

if (!isset($_POST["inputFirstname"]) || !isset($_POST["inputFamilyname"])){
    die("Hiányzó űrlapadatok!");
};

$familyname = $_POST["inputFamilyname"];
$firstname = $_POST["inputFirstname"];

$get_id=$_SESSION["user"];
$id = $get_id["user_id"];
$ID = intval($id);

if (isset($familyname) && isset($firstname)) {
    execute("UPDATE users SET user_familyname = '$familyname' , user_firstname='$firstname' WHERE user_id = '$ID' ");
    header("Location: index.php?page=owndata&datachanged");

//    header( "refresh:3;url=index.php?page=owndata" );

}
