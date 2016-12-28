<?php
/* Smarty version 3.1.29, created on 2016-10-14 20:06:41
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/components/uploaded_files_bulk_options.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58011eb16ac470_17971242',
  'file_dependency' => 
  array (
    '0f54f1d095e556e67b5414c88afe0bf87fa7e074' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/components/uploaded_files_bulk_options.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58011eb16ac470_17971242 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<ul class="ow_bl clearfix ow_small ow_left">
    <li>
        <a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['showId']->value;?>
"><?php echo smarty_function_text(array('key'=>"admin+select_mode"),$_smarty_tpl);?>
</a>
    </li>
</ul>
<div id="<?php echo $_smarty_tpl->tpl_vars['containerId']->value;?>
" style="display: none; float: left;">
    <ul class="ow_bl clearfix ow_small ow_left">
        <li>
            <a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['deleteId']->value;?>
" class="ow_mild_red delete"><?php echo smarty_function_text(array('key'=>"admin+delete_selected"),$_smarty_tpl);?>
</a>
        </li>
    </ul>
    <ul class="ow_bl clearfix ow_small ow_left">
        <li>
            <a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['backId']->value;?>
"><?php echo smarty_function_text(array('key'=>"admin+exit_select_mode"),$_smarty_tpl);?>
</a>
        </li>
    </ul>
</div><?php }
}
