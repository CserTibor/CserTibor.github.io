<?php
/* Smarty version 3.1.33, created on 2019-02-20 12:41:48
  from 'C:\ephp\eds-www\njszk.project\templates\blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6d3cfc57e221_03615565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58f12e8eb2e608a5dc2a830ccfca8c0a2aa06413' => 
    array (
      0 => 'C:\\ephp\\eds-www\\njszk.project\\templates\\blog.tpl',
      1 => 1550662907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6d3cfc57e221_03615565 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bloglist']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
                <div class="card">
                    <h4 class="card-header"><?php echo $_smarty_tpl->tpl_vars['entry']->value['blog_title'];?>
</h4>
                    <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['entry']->value['blog_content'];?>
</div>
                    <div class="card-footer text-muted"><?php echo $_smarty_tpl->tpl_vars['entry']->value['blog_created_ts'];?>
</div>
                </div>
                <br>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php }
}
