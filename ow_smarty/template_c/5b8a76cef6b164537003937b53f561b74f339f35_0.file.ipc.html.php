<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:26:04
  from "/home/dancemee/public_html/ow_system_plugins/base/decorators/ipc.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe803cc391a6_20938845',
  'file_dependency' => 
  array (
    '5b8a76cef6b164537003937b53f561b74f339f35' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/decorators/ipc.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe803cc391a6_20938845 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_ipc_toolbar span{
    display:inline-block;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<div class="ow_ipc <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])) {
echo $_smarty_tpl->tpl_vars['data']->value['addClass'];
}?> clearfix">
	<div class="ow_ipc_picture">
        <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['avatar'])) {?>
            <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['data']->value['avatar']),$_smarty_tpl);?>

        <?php } else { ?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['imageSrc'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['imageTitle'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['imageTitle'];?>
" />
    	<?php }?>
    </div>
	<div class="ow_ipc_info">
		<?php if (isset($_smarty_tpl->tpl_vars['data']->value['infoString'])) {?><div class="ow_ipc_header"><?php echo $_smarty_tpl->tpl_vars['data']->value['infoString'];?>
</div><?php }?>
		<div class="ow_ipc_content"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</div>
		<?php if (isset($_smarty_tpl->tpl_vars['data']->value['toolbar']) && $_smarty_tpl->tpl_vars['data']->value['toolbar']) {?>
      		<div class="clearfix">
      		<div class="ow_ipc_toolbar ow_remark">
      		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['toolbar'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_toolbar_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_toolbar']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_toolbar'] : false;
$__foreach_toolbar_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_toolbar'] = new Smarty_Variable(array());
$__foreach_toolbar_0_first = true;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_toolbar']->value['first'] = $__foreach_toolbar_0_first;
$__foreach_toolbar_0_first = false;
$__foreach_toolbar_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_toolbar']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_toolbar']->value['first'] : null) && (empty($_smarty_tpl->tpl_vars['item']->value['class']) || (!strstr($_smarty_tpl->tpl_vars['item']->value['class'],'ow_ipc_date')))) {?> <span class="ow_delimiter">&middot;</span> <?php }?>
      		    <span class="ow_nowrap<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];
}?>">
      		    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])) {?><a <?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php }?>
      		    <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

      		    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])) {?></a><?php }?>
      		    </span>
      		<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_toolbar_0_saved_local_item;
}
if ($__foreach_toolbar_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_toolbar'] = $__foreach_toolbar_0_saved;
}
if ($__foreach_toolbar_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_toolbar_0_saved_item;
}
?>
      		</div>
      		</div>
        <?php }?>
   </div>
</div><?php }
}
