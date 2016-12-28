<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:35:10
  from "/home/dancemee/public_html/ow_plugins/groups/views/components/brief_info.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe906ea6cc84_31925487',
  'file_dependency' => 
  array (
    'fe6bb29d58832ffc711111990c3f73a0163cee30' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/groups/views/components/brief_info.html',
      1 => 1476259984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe906ea6cc84_31925487 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['box']->value['show_title'],'iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'capAddClass'=>"ow_dnd_configurable_component clearfix",'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>"ow_stdmargin clearfix")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['box']->value['show_title'],'iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'capAddClass'=>"ow_dnd_configurable_component clearfix",'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>"ow_stdmargin clearfix"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['box']->value['show_title'],'iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'capAddClass'=>"ow_dnd_configurable_component clearfix",'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>"ow_stdmargin clearfix"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
