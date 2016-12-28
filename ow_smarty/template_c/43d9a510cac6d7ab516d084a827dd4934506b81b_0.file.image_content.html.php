<?php
/* Smarty version 3.1.29, created on 2016-10-12 18:32:51
  from "/home/dancemee/public_html/ow_plugins/newsfeed/mobile/views/formats/image_content.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe65b3b4a692_32009324',
  'file_dependency' => 
  array (
    '43d9a510cac6d7ab516d084a827dd4934506b81b' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/newsfeed/mobile/views/formats/image_content.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe65b3b4a692_32009324 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
?>
<div class="owm_newsfeed_body_status"><?php echo $_smarty_tpl->tpl_vars['vars']->value['status'];?>
</div>
<div class="owm_newsfeed_body_pic">
    <a href="<?php if ($_smarty_tpl->tpl_vars['vars']->value['url']) {
echo $_smarty_tpl->tpl_vars['vars']->value['url'];
} else { ?>javascript://<?php }?>" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['vars']->value['image'];?>
);"><img src="<?php echo $_smarty_tpl->tpl_vars['blankImg']->value;?>
"></a>
</div>
<div class="owm_newsfeed_body_cont">
    <div class="owm_newsfeed_item_padding owm_newsfeed_item_box clearfix">
        <div class="owm_newsfeed_body_icon <?php if ($_smarty_tpl->tpl_vars['vars']->value['iconClass']) {
echo $_smarty_tpl->tpl_vars['vars']->value['iconClass'];
}?>"></div>
        <div class="owm_newsfeed_body_info_wrap">
            <div class="owm_newsfeed_body_info">
                <div class="owm_newsfeed_body_title"><b><?php if ($_smarty_tpl->tpl_vars['vars']->value['url']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['vars']->value['url'];?>
"><?php }
echo $_smarty_tpl->tpl_vars['vars']->value['title'];
if ($_smarty_tpl->tpl_vars['vars']->value['url']) {?></a><?php }?></b></div>
                <div class="owm_newsfeed_body_descr"><?php echo $_smarty_tpl->tpl_vars['vars']->value['description'];?>
</div>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['vars']->value['userList']) {?>
        <div class="owm_newsfeed_ulist">
            <div class="owm_newsfeed_item_padding owm_newsfeed_item_box clearfix">
                <div class="owm_newsfeed_ulist_count">
                    <?php echo $_smarty_tpl->tpl_vars['vars']->value['userList']['label'];?>

                </div>
                <div class="owm_newsfeed_ulist_avatars">
                    <?php
$_from = $_smarty_tpl->tpl_vars['vars']->value['userList']['list'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_0_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_0_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
                        <?php echo smarty_function_decorator(array('name'=>"avatar_item",'data'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>

                    <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_local_item;
}
if ($__foreach_user_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_item;
}
?>
                </div>
            </div>
        </div>
    <?php }?>
</div><?php }
}
