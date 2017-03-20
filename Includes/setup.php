<?php

function k_setup_theme(){
    register_nav_menu('primary', __('Primary','Theme 2k17'));
}
function k_pluginDep(){
    if(!is_plugin_active('AjaxLoad/ajaxload.php')){
        echo "<div class='updated notice'>
        <p>Dependencies not active</p>
        </div>
";
    }
}
function k_replaceEnd(){
    return '... ';

}