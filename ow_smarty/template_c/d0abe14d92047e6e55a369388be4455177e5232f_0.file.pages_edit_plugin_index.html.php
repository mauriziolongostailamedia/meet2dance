<?php
/* Smarty version 3.1.29, created on 2016-10-14 18:19:31
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/pages_edit_plugin_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5801059303e4d2_24353612',
  'file_dependency' => 
  array (
    'd0abe14d92047e6e55a369388be4455177e5232f' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/pages_edit_plugin_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5801059303e4d2_24353612 ($_smarty_tpl) {
if (!is_callable('smarty_function_url_for_route')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->_cache['capture_stack'][] = array('default', "back_url", null); ob_start();
echo smarty_function_url_for_route(array('for'=>"admin_pages_main"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="ow_stdmargin"><?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_left_arrow",'onclick'=>"location.href='".((string)$_smarty_tpl->tpl_vars['back_url']->value)."';",'langLabel'=>"base+pages_back"),$_smarty_tpl);?>
</div>
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>"edit-form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"edit-form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_superwide ow_automargin">
<table class="ow_table_1 ow_form">

    <tr id="title-tr" class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
 ow_tr_first">
        <td class="ow_label">
        	<?php echo smarty_function_label(array('name'=>"name"),$_smarty_tpl);?>

       	</td>
        <td class="ow_value">
        	<?php echo smarty_function_input(array('name'=>"name"),$_smarty_tpl);?>

        	<br /><?php echo smarty_function_error(array('name'=>"name"),$_smarty_tpl);?>

        </td>        
    </tr>

    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
 ow_tr_last" >
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>"visible-for"),$_smarty_tpl);?>
</td>
        <td class="ow_value">
        	<?php echo smarty_function_input(array('name'=>"visible-for"),$_smarty_tpl);?>

        	<br /><?php echo smarty_function_error(array('name'=>"visible-for"),$_smarty_tpl);?>

       </td>
    </tr>

</table>
<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>"save",'class'=>"ow_positive"),$_smarty_tpl);?>
</div></div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"edit-form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
