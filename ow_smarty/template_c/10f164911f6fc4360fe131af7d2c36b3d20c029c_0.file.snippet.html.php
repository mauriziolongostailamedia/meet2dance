<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:32
  from "/home/dancemee/public_html/ow_plugins/snippets/views/components/snippet.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf124c316c0_48542468',
  'file_dependency' => 
  array (
    '10f164911f6fc4360fe131af7d2c36b3d20c029c' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/snippets/views/components/snippet.html',
      1 => 1475840807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf124c316c0_48542468 ($_smarty_tpl) {
?>
<div class="s-snippet ow_border ow_bg_color clearfix s-snippet-<?php echo $_smarty_tpl->tpl_vars['displayType']->value;?>
">
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="s-snippet-overlay">
        <div class="s-snippet-label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</div>        
    </a>
    
    <?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_images_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_images']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_images'] : false;
$__foreach_images_0_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_images'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_images']->value['iteration']++;
$__foreach_images_0_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
        <div style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
)" class="s-snippet-image ow_border s-snippet-image-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_images']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_images']->value['iteration'] : null);?>
"></div>
    <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_images_0_saved_local_item;
}
if ($__foreach_images_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_images'] = $__foreach_images_0_saved;
}
if ($__foreach_images_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_images_0_saved_item;
}
?>
</div><?php }
}
