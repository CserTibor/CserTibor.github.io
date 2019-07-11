<?php
/* Smarty version 3.1.33, created on 2019-02-20 12:29:31
  from 'C:\ephp\eds-www\njszk.project\templates\password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6d3a1bc66382_21794770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5ca79904bc6b1f4ab0da1460520439d635c383e' => 
    array (
      0 => 'C:\\ephp\\eds-www\\njszk.project\\templates\\password.tpl',
      1 => 1546088298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6d3a1bc66382_21794770 (Smarty_Internal_Template $_smarty_tpl) {
?><head

</head>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Jelszó változtatás</h5>

                    <form action="index.php?page=password_process" class="form-signin" method="post" >
                            <?php if ($_smarty_tpl->tpl_vars['all_pw_wrong']->value) {?>
                                <div class=" alert alert-danger">
                                    A régi jelszó nem megfelelő! <br>
                                    A két jelszó nem egyezik meg!
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['wrong_password']->value) {?>
                                <div class=" alert alert-danger">A régi jelszó nem megfelelő!</div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['wrong_passwords']->value) {?>
                            <div class=" alert alert-danger">A két jelszó nem egyezik meg!</div>

                            <?php } elseif ($_smarty_tpl->tpl_vars['password_changed']->value) {?>
                            <div class=" alert alert-success">A jelszó sikeresen megváltozott!</div>
                            <?php }?>

                        <div class="form-label-group">
                            <label for="inputOldPW">Régi jelszó:</label>
                            <input type="text" name="inputOldPW" class="form-control">
                        </div>

                        <div class="form-label-group">
                            <label for="inputPW1">Új jelszó:</label>
                            <input type="text" name="inputPW1" class="form-control">
                        </div>

                        <div class="form-label-group">
                            <label for="inputPW2">Új jelszó újra:</label>
                            <input type="text" name="inputPW2" class="form-control">
                        </div>

                        <button type="submit" class="mt-3 btn btn-lg btn-primary btn-block text-uppercase" >Adatmódosítás</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
