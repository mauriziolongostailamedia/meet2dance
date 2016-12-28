<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:16:59
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/language_value_edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe7e1b97f100_26313421',
  'file_dependency' => 
  array (
    '0a737c174571cc49e6a3e48d2fa0f0e1aecd07ee' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/language_value_edit.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe7e1b97f100_26313421 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
?>
<div class="ow_automargin">

	<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>"lang-values-edit")); $_block_repeat=true; echo smarty_block_form(array('name'=>"lang-values-edit"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<table class="ow_table_1 ow_form ow_smallmargin">
			<tr class="ow_center ow_tr_first">
				<th>Language</th>
				<th>Translation</th>
			</tr>
			<?php
$_from = $_smarty_tpl->tpl_vars['langs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_lang_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_lang']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_lang'] : false;
$__foreach_lang_0_saved_item = isset($_smarty_tpl->tpl_vars['lang']) ? $_smarty_tpl->tpl_vars['lang'] : false;
$__foreach_lang_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_lang'] = new Smarty_Variable(array());
$__foreach_lang_0_iteration=0;
$_smarty_tpl->tpl_vars['lang']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
$__foreach_lang_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_lang']->value['last'] = $__foreach_lang_0_iteration == $__foreach_lang_0_total;
$__foreach_lang_0_saved_local_item = $_smarty_tpl->tpl_vars['lang'];
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_lang']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_lang']->value['last'] : null)) {?>ow_tr_last<?php }?>">
					<td class="ow_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value->getLabel();?>
 (<?php echo $_smarty_tpl->tpl_vars['lang']->value->getTag();?>
)</td>
					<td class="ow_value"><?php echo smarty_function_input(array('name'=>"lang[".((string)$_smarty_tpl->tpl_vars['lang']->value->id)."][".((string)$_smarty_tpl->tpl_vars['prefix']->value)."][".((string)$_smarty_tpl->tpl_vars['key']->value)."]"),$_smarty_tpl);?>
</td>
				</tr>
			<?php
$_smarty_tpl->tpl_vars['lang'] = $__foreach_lang_0_saved_local_item;
}
if ($__foreach_lang_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_lang'] = $__foreach_lang_0_saved;
}
if ($__foreach_lang_0_saved_item) {
$_smarty_tpl->tpl_vars['lang'] = $__foreach_lang_0_saved_item;
}
?>
		</table>
			<div class="clearfix ow_smallmargin"><div class="ow_right">
					<?php echo smarty_function_submit(array('name'=>"submit"),$_smarty_tpl);?>

			</div></div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"lang-values-edit"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


</div><?php }
}
