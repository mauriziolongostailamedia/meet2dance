<?php
/* Smarty version 3.1.29, created on 2016-10-16 22:00:38
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/users_roles.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5803dc66e04861_32613971',
  'file_dependency' => 
  array (
    '7e753eeffb1d09cc28b9e124378b2d2426bbe914' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/users_roles.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5803dc66e04861_32613971 ($_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_url_for')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_text_edit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text_edit.php';
if (!is_callable('smarty_function_math')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_function_url_for_route')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


$(document).ready(function(){
	$('#roles').sortable({
		items: 'tr.role',
		helper: 'clone',
		placeholder: 'placeholder',
		start: function(event, ui){
			$(ui.placeholder).append('<td colspan="4"></td>');
		},
		update: function(event, ui){
			var set = {};

			$('#roles tr.role td input:checkbox[name="role[]"]').each(function(i){
				var id = $(this).val();
				set['order['+id+']'] = ++i;
			});

			url = '<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Users:ajaxReorder"),$_smarty_tpl);?>
';

			$.post( url, set );
		},
		stop: function(event, ui){

			$set = $('#roles tr.role td input:checkbox[name="role[]"]');

			$set.attr('disabled', false);

			$( $set[0] ).attr('disabled', 'disabled').attr('checked', false);

			$('td span.default-role:visible', this).hide();

			$('td input:checkbox[name]')

			$( $(this).sortable('option', 'items'), this ).each(function(i){
				if(i == 0)
					$('td span.default-role', this).show();

				var isEven = (i+1) % 2 === 0;

				remClass = isEven ? 'ow_alt1':'ow_alt2';
				addClass = isEven ? 'ow_alt2':'ow_alt1';

				if( $(this).hasClass(remClass) )
					$(this).removeClass( remClass );

				if( !$(this).hasClass(addClass) )
					$(this).addClass( addClass );

			})
		}
	});

	$(".edit_role", "#roles").click(function(){
	    var roleId = $(this).attr("rel");

	    editRoleFloatBox = OW.ajaxFloatBox(
	    	"ADMIN_CMP_AuthorizationRoleEdit",
	    	{ roleId: roleId },
	    	{ width:400, iconClass: "ow_ic_edit", title: OW.getLanguageText('admin', 'permissions_edit_role_btn') }
	    );
	});
});


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


tr.placeholder td{
	border: 1px dashed grey;
	height: 35px;
	width: 100%;
}

.role{
	cursor: move;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="ow_automargin ow_wide">
	<form action="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Users:deleteRoles"),$_smarty_tpl);?>
" method="POST">
	    <table id="roles" class="ow_table_2 ow_form ow_stdmargin ow_center">
	        <tr class="ow_tr_first">
	            <th width="1"></th>
	            <th><?php echo smarty_function_text(array('key'=>'admin+permissions_user_role'),$_smarty_tpl);?>
</th>
	            <th width="1"><?php echo smarty_function_text(array('key'=>'admin+permissions_number_of_users'),$_smarty_tpl);?>
</th>
	            <th width="1"><span class="ow_nowrap"><?php echo smarty_function_text(array('key'=>'admin+avatar_label'),$_smarty_tpl);?>
</span></th>
	        </tr>

	        <?php
$_from = $_smarty_tpl->tpl_vars['set']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_roles_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_roles']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_roles'] : false;
$__foreach_roles_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_roles'] = new Smarty_Variable(array());
$__foreach_roles_0_first = true;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_roles']->value['first'] = $__foreach_roles_0_first;
$__foreach_roles_0_first = false;
$__foreach_roles_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
		        <?php $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['dto'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'role', 0);?>
		        <?php $_smarty_tpl->tpl_vars['roleId'] = new Smarty_Variable($_smarty_tpl->tpl_vars['role']->value->id, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'roleId', 0);?>
		        <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1, ow_alt2'),$_smarty_tpl);?>
 role">
		            <td>
		            	<input type="checkbox" name="role[]" id="role_<?php echo $_smarty_tpl->tpl_vars['role']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->id;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_roles']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_roles']->value['first'] : null)) {?>disabled="disabled"<?php }?> />
		            </td>
		            <td class="ow_txtleft">
		            	<?php echo smarty_function_text_edit(array('key'=>"base+authorization_role_".((string)$_smarty_tpl->tpl_vars['role']->value->name)),$_smarty_tpl);?>

		            	<span class="ow_mild_green ow_small default-role" style="display:<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_roles']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_roles']->value['first'] : null)) {?>inline<?php } else { ?>none<?php }?>;">
		            		<?php echo smarty_function_text(array('key'=>'admin+permissions_default_role'),$_smarty_tpl);?>

		            	</span>
		            </td>
		            <td class="ow_nowrap">
		            	<?php echo smarty_function_math(array('equation'=>"(x/y)*100",'x'=>$_smarty_tpl->tpl_vars['item']->value['userCount'],'y'=>$_smarty_tpl->tpl_vars['total']->value,'assign'=>'percent'),$_smarty_tpl);?>

		            	<a href="<?php echo smarty_function_url_for_route(array('for'=>"admin_users_browse_membership_owners:[roleId=>".((string)$_smarty_tpl->tpl_vars['roleId']->value)."]"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['userCount'];?>
</a> | <?php echo sprintf('%.1f',$_smarty_tpl->tpl_vars['percent']->value);?>
%
		            </td>
		            <td style="min-width: 40px;">
		            <?php if ($_smarty_tpl->tpl_vars['role']->value->displayLabel) {?>
                        <a class="ow_lbutton edit_role" rel="<?php echo $_smarty_tpl->tpl_vars['role']->value->id;?>
" href="javascript://"<?php if (!empty($_smarty_tpl->tpl_vars['role']->value->custom)) {?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['role']->value->custom;?>
"<?php }?>>
                            <?php echo smarty_function_text(array('key'=>'base+yes'),$_smarty_tpl);?>

                        </a>
		            <?php } else { ?>
                        <a href="javascript://" rel="<?php echo $_smarty_tpl->tpl_vars['role']->value->id;?>
" class="edit_role"><?php echo smarty_function_text(array('key'=>'base+no'),$_smarty_tpl);?>
</a>
		            <?php }?>
		            </td>
		        </tr>
		        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_roles_0_saved_local_item;
}
if ($__foreach_roles_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_roles'] = $__foreach_roles_0_saved;
}
if ($__foreach_roles_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_roles_0_saved_item;
}
?>
			<tr class="ow_tr_last">
				<td>
					<input id="check_all" type="checkbox" onclick="$('#roles tr.role td input:checkbox:enabled').attr('checked', this.checked );" />
				</td>
				<td colspan="3" style="text-align: left;">
					<label for="check_all"><?php echo smarty_function_text(array('key'=>'admin+permissions_check_all_selected'),$_smarty_tpl);?>
</label>
					<form>
                                                <?php $_smarty_tpl->_cache['capture_stack'][] = array("selectRoleAlert", null, null); ob_start();
echo smarty_function_text(array('key'=>'admin+permissions_please_select_role'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                                <?php $_smarty_tpl->_cache['capture_stack'][] = array("areYouSure", null, null); ob_start();
echo smarty_function_text(array('key'=>'admin+permissions_delete_confirmation'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

						<?php echo '<script'; ?>
 type="text/javascript">
							window.delRoles = function(){
								if( $('#roles tr.role td input:checkbox:checked').size() == 0 ){
									alert('<?php echo preg_replace("%(?<!\\\\)'%", "\'",(isset($_smarty_tpl->_cache['__smarty_capture']['selectRoleAlert']) ? $_smarty_tpl->_cache['__smarty_capture']['selectRoleAlert'] : null));?>
');
									return false;
								}

								return confirm('<?php echo preg_replace("%(?<!\\\\)'%", "\'",(isset($_smarty_tpl->_cache['__smarty_capture']['areYouSure']) ? $_smarty_tpl->_cache['__smarty_capture']['areYouSure'] : null));?>
');
							};
						<?php echo '</script'; ?>
>
						<?php echo smarty_function_decorator(array('name'=>'button','type'=>'submit','langLabel'=>'admin+permissions_delete_role','class'=>'ow_button ow_red ow_ic_delete','onclick'=>"return delRoles()"),$_smarty_tpl);?>

					</form>
				</td>
			</tr>
	    </table>
	</form>

    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin ow_center','type'=>'empty','langLabel'=>'admin+add_new_role_block_cap_label','iconClass'=>'ow_ic_add')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin ow_center','type'=>'empty','langLabel'=>'admin+add_new_role_block_cap_label','iconClass'=>'ow_ic_add'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        	<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>"add-role")); $_block_repeat=true; echo smarty_block_form(array('name'=>"add-role"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	            <?php echo smarty_function_label(array('name'=>"label"),$_smarty_tpl);?>
 <?php echo smarty_function_input(array('name'=>"label",'style'=>"width: 270px;"),$_smarty_tpl);?>

	            <?php echo smarty_function_submit(array('name'=>"submit",'class'=>" ow_mild_green ow_ic_add"),$_smarty_tpl);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"add-role"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin ow_center','type'=>'empty','langLabel'=>'admin+add_new_role_block_cap_label','iconClass'=>'ow_ic_add'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','type'=>'empty','langLabel'=>'admin+user_role_permissions_cap_label','iconClass'=>'ow_ic_gear_wheel')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','type'=>'empty','langLabel'=>'admin+user_role_permissions_cap_label','iconClass'=>'ow_ic_gear_wheel'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_smarty_tpl->_cache['capture_stack'][] = array('default', "permissionsPageUrl", null); ob_start();
echo smarty_function_url_for(array('for'=>'ADMIN_CTRL_Permissions:roles'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','type'=>'empty','langLabel'=>'admin+user_role_permissions_cap_label','iconClass'=>'ow_ic_gear_wheel'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

</div>


<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['formAction']->value;?>
">
<div class="ow_admin_permissions ow_automargin ow_superwide ow_stdmargin ow_center">
<table class="ow_table_2 ow_form ow_automargin ow_superwide">
	<tr class="ow_tr_first">
		<th><?php echo smarty_function_text(array('key'=>'admin+permissions_role_actions_label'),$_smarty_tpl);?>
</th>
		<?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_role_1_saved_item = isset($_smarty_tpl->tpl_vars['role']) ? $_smarty_tpl->tpl_vars['role'] : false;
$_smarty_tpl->tpl_vars['role'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['role']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->_loop = true;
$__foreach_role_1_saved_local_item = $_smarty_tpl->tpl_vars['role'];
?>
		<th width='1'><?php echo smarty_function_text(array('key'=>"base+authorization_role_".((string)$_smarty_tpl->tpl_vars['role']->value->name)),$_smarty_tpl);?>
</th>
		<?php
$_smarty_tpl->tpl_vars['role'] = $__foreach_role_1_saved_local_item;
}
if ($__foreach_role_1_saved_item) {
$_smarty_tpl->tpl_vars['role'] = $__foreach_role_1_saved_item;
}
?>
	</tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['groupActionList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groupAction_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_groupAction']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_groupAction'] : false;
$__foreach_groupAction_2_saved_item = isset($_smarty_tpl->tpl_vars['groupAction']) ? $_smarty_tpl->tpl_vars['groupAction'] : false;
$__foreach_groupAction_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['groupAction'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_groupAction'] = new Smarty_Variable(array());
$__foreach_groupAction_2_iteration=0;
$_smarty_tpl->tpl_vars['groupAction']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['groupAction']->value) {
$_smarty_tpl->tpl_vars['groupAction']->_loop = true;
$__foreach_groupAction_2_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_groupAction']->value['last'] = $__foreach_groupAction_2_iteration == $__foreach_groupAction_2_total;
$__foreach_groupAction_2_saved_local_item = $_smarty_tpl->tpl_vars['groupAction'];
?>
	<tr>
		<th colspan="<?php echo $_smarty_tpl->tpl_vars['colspanForRoles']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['groupAction']->value['name']]['label'])) {
echo $_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['groupAction']->value['name']]['label'];
} else {
echo $_smarty_tpl->tpl_vars['groupAction']->value['name'];
}?></th>
	</tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['groupAction']->value['actions'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_action_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_action']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_action'] : false;
$__foreach_action_3_saved_item = isset($_smarty_tpl->tpl_vars['action']) ? $_smarty_tpl->tpl_vars['action'] : false;
$__foreach_action_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['action'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_action'] = new Smarty_Variable(array());
$__foreach_action_3_iteration=0;
$_smarty_tpl->tpl_vars['action']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
$__foreach_action_3_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_action']->value['last'] = $__foreach_action_3_iteration == $__foreach_action_3_total;
$__foreach_action_3_saved_local_item = $_smarty_tpl->tpl_vars['action'];
?>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>
  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_groupAction']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_groupAction']->value['last'] : null) && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_action']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_action']->value['last'] : null)) {?>ow_tr_last<?php }?>">
        <?php $_smarty_tpl->tpl_vars['actionName'] = new Smarty_Variable($_smarty_tpl->tpl_vars['action']->value->name, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'actionName', 0);?>
		<td class="ow_label ow_autowidth"><?php if (!empty($_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['groupAction']->value['name']]['actions'][$_smarty_tpl->tpl_vars['actionName']->value])) {
echo $_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['groupAction']->value['name']]['actions'][$_smarty_tpl->tpl_vars['actionName']->value];
} else {
echo $_smarty_tpl->tpl_vars['actionName']->value;
}?></td>
		<?php $_smarty_tpl->tpl_vars['actionId'] = new Smarty_Variable($_smarty_tpl->tpl_vars['action']->value->id, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'actionId', 0);?>
		<?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_role_4_saved_item = isset($_smarty_tpl->tpl_vars['role']) ? $_smarty_tpl->tpl_vars['role'] : false;
$_smarty_tpl->tpl_vars['role'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['role']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->_loop = true;
$__foreach_role_4_saved_local_item = $_smarty_tpl->tpl_vars['role'];
?>
			<?php $_smarty_tpl->tpl_vars['roleId'] = new Smarty_Variable($_smarty_tpl->tpl_vars['role']->value->id, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'roleId', 0);?>
		<td><?php if (!($_smarty_tpl->tpl_vars['action']->value->availableForGuest == false && $_smarty_tpl->tpl_vars['roleId']->value == $_smarty_tpl->tpl_vars['guestRoleId']->value)) {?><label for="action-<?php echo $_smarty_tpl->tpl_vars['actionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['roleId']->value;?>
"></label><input type="checkbox" id="action-<?php echo $_smarty_tpl->tpl_vars['actionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['roleId']->value;?>
" name="perm[]" value="<?php echo $_smarty_tpl->tpl_vars['actionId']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['roleId']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['perms']->value[$_smarty_tpl->tpl_vars['actionId']->value][$_smarty_tpl->tpl_vars['roleId']->value])) {?> checked="checked"<?php }?> /><?php }?></td>
		<?php
$_smarty_tpl->tpl_vars['role'] = $__foreach_role_4_saved_local_item;
}
if ($__foreach_role_4_saved_item) {
$_smarty_tpl->tpl_vars['role'] = $__foreach_role_4_saved_item;
}
?>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['action'] = $__foreach_action_3_saved_local_item;
}
if ($__foreach_action_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_action'] = $__foreach_action_3_saved;
}
if ($__foreach_action_3_saved_item) {
$_smarty_tpl->tpl_vars['action'] = $__foreach_action_3_saved_item;
}
?>
	<?php
$_smarty_tpl->tpl_vars['groupAction'] = $__foreach_groupAction_2_saved_local_item;
}
if ($__foreach_groupAction_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_groupAction'] = $__foreach_groupAction_2_saved;
}
if ($__foreach_groupAction_2_saved_item) {
$_smarty_tpl->tpl_vars['groupAction'] = $__foreach_groupAction_2_saved_item;
}
?>
</table>

</div>
<div class="clearfix ow_automargin ow_superwide"><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>"button",'langLabel'=>'admin+permissions_index_save','class'=>"ow_button ow_ic_save ow_positive",'onclick'=>'this.form.submit();'),$_smarty_tpl);?>
</div></div>
</form>
<?php }
}
