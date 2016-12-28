<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:29:10
  from "/home/dancemee/public_html/ow_plugins/photo/views/controllers/photo_user_photos.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe8f061c4dd9_14474303',
  'file_dependency' => 
  array (
    '72630ec52a156a0deaa0d93f8c0ab76fc35f6161' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/photo/views/controllers/photo_user_photos.html',
      1 => 1475654740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe8f061c4dd9_14474303 ($_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_component')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.component.php';
?>


<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'photo.add_content.list.top','listType'=>'userPhotos'),$_smarty_tpl);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['pageHead']->value;?>


<?php echo smarty_function_component(array('class'=>"PHOTO_CMP_PhotoList",'type'=>"userPhotos",'userId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>

<?php }
}
