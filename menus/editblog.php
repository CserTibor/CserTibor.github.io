<?php

$blog_id=0;
if(isset($_GET["blog_id"])){
    $blog_id = (int)$_GET["blog_id"];
}
$blog_rows = query("SELECT * FROM blog WHERE blog_id = $blog_id");
if (count($blog_rows) == 1){
    $blog_row = $blog_rows[0];
}else{
    $blog_row = [
        "blog_id" => 0,
        "blog_title" => "",
        "blog_content" => ""
    ];
}
$tomb = [
    "blog_row" => $blog_row,
];

smarty("editblog.tpl",$tomb);