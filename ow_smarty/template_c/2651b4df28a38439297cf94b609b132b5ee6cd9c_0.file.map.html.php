<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:26:38
  from "/home/dancemee/public_html/ow_plugins/google_map_location/views/components/map.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe805e1fffb1_96871653',
  'file_dependency' => 
  array (
    '2651b4df28a38439297cf94b609b132b5ee6cd9c' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/google_map_location/views/components/map.html',
      1 => 1475826391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe805e1fffb1_96871653 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if ($_smarty_tpl->tpl_vars['boxLabel']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','iconClass'=>$_smarty_tpl->tpl_vars['boxIcon']->value,'label'=>$_smarty_tpl->tpl_vars['boxLabel']->value,'addClass'=>$_smarty_tpl->tpl_vars['boxClass']->value)); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>$_smarty_tpl->tpl_vars['boxIcon']->value,'label'=>$_smarty_tpl->tpl_vars['boxLabel']->value,'addClass'=>$_smarty_tpl->tpl_vars['boxClass']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['map']->value;?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>$_smarty_tpl->tpl_vars['boxIcon']->value,'label'=>$_smarty_tpl->tpl_vars['boxLabel']->value,'addClass'=>$_smarty_tpl->tpl_vars['boxClass']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['map']->value;?>

<?php }
}
}
