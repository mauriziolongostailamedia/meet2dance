<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:32
  from "/home/dancemee/public_html/ow_plugins/video/views/components/user_video_list_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf124e19565_82252235',
  'file_dependency' => 
  array (
    'b44d4d9ecc7b74fb6a65e7429dac51a9fcbafe7e' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/video/views/components/user_video_list_widget.html',
      1 => 1475654753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf124e19565_82252235 ($_smarty_tpl) {
if (!is_callable('smarty_function_url_for_route')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>

<div class="ow_other_video_list">
    <?php if ($_smarty_tpl->tpl_vars['showTitles']->value) {?>
		<?php
$_from = $_smarty_tpl->tpl_vars['clips']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_clips_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_clips']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_clips'] : false;
$__foreach_clips_0_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration']++;
$__foreach_clips_0_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
		<div class="ow_other_video_list_item ow_smallmargin clearfix">
            <div class="ow_other_video_thumb ow_left">
	            <a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
">
	                <?php if ($_smarty_tpl->tpl_vars['c']->value['thumb'] != 'undefined') {?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
	            </a>
            </div>
            <div class="ow_other_video_item_title ow_small"><a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</a></div>
		</div>
		<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
            <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'video+no_video_found'),$_smarty_tpl);?>
</div>
		<?php
}
if ($__foreach_clips_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = $__foreach_clips_0_saved;
}
if ($__foreach_clips_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_0_saved_item;
}
?>
    <?php } else { ?>
    <div class="clearfix ow_center">
        <?php
$_from = $_smarty_tpl->tpl_vars['clips']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_clips_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_clips']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_clips'] : false;
$__foreach_clips_1_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration']++;
$__foreach_clips_1_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration'] : null) == 1) {?>
            <div class="ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['c']->value['code'];?>
</div>
        <?php } else { ?>
	        <a class="ow_other_video_floated" href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
">
	            <?php if ($_smarty_tpl->tpl_vars['c']->value['thumb'] != 'undefined') {?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
	        </a>
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
            <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'video+no_video_found'),$_smarty_tpl);?>
</div>
        <?php
}
if ($__foreach_clips_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = $__foreach_clips_1_saved;
}
if ($__foreach_clips_1_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_1_saved_item;
}
?>
    </div>        
    <?php }?>
</div><?php }
}
