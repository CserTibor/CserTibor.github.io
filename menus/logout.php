<?php
require_once("view.php");

$_SESSION["user"]= null;
header("Location: index.php");
die;