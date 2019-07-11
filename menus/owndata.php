<?php

$failed_login= isset($_GET["failed_login"]);
$datachanged = isset($_GET["datachanged"]);

$tomb = [
  "failed_login" => $failed_login,
    "user" =>$_SESSION["user"],
    "datachanged" => $datachanged
    ];

smarty("owndata.tpl", $tomb);