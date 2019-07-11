<?php

function smarty_modifier_njszk($input,$number){
    $spaces = str_repeat("&nbsp",$number);

    $output = "<b>NJSZK</b>".$spaces.$input;
        return $output;
}