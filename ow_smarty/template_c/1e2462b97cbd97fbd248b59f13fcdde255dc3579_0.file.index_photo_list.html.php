<?php
/* Smarty version 3.1.29, created on 2016-10-12 19:30:20
  from "/home/dancemee/public_html/ow_plugins/photo/mobile/views/components/index_photo_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe732c457735_69088925',
  'file_dependency' => 
  array (
    '1e2462b97cbd97fbd248b59f13fcdde255dc3579' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/photo/mobile/views/components/index_photo_list.html',
      1 => 1475654740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe732c457735_69088925 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_url_for_route')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for_route.php';
$_smarty_tpl->_cache['capture_stack'][] = array('default', 'nocontent', null); ob_start(); ?>
    <div class="owm_nocontent"><?php echo smarty_function_text(array('key'=>'photo+no_photo'),$_smarty_tpl);?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_cache['capture_stack'][] = array('default', 'cmp', null); ob_start(); ?>
    <div id="photo_list_cmp<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
        <div class="owm_index_photo_list" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['latest']['contId'];?>
">
            <?php
$_from = $_smarty_tpl->tpl_vars['latest']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_p_0_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_p_0_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>     
                <div class="owm_index_photo_item">
                    <a <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['title'])) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>  style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
)" href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
">
                        <img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                    </a>
                </div>
            <?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
                <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

            <?php
}
if ($__foreach_p_0_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_0_saved_item;
}
?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['featured']->value) {?>
            <div class="owm_index_photo_list" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['featured']['contId'];?>
" style="display:none;">
                <?php
$_from = $_smarty_tpl->tpl_vars['featured']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_p_1_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_p_1_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
                    <div class="owm_index_photo_item">
                        <a <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['title'])) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>  style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
)" href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
">
                            <img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                        </a>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
                    <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

                <?php
}
if ($__foreach_p_1_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_1_saved_item;
}
?>
            </div>
        <?php }?>

        <div class="owm_index_photo_list" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['toprated']['contId'];?>
" style="display:none;">
            <?php
$_from = $_smarty_tpl->tpl_vars['toprated']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_p_2_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_p_2_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
                <div class="owm_index_photo_item">
                    <a <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['title'])) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>  style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
)" href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
">
                        <img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                    </a>
                </div>
            <?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_2_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
                <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

            <?php
}
if ($__foreach_p_2_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_2_saved_item;
}
?>
        </div>
    </div>
    
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->tpl_vars['cmp']->value;
}
}
