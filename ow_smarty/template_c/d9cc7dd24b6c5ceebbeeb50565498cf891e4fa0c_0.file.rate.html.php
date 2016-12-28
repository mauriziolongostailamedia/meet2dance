<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:36:59
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/rate.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe90db008328_83347097',
  'file_dependency' => 
  array (
    'd9cc7dd24b6c5ceebbeeb50565498cf891e4fa0c' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/rate.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe90db008328_83347097 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'base+rates_box_cap_label','iconClass'=>'ow_ic_star')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'base+rates_box_cap_label','iconClass'=>'ow_ic_star'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div id="rate_<?php echo $_smarty_tpl->tpl_vars['cmpId']->value;?>
">
   <div class="ow_smallmargin">
   	<span class="ow_small"><?php echo smarty_function_text(array('key'=>'base+your_rate_label'),$_smarty_tpl);?>
</span>
      <div class="rates_cont clearfix">
      <?php
$__section_foo_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_foo']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo'] : false;
$__section_foo_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['maxRate']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_foo_0_total = $__section_foo_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if ($__section_foo_0_total != 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] <= $__section_foo_0_total; $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']++){
?>
         <a href="javascript://" class="rate_item" id="<?php echo $_smarty_tpl->tpl_vars['cmpId']->value;?>
_rate_item_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] : null);?>
">&nbsp;</a>
      <?php
}
}
if ($__section_foo_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = $__section_foo_0_saved;
}
?>
      </div>
   </div>
   <div class="total_score"><?php echo $_smarty_tpl->tpl_vars['totalScore']->value;?>
</div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'base+rates_box_cap_label','iconClass'=>'ow_ic_star'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
