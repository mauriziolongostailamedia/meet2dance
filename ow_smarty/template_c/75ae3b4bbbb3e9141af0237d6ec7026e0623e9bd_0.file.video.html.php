<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:33
  from "/home/dancemee/public_html/ow_plugins/newsfeed/views/formats/video.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf1253df6a6_86166804',
  'file_dependency' => 
  array (
    '75ae3b4bbbb3e9141af0237d6ec7026e0623e9bd' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/newsfeed/views/formats/video.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf1253df6a6_86166804 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_modifier_more')) require_once '/home/dancemee/public_html/ow_smarty/plugin/modifier.more.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_newsfeed_video_embed embed, .ow_newsfeed_video_embed object, .ow_newsfeed_video_embed iframe {
    height: 220px;
    width: 300px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['status'])) {?><div class="ow_newsfeed_body_status ow_smallmargin"><?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['vars']->value['status'],300);?>
</div><?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['image'])) {?>
<div class="clearfix ow_newsfeed_oembed_atch" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <div class="ow_newsfeed_item_picture">
        <a href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])) {
echo $_smarty_tpl->tpl_vars['vars']->value['url'];
} else { ?>javascript://<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['vars']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vars']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><div class="ow_oembed_video_cover"></div></a>
    </div>
    <div class="ow_newsfeed_item_content">
        <a class="ow_newsfeed_item_title" href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])) {
echo $_smarty_tpl->tpl_vars['vars']->value['url'];
} else { ?>javascript://<?php }?>"><?php echo $_smarty_tpl->tpl_vars['vars']->value['title'];?>
</a>
        <div class="ow_remark ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['vars']->value['description'];?>
</div>
        <div class="ow_newsfeed_action_activity event_newsfeed_activity">[ph:activity]</div>
    </div>
</div>
<?php } elseif (!empty($_smarty_tpl->tpl_vars['vars']->value['embed'])) {?>
    <div class="ow_newsfeed_video_embed" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vars']->value['embed'];?>
</div>
    <div class="ow_newsfeed_action_activity event_newsfeed_activity">[ph:activity]</div>
<?php }
}
}
