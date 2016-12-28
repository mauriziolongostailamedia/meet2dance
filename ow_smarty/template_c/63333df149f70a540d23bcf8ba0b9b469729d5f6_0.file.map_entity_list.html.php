<?php
/* Smarty version 3.1.29, created on 2016-10-20 20:19:02
  from "/home/dancemee/public_html/ow_plugins/google_map_location/mobile/views/components/map_entity_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58090a963b0e61_64589106',
  'file_dependency' => 
  array (
    '63333df149f70a540d23bcf8ba0b9b469729d5f6' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/google_map_location/mobile/views/components/map_entity_list.html',
      1 => 1475826391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58090a963b0e61_64589106 ($_smarty_tpl) {
?>
<div class="ow_googlemap_item_list">
<?php echo $_smarty_tpl->tpl_vars['entityList']->value;?>

<?php if ($_smarty_tpl->tpl_vars['displayViewAllButton']->value) {?>
<a style='float:right' href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['viewAllLabel']->value;?>
</a>
<?php }?>
</div>
<?php }
}
