<?php
/* Smarty version 3.1.29, created on 2016-10-14 20:06:41
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/ajax_file_upload_button.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58011eb16bb014_55429301',
  'file_dependency' => 
  array (
    '02bb96759b52ec4fb1ef7c01a0e45df270db401b' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/ajax_file_upload_button.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58011eb16bb014_55429301 ($_smarty_tpl) {
?>
<span class="ow_button" style="float: right;">
    <span class=" ow_ic_add">
        <input type="button" value="Upload photos" id="add-new-photo-album" class="ow_ic_add" onclick="javascript: <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
();" />
    </span>
</span><?php }
}
