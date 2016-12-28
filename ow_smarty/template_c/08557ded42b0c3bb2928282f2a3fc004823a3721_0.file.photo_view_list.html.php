<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:24:30
  from "/home/dancemee/public_html/ow_plugins/photo/views/controllers/photo_view_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf33e8b8150_80830022',
  'file_dependency' => 
  array (
    '08557ded42b0c3bb2928282f2a3fc004823a3721' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/photo/views/controllers/photo_view_list.html',
      1 => 1475654740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf33e8b8150_80830022 ($_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_component')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.component.php';
?>


<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'photo.add_content.list.top','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['pageHead']->value;?>


<?php echo smarty_function_component(array('class'=>"PHOTO_CMP_PhotoList",'type'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>

<?php }
}
