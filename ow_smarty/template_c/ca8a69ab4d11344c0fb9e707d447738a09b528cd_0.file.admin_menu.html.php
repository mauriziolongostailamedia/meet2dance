<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:14:09
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/components/admin_menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf0d1c74db5_90025321',
  'file_dependency' => 
  array (
    'ca8a69ab4d11344c0fb9e707d447738a09b528cd' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/components/admin_menu.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf0d1c74db5_90025321 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<ul class="<?php if ($_smarty_tpl->tpl_vars['subMenuClass']->value) {
echo $_smarty_tpl->tpl_vars['subMenuClass']->value;
} else { ?>ow_admin_submenu_hover<?php }?>">
    <li class="ow_admin_submenu_title"><?php echo smarty_function_text(array('key'=>"admin+sidebar_".((string)$_smarty_tpl->tpl_vars['category']->value)),$_smarty_tpl);?>
</li>
    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
        <li <?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['new_window'])) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a></li>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
</ul><?php }
}
