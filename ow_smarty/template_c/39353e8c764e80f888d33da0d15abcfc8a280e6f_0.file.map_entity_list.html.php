<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:26:38
  from "/home/dancemee/public_html/ow_plugins/google_map_location/views/components/map_entity_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe805e1d9147_23869363',
  'file_dependency' => 
  array (
    '39353e8c764e80f888d33da0d15abcfc8a280e6f' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/google_map_location/views/components/map_entity_list.html',
      1 => 1475826391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe805e1d9147_23869363 ($_smarty_tpl) {
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
