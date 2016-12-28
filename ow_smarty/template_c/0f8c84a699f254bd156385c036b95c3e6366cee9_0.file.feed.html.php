<?php
/* Smarty version 3.1.29, created on 2016-10-12 17:54:35
  from "/home/dancemee/public_html/ow_plugins/newsfeed/mobile/views/components/feed.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe5cbb9b5fb3_04060261',
  'file_dependency' => 
  array (
    '0f8c84a699f254bd156385c036b95c3e6366cee9' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/newsfeed/mobile/views/components/feed.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe5cbb9b5fb3_04060261 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['autoId']->value;?>
" class="owm_newsfeed_block">
    <?php if (!empty($_smarty_tpl->tpl_vars['statusMessage']->value)) {?>
        <div class="owm_anno owm_info owm_small_margin_bottom">
            <?php echo $_smarty_tpl->tpl_vars['statusMessage']->value;?>

        </div>
    <?php } elseif (!empty($_smarty_tpl->tpl_vars['status']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['status']->value;?>

    <?php }?>
    
    <div class="owm_newsfeed_list">
        <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    </div>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['viewMore']->value)) {?>
        <?php $_smarty_tpl->_cache['capture_stack'][] = array("feedMoreCount", null, null); ob_start(); ?><span class="feed-more-count"><?php echo $_smarty_tpl->tpl_vars['viewMore']->value;?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div style="visibility: hidden;" class="feed-load-more owm_newsfeed_comment_load_more owm_load_more">
            <span class="owm_newsfeed_comment_load_txt">
                <?php echo smarty_function_text(array('key'=>'newsfeed+view_more_count_label','count'=>(isset($_smarty_tpl->_cache['__smarty_capture']['feedMoreCount']) ? $_smarty_tpl->_cache['__smarty_capture']['feedMoreCount'] : null)),$_smarty_tpl);?>

            </span>
        </div>
    <?php }?>
</div><?php }
}
