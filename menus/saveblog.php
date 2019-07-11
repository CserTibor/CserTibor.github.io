<?php

$blog_id = $_POST["blog_id"];
$blog_title = $_POST["blog_title"];
$blog_content = $_POST["blog_content"];

$is_insert = $blog_id == 0;

$blog_id = (int)$blog_id;
$blog_title = mysqli_escape_string($connection, $blog_title);
$blog_content = mysqli_escape_string($connection, $blog_content);

if($is_insert){
    $sql = "INSERT INTO blog (blog_title, blog_content, blog_user_id) VALUES ('$blog_title', '$blog_content','{$_SESSION["user"]["user_id"]}')";
}else{
    $sql = "UPDATE blog SET blog_title = '$blog_title' , blog_content = '$blog_content' WHERE blog_id = $blog_id";
}
execute($sql);

/*
echo $sql."<br>";
echo $connection ->error;
die;
*/

header("Location: index.php?page=bloglist");