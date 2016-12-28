<?php
/* Smarty version 3.1.29, created on 2016-10-12 17:54:35
  from "/home/dancemee/public_html/ow_plugins/fbconnect/mobile/views/components/connect_button.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe5cbba89814_52951900',
  'file_dependency' => 
  array (
    'eb06fafdb0e788b3f7e97a442b3d09dc459f91e8' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/fbconnect/mobile/views/components/connect_button.html',
      1 => 1475828468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe5cbba89814_52951900 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="owm_btn_wide">
    <a class="owm_fb_btn" href="#" onclick="OW_FB.login(); return false;">
        <span><?php echo smarty_function_text(array('key'=>'fbconnect+connect_mobile_btn_label'),$_smarty_tpl);?>
</span>
    </a>
</div><?php }
}
