<?php
/* Smarty version 3.1.29, created on 2016-10-13 10:37:19
  from "/home/dancemee/public_html/ow_plugins/mailbox/views/components/console_message_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff47bf2e0669_05596399',
  'file_dependency' => 
  array (
    'abe7a4ae4addd5f7facf7f2b895b8f027ee6fee2' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/mailbox/views/components/console_message_item.html',
      1 => 1475654726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff47bf2e0669_05596399 ($_smarty_tpl) {
?>
<div class="clearfix console_list_ipc_item ow_cursor_pointer <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'mail') {?>console_item_with_url<?php }?> <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'chat') {?>consoleChatItem<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" data-convid="<?php echo $_smarty_tpl->tpl_vars['convId']->value;?>
" data-opponentid="<?php echo $_smarty_tpl->tpl_vars['opponentId']->value;?>
" id="mailboxConsoleMessageItem<?php echo $_smarty_tpl->tpl_vars['convId']->value;?>
">
    <div class="ow_avatar">
        <img src="<?php echo $_smarty_tpl->tpl_vars['avatarUrl']->value;?>
">
    </div>
    <div class="ow_console_invt_cont ow_console_invt_no_img">
        <div class="ow_console_invt_txt"><div class="ow_console_mailbox_cont" target="_blank">
            <div class="ow_console_mailbox_title"><?php echo $_smarty_tpl->tpl_vars['displayName']->value;
if ($_smarty_tpl->tpl_vars['unreadMessageCount']->value > 0) {?> (<?php echo $_smarty_tpl->tpl_vars['unreadMessageCount']->value;?>
)<?php }?> <div id="conversationLastMessageDate" class="ow_mailbox_convers_info_date"><?php echo $_smarty_tpl->tpl_vars['dateLabel']->value;?>
</div></div>
            <div class="ow_console_mailbox_txt ow_remark">
                <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

            </div>
        </div></div>
        <div class="ow_console_invt_toolbar">
        </div>
    </div>
</div><?php }
}
