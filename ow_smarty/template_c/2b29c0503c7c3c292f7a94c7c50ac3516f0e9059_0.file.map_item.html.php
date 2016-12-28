<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:34:42
  from "/home/dancemee/public_html/ow_plugins/google_map_location/views/components/map_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe82423660d3_05449415',
  'file_dependency' => 
  array (
    '2b29c0503c7c3c292f7a94c7c50ac3516f0e9059' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/google_map_location/views/components/map_item.html',
      1 => 1475826391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe82423660d3_05449415 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
?>
<div class="ow_googlemap_item clearfix">
    <div class="ow_user_list_picture">
        <?php echo smarty_function_decorator(array('name'=>"avatar_item",'class'=>"ow_left",'data'=>$_smarty_tpl->tpl_vars['avatar']->value),$_smarty_tpl);?>

    </div>
    <div class="ow_user_list_data ow_small">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
</div>
<?php }
}
