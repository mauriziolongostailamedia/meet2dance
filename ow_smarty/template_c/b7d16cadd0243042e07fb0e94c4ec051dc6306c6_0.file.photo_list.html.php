<?php
/* Smarty version 3.1.29, created on 2016-10-12 19:49:27
  from "/home/dancemee/public_html/ow_plugins/photo/mobile/views/components/photo_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe77a7ae4222_44667585',
  'file_dependency' => 
  array (
    'b7d16cadd0243042e07fb0e94c4ec051dc6306c6' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/photo/mobile/views/components/photo_list.html',
      1 => 1475654740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe77a7ae4222_44667585 ($_smarty_tpl) {
if (!is_callable('smarty_function_url_for_route')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for_route.php';
$_smarty_tpl->_cache['capture_stack'][] = array('default', 'img', null); ob_start(); ?>data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_from = $_smarty_tpl->tpl_vars['photos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_p_0_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_p_0_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?><div class="owm_photo_list_item" data-ref="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><a href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
)"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['description'])) {?> alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> /></a></div><?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_0_saved_local_item;
}
if ($__foreach_p_0_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_0_saved_item;
}
}
}
