<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:33
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/context_action.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf125268828_02684376',
  'file_dependency' => 
  array (
    'aa02d8f46348dce9cd1c3bed6b77fb4f00576831' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/context_action.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf125268828_02684376 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
?>
<div class="ow_context_action_block clearfix <?php if (!empty($_smarty_tpl->tpl_vars['class']->value)) {
echo $_smarty_tpl->tpl_vars['class']->value;
}?>">
    <?php
$_from = $_smarty_tpl->tpl_vars['actions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_a_0_saved_item = isset($_smarty_tpl->tpl_vars['a']) ? $_smarty_tpl->tpl_vars['a'] : false;
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$__foreach_a_0_saved_local_item = $_smarty_tpl->tpl_vars['a'];
?>
        <div class="ow_context_action">
			<?php if ($_smarty_tpl->tpl_vars['a']->value['action']->getLabel()) {?>
			<a href="<?php if ($_smarty_tpl->tpl_vars['a']->value['action']->getUrl() != null) {
echo $_smarty_tpl->tpl_vars['a']->value['action']->getUrl();
} else { ?>javascript://<?php }?>"<?php if ($_smarty_tpl->tpl_vars['a']->value['action']->getId() != null) {?> id="<?php echo $_smarty_tpl->tpl_vars['a']->value['action']->getId();?>
"<?php }
if ($_smarty_tpl->tpl_vars['a']->value['action']->getAttributes()) {
$_from = $_smarty_tpl->tpl_vars['a']->value['action']->getAttributes();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_attr_1_saved_item = isset($_smarty_tpl->tpl_vars['attr']) ? $_smarty_tpl->tpl_vars['attr'] : false;
$__foreach_attr_1_saved_key = isset($_smarty_tpl->tpl_vars['aname']) ? $_smarty_tpl->tpl_vars['aname'] : false;
$_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['aname'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['attr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['aname']->value => $_smarty_tpl->tpl_vars['attr']->value) {
$_smarty_tpl->tpl_vars['attr']->_loop = true;
$__foreach_attr_1_saved_local_item = $_smarty_tpl->tpl_vars['attr'];
?> <?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
"<?php
$_smarty_tpl->tpl_vars['attr'] = $__foreach_attr_1_saved_local_item;
}
if ($__foreach_attr_1_saved_item) {
$_smarty_tpl->tpl_vars['attr'] = $__foreach_attr_1_saved_item;
}
if ($__foreach_attr_1_saved_key) {
$_smarty_tpl->tpl_vars['aname'] = $__foreach_attr_1_saved_key;
}
}?>class="ow_context_action_value<?php if ($_smarty_tpl->tpl_vars['a']->value['action']->getClass() != null) {?> <?php echo $_smarty_tpl->tpl_vars['a']->value['action']->getClass();
}?>"><?php echo $_smarty_tpl->tpl_vars['a']->value['action']->getLabel();?>
</a><?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['a']->value['subactions'])) {?>
			<span class="ow_context_more"></span>

			<!-- div class="ow_context_action_wrap" -->
			    <?php $_smarty_tpl->_cache['capture_stack'][] = array('default', 'tooltipClass', null); ob_start();
if ($_smarty_tpl->tpl_vars['a']->value['action']->getClass() != null) {
echo $_smarty_tpl->tpl_vars['a']->value['action']->getClass();?>
_tooltip<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			    
				<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'tooltip','addClass'=>((string)$_smarty_tpl->tpl_vars['tooltipClass']->value)." ow_small ".((string)$_smarty_tpl->tpl_vars['position']->value))); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'tooltip','addClass'=>((string)$_smarty_tpl->tpl_vars['tooltipClass']->value)." ow_small ".((string)$_smarty_tpl->tpl_vars['position']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<ul class="ow_context_action_list ow_border">
				<?php
$_from = $_smarty_tpl->tpl_vars['a']->value['subactions'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_subact_2_saved_item = isset($_smarty_tpl->tpl_vars['subact']) ? $_smarty_tpl->tpl_vars['subact'] : false;
$_smarty_tpl->tpl_vars['subact'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['subact']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['subact']->value) {
$_smarty_tpl->tpl_vars['subact']->_loop = true;
$__foreach_subact_2_saved_local_item = $_smarty_tpl->tpl_vars['subact'];
?>
					<li><a href="<?php if ($_smarty_tpl->tpl_vars['subact']->value->getUrl() != null) {
echo $_smarty_tpl->tpl_vars['subact']->value->getUrl();
} else { ?>javascript://<?php }?>"<?php if ($_smarty_tpl->tpl_vars['subact']->value->getId() != null) {?> id="<?php echo $_smarty_tpl->tpl_vars['subact']->value->getId();?>
"<?php }
if ($_smarty_tpl->tpl_vars['subact']->value->getClass() != null) {?> class="<?php echo $_smarty_tpl->tpl_vars['subact']->value->getClass();?>
"<?php }
if ($_smarty_tpl->tpl_vars['subact']->value->getAttributes()) {
$_from = $_smarty_tpl->tpl_vars['subact']->value->getAttributes();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sattr_3_saved_item = isset($_smarty_tpl->tpl_vars['sattr']) ? $_smarty_tpl->tpl_vars['sattr'] : false;
$__foreach_sattr_3_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['sattr'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['sattr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['sattr']->value) {
$_smarty_tpl->tpl_vars['sattr']->_loop = true;
$__foreach_sattr_3_saved_local_item = $_smarty_tpl->tpl_vars['sattr'];
?> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['sattr']->value;?>
"<?php
$_smarty_tpl->tpl_vars['sattr'] = $__foreach_sattr_3_saved_local_item;
}
if ($__foreach_sattr_3_saved_item) {
$_smarty_tpl->tpl_vars['sattr'] = $__foreach_sattr_3_saved_item;
}
if ($__foreach_sattr_3_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_sattr_3_saved_key;
}
}?>><?php echo $_smarty_tpl->tpl_vars['subact']->value->getLabel();?>
</a></li>
				<?php
$_smarty_tpl->tpl_vars['subact'] = $__foreach_subact_2_saved_local_item;
}
if ($__foreach_subact_2_saved_item) {
$_smarty_tpl->tpl_vars['subact'] = $__foreach_subact_2_saved_item;
}
?>
				</ul>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'tooltip','addClass'=>((string)$_smarty_tpl->tpl_vars['tooltipClass']->value)." ow_small ".((string)$_smarty_tpl->tpl_vars['position']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

			<!-- /div -->
			<?php }?>
        </div>
    <?php
$_smarty_tpl->tpl_vars['a'] = $__foreach_a_0_saved_local_item;
}
if ($__foreach_a_0_saved_item) {
$_smarty_tpl->tpl_vars['a'] = $__foreach_a_0_saved_item;
}
?>
</div><?php }
}
