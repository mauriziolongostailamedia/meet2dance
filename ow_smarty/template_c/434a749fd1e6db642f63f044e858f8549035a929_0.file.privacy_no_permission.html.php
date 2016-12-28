<?php
/* Smarty version 3.1.29, created on 2016-10-24 12:51:35
  from "/home/dancemee/public_html/ow_plugins/privacy/views/controllers/privacy_no_permission.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580de7b704c848_87429744',
  'file_dependency' => 
  array (
    '434a749fd1e6db642f63f044e858f8549035a929' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/privacy/views/controllers/privacy_no_permission.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580de7b704c848_87429744 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_anno ow_center">
    <?php if (!empty($_smarty_tpl->tpl_vars['message']->value)) {
echo $_smarty_tpl->tpl_vars['message']->value;
} else {
echo smarty_function_text(array('key'=>'privacy+no_permission_message'),$_smarty_tpl);
}?>
</div><?php }
}
