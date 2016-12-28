<?php
/* Smarty version 3.1.29, created on 2016-10-12 17:54:35
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/bottom_menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe5cbbab03c0_06711367',
  'file_dependency' => 
  array (
    '645c6772f303a2736dcbd7bae668e4764b80ac6f' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/bottom_menu.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe5cbbab03c0_06711367 ($_smarty_tpl) {
?>
<nav class="owm_nav_left_bottom">
    <ul class="owm_nav_left">
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
        <li class="owm_nav_left_item">
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span></a>
        </li>
        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
    </ul>
</nav><?php }
}
