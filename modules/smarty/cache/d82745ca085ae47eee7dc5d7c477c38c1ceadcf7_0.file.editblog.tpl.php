<?php
/* Smarty version 3.1.33, created on 2019-02-19 19:50:59
  from 'C:\ephp\eds-www\njszk.project\templates\editblog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6c50139e8e78_98339054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd82745ca085ae47eee7dc5d7c477c38c1ceadcf7' => 
    array (
      0 => 'C:\\ephp\\eds-www\\njszk.project\\templates\\editblog.tpl',
      1 => 1550602258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6c50139e8e78_98339054 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="index.php?page=saveblog" method="post">
    <input type="hidden" name="blog_id" value="<?php echo $_smarty_tpl->tpl_vars['blog_row']->value['blog_id'];?>
">
    <?php echo '<script'; ?>
 src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"><?php echo '</script'; ?>
>
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h3>Bejegyzés szerkesztése</h3>
                <label for="blog_title">Cím</label>
                <input value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog_row']->value['blog_title'], ENT_QUOTES, 'UTF-8', true);?>
" name="blog_title" id="blog_title" type="text" class="form-control" placeholder="Írja ide a címet!">
                <br>
                <label for="blog_content">Tartalom</label>
                <textarea id="blog_content" name="blog_content" class="form-control"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog_row']->value['blog_content'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                <br>
                <input type="submit" class="btn btn-success" value="Mentés">
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
>
        ClassicEditor
            .create( document.querySelector( '#blog_content' ) )
            .catch( error => {
                console.error( error );
            } );

    <?php echo '</script'; ?>
>
</form>
<?php }
}
