<?php
/* Smarty version 3.1.33, created on 2019-02-05 20:00:35
  from 'C:\ephp\eds-www\project\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c59dd5385dee3_77638334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79cc17aa2c369a51166b96dbf92f915a642dd781' => 
    array (
      0 => 'C:\\ephp\\eds-www\\project\\templates\\main.tpl',
      1 => 1549393233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c59dd5385dee3_77638334 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NJSZK Menedzsment</title>
    <?php echo '<script'; ?>
 src="vendor/jquery/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="time.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="april.js"><?php echo '</script'; ?>
>

</head>
<body onload="ido()">
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">NJSZK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Kezdőlap</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Események</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=contact">Kapcsolat</a>
                </li>

                <?php if ($_smarty_tpl->tpl_vars['isset_user']->value) {?>

                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=logout">Kijelentkezés</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=owndata">Saját adatok</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=password">Jelszó változtatás</a>
                </li>
                    <?php if (date("i") == 63) {?>
                        <form action="" method="post" >
                            <input name="april" onclick="changeCss()" class="ml-3 mt-1 small btn btn-warning" type="button" value="Kattints rá!">
                        </form>

                    <?php }?>
                <?php } else { ?>
                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=login">Bejelentkezés</a>
                </li>
                <?php }?>
            </ul>
            <div id="orahelye">
            </div>

        </div>
    </nav>
</div>

<div class="container">
    <h1 class="">NJSZK Menedzsment</h1>
    <p class="">Egyszerű adminisztrációs rendszer</p>
</div>
<?php echo $_smarty_tpl->tpl_vars['output']->value;?>

</body>
</html><?php }
}
