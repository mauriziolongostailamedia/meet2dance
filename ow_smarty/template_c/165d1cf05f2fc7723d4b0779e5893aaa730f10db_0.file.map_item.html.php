<?php
/* Smarty version 3.1.29, created on 2016-10-20 20:19:02
  from "/home/dancemee/public_html/ow_plugins/google_map_location/mobile/views/components/map_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58090a9648d7d6_04102150',
  'file_dependency' => 
  array (
    '165d1cf05f2fc7723d4b0779e5893aaa730f10db' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/google_map_location/mobile/views/components/map_item.html',
      1 => 1475826391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58090a9648d7d6_04102150 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
?>
<div class="owm_user_list_item clearfix">
    <div class="ow_user_list_picture owm_float_left">
        <?php echo smarty_function_decorator(array('name'=>"avatar_item",'class'=>"ow_left",'data'=>$_smarty_tpl->tpl_vars['avatar']->value),$_smarty_tpl);?>

    </div>
    <div class="ow_user_list_data owm_user_list_info">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
</div>
<?php }
}
