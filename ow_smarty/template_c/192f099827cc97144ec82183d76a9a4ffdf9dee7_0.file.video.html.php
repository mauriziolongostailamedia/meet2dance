<?php
/* Smarty version 3.1.29, created on 2016-10-12 18:32:51
  from "/home/dancemee/public_html/ow_plugins/newsfeed/mobile/views/formats/video.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe65b3bd3f81_12802151',
  'file_dependency' => 
  array (
    '192f099827cc97144ec82183d76a9a4ffdf9dee7' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/newsfeed/mobile/views/formats/video.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe65b3bd3f81_12802151 ($_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['vars']->value['status'])) {?><div class="owm_newsfeed_body_status"><?php echo $_smarty_tpl->tpl_vars['vars']->value['status'];?>
</div><?php }?>
<div id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
" class="owm_video_format">
    <div class="owm_newsfeed_body_pic">
        <a href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])) {
echo $_smarty_tpl->tpl_vars['vars']->value['url'];
} else { ?>javascript://<?php }?>" <?php if (empty($_smarty_tpl->tpl_vars['vars']->value['url'])) {?>class="ow_format_video_play"<?php }?> style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['vars']->value['image'];?>
);"><span class="owm_newsfeed_body_pic_icon"></span><img src="<?php echo $_smarty_tpl->tpl_vars['vars']->value['blankImg'];?>
" /></a>
        <?php if ($_smarty_tpl->tpl_vars['vars']->value['embed']) {?><textarea class="ow_format_video_embed" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['vars']->value['embed'];?>
</textarea><?php }?>
    </div>
    <div class="owm_newsfeed_body_cont">
        <div class="owm_newsfeed_item_padding owm_newsfeed_item_box clearfix">
            <div class="owm_newsfeed_body_info_wrap">
                <div class="owm_newsfeed_body_info">
                    <div class="owm_newsfeed_body_title"><b><?php echo $_smarty_tpl->tpl_vars['vars']->value['title'];?>
</b></div>
                    <div class="owm_newsfeed_body_descr"><?php echo $_smarty_tpl->tpl_vars['vars']->value['description'];?>
</div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
