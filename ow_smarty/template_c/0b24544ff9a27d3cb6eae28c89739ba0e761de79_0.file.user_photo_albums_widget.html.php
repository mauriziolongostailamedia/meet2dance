<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:32
  from "/home/dancemee/public_html/ow_plugins/photo/views/components/user_photo_albums_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf124d9e4f0_31217975',
  'file_dependency' => 
  array (
    '0b24544ff9a27d3cb6eae28c89739ba0e761de79' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/photo/views/components/user_photo_albums_widget.html',
      1 => 1475654740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf124d9e4f0_31217975 ($_smarty_tpl) {
if (!is_callable('smarty_function_url_for_route')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="clearfix ow_lp_albums">	
    <?php if ($_smarty_tpl->tpl_vars['showTitles']->value) {?>
	    <?php
$_from = $_smarty_tpl->tpl_vars['albums']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_album_0_saved_item = isset($_smarty_tpl->tpl_vars['album']) ? $_smarty_tpl->tpl_vars['album'] : false;
$_smarty_tpl->tpl_vars['album'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['album']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->_loop = true;
$__foreach_album_0_saved_local_item = $_smarty_tpl->tpl_vars['album'];
?>
            <div class="clearfix ow_smallmargin">
                <div class="ow_lp_wrapper<?php if (!empty($_smarty_tpl->tpl_vars['album']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['album']->value['class'];
}?>">
                    <?php $_smarty_tpl->_cache['capture_stack'][] = array('url', null, null); ob_start(); ?>
                        <?php echo smarty_function_url_for_route(array('for'=>"photo_user_album:[user=>".((string)$_smarty_tpl->tpl_vars['user']->value).", album=>".((string)$_smarty_tpl->tpl_vars['album']->value['dto']->id)."]"),$_smarty_tpl);?>

                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		            <a href="<?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['url']) ? $_smarty_tpl->_cache['__smarty_capture']['url'] : null);?>
">
                        <img title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['album']->value['dto']->name, ENT_QUOTES, 'UTF-8', true);?>
"  alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['album']->value['dto']->name, ENT_QUOTES, 'UTF-8', true);?>
"  src="<?php echo $_smarty_tpl->tpl_vars['album']->value['cover'];?>
" width="100" height="100" />
                    </a>
                </div>
                <div class="ow_lp_label ow_small">
                    <a href="<?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['url']) ? $_smarty_tpl->_cache['__smarty_capture']['url'] : null);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['album']->value['dto']->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                </div>
            </div>
	    <?php
$_smarty_tpl->tpl_vars['album'] = $__foreach_album_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['album']->_loop) {
?>
	        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'photo+no_photo_found'),$_smarty_tpl);?>
</div>
	    <?php
}
if ($__foreach_album_0_saved_item) {
$_smarty_tpl->tpl_vars['album'] = $__foreach_album_0_saved_item;
}
?>
    <?php } else { ?>
        <div class="ow_lp_photos ow_center">
            <?php
$_from = $_smarty_tpl->tpl_vars['albums']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_album_1_saved_item = isset($_smarty_tpl->tpl_vars['album']) ? $_smarty_tpl->tpl_vars['album'] : false;
$_smarty_tpl->tpl_vars['album'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['album']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->_loop = true;
$__foreach_album_1_saved_local_item = $_smarty_tpl->tpl_vars['album'];
?>
                <?php $_smarty_tpl->_cache['capture_stack'][] = array('url', null, null); ob_start(); ?>
                    <?php echo smarty_function_url_for_route(array('for'=>"photo_user_album:[user=>".((string)$_smarty_tpl->tpl_vars['user']->value).", album=>".((string)$_smarty_tpl->tpl_vars['album']->value['dto']->id)."]"),$_smarty_tpl);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <a class="ow_lp_wrapper<?php if (!empty($_smarty_tpl->tpl_vars['album']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['album']->value['class'];
}?>" href="<?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['url']) ? $_smarty_tpl->_cache['__smarty_capture']['url'] : null);?>
">
                    <img title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['album']->value['dto']->name, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['album']->value['dto']->name, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->tpl_vars['album']->value['cover'];?>
" />
                </a>
            <?php
$_smarty_tpl->tpl_vars['album'] = $__foreach_album_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['album']->_loop) {
?>
                <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'photo+no_photo_found'),$_smarty_tpl);?>
</div>
            <?php
}
if ($__foreach_album_1_saved_item) {
$_smarty_tpl->tpl_vars['album'] = $__foreach_album_1_saved_item;
}
?>
        </div>
    <?php }?>
</div>
<?php }
}
