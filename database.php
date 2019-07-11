<?php

session_start();

define("DB_HOST","127.0.0.1");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_DATABASE","njszk");

$connection = mysqli_connect(DB_HOST,DB_USERNAME, DB_PASSWORD,DB_DATABASE);
$connection -> set_charset("utf8");
// query adatbázis sorokat kérünk le //
function query($query){
    global $connection;
    $result = mysqli_query($connection, $query);
    if ($result === false){
        echo ("Hiba a lekérdezésben:" . mysqli_error($connection));
        die;
    }
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $rows;
}

function execute($query){
    global $connection;
    $result = mysqli_query($connection, $query);
    if ($result === false){
        echo ("Hiba a lekérdezésben:" . mysqli_error($connection));
        die;
    }
}

function smarty($tpl_file, $tomb) {
    $smarty = new Smarty();
    $smarty->setCacheDir("modules/smarty/cache");
    $smarty->setTemplateDir("templates");
    $smarty->setCompileDir("modules/smarty/cache");
    $smarty->assign($tomb);
    $smarty->display($tpl_file);
}

if(!isset($_SESSION["user"])){
    $_SESSION["user"] = null;}

    require_once("modules/smarty/bootstrap.php");



