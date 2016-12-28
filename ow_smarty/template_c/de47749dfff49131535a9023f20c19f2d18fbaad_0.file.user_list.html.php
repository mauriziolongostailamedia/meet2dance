<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:04:37
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/components/user_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe89454a63b7_92267603',
  'file_dependency' => 
  array (
    'de47749dfff49131535a9023f20c19f2d18fbaad' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/components/user_list.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe89454a63b7_92267603 ($_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_user_link')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.user_link.php';
if (!is_callable('smarty_function_age')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.age.php';
if (!is_callable('smarty_function_format_date')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.format_date.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php
$_from = $_smarty_tpl->tpl_vars['buttons']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_btn_0_saved_item = isset($_smarty_tpl->tpl_vars['btn']) ? $_smarty_tpl->tpl_vars['btn'] : false;
$_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['btn']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
$__foreach_btn_0_saved_local_item = $_smarty_tpl->tpl_vars['btn'];
?>
	   <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['js'])) {?>
	       <?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>

	   <?php }?>
	<?php
$_smarty_tpl->tpl_vars['btn'] = $__foreach_btn_0_saved_local_item;
}
if ($__foreach_btn_0_saved_item) {
$_smarty_tpl->tpl_vars['btn'] = $__foreach_btn_0_saved_item;
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .user_list_thumb {
        width: 55px;
        height: 45px;
    }

    #user-list-form .ow_lbutton {
        cursor: default;
    }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php if ($_smarty_tpl->tpl_vars['users']->value) {?>

<?php if (isset($_smarty_tpl->tpl_vars['search']->value)) {?>
    <div class="ow_anno ow_std_margin ow_nocontent"><?php echo smarty_function_text(array('key'=>"admin+user_search_result",'for'=>$_smarty_tpl->tpl_vars['search']->value),$_smarty_tpl);?>
</div>
<?php }?>

<div class="clearfix ow_smallmargin">
    <div class="ow_left"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['total']->value) {?><div class="ow_right"><?php echo smarty_function_text(array('key'=>'admin+found_users','count'=>$_smarty_tpl->tpl_vars['total']->value),$_smarty_tpl);?>
</div><?php }?>
</div>

<form id="user-list-form" method="post" action="<?php if ($_smarty_tpl->tpl_vars['action']->value) {
echo $_smarty_tpl->tpl_vars['action']->value;
}?>">
<table class="ow_table_2">
<tr class="ow_tr_first">
    <th width="1"></td>
    <th><?php echo smarty_function_text(array('key'=>'admin+user'),$_smarty_tpl);?>
</th>
    <th><?php echo smarty_function_text(array('key'=>'admin+user_status'),$_smarty_tpl);?>
</th>
    <th><?php echo smarty_function_text(array('key'=>'admin+joined'),$_smarty_tpl);?>
</th>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_1_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_1_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
    <?php $_smarty_tpl->_cache['capture_stack'][] = array('default', 'userId', null); ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->id;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_cache['capture_stack'][] = array('default', 'username', null); ob_start();
echo $_smarty_tpl->tpl_vars['userNameList']->value[$_smarty_tpl->tpl_vars['userId']->value];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>
">
        <td><?php if (!in_array($_smarty_tpl->tpl_vars['user']->value->id,$_smarty_tpl->tpl_vars['adminList']->value)) {?><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" name="users[<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
]" /><?php }?></td>
        <td>
            <div class="clearfix">
                <div class="ow_left ow_txtleft user_list_thumb"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['userId']->value]),$_smarty_tpl);?>
</div>
                <div class="ow_left ow_txtleft">
                    <?php echo smarty_function_user_link(array('name'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['userId']->value]['title'],'username'=>$_smarty_tpl->tpl_vars['userNameList']->value[$_smarty_tpl->tpl_vars['userId']->value]),$_smarty_tpl);?>
<br />
                    <span class="ow_small">
                    <?php if (!empty($_smarty_tpl->tpl_vars['sexList']->value[$_smarty_tpl->tpl_vars['userId']->value])) {?>
                        <?php echo $_smarty_tpl->tpl_vars['sexList']->value[$_smarty_tpl->tpl_vars['userId']->value];?>

                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['userId']->value]['birthdate'])) {?>
                        <?php echo smarty_function_age(array('dateTime'=>$_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['userId']->value]['birthdate']),$_smarty_tpl);?>

                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['sexList']->value[$_smarty_tpl->tpl_vars['userId']->value]) || !empty($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['userId']->value]['birthdate'])) {?><br /><?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['userId']->value]['email'])) {?>
                        <span class="ow_remark"><?php echo $_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['userId']->value]['email'];?>
</span>
                    <?php }?>
                    </span>
                    <?php if ($_smarty_tpl->tpl_vars['onlineStatus']->value) {?>
                    <div class="ow_small">
                        <?php if ((!empty($_smarty_tpl->tpl_vars['onlineStatus']->value[$_smarty_tpl->tpl_vars['userId']->value]) && $_smarty_tpl->tpl_vars['onlineStatus']->value[$_smarty_tpl->tpl_vars['userId']->value])) {?>
                            <span class="ow_lbutton ow_green"><?php echo smarty_function_text(array('key'=>'base+activity_online'),$_smarty_tpl);?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->activityStamp) {?>
                            <?php echo smarty_function_text(array('key'=>'base+activity_stamp'),$_smarty_tpl);?>
 <span class="ow_remark"><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['user']->value->activityStamp),$_smarty_tpl);?>
</span>
                        <?php }?>
                    </div>
                    <?php }?>
                </div>
            </div>
        </td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['suspendedList']->value[$_smarty_tpl->tpl_vars['userId']->value]) {?><div><span class="ow_lbutton ow_red"><?php echo smarty_function_text(array('key'=>'admin+user_status_suspended'),$_smarty_tpl);?>
</span></div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['unverifiedList']->value[$_smarty_tpl->tpl_vars['userId']->value]) {?><div><span class="ow_lbutton"><?php echo smarty_function_text(array('key'=>'admin+user_status_unverified'),$_smarty_tpl);?>
</span></div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['unapprovedList']->value[$_smarty_tpl->tpl_vars['userId']->value]) {?><div><span class="ow_lbutton"><?php echo smarty_function_text(array('key'=>'admin+user_status_unapproved'),$_smarty_tpl);?>
</span></div><?php }?>
        </td>
        <td class="ow_small"><?php if ($_smarty_tpl->tpl_vars['user']->value->joinStamp) {
echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['user']->value->joinStamp),$_smarty_tpl);
}?></td>
    </tr>
<?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_1_saved_local_item;
}
if ($__foreach_user_1_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_1_saved_item;
}
?>
<tr class="ow_alt1 ow_tr_last">
     <td><input type="checkbox" id="check-all" /></th>
     <td colspan="3" class="ow_txtleft">
         <?php echo smarty_function_text(array('key'=>'base+check_all'),$_smarty_tpl);?>
 | <?php echo smarty_function_text(array('key'=>'base+with_selected'),$_smarty_tpl);?>


         <?php
$_from = $_smarty_tpl->tpl_vars['buttons']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_btn_2_saved_item = isset($_smarty_tpl->tpl_vars['btn']) ? $_smarty_tpl->tpl_vars['btn'] : false;
$_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['btn']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
$__foreach_btn_2_saved_local_item = $_smarty_tpl->tpl_vars['btn'];
?>
            <?php echo smarty_function_decorator(array('name'=>'button_list_item','type'=>'submit','buttonName'=>$_smarty_tpl->tpl_vars['btn']->value['name'],'label'=>$_smarty_tpl->tpl_vars['btn']->value['label'],'id'=>$_smarty_tpl->tpl_vars['btn']->value['id'],'class'=>$_smarty_tpl->tpl_vars['btn']->value['class']),$_smarty_tpl);?>

         <?php
$_smarty_tpl->tpl_vars['btn'] = $__foreach_btn_2_saved_local_item;
}
if ($__foreach_btn_2_saved_item) {
$_smarty_tpl->tpl_vars['btn'] = $__foreach_btn_2_saved_item;
}
?>
     </td>
</tr>
</table>

<div class="ow_hidden" id="delete-user-confirm">
<div class="ow_stdmargin ow_center">
    <div class="ow_stdmargin">
        <?php echo smarty_function_text(array('key'=>"admin+confirm_delete_users"),$_smarty_tpl);?>

    </div>

	<?php echo smarty_function_decorator(array('name'=>"button",'type'=>"submit",'id'=>"button-confirm-user-delete",'class'=>"ow_ic_delete ow_red",'langLabel'=>"base+delete_user_delete_button"),$_smarty_tpl);?>

</div>
</div>

</form>

<?php echo $_smarty_tpl->tpl_vars['paging']->value;?>


<?php } else { ?>
    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin clearfix ow_italic ow_center')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin clearfix ow_italic ow_center'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_text(array('key'=>'admin+no_users'),$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin clearfix ow_italic ow_center'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
}
