<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:29:26
  from "/home/dancemee/public_html/ow_plugins/contactus/views/controllers/contact_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe8106193fe6_09217728',
  'file_dependency' => 
  array (
    '1acc9ddc2706a334ac3b10c47cb1147facf141b9' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/contactus/views/controllers/contact_index.html',
      1 => 1475828306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe8106193fe6_09217728 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


table.ow_table_1 td.ow_label
{
    width: 35%;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'contact_form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'contact_form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1 ow_form ow_automargin" style="width: 500px;">
    <tr class="ow_alt1 ow_tr_first">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'to'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'to'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'to'),$_smarty_tpl);?>
</td>
	</tr>
    <tr class="ow_alt2">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'from'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'from'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'from'),$_smarty_tpl);?>
</td>
	</tr>
    <tr class="ow_alt1">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'subject'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'subject'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'subject'),$_smarty_tpl);?>
</td>
	</tr>
<?php if (isset($_smarty_tpl->tpl_vars['captcha_present']->value)) {?>
    <tr class="ow_alt2">
<?php } else { ?>
    <tr class="ow_alt2  ow_tr_last">
<?php }?>
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'message'),$_smarty_tpl);?>
</td>
		<td class="ow_value"><?php echo smarty_function_input(array('name'=>'message'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'message'),$_smarty_tpl);?>
</td>
	</tr>
<?php if (isset($_smarty_tpl->tpl_vars['captcha_present']->value)) {?>
    <tr class="ow_alt1 ow_tr_last">
		<td class="ow_label"><?php echo smarty_function_label(array('name'=>'captcha'),$_smarty_tpl);?>
</td>
		<td class="ow_value ow_center"><?php echo smarty_function_input(array('name'=>'captcha'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'captcha'),$_smarty_tpl);?>
</td>
	</tr>
<?php }?>
</table>
<div class="clearfix ow_stdmargin ow_automargin" style="width: 500px;"><div class="ow_right">
<?php echo smarty_function_submit(array('name'=>'send','class'=>'ow_button ow_ic_mail'),$_smarty_tpl);?>

</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'contact_form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
