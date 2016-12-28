<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:16:09
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/base_dashboard.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe7de948e102_39946494',
  'file_dependency' => 
  array (
    '3450007a85ea1d96312a568e1d7254df15bacc34' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/base_dashboard.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe7de948e102_39946494 ($_smarty_tpl) {
?>
<div class="ow_stdmargin">
    <iframe class="ow_full" src="<?php echo $_smarty_tpl->tpl_vars['adminDashboardIframeUrl']->value;?>
" style="border: 0pt none ; width: 100%; height: 250px;" frameborder="0"></iframe>
</div>
<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;
}
}
