<?php
/* Smarty version 3.1.29, created on 2016-10-13 09:20:41
  from "/home/dancemee/public_html/ow_plugins/event/views/components/event_users.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff35c98ae924_61872509',
  'file_dependency' => 
  array (
    'e935a528b96634adadd7fa9918cf23b4155b3fd4' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/event/views/components/event_users.html',
      1 => 1476171742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff35c98ae924_61872509 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>"ow_std_margin clearfix",'iconClass'=>'ow_ic_user','langLabel'=>'event+view_page_users_block_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>"ow_std_margin clearfix",'iconClass'=>'ow_ic_user','langLabel'=>'event+view_page_users_block_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->tpl_vars['userListMenu']->value;?>

<div id="userLists">
    <?php
$_from = $_smarty_tpl->tpl_vars['userLists']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_lists_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_lists']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_lists'] : false;
$__foreach_user_lists_0_saved_item = isset($_smarty_tpl->tpl_vars['list']) ? $_smarty_tpl->tpl_vars['list'] : false;
$_smarty_tpl->tpl_vars['list'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_user_lists'] = new Smarty_Variable(array());
$__foreach_user_lists_0_first = true;
$_smarty_tpl->tpl_vars['list']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_user_lists']->value['first'] = $__foreach_user_lists_0_first;
$__foreach_user_lists_0_first = false;
$__foreach_user_lists_0_saved_local_item = $_smarty_tpl->tpl_vars['list'];
?>
    <div id="<?php echo $_smarty_tpl->tpl_vars['list']->value['contId'];?>
"<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_lists']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_lists']->value['first'] : null)) {?>} style="display:none;"<?php }?>>
         <?php echo $_smarty_tpl->tpl_vars['list']->value['cmp'];?>

    </div>
    <div style="display:none" id="<?php echo $_smarty_tpl->tpl_vars['list']->value['contId'];?>
">
    	<?php if ($_smarty_tpl->tpl_vars['list']->value['bottomLinkEnable']) {
echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['list']->value['toolbarArray']),$_smarty_tpl);
}?>
    </div>
	<?php
$_smarty_tpl->tpl_vars['list'] = $__foreach_user_lists_0_saved_local_item;
}
if ($__foreach_user_lists_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_user_lists'] = $__foreach_user_lists_0_saved;
}
if ($__foreach_user_lists_0_saved_item) {
$_smarty_tpl->tpl_vars['list'] = $__foreach_user_lists_0_saved_item;
}
?>
    <?php if ($_smarty_tpl->tpl_vars['userLists']->value[0]['bottomLinkEnable']) {
echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['userLists']->value[0]['toolbarArray']),$_smarty_tpl);
}?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>"ow_std_margin clearfix",'iconClass'=>'ow_ic_user','langLabel'=>'event+view_page_users_block_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
