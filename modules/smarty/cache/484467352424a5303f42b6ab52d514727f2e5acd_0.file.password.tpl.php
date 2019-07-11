<?php
/* Smarty version 3.1.33, created on 2018-12-29 13:58:19
  from 'C:\ephp\eds-www\project\templates\password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c276f6b18e695_42831109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '484467352424a5303f42b6ab52d514727f2e5acd' => 
    array (
      0 => 'C:\\ephp\\eds-www\\project\\templates\\password.tpl',
      1 => 1546088298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c276f6b18e695_42831109 (Smarty_Internal_Template $_smarty_tpl) {
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
