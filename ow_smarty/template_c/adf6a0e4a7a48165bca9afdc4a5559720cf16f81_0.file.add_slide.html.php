<?php
/* Smarty version 3.1.29, created on 2016-10-12 22:50:01
  from "/home/dancemee/public_html/ow_plugins/slideshow/views/components/add_slide.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fea1f95c90c0_93653836',
  'file_dependency' => 
  array (
    'adf6a0e4a7a48165bca9afdc4a5559720cf16f81' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/slideshow/views/components/add_slide.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fea1f95c90c0_93653836 ($_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'add-slide-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'add-slide-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1 ow_smallmargin">
<tr class="ow_alt2">
    <td class="ow_label"><?php echo smarty_function_text(array('key'=>'slideshow+file'),$_smarty_tpl);?>
</td>
    <td class="ow_value"><?php echo smarty_function_input(array('name'=>'slide'),$_smarty_tpl);?>
</td>
    <td></td>
</tr>
<tr class="ow_alt1">
    <td class="ow_label"><?php echo smarty_function_label(array('name'=>'title'),$_smarty_tpl);?>
</td>
    <td class="ow_value"><?php echo smarty_function_input(array('name'=>'title'),$_smarty_tpl);?>
</td>
    <td class="ow_description ow_small"><?php echo smarty_function_text(array('key'=>'slideshow+optional'),$_smarty_tpl);?>
</td>
</tr>
<tr class="ow_alt2">
    <td class="ow_label"><?php echo smarty_function_label(array('name'=>'url'),$_smarty_tpl);?>
</td>
    <td class="ow_value"><?php echo smarty_function_input(array('name'=>'url'),$_smarty_tpl);?>
</td>
    <td class="ow_description ow_small"><?php echo smarty_function_text(array('key'=>'slideshow+optional'),$_smarty_tpl);?>
</td>
</tr>
<tr>
    <td colspan="3" class="ow_txtright"><?php echo smarty_function_decorator(array('name'=>'button','id'=>'btn-add-slide','class'=>'ow_ic_add','langLabel'=>'slideshow+add_slide'),$_smarty_tpl);?>
</td>
</tr>
</table>                            
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'add-slide-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
