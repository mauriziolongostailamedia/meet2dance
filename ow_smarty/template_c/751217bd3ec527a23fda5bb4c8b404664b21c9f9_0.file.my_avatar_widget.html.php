<?php
/* Smarty version 3.1.29, created on 2016-10-12 22:46:25
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/my_avatar_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fea1212d6366_10255143',
  'file_dependency' => 
  array (
    '751217bd3ec527a23fda5bb4c8b404664b21c9f9' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/my_avatar_widget.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fea1212d6366_10255143 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
?>

<div class="ow_my_avatar_widget clearfix">
	<div class="ow_left ow_my_avatar_img"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatar']->value),$_smarty_tpl);?>
</div>
    <div class="ow_my_avatar_cont">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['url'];?>
" class="ow_my_avatar_username"><span><?php echo $_smarty_tpl->tpl_vars['avatar']->value['title'];?>
</span></a>
    </div>
</div><?php }
}
