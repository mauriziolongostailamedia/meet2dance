<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:22:58
  from "/home/dancemee/public_html/ow_system_plugins/base/views/controllers/base_document_page404.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe8d92006d91_48988155',
  'file_dependency' => 
  array (
    'bcc8f6aa9cb284e4581465b4e6a136b4fbb468fc' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/controllers/base_document_page404.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe8d92006d91_48988155 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!empty($_smarty_tpl->tpl_vars['base404RedirectMessage']->value)) {
echo $_smarty_tpl->tpl_vars['base404RedirectMessage']->value;
} else {
echo smarty_function_text(array('key'=>'base+base_document_404'),$_smarty_tpl);
}
}
}
