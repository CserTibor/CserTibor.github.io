<?php

function smarty_block_formlabelgroup($params, $content, Smarty_Internal_Template $template, &$repeat){
    if ($repeat){
        echo "<div class='form-label-group'>";
    }
    else {
        echo "$content</div>";
    }
}