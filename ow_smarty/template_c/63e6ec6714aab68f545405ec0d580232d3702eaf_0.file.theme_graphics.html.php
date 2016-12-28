<?php
/* Smarty version 3.1.29, created on 2016-10-14 20:06:41
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/theme_graphics.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58011eb16ce428_82754315',
  'file_dependency' => 
  array (
    '63e6ec6714aab68f545405ec0d580232d3702eaf' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/theme_graphics.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58011eb16ce428_82754315 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.css_image{
	background-repeat:no-repeat;
	background-position:50% 50%;
	border:1px solid #666;
	display:block;
	height:30px;
	margin:0 auto;
	width:300px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>


<?php echo $_smarty_tpl->tpl_vars['filelist']->value;
}
}
