<?php
/* Smarty version 3.1.29, created on 2016-10-13 09:21:13
  from "/home/dancemee/public_html/ow_plugins/hint/views/components/event_attend_context.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff35e9a07de3_57808792',
  'file_dependency' => 
  array (
    '628739542b537bd887990a33e5f2a162a0283a00' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/hint/views/components/event_attend_context.html',
      1 => 1476209468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff35e9a07de3_57808792 ($_smarty_tpl) {
?>
<div class="h-menu-w">
    <div class="h-menu ow_small ow_txtleft">
        <ul class="ow_context_action_list h-context-list h-list-list">
            <?php
$_from = $_smarty_tpl->tpl_vars['buttons']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_btn_0_saved_item = isset($_smarty_tpl->tpl_vars['btn']) ? $_smarty_tpl->tpl_vars['btn'] : false;
$_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['btn']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
$__foreach_btn_0_saved_local_item = $_smarty_tpl->tpl_vars['btn'];
?>
                <li class="h-list-label">
                    <a href="javascript://" class="hc-action" data-type="<?php echo $_smarty_tpl->tpl_vars['btn']->value['type'];?>
" <?php if ($_smarty_tpl->tpl_vars['btn']->value['hidden']) {?>style="display: none;"<?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['btn']->value['label'];?>

                    </a>
                </li>
            <?php
$_smarty_tpl->tpl_vars['btn'] = $__foreach_btn_0_saved_local_item;
}
if ($__foreach_btn_0_saved_item) {
$_smarty_tpl->tpl_vars['btn'] = $__foreach_btn_0_saved_item;
}
?>
        </ul>
    </div>
</div><?php }
}
