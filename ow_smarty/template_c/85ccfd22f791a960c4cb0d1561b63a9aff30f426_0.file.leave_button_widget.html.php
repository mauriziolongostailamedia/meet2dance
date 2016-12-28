<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:34:51
  from "/home/dancemee/public_html/ow_plugins/groups/views/components/leave_button_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe905b60e444_28955821',
  'file_dependency' => 
  array (
    '85ccfd22f791a960c4cb0d1561b63a9aff30f426' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/groups/views/components/leave_button_widget.html',
      1 => 1476259984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe905b60e444_28955821 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_center">
    <h3>
        <a href="<?php echo $_smarty_tpl->tpl_vars['actionUrl']->value;?>
" >
           <?php echo smarty_function_text(array('key'=>'groups+widget_leave_button'),$_smarty_tpl);?>

        </a>
    </h3>
</div><?php }
}
