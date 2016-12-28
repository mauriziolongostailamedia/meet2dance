<?php
/* Smarty version 3.1.29, created on 2016-10-12 19:30:20
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/widget_panel_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe732c171729_33200064',
  'file_dependency' => 
  array (
    '75145cbf9dac21135907984104fea1e6200c5651' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/widget_panel_item.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe732c171729_33200064 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
?>
<div class="owm_dnd_widget <?php echo $_smarty_tpl->tpl_vars['box']->value['uniqName'];?>
">
    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['box']->value['capEnabled'],'capAddClass'=>'','capContent'=>$_smarty_tpl->tpl_vars['box']->value['capContent'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>((string)$_smarty_tpl->tpl_vars['box']->value['uniqName']),'toolbar'=>$_smarty_tpl->tpl_vars['box']->value['toolbar'])); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['box']->value['capEnabled'],'capAddClass'=>'','capContent'=>$_smarty_tpl->tpl_vars['box']->value['capContent'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>((string)$_smarty_tpl->tpl_vars['box']->value['uniqName']),'toolbar'=>$_smarty_tpl->tpl_vars['box']->value['toolbar']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['box']->value['capEnabled'],'capAddClass'=>'','capContent'=>$_smarty_tpl->tpl_vars['box']->value['capContent'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>((string)$_smarty_tpl->tpl_vars['box']->value['uniqName']),'toolbar'=>$_smarty_tpl->tpl_vars['box']->value['toolbar']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

</div><?php }
}
