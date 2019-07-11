<?php
/* Smarty version 3.1.33, created on 2019-02-12 19:34:18
  from 'C:\ephp\eds-www\project\templates\owndata.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6311aaeadaf4_18476476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c10cf1ccbbd6cbfbc3d681b1a5463ce3636db649' => 
    array (
      0 => 'C:\\ephp\\eds-www\\project\\templates\\owndata.tpl',
      1 => 1549996454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6311aaeadaf4_18476476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ephp\\eds-www\\project\\modules\\smarty\\plugins\\modifier.njszk.php','function'=>'smarty_modifier_njszk',),1=>array('file'=>'C:\\ephp\\eds-www\\project\\modules\\smarty\\plugins\\block.formlabelgroup.php','function'=>'smarty_block_formlabelgroup',),2=>array('file'=>'C:\\ephp\\eds-www\\project\\modules\\smarty\\plugins\\function.label.php','function'=>'smarty_function_label',),));
?>
<head

</head>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Adatmódosítás </h5>
                        <div><?php echo smarty_modifier_njszk($_smarty_tpl->tpl_vars['user']->value['user_familyname'],9);?>
 </div>
                    <form action="index.php?page=owndata_process" class="form-signin" method="post" >
                        <?php if ($_smarty_tpl->tpl_vars['datachanged']->value) {?>
                            <div class=" alert alert-success">Az adatok megváltoztatva!</div>
                        <?php }?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formlabelgroup', array());
$_block_repeat=true;
echo smarty_block_formlabelgroup(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo smarty_function_label(array('for'=>"inputFamilyname",'content'=>"Vezetéknév"),$_smarty_tpl);?>

                            <?php echo smarty_function_input(array('value'=>$_smarty_tpl->tpl_vars['user']->value['user_familyname'],'name'=>"inputFamilyname"),$_smarty_tpl);?>

                        <?php $_block_repeat=false;
echo smarty_block_formlabelgroup(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <div class="form-label-group">
                            <label for="inputFirstname">Keresztnév:</label>
                            <input value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_firstname'], ENT_QUOTES, 'UTF-8', true);?>
" type="text" name="inputFirstname" class="form-control">
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
