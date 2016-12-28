<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:24:12
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/users.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf32cf11635_09615356',
  'file_dependency' => 
  array (
    '9add87b12d8cb0323eb543e820df12f185caddb5' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/users.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf32cf11635_09615356 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_online_now')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.online_now.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_format_date')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.format_date.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!empty($_smarty_tpl->tpl_vars['list']->value)) {?>

<div class="ow_user_list ow_full ow_stdmargin">
	<?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_list_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list'] : false;
$__foreach_user_list_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_user_list_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list'] = new Smarty_Variable(array('iteration' => 0));
$__foreach_user_list_0_first = true;
$__foreach_user_list_0_iteration=0;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_user_list_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['first'] = $__foreach_user_list_0_first;
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last'] = $__foreach_user_list_0_iteration == $__foreach_user_list_0_total;
$__foreach_user_list_0_first = false;
$__foreach_user_list_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
		<?php $_smarty_tpl->tpl_vars['dto'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['dto'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'dto', 0);?>
		<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable($_smarty_tpl->tpl_vars['dto']->value->id, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'id', 0);?>

		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['first'] : null)) {?>
			<div class="clearfix <?php echo smarty_function_cycle(array('name'=>"rows",'values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
">
		<?php }?>

		<?php $_smarty_tpl->_cache['capture_stack'][] = array('default', "_fields", null); ob_start(); ?>
			<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value)) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['id']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_field_1_saved_item = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field'] : false;
$_smarty_tpl->tpl_vars['field'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['field']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
$__foreach_field_1_saved_local_item = $_smarty_tpl->tpl_vars['field'];
?>
					<?php echo $_smarty_tpl->tpl_vars['field']->value['label'];
echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
<br />
				<?php
$_smarty_tpl->tpl_vars['field'] = $__foreach_field_1_saved_local_item;
}
if ($__foreach_field_1_saved_item) {
$_smarty_tpl->tpl_vars['field'] = $__foreach_field_1_saved_item;
}
?>
			<?php }?>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php $_smarty_tpl->_cache['capture_stack'][] = array('default', "activity", null); ob_start(); ?>
            <?php if (!empty($_smarty_tpl->tpl_vars['showPresenceList']->value) && !empty($_smarty_tpl->tpl_vars['showPresenceList']->value[$_smarty_tpl->tpl_vars['id']->value]) && $_smarty_tpl->tpl_vars['showPresenceList']->value[$_smarty_tpl->tpl_vars['id']->value]) {?>
                <?php if ($_smarty_tpl->tpl_vars['onlineInfo']->value) {?>
                    <?php if ((!empty($_smarty_tpl->tpl_vars['onlineInfo']->value) && $_smarty_tpl->tpl_vars['onlineInfo']->value[$_smarty_tpl->tpl_vars['id']->value]) || empty($_smarty_tpl->tpl_vars['onlineInfo']->value)) {
echo smarty_function_online_now(array('userId'=>$_smarty_tpl->tpl_vars['dto']->value->id),$_smarty_tpl);
} else {
echo smarty_function_text(array('key'=>"base+user_list_activity"),$_smarty_tpl);?>
: <span class="ow_remark"><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['dto']->value->activityStamp),$_smarty_tpl);?>
</span><?php }?>
                <?php }?>
            <?php }?>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php $_smarty_tpl->tpl_vars["username"] = new Smarty_Variable($_smarty_tpl->tpl_vars['usernameList']->value[$_smarty_tpl->tpl_vars['id']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "username", 0);?>

		<?php $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable($_smarty_tpl->tpl_vars['displayNameList']->value[$_smarty_tpl->tpl_vars['id']->value], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "name", 0);?>

		<?php echo smarty_function_decorator(array('name'=>"user_list_item",'avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['id']->value],'username'=>$_smarty_tpl->tpl_vars['username']->value,'displayName'=>$_smarty_tpl->tpl_vars['name']->value,'contextMenu'=>$_smarty_tpl->tpl_vars['contextMenuList']->value[$_smarty_tpl->tpl_vars['id']->value],'fields'=>$_smarty_tpl->tpl_vars['_fields']->value,'activity'=>$_smarty_tpl->tpl_vars['activity']->value,'set_class'=>'ow_item_set3'),$_smarty_tpl);?>


		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['iteration'] : null)%3 == 0 && !(isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last'] : null)) {?>
			</div>
			<div class="clearfix <?php echo smarty_function_cycle(array('name'=>"rows",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last'] : null)) {?>
		  </div>
		<?php }?>

	<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_user_list_0_saved_local_item;
}
if ($__foreach_user_list_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list'] = $__foreach_user_list_0_saved;
}
if ($__foreach_user_list_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_user_list_0_saved_item;
}
?>

</div>

<center><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</center>
<?php } else { ?>
	<center><?php echo smarty_function_text(array('key'=>"base+user_no_users"),$_smarty_tpl);?>
</center>
<?php }
}
}
