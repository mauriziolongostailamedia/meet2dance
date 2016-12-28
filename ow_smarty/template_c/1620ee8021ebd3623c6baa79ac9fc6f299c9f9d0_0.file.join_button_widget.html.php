<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:34:42
  from "/home/dancemee/public_html/ow_plugins/groups/views/components/join_button_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe90529e04a5_86394821',
  'file_dependency' => 
  array (
    '1620ee8021ebd3623c6baa79ac9fc6f299c9f9d0' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/groups/views/components/join_button_widget.html',
      1 => 1476259984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe90529e04a5_86394821 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_highbox ow_center">
    <h3>
        <a href="<?php echo $_smarty_tpl->tpl_vars['actionUrl']->value;?>
" >
           <?php echo smarty_function_text(array('key'=>'groups+widget_join_button'),$_smarty_tpl);?>

        </a>
    </h3>
</div><?php }
}
