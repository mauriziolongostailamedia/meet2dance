<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:24:13
  from "/home/dancemee/public_html/ow_system_plugins/base/decorators/user_list_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf32d01e4d7_38328218',
  'file_dependency' => 
  array (
    '6488436fd4407efb75e4a9e34f15e2e9ecfff000' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/decorators/user_list_item.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf32d01e4d7_38328218 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_user_link')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.user_link.php';
?>
<div class="ow_user_list_item clearfix<?php if (isset($_smarty_tpl->tpl_vars['data']->value['set_class'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['set_class'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['contId'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['data']->value['contId'];?>
"<?php }?>>

    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['contextMenu'])) {?>
        <div class="ow_uli_context_menu">
            <?php echo $_smarty_tpl->tpl_vars['data']->value['contextMenu'];?>

	</div>
    <?php }?>
    <div class="ow_user_list_picture">
        <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['data']->value['avatar']),$_smarty_tpl);?>

    </div>
    <div class="ow_user_list_data">
        <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['userUrl'])) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['userUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['displayName'];?>
</a>
        <?php } else { ?>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['noUserLink'])) {
echo $_smarty_tpl->tpl_vars['data']->value['displayName'];
} else {
echo smarty_function_user_link(array('username'=>$_smarty_tpl->tpl_vars['data']->value['username'],'name'=>$_smarty_tpl->tpl_vars['data']->value['displayName']),$_smarty_tpl);
}?>
        <?php }?>
        <div class="ow_small">
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['content'])) {?><div class="ow_remark ow_user_list_content"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</div><?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['fields'])) {
echo $_smarty_tpl->tpl_vars['data']->value['fields'];
}?>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['activity'])) {
echo $_smarty_tpl->tpl_vars['data']->value['activity'];
}?>
        </div>
    </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['toolbar'])) {?>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['toolbar'];?>

        <?php }?>
</div><?php }
}
