<?php

$user_id=(int)$_SESSION["user"]["user_id"];
$sql = "SELECT * FROM `blog`";
$bloglist = query($sql);

$tomb = [
    "bloglist" =>$bloglist
];

smarty("blog.tpl",$tomb);