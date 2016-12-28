<?php
/* Smarty version 3.1.29, created on 2016-10-12 11:16:00
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/sign_in_button_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdff50c20700_66926753',
  'file_dependency' => 
  array (
    'dc16865ed7e768b13a4ba3e969697b91d65060cc' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/sign_in_button_list.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdff50c20700_66926753 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="connect_button_cont clearfix"><span class="ow_connect_text"><?php echo smarty_function_text(array('key'=>'admin+sign_in_button_list_text'),$_smarty_tpl);?>
</span><?php echo $_smarty_tpl->tpl_vars['cmp']->value;?>
</div><?php }
}
