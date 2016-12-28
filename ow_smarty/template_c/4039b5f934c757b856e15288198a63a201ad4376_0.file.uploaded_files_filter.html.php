<?php
/* Smarty version 3.1.29, created on 2016-10-14 20:06:41
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/components/uploaded_files_filter.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58011eb1690499_10496990',
  'file_dependency' => 
  array (
    '4039b5f934c757b856e15288198a63a201ad4376' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/components/uploaded_files_filter.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58011eb1690499_10496990 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="float: left;" class="ow_context_action_block ow_context_action_value_block clearfix">
    <div class="ow_context_action">
        <a class="ow_context_action_value"><?php echo smarty_function_text(array('key'=>"admin+period"),$_smarty_tpl);?>
: <span><?php echo smarty_function_text(array('key'=>"admin+all_time"),$_smarty_tpl);?>
</span></a><span class="ow_context_more"></span>
        <div style="opacity: 1; top: 18px;" class="ow_tooltip ow_small ow_tooltip_top_right">
            <div class="ow_tooltip_tail">
                <span></span>
            </div>
            <div class="ow_tooltip_body">
                <ul class="ow_context_action_list ow_border">
                    <li><a href="#" data-date=""><?php echo smarty_function_text(array('key'=>"admin+all_time"),$_smarty_tpl);?>
</a></li>
                    <?php
$_from = $_smarty_tpl->tpl_vars['dates']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                    <li><a href="#" data-date="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
if ($__foreach_v_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_0_saved_key;
}
?>
                </ul>
            </div>
        </div>
    </div>
</div><?php }
}
