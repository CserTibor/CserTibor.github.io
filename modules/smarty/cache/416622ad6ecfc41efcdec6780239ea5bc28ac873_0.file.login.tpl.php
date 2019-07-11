<?php
/* Smarty version 3.1.33, created on 2019-02-16 14:32:43
  from 'C:\ephp\eds-www\njszk.project\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6810fb1675b5_64479574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '416622ad6ecfc41efcdec6780239ea5bc28ac873' => 
    array (
      0 => 'C:\\ephp\\eds-www\\njszk.project\\templates\\login.tpl',
      1 => 1547303236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6810fb1675b5_64479574 (Smarty_Internal_Template $_smarty_tpl) {
?><head>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">

                            <?php if ($_smarty_tpl->tpl_vars['login']->value == 1) {?>
                                <div class="alert alert-danger">A fiók letiltva: Túl sok belépési próbálkozás!</div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['failed_login']->value) {?>
                                <div class="alert alert-danger">Sikertelen bejelentkezés!</div>
                                <?php }?>

                        <h5 class="card-title text-center">Bejelentkezés</h5>
                        <form action="index.php?page=login_process" class="form-signin" method="post" >
                            <div class="form-label-group">
                                <input type="text" name="inputEmail" class="form-control" placeholder="Email address"  autofocus>
                                <label for="inputEmail">Email cím</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" name="inputPassword" class="form-control" placeholder="Password" >
                                <label for="inputPassword">Jelszó</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Jelszó mentése </label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Bejelentkezés</button>
                        </form>

                     </div>
                    </div>
                <div>
                    Aktív felhasználók:<?php echo $_smarty_tpl->tpl_vars['online_users']->value;?>


                </div>

            </div>
        </div>
    </div>
</body>
<?php }
}
