<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:36:59
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/tag_cloud.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe90db046338_71394638',
  'file_dependency' => 
  array (
    'c9591b16cb8845307c6471c211596e2837d2634d' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/tag_cloud.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe90db046338_71394638 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'base+tags_cloud_cap_label','iconClass'=>'ow_ic_tag')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'base+tags_cloud_cap_label','iconClass'=>'ow_ic_tag'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_tags_cont">
<?php
$_from = $_smarty_tpl->tpl_vars['tags']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tag_0_saved_item = isset($_smarty_tpl->tpl_vars['tag']) ? $_smarty_tpl->tpl_vars['tag'] : false;
$_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tag']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
$__foreach_tag_0_saved_local_item = $_smarty_tpl->tpl_vars['tag'];
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['tag']->value['url'];?>
" style="font-size:<?php echo $_smarty_tpl->tpl_vars['tag']->value['size'];?>
px;line-height:<?php echo $_smarty_tpl->tpl_vars['tag']->value['lineHeight'];?>
px;"><?php echo $_smarty_tpl->tpl_vars['tag']->value['label'];?>
</a>
<?php
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_0_saved_local_item;
}
if ($__foreach_tag_0_saved_item) {
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_0_saved_item;
}
?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'base+tags_cloud_cap_label','iconClass'=>'ow_ic_tag'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
