<?php
/* Smarty version 3.1.29, created on 2016-10-13 10:38:27
  from "/home/dancemee/public_html/ow_plugins/mailbox/views/controllers/messages_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff48039b5541_50627707',
  'file_dependency' => 
  array (
    'b4a904e0174c3f2f2fd927df69e3fad6bdcd3475' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/mailbox/views/controllers/messages_index.html',
      1 => 1475654726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff48039b5541_50627707 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if ($_smarty_tpl->tpl_vars['mailModeEnabled']->value && $_smarty_tpl->tpl_vars['isAuthorizedSendMessage']->value) {?>
<div class="ow_content_menu_wrap clearfix">
    <div class="ow_right">
        <?php echo smarty_function_decorator(array('name'=>"button",'type'=>"button",'class'=>"ow_ic_add",'id'=>"newMessageBtn",'langLabel'=>'mailbox+label_btn_new_message'),$_smarty_tpl);?>

    </div>
</div>
<?php }?>
<div class="ow_mailbox_table ow_alt1 clearfix <?php if (!$_smarty_tpl->tpl_vars['mailModeEnabled']->value || !$_smarty_tpl->tpl_vars['chatModeEnabled']->value) {?>ow_mailbox_table_single<?php }?>" id="messagesContainerControl">
    <?php echo $_smarty_tpl->tpl_vars['conversationList']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['conversationContainer']->value;?>

</div><?php }
}
