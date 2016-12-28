<?php
/* Smarty version 3.1.29, created on 2016-10-12 22:01:41
  from "/home/dancemee/public_html/ow_system_plugins/base/views/controllers/authorization_failed.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe96a566d6c6_23721996',
  'file_dependency' => 
  array (
    'eb10c98809febd2906996c578f7ab34b2ccd4a54' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/controllers/authorization_failed.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe96a566d6c6_23721996 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_anno ow_std_margin ow_nocontent"><?php if (empty($_smarty_tpl->tpl_vars['message']->value)) {?> <?php echo smarty_function_text(array('key'=>'base+authorization_failed_feedback'),$_smarty_tpl);?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 <?php }?></div><?php }
}
