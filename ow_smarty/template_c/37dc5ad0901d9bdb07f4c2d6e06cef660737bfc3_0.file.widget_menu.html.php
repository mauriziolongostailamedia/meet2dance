<?php
/* Smarty version 3.1.29, created on 2016-10-12 19:30:20
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/widget_menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe732c30cfe4_18267657',
  'file_dependency' => 
  array (
    '37dc5ad0901d9bdb07f4c2d6e06cef660737bfc3' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/widget_menu.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe732c30cfe4_18267657 ($_smarty_tpl) {
?>

<div class="owm_box_menu owm_float_right">
   <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tab_0_saved_item = isset($_smarty_tpl->tpl_vars['tab']) ? $_smarty_tpl->tpl_vars['tab'] : false;
$_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tab']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
$__foreach_tab_0_saved_local_item = $_smarty_tpl->tpl_vars['tab'];
?><a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['tab']->value['id'];?>
" class="owm_box_menu_item <?php if (isset($_smarty_tpl->tpl_vars['tab']->value['active']) && $_smarty_tpl->tpl_vars['tab']->value['active']) {?> owm_box_menu_item_active<?php }?>"><span><?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
</span></a><?php
$_smarty_tpl->tpl_vars['tab'] = $__foreach_tab_0_saved_local_item;
}
if ($__foreach_tab_0_saved_item) {
$_smarty_tpl->tpl_vars['tab'] = $__foreach_tab_0_saved_item;
}
?>
</div>
<?php }
}
