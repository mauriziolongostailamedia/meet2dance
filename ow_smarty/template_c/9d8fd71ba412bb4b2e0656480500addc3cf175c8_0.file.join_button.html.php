<?php
/* Smarty version 3.1.29, created on 2016-10-12 17:54:35
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/join_button.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe5cbba656f4_76051752',
  'file_dependency' => 
  array (
    '9d8fd71ba412bb4b2e0656480500addc3cf175c8' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/join_button.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe5cbba656f4_76051752 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>

<div class="owm_join_form">
    <div class="clearfix">
        <div class="owm_join_txt owm_float_left"><?php echo smarty_function_text(array('key'=>"base+join_index_new_to_site"),$_smarty_tpl);?>
</div>
    </div>
    <div class="owm_btn_wide">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo smarty_function_text(array('key'=>"base+join_index_join_button"),$_smarty_tpl);?>
</a>
    </div>    

</div><?php }
}
