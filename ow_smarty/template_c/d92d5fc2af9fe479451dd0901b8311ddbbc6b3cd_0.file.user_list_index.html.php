<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:24:13
  from "/home/dancemee/public_html/ow_system_plugins/base/views/controllers/user_list_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf32d0864c7_00943469',
  'file_dependency' => 
  array (
    'd92d5fc2af9fe479451dd0901b8311ddbbc6b3cd' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/controllers/user_list_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf32d0864c7_00943469 ($_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
if (isset($_smarty_tpl->tpl_vars['menu']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
	
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['listType']->value)) {
echo smarty_function_add_content(array('key'=>"base.content.user_list_top",'listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);
}?>

<?php echo $_smarty_tpl->tpl_vars['cmp']->value;
}
}
