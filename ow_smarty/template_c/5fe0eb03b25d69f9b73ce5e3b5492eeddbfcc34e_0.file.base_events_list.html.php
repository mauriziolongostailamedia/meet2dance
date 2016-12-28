<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:24:47
  from "/home/dancemee/public_html/ow_plugins/event/views/controllers/base_events_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf34f1adbb9_54821848',
  'file_dependency' => 
  array (
    '5fe0eb03b25d69f9b73ce5e3b5492eeddbfcc34e' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/event/views/controllers/base_events_list.html',
      1 => 1476171742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf34f1adbb9_54821848 ($_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>

<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'event.add_content.list.top','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div>

<?php if (empty($_smarty_tpl->tpl_vars['noButton']->value)) {?><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add add_event_button','langLabel'=>'event+add_new_button_label'),$_smarty_tpl);?>
</div><?php }
if (!empty($_smarty_tpl->tpl_vars['contentMenu']->value)) {
echo $_smarty_tpl->tpl_vars['contentMenu']->value;
}?>

<?php echo smarty_function_add_content(array('key'=>'event.content.list.after_menu','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>


<div class="ow_event_list clearfix">
    <div class="ow_automargin ow_superwide">
      <?php if (!empty($_smarty_tpl->tpl_vars['no_events']->value)) {?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"event+no_events_label"),$_smarty_tpl);?>
</div>
      <?php } else { ?>
          <?php
$_from = $_smarty_tpl->tpl_vars['events']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_event_0_saved_item = isset($_smarty_tpl->tpl_vars['event']) ? $_smarty_tpl->tpl_vars['event'] : false;
$__foreach_event_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['event'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['event']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['event']->value) {
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
if ($__foreach_event_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_event_0_saved_key;
}
?>
          <br />
          <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

      <?php }?>
    </div>
</div>

<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'event.add_content.list.bottom','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div><?php }
}
