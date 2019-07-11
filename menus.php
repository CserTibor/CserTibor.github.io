<?php
$menu = "start";
if(isset($_GET["page"])){
    $menu = $_GET["page"];
}

ob_start();
if (!file_exists("menus/" . $menu . ".php")){
    $menu = "start";
}
require_once("menus/" . $menu . ".php");
$menu_content = ob_get_clean();

smarty("main.tpl", [
    "output"=>$menu_content,
    "isset_user" => (isset($_SESSION["user"]))
]);