<?php
/* Smarty version 3.1.29, created on 2016-10-12 17:54:35
  from "/home/dancemee/public_html/ow_plugins/newsfeed/mobile/views/components/feed_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe5cbb8569d9_99371356',
  'file_dependency' => 
  array (
    '4c31d96ef27ce7765b78df89d71cecfb0344e980' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/newsfeed/mobile/views/components/feed_list.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe5cbb8569d9_99371356 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div <?php if (count($_smarty_tpl->tpl_vars['feed']->value)) {?>style="display: none;"<?php }?> class="owm_newsfeed_nocontent owm_nocontent"><?php echo smarty_function_text(array('key'=>"newsfeed+empty_feed_message"),$_smarty_tpl);?>
</div>

<?php
$_from = $_smarty_tpl->tpl_vars['feed']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_feed_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_feed']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_feed'] : false;
$__foreach_feed_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_feed_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_feed'] = new Smarty_Variable(array());
$__foreach_feed_0_iteration=0;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_feed_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_feed']->value['last'] = $__foreach_feed_0_iteration == $__foreach_feed_0_total;
$__foreach_feed_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['newsfeed_item'][0][0]->tplRenderItem(array('action'=>$_smarty_tpl->tpl_vars['item']->value,'lastItem'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_feed']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_feed']->value['last'] : null)),$_smarty_tpl);?>

<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_feed_0_saved_local_item;
}
if ($__foreach_feed_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_feed'] = $__foreach_feed_0_saved;
}
if ($__foreach_feed_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_feed_0_saved_item;
}
}
}
