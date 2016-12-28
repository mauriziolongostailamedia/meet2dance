<?php
/* Smarty version 3.1.29, created on 2016-10-20 20:18:58
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/controllers/user_list_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58090a9232db77_78869459',
  'file_dependency' => 
  array (
    '55e29708d59fea901fc172deb5c8946fc78c3ddf' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/controllers/user_list_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58090a9232db77_78869459 ($_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
if (isset($_smarty_tpl->tpl_vars['menu']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
	
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['listType']->value)) {
echo smarty_function_add_content(array('key'=>"base.mobile.user_list_top",'listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);
}?>

<div class="owm_user_list owm_content_list owm_std_margin_bottom">
    <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    <div class="owm_user_list_preloader owm_preloader" style="visibility: hidden"></div>
</div>
<?php }
}
