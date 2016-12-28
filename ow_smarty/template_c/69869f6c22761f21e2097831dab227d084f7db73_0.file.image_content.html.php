<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:33
  from "/home/dancemee/public_html/ow_plugins/newsfeed/views/formats/image_content.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf125131256_78817454',
  'file_dependency' => 
  array (
    '69869f6c22761f21e2097831dab227d084f7db73' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/newsfeed/views/formats/image_content.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf125131256_78817454 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_more')) require_once '/home/dancemee/public_html/ow_smarty/plugin/modifier.more.php';
if (!empty($_smarty_tpl->tpl_vars['vars']->value['status'])) {?><div class="ow_newsfeed_body_status ow_smallmargin"><?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['vars']->value['status'],300);?>
</div><?php }?>

<div class="ow_newsfeed_oembed_atch clearfix">
    <div class="ow_newsfeed_item_picture">
    <a href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])) {
echo $_smarty_tpl->tpl_vars['vars']->value['url'];
} else { ?>javascript://<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['vars']->value['thumbnail'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vars']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
    </div>
    <div class="ow_newsfeed_item_content">
        <a class="ow_newsfeed_item_title" href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])) {
echo $_smarty_tpl->tpl_vars['vars']->value['url'];
} else { ?>javascript://<?php }?>"><?php echo $_smarty_tpl->tpl_vars['vars']->value['title'];?>
</a>
        <div class="ow_remark ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['vars']->value['description'];?>
</div>

        <?php if ($_smarty_tpl->tpl_vars['vars']->value['userList']) {?>
            <div class="owm_newsfeed_ulist">
                <div class="owm_newsfeed_item_padding owm_newsfeed_item_box clearfix">
                    <div class="owm_newsfeed_ulist_count" style="display:inline-block">
                        <?php echo $_smarty_tpl->tpl_vars['vars']->value['userList']['label'];?>

                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['vars']->value['userList']['list'];?>

                </div>
            </div>
        <?php }?>
    </div>
</div><?php }
}
