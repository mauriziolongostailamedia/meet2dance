<?php
/* Smarty version 3.1.29, created on 2016-10-12 17:54:35
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/top_menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe5cbbaa4536_01483153',
  'file_dependency' => 
  array (
    '89cd4d7dc530444a95455776c9409c07cc4fbe29' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/top_menu.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe5cbbaa4536_01483153 ($_smarty_tpl) {
?>
<nav class="owm_nav_left_top">
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
                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['addUrl'])) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['addUrl'];?>
" class="owm_nav_left_item_add"></a>
                <?php } elseif (!empty($_smarty_tpl->tpl_vars['item']->value['addId'])) {?>
                    <a href="javascript://" class="owm_nav_left_item_add" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['addId'];?>
"></a>
                <?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="owm_nav_left_item_icon"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
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
