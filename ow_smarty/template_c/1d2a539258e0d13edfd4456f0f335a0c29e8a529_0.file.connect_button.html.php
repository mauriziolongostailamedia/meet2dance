<?php
/* Smarty version 3.1.29, created on 2016-10-12 11:16:00
  from "/home/dancemee/public_html/ow_plugins/fbconnect/views/components/connect_button.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdff50a8ba98_89303969',
  'file_dependency' => 
  array (
    '1d2a539258e0d13edfd4456f0f335a0c29e8a529' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/fbconnect/views/components/connect_button.html',
      1 => 1475828468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdff50a8ba98_89303969 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<a class="fb_button fb_button_medium" onclick="OW_FB.login(); return false;">
    <span class="fb_connect_wrap"><span class="fb_button_text"><?php echo smarty_function_text(array('key'=>"fbconnect+connect_btn_label"),$_smarty_tpl);?>
</span></span>
</a><?php }
}
