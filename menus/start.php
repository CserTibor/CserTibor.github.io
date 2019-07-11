<?php

if($_SESSION["user"]){
    echo("LOGGED IN");
}
else {
    require_once("nologin.php");
}