<?php
/* Smarty version 3.1.29, created on 2016-10-14 03:49:24
  from "/home/dancemee/public_html/ow_plugins/video/views/controllers/video_view_user_video_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580039a4db6bb4_83587724',
  'file_dependency' => 
  array (
    'fa43ebbf2e55cc7eb342cbe18b653696a50e73b4' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/video/views/controllers/video_view_user_video_list.html',
      1 => 1475654753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580039a4db6bb4_83587724 ($_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_user_link')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.user_link.php';
if (!is_callable('smarty_function_component')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.component.php';
?>
<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'video.add_content.list.top','listType'=>'user'),$_smarty_tpl);?>
</div>

<div class="ow_video_infobar ow_alt2">
    <span class="ow_txt_value"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span> <?php echo smarty_function_text(array('key'=>'video+video_by'),$_smarty_tpl);?>
 <?php echo smarty_function_user_link(array('id'=>$_smarty_tpl->tpl_vars['userId']->value,'name'=>$_smarty_tpl->tpl_vars['userName']->value),$_smarty_tpl);?>

</div>

<?php echo smarty_function_add_content(array('key'=>'video.content.list.after_menu','listType'=>'user'),$_smarty_tpl);?>


<?php echo smarty_function_component(array('class'=>'VIDEO_CMP_VideoList','type'=>'','count'=>5,'tag'=>'','userId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>


<?php echo smarty_function_add_content(array('key'=>'video.content.list.bottom','listType'=>'user'),$_smarty_tpl);
}
}
