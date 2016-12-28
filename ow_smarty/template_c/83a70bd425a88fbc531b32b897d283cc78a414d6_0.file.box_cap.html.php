<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:35:53
  from "/home/dancemee/public_html/ow_system_plugins/base/decorators/box_cap.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe90992e0602_69339180',
  'file_dependency' => 
  array (
    '83a70bd425a88fbc531b32b897d283cc78a414d6' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/decorators/box_cap.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe90992e0602_69339180 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>

<div class="ow_box_cap<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['type'])) {?>_<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];
}
if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];
}?>">
	<div class="ow_box_cap_right">
		<div class="ow_box_cap_body">
			<h3 class="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['iconClass'])) {
echo $_smarty_tpl->tpl_vars['data']->value['iconClass'];
} else { ?>ow_ic_file<?php }?>">
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['href'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['extraString'])) {
echo $_smarty_tpl->tpl_vars['data']->value['extraString'];
}?>><?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['langLabel'])) {?>
			   <?php echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['data']->value['langLabel']),$_smarty_tpl);?>

			<?php } else { ?>
			   <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])) {
echo $_smarty_tpl->tpl_vars['data']->value['label'];
} else { ?>&nbsp;<?php }?>
		    <?php }?>
		    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['href'])) {?></a><?php }?>
			</h3>
		   <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['content'])) {
echo $_smarty_tpl->tpl_vars['data']->value['content'];
}?>
		</div>
	</div>
</div><?php }
}
