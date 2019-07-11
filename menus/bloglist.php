<?php

$user_id=(int)$_SESSION["user"]["user_id"];
$sql = "SELECT * FROM `blog` WHERE blog_user_id = $user_id";
$bloglist = query($sql);

$tomb = [
    "bloglist" =>$bloglist
];

smarty("bloglist.tpl",$tomb);