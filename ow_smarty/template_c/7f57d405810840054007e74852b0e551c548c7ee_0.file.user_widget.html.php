<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:32
  from "/home/dancemee/public_html/ow_plugins/friends/views/components/user_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf124e9ef80_48994217',
  'file_dependency' => 
  array (
    '7f57d405810840054007e74852b0e551c548c7ee' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/friends/views/components/user_widget.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf124e9ef80_48994217 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_lp_avatars">
	<?php if (!empty($_smarty_tpl->tpl_vars['userList']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['userList']->value;?>

		<?php if (!empty($_smarty_tpl->tpl_vars['toolbar']->value)) {?>
			<?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbar']->value),$_smarty_tpl);?>

		<?php }?>

    <?php } else { ?>
    	<center><?php echo smarty_function_text(array('key'=>'friends+user_widget_empty'),$_smarty_tpl);?>
</center>
    <?php }?>	
</div><?php }
}
