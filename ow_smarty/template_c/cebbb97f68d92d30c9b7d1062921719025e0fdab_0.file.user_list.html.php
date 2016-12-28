<?php
/* Smarty version 3.1.29, created on 2016-10-20 20:18:58
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/user_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58090a922d7650_14636994',
  'file_dependency' => 
  array (
    'cebbb97f68d92d30c9b7d1062921719025e0fdab' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/user_list.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58090a922d7650_14636994 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!empty($_smarty_tpl->tpl_vars['list']->value)) {
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_list_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_user_list_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
    <?php $_smarty_tpl->tpl_vars['dto'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['dto'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'dto', 0);?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable($_smarty_tpl->tpl_vars['dto']->value->id, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'id', 0);?>
    <div class="owm_content_list_item" onclick=" window.location.href='<?php echo $_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['id']->value]['url'];?>
'  ">
        <div class="owm_user_list_item">
            <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['id']->value]),$_smarty_tpl);?>

            <div class="owm_user_list_info owm_remark">
                <div class="owm_user_list_name"><span><?php echo $_smarty_tpl->tpl_vars['displayNameList']->value[$_smarty_tpl->tpl_vars['id']->value];?>
</span></div>
                <?php
$_from = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['id']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_field_list_1_saved_item = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field'] : false;
$_smarty_tpl->tpl_vars['field'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['field']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
$__foreach_field_list_1_saved_local_item = $_smarty_tpl->tpl_vars['field'];
?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['field']->value)) {?>
                        <div class="owm_user_list_cont">
                            <?php echo $_smarty_tpl->tpl_vars['field']->value;?>

                        </div>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['field'] = $__foreach_field_list_1_saved_local_item;
}
if ($__foreach_field_list_1_saved_item) {
$_smarty_tpl->tpl_vars['field'] = $__foreach_field_list_1_saved_item;
}
?>
            </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['onlineInfo']->value) && $_smarty_tpl->tpl_vars['onlineInfo']->value[$_smarty_tpl->tpl_vars['id']->value]) {?>
                <div class="owm_profile_online">
                </div>
            <?php }?>
        </div>
    </div>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_user_list_0_saved_local_item;
}
if ($__foreach_user_list_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_user_list_0_saved_item;
}
} else { ?>
    <div class="owm_nocontent"><?php echo smarty_function_text(array('key'=>"base+user_no_users"),$_smarty_tpl);?>
</div>
<?php }
}
}
