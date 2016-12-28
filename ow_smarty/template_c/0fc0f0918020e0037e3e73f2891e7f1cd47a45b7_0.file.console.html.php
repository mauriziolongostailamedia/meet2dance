<?php
/* Smarty version 3.1.29, created on 2016-10-20 20:18:23
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/console.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58090a6f31ec82_39204510',
  'file_dependency' => 
  array (
    '0fc0f0918020e0037e3e73f2891e7f1cd47a45b7' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/console.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58090a6f31ec82_39204510 ($_smarty_tpl) {
?>
<header>
<div class="owm_sidebar_right_header_menu">
    <ul class="owm_sidebar_console clearfix">
        <?php
$_from = $_smarty_tpl->tpl_vars['pages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_p_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_p']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_p'] : false;
$__foreach_p_0_saved_item = isset($_smarty_tpl->tpl_vars['page']) ? $_smarty_tpl->tpl_vars['page'] : false;
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_p'] = new Smarty_Variable(array());
$__foreach_p_0_first = true;
$_smarty_tpl->tpl_vars['page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['first'] = $__foreach_p_0_first;
$__foreach_p_0_first = false;
$__foreach_p_0_saved_local_item = $_smarty_tpl->tpl_vars['page'];
?>
        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['first'] : null)) {?>owm_sidebar_console_item_active <?php }?>owm_sidebar_console_item owm_sidebar_console_<?php echo $_smarty_tpl->tpl_vars['page']->value['key'];?>
">
            <a class="owm_sidebar_console_item_url" href="javascript://" id="console-tab-<?php echo $_smarty_tpl->tpl_vars['page']->value['key'];?>
" data-key="<?php echo $_smarty_tpl->tpl_vars['page']->value['key'];?>
">
                <span class="owm_sidebar_count"<?php if (!$_smarty_tpl->tpl_vars['page']->value['counter']) {?> style="display: none;"<?php }?>>
                    <span class="owm_sidebar_count_txt"><?php if ($_smarty_tpl->tpl_vars['page']->value['counter']) {
echo $_smarty_tpl->tpl_vars['page']->value['counter'];
}?></span>
                </span>
            </a>
        </li>
        <?php
$_smarty_tpl->tpl_vars['page'] = $__foreach_p_0_saved_local_item;
}
if ($__foreach_p_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_p'] = $__foreach_p_0_saved;
}
if ($__foreach_p_0_saved_item) {
$_smarty_tpl->tpl_vars['page'] = $__foreach_p_0_saved_item;
}
?>
    </ul>
</div>
</header>

<section class="owm_sidebar_right_cont">
    <div id="console_body"></div>
    <div id="console_preloader"></div>
</section><?php }
}
