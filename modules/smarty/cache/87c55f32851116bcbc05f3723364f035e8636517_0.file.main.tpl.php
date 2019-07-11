<?php
/* Smarty version 3.1.33, created on 2019-03-09 12:13:27
  from 'C:\ephp\eds-www\njszk.project\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c839fd7546e08_26638378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87c55f32851116bcbc05f3723364f035e8636517' => 
    array (
      0 => 'C:\\ephp\\eds-www\\njszk.project\\templates\\main.tpl',
      1 => 1552130006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c839fd7546e08_26638378 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="vendor/style.css">
    <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="time.js"><?php echo '</script'; ?>
>

</head>
<body onload="ido()">

<div id="header">
    <nav class="navbar navbar-expand-lg">
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
                    <a class="nav-link" href="index.php?page=blog">Bejegyzések</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=contact">Kapcsolat</a>
                </li>

                <?php if ($_smarty_tpl->tpl_vars['isset_user']->value) {?>

                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=logout">Kijelentkezés</a>
                </li>
                    <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=bloglist">Blog</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=owndata">Saját adatok</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=password">Jelszó változtatás</a>
                </li>

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
<hr>

<?php echo $_smarty_tpl->tpl_vars['output']->value;?>

</body>
</html>
<?php }
}
