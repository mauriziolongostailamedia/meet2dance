<?php
/* Smarty version 3.1.29, created on 2016-10-13 10:34:03
  from "/home/dancemee/public_html/ow_plugins/notifications/views/components/notification_txt.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff46fbef2d82_38405270',
  'file_dependency' => 
  array (
    '4f7a2843980cd84cc4d093333bbb79a762b7799d' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/notifications/views/components/notification_txt.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff46fbef2d82_38405270 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_modifier_simple_date')) require_once '/home/dancemee/public_html/ow_smarty/plugin/modifier.simple_date.php';
echo smarty_function_text(array('key'=>"notifications+email_txt_head",'userName'=>$_smarty_tpl->tpl_vars['userName']->value),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['nl']->value;
echo $_smarty_tpl->tpl_vars['nl']->value;
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_section_0_saved_item = isset($_smarty_tpl->tpl_vars['section']) ? $_smarty_tpl->tpl_vars['section'] : false;
$__foreach_section_0_saved_key = isset($_smarty_tpl->tpl_vars['time']) ? $_smarty_tpl->tpl_vars['time'] : false;
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['time'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['section']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['time']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
$__foreach_section_0_saved_local_item = $_smarty_tpl->tpl_vars['section'];
echo $_smarty_tpl->tpl_vars['nl']->value;
echo smarty_modifier_simple_date($_smarty_tpl->tpl_vars['time']->value,$_smarty_tpl->tpl_vars['time']->value,true);
echo $_smarty_tpl->tpl_vars['nl']->value;
echo $_smarty_tpl->tpl_vars['nl']->value;
$_from = $_smarty_tpl->tpl_vars['section']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
echo $_smarty_tpl->tpl_vars['tab']->value;?>
 <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['string']);?>
: <?php echo $_smarty_tpl->tpl_vars['space']->value;
echo $_smarty_tpl->tpl_vars['space']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
 <?php echo $_smarty_tpl->tpl_vars['nl']->value;
if ($_smarty_tpl->tpl_vars['item']->value['content']) {
echo $_smarty_tpl->tpl_vars['tab']->value;
echo $_smarty_tpl->tpl_vars['tab']->value;?>
 <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['content']);
echo $_smarty_tpl->tpl_vars['nl']->value;
echo $_smarty_tpl->tpl_vars['nl']->value;
}
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_0_saved_local_item;
}
if ($__foreach_section_0_saved_item) {
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_0_saved_item;
}
if ($__foreach_section_0_saved_key) {
$_smarty_tpl->tpl_vars['time'] = $__foreach_section_0_saved_key;
}
echo smarty_function_text(array('key'=>"notifications+email_txt_bottom"),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['nl']->value;
echo $_smarty_tpl->tpl_vars['nl']->value;
if ($_smarty_tpl->tpl_vars['single']->value) {
echo smarty_function_text(array('key'=>"notifications+unsubscribe_one_label"),$_smarty_tpl);?>
:<?php echo $_smarty_tpl->tpl_vars['space']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['unsubscribeUrl']->value;
echo $_smarty_tpl->tpl_vars['nl']->value;
}
echo smarty_function_text(array('key'=>"notifications+settings_edit_label"),$_smarty_tpl);?>
:<?php echo $_smarty_tpl->tpl_vars['space']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['settingsUrl']->value;
echo $_smarty_tpl->tpl_vars['nl']->value;
echo smarty_function_text(array('key'=>"notifications+unsubscribe_all_label"),$_smarty_tpl);?>
:<?php echo $_smarty_tpl->tpl_vars['space']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['unsubscribeAllUrl']->value;
}
}
