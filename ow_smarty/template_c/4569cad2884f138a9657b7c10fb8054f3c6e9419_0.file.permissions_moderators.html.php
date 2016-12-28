<?php
/* Smarty version 3.1.29, created on 2016-10-13 09:25:12
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/permissions_moderators.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff36d81c8df7_50098972',
  'file_dependency' => 
  array (
    '4569cad2884f138a9657b7c10fb8054f3c6e9419' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/permissions_moderators.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff36d81c8df7_50098972 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
?>
<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['formAction']->value;?>
">
  <div class="ow_admin_permissions ow_stdmargin ow_center">
	<div class="ow_automargin ow_stdmargin ow_wide ow_admin_permissions_overflow">
		<table class="ow_table_2 ow_form">
			<tr class="ow_tr_first">
				<th></th>
				<?php
$_from = $_smarty_tpl->tpl_vars['moderators']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_moderator_0_saved_item = isset($_smarty_tpl->tpl_vars['moderator']) ? $_smarty_tpl->tpl_vars['moderator'] : false;
$_smarty_tpl->tpl_vars['moderator'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['moderator']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['moderator']->value) {
$_smarty_tpl->tpl_vars['moderator']->_loop = true;
$__foreach_moderator_0_saved_local_item = $_smarty_tpl->tpl_vars['moderator'];
?>
					<?php $_smarty_tpl->tpl_vars['moderatorId'] = new Smarty_Variable($_smarty_tpl->tpl_vars['moderator']->value->id, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'moderatorId', 0);?>
					<?php $_smarty_tpl->tpl_vars['userId'] = new Smarty_Variable($_smarty_tpl->tpl_vars['moderator']->value->userId, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'userId', 0);?>
					<th width="1">
						<?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['userId']->value]),$_smarty_tpl);?>

					</th>
				<?php
$_smarty_tpl->tpl_vars['moderator'] = $__foreach_moderator_0_saved_local_item;
}
if ($__foreach_moderator_0_saved_item) {
$_smarty_tpl->tpl_vars['moderator'] = $__foreach_moderator_0_saved_item;
}
?>
			</tr>
			<?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_group_1_saved_item = isset($_smarty_tpl->tpl_vars['group']) ? $_smarty_tpl->tpl_vars['group'] : false;
$_smarty_tpl->tpl_vars['group'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
$__foreach_group_1_saved_local_item = $_smarty_tpl->tpl_vars['group'];
?>
				<?php $_smarty_tpl->tpl_vars['groupName'] = new Smarty_Variable($_smarty_tpl->tpl_vars['group']->value->name, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'groupName', 0);?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>
">
					<td class="ow_txtleft"><?php echo $_smarty_tpl->tpl_vars['groupLabels']->value[$_smarty_tpl->tpl_vars['groupName']->value];?>
</td>
					<?php
$_from = $_smarty_tpl->tpl_vars['moderators']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_moderator_2_saved_item = isset($_smarty_tpl->tpl_vars['moderator']) ? $_smarty_tpl->tpl_vars['moderator'] : false;
$_smarty_tpl->tpl_vars['moderator'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['moderator']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['moderator']->value) {
$_smarty_tpl->tpl_vars['moderator']->_loop = true;
$__foreach_moderator_2_saved_local_item = $_smarty_tpl->tpl_vars['moderator'];
?>
						<?php $_smarty_tpl->tpl_vars['groupId'] = new Smarty_Variable($_smarty_tpl->tpl_vars['group']->value->id, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'groupId', 0);?>
						<?php $_smarty_tpl->tpl_vars['moderatorId'] = new Smarty_Variable($_smarty_tpl->tpl_vars['moderator']->value->id, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'moderatorId', 0);?>
						<td><input <?php if ($_smarty_tpl->tpl_vars['moderator']->value->id == $_smarty_tpl->tpl_vars['superModeratorId']->value || ($_smarty_tpl->tpl_vars['myModeratorId']->value != $_smarty_tpl->tpl_vars['superModeratorId']->value && $_smarty_tpl->tpl_vars['groupId']->value == $_smarty_tpl->tpl_vars['adminGroupId']->value)) {?> disabled="disabled"<?php }?> type="checkbox" name="perm[]" value="<?php echo $_smarty_tpl->tpl_vars['moderatorId']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['groupId']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['perms']->value[$_smarty_tpl->tpl_vars['moderatorId']->value][$_smarty_tpl->tpl_vars['groupId']->value]) || $_smarty_tpl->tpl_vars['moderator']->value->id == $_smarty_tpl->tpl_vars['superModeratorId']->value) {?> checked="checked"<?php }?> /></td>
					<?php
$_smarty_tpl->tpl_vars['moderator'] = $__foreach_moderator_2_saved_local_item;
}
if ($__foreach_moderator_2_saved_item) {
$_smarty_tpl->tpl_vars['moderator'] = $__foreach_moderator_2_saved_item;
}
?>
				</tr>
			<?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_1_saved_local_item;
}
if ($__foreach_group_1_saved_item) {
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_1_saved_item;
}
?>
			<tr class="ow_tr_last">
				<td></td>
				<?php
$_from = $_smarty_tpl->tpl_vars['moderators']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_moderator_3_saved_item = isset($_smarty_tpl->tpl_vars['moderator']) ? $_smarty_tpl->tpl_vars['moderator'] : false;
$_smarty_tpl->tpl_vars['moderator'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['moderator']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['moderator']->value) {
$_smarty_tpl->tpl_vars['moderator']->_loop = true;
$__foreach_moderator_3_saved_local_item = $_smarty_tpl->tpl_vars['moderator'];
?>
					<?php $_smarty_tpl->tpl_vars['moderatorId'] = new Smarty_Variable($_smarty_tpl->tpl_vars['moderator']->value->id, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'moderatorId', 0);?>
					<?php $_smarty_tpl->tpl_vars['userId'] = new Smarty_Variable($_smarty_tpl->tpl_vars['moderator']->value->userId, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'userId', 0);?>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['moderator']->value->id !== $_smarty_tpl->tpl_vars['myModeratorId']->value && $_smarty_tpl->tpl_vars['moderator']->value->id !== $_smarty_tpl->tpl_vars['superModeratorId']->value) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['deleteModerUrls']->value[$_smarty_tpl->tpl_vars['userId']->value];?>
" onclick="return confirm('<?php echo smarty_function_text(array('key'=>"base+are_you_sure"),$_smarty_tpl);?>
');" style="width:16px; height:16px; display:block; margin:0 auto;background-repeat:no-repeat;background-position: 50% 50%;" class="ow_ic_delete"></a>
						<?php }?>
					</td>
				<?php
$_smarty_tpl->tpl_vars['moderator'] = $__foreach_moderator_3_saved_local_item;
}
if ($__foreach_moderator_3_saved_item) {
$_smarty_tpl->tpl_vars['moderator'] = $__foreach_moderator_3_saved_item;
}
?>
			</tr>
		</table>
	</div>
    <div class="clearfix ow_automargin ow_wide"><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'admin+permissions_index_save','class'=>'ow_button ow_ic_save ow_positive','onclick'=>'this.form.submit();'),$_smarty_tpl);?>
</div></div>
  </div>
</form>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['addFormAction']->value;?>
">
<div class="ow_wide ow_automargin">
    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin clearfix ow_center','iconClass'=>'ow_ic_moderator','langLabel'=>'admin+permissions_moders_add_moder')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin clearfix ow_center','iconClass'=>'ow_ic_moderator','langLabel'=>'admin+permissions_moders_add_moder'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_text(array('key'=>'admin+permissions_moders_username'),$_smarty_tpl);?>
 <input type="text" name="username" style="width: 170px" />
    	<?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'admin+permissions_moders_make_moderator','type'=>"submit"),$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin clearfix ow_center','iconClass'=>'ow_ic_moderator','langLabel'=>'admin+permissions_moders_add_moder'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

</div>
</form><?php }
}
