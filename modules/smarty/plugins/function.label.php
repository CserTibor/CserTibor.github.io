<?php
function smarty_function_label($params){
    $for=$params["for"];
    $content=$params["content"];
    $result = "<label for=\"$for\">$content</label>";
    return $result;
}




function smarty_function_input($pms){
    $value = $pms["value"];
    $name = $pms["name"];

    $value= htmlentities($value, ENT_COMPAT,"UTF-8");

    $result = "<input value=\"$value\" type='text' name=\"$name\" class='form-control'>";
        return $result;

}

