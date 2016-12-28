<?php
/* Smarty version 3.1.29, created on 2016-10-12 19:49:27
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/content_menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe77a7a97962_34844998',
  'file_dependency' => 
  array (
    'c895430dda0080c904a6e19eb0263d7db43679a2' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/content_menu.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe77a7a97962_34844998 ($_smarty_tpl) {
?>
<div class="owm_content_menu_wrap owm_padding">
	<ul class="owm_content_menu clearfix">
	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_contentMenu_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_contentMenu_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?><li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?> active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span></a></li><?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_contentMenu_0_saved_local_item;
}
if ($__foreach_contentMenu_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_contentMenu_0_saved_item;
}
?>
	</ul>
</div><?php }
}
