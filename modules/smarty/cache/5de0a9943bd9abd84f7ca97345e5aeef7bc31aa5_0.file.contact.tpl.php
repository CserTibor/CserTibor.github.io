<?php
/* Smarty version 3.1.33, created on 2019-02-16 14:32:57
  from 'C:\ephp\eds-www\njszk.project\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6811092e2314_20741477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5de0a9943bd9abd84f7ca97345e5aeef7bc31aa5' => 
    array (
      0 => 'C:\\ephp\\eds-www\\njszk.project\\templates\\contact.tpl',
      1 => 1549997225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6811092e2314_20741477 (Smarty_Internal_Template $_smarty_tpl) {
?><head>

</head>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <form action="index.php?page=contact_process">
                <?php if ($_smarty_tpl->tpl_vars['name_error']->value) {?>
                    <div class="alert alert-danger">Nem megfelelő név!</div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['email_error']->value) {?>
                    <div class="alert alert-danger">Nem megfelelő e-mail cím!</div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
                    <div class="alert alert-danger">Hiányzó üzenet!</div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['failed_smtp']->value) {?>
                    <div class="alert alert-danger">SMTP hiba!</div>
                <?php }?>
                <div class="form-group">
                    <label for="contact_name">Név</label>
                    <input class="col-md-8 form-control" type="text" onkeyup='saveValue(this);' name="contact_name" id="contact_name">
                </div>
                <div class="form-group">
                    <label for="contact_email">E-mail</label>
                    <input class="col-md-8 form-control" type="text" onkeyup='saveValue(this);' name="contact_email" id="contact_email">
                </div>
                <div class="form-group">
                    <label for="contact_message">Üzenet</label>
                    <textarea name="contact_message" id="contact_message" onkeyup='saveValue(this);' rows="10" class="form-control"></textarea>
                </div>
                <input formmethod="post" type="submit" value="Elküldés" style="margin-bottom: 20px" class="btn btn-lg btn-secondary">
            </form>
        </div>
    </div>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
    document.getElementById("contact_name").value = getSavedValue("contact_name");    // set the value to this input
    document.getElementById("contact_email").value = getSavedValue("contact_email");   // set the value to this input
    document.getElementById("contact_message").value = getSavedValue("contact_message");   // set the value to this input

    //Save the value function - save it to localStorage as (ID, VALUE)
    function saveValue(e){
        var id = e.id;  // get the sender's id to save it .
        var val = e.value; // get the value.
        localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override .
    }

    //get the saved value function - return the value of "v" from localStorage.
    function getSavedValue  (v){
        if (localStorage.getItem(v) === null) {
            return "";// You can change this to your defualt value.
        }
        return localStorage.getItem(v);
    }
<?php echo '</script'; ?>
>
<?php }
}
