<?php
/* Smarty version 3.1.29, created on 2016-10-12 11:16:00
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/connect_button_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdff50c17be0_64618746',
  'file_dependency' => 
  array (
    'd469c3a7c36cad3da319058cdd220896b32bb1db' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/connect_button_list.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdff50c17be0_64618746 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.connect_button_list {
    padding-top: 5px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<div class="connect_button_list">
    <?php echo $_smarty_tpl->tpl_vars['buttonList']->value;?>

</div><?php }
}
