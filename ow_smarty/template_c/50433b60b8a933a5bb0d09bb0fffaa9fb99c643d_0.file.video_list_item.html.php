<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:37:34
  from "/home/dancemee/public_html/ow_plugins/video/decorators/video_list_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe82eec07719_10043290',
  'file_dependency' => 
  array (
    '50433b60b8a933a5bb0d09bb0fffaa9fb99c643d' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/video/decorators/video_list_item.html',
      1 => 1475654753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe82eec07719_10043290 ($_smarty_tpl) {
if (!is_callable('smarty_function_url_for_route')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_user_link')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.user_link.php';
?>

<div class="ow_video_list_item ow_small<?php if (isset($_smarty_tpl->tpl_vars['data']->value['set_class'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['set_class'];
}?>">

    <?php $_smarty_tpl->_cache['capture_stack'][] = array('url', null, null); ob_start();
echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['data']->value['id'])."]"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if ($_smarty_tpl->tpl_vars['data']->value['thumb'] == 'undefined') {?>
        <a href="<?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['url']) ? $_smarty_tpl->_cache['__smarty_capture']['url'] : null);?>
" class="ow_video_thumb"></a>
    <?php } else { ?>
        <a href="<?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['url']) ? $_smarty_tpl->_cache['__smarty_capture']['url'] : null);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['thumb'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
    <?php }?>
    <div class="ow_video_item_rate"><?php if ($_smarty_tpl->tpl_vars['data']->value['listType'] == 'toprated') {
if ($_smarty_tpl->tpl_vars['data']->value['score']) {
echo BASE_CTRL_Rate::displayRate(array('avg_rate'=>$_smarty_tpl->tpl_vars['data']->value['score']),$_smarty_tpl);
}
}?></div>
    <div class="ow_video_item_title"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value['title'],55,"...");?>
</div>
    <?php echo smarty_function_text(array('key'=>'base+by'),$_smarty_tpl);?>
 <?php echo smarty_function_user_link(array('username'=>$_smarty_tpl->tpl_vars['data']->value['username'],'name'=>$_smarty_tpl->tpl_vars['data']->value['displayName']),$_smarty_tpl);?>


</div><?php }
}
