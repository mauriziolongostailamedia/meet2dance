<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:24:17
  from "/home/dancemee/public_html/ow_system_plugins/base/views/controllers/widget_panel_profile.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf331c107d1_90434760',
  'file_dependency' => 
  array (
    'f9ca66df46084f4ea55f65fda2505dcd222550e7' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/controllers/widget_panel_profile.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf331c107d1_90434760 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if ($_smarty_tpl->tpl_vars['isSuspended']->value && !$_smarty_tpl->tpl_vars['isAdminViewer']->value) {?>
	<?php echo smarty_function_text(array('key'=>"base+user_page_suspended"),$_smarty_tpl);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['profileActionToolbar']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }
}
}
