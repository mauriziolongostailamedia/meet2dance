<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:40:12
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/console_list_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe919c1f2827_04117651',
  'file_dependency' => 
  array (
    '128e6cc91a66c31f49f3a27a1c090058b1acc5a7' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/console_list_item.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe919c1f2827_04117651 ($_smarty_tpl) {
?>
<li class="ow_console_list_item<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];
}?>" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['key'];?>
">
    <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

</li><?php }
}
