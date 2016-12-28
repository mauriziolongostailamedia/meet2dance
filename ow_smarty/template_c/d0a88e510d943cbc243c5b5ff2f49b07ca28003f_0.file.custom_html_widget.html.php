<?php
/* Smarty version 3.1.29, created on 2016-10-12 19:30:20
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/custom_html_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe732c148d78_18667032',
  'file_dependency' => 
  array (
    'd0a88e510d943cbc243c5b5ff2f49b07ca28003f' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/custom_html_widget.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe732c148d78_18667032 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_custom_html_widget">
	<?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	<?php } else { ?>
            <div class="ow_nocontent">
                <?php echo smarty_function_text(array('key'=>"base+custom_html_widget_no_content"),$_smarty_tpl);?>

            </div>
	<?php }?>
</div><?php }
}
