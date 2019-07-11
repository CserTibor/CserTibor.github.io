<?php
/* Smarty version 3.1.33, created on 2019-02-19 19:47:30
  from 'C:\ephp\eds-www\njszk.project\templates\bloglist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6c4f42e0f649_47087872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f2e694efa4a9d5b0ac907da92af06505e3e97d5' => 
    array (
      0 => 'C:\\ephp\\eds-www\\njszk.project\\templates\\bloglist.tpl',
      1 => 1550602050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6c4f42e0f649_47087872 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <a class="btn btn-success" href="index.php?page=editblog">Új bejegyzés hozzáadása</a>
    <br>
    <br>
    <table class="table">
        <thead>
        <tr>
            <td>Cím:</td>
            <td>Közzétéve:</td>
            <td>Műveletek:</td>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bloglist']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['blog_title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['blog_created_ts'];?>
</td>
                <td><a class="btn btn-warning"href="index.php?page=editblog&blog_id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['blog_id'];?>
">Szerkesztés</a></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div><?php }
}
