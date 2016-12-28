<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:23:42
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/pages_maintenance.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf30ecfc2a7_16427425',
  'file_dependency' => 
  array (
    '5f314b0687a92a5789e14f184bf87bce7830207c' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/pages_maintenance.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf30ecfc2a7_16427425 ($_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_desc')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
?>
<div class="ow_stdmargin">
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'maintenance')); $_block_repeat=true; echo smarty_block_form(array('name'=>'maintenance'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1 ow_form">
    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_gear_wheel"><?php echo smarty_function_text(array('key'=>"admin+maintenance_section_label"),$_smarty_tpl);?>
</span>
        </th>
    </tr>
    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'maintenance_enable'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'maintenance_enable'),$_smarty_tpl);?>
</td>
		<td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'maintenance_enable'),$_smarty_tpl);?>
</td>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 ow_tr_last">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'maintenance_text'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'maintenance_text'),$_smarty_tpl);?>
</td>
		<td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'maintenance_text'),$_smarty_tpl);?>
</td>
	</tr>
</table>

<table class="ow_table_1 ow_form">
    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_gear_wheel"><?php echo smarty_function_text(array('key'=>"admin+splash_screen_section_label"),$_smarty_tpl);?>
</span>
        </th>
    </tr>
    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'splash_screen'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'splash_screen'),$_smarty_tpl);?>
</td>
		<td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'splash_screen'),$_smarty_tpl);?>
</td>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'intro'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'intro'),$_smarty_tpl);?>
</td>
		<td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'intro'),$_smarty_tpl);?>
</td>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'button_label'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'button_label'),$_smarty_tpl);?>
</td>
		<td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'button_label'),$_smarty_tpl);?>
</td>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 ow_tr_last">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'leave_url'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'leave_url'),$_smarty_tpl);?>
</td>
		<td class="ow_desc ow_small"><?php echo smarty_function_desc(array('name'=>'leave_url'),$_smarty_tpl);?>
</td>
	</tr>
</table>
<div class="clearfix"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_button ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'maintenance'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

</div><?php }
}
