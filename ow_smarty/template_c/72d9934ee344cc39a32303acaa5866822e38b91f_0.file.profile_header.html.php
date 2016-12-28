<?php
/* Smarty version 3.1.29, created on 2016-10-12 18:32:51
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/profile_header.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe65b381d112_55996704',
  'file_dependency' => 
  array (
    '72d9934ee344cc39a32303acaa5866822e38b91f' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/profile_header.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe65b381d112_55996704 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_format_date')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.format_date.php';
?>
<div class="owm_profile_header_wrap owm_std_margin_bottom">
    <div class="owm_profile_header clearfix owm_std_margin_bottom">
        <div class="owm_profile_avatar_wrap" style="position:relative;">
            <?php echo smarty_function_decorator(array('name'=>"avatar_item",'data'=>$_smarty_tpl->tpl_vars['user']->value['avatar'],'fullLabel'=>true),$_smarty_tpl);?>

            <div class="ow_avatar_pending_approval" style="<?php if (empty($_smarty_tpl->tpl_vars['avatarDto']->value) || !$_smarty_tpl->tpl_vars['owner']->value && !$_smarty_tpl->tpl_vars['isModerator']->value || !empty($_smarty_tpl->tpl_vars['avatarDto']->value) && $_smarty_tpl->tpl_vars['avatarDto']->value->status == 'active') {?>display:none;<?php } else {
}?>position: absolute; top: 0; right: 0; left: 0; bottom: 0; background-color: rgba(0,0,0,0.6); color: #fff; padding: 8px;"><?php echo smarty_function_text(array('key'=>'base+avatar_pending_approval'),$_smarty_tpl);?>
</div>
        </div>
        <span class="owm_profile_name"><?php echo $_smarty_tpl->tpl_vars['user']->value['displayName'];?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['showPresence']->value) {?>
            <div class="owm_profile_online <?php if (!$_smarty_tpl->tpl_vars['isOnline']->value) {?>owm_profile_offline<?php }?>"><span><?php echo smarty_function_text(array('key'=>"base+user_list_activity"),$_smarty_tpl);?>
: <?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['activityStamp']->value),$_smarty_tpl);?>
</span></div>
        <?php }?>
    </div>
    <div class="owm_profile_btns">
        <?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>

    </div>
</div>
<?php }
}
