<?php
/* Smarty version 3.1.29, created on 2016-10-13 09:25:59
  from "/home/dancemee/public_html/ow_plugins/event/views/components/profile_page_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff3707df6202_77240519',
  'file_dependency' => 
  array (
    'ed206d4e5aec4b7c09be80d3e299ac2b4b317eae' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/event/views/components/profile_page_widget.html',
      1 => 1476171742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff3707df6202_77240519 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (empty($_smarty_tpl->tpl_vars['my_events']->value)) {?>
<div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"event+no_events_label"),$_smarty_tpl);?>
</div>
<?php } else {
$_from = $_smarty_tpl->tpl_vars['my_events']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_event_0_saved_item = isset($_smarty_tpl->tpl_vars['event']) ? $_smarty_tpl->tpl_vars['event'] : false;
$_smarty_tpl->tpl_vars['event'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['event']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
$__foreach_event_0_saved_local_item = $_smarty_tpl->tpl_vars['event'];
?>
    <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','data'=>$_smarty_tpl->tpl_vars['event']->value,'infoString'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['event']->value['eventUrl'])."\">".((string)$_smarty_tpl->tpl_vars['event']->value['title'])."</a>"),$_smarty_tpl);?>

<?php
$_smarty_tpl->tpl_vars['event'] = $__foreach_event_0_saved_local_item;
}
if ($__foreach_event_0_saved_item) {
$_smarty_tpl->tpl_vars['event'] = $__foreach_event_0_saved_item;
}
if (!empty($_smarty_tpl->tpl_vars['toolbars']->value)) {
echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value),$_smarty_tpl);
}
}
}
}
