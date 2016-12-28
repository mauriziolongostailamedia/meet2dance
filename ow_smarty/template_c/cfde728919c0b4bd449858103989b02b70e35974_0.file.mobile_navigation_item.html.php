<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:44:49
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/components/mobile_navigation_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe84a1033d22_54502688',
  'file_dependency' => 
  array (
    'cfde728919c0b4bd449858103989b02b70e35974' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/components/mobile_navigation_item.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe84a1033d22_54502688 ($_smarty_tpl) {
?>
<div class="clearfix component <?php if (isset($_smarty_tpl->tpl_vars['item']->value['custom']) && $_smarty_tpl->tpl_vars['item']->value['custom']) {?>dnd-item-custom<?php }?>" data-key="<?php echo $_smarty_tpl->tpl_vars['item']->value['key'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['item']->value['type'])) {?>data-type=<?php echo $_smarty_tpl->tpl_vars['item']->value['type'];
}?> <?php if (isset($_smarty_tpl->tpl_vars['item']->value['custom'])) {?>data-custom=<?php echo $_smarty_tpl->tpl_vars['item']->value['custom'];
}?> <?php if (isset($_smarty_tpl->tpl_vars['item']->value['data'])) {?>data-data="<?php echo $_smarty_tpl->tpl_vars['item']->value['data'];?>
"<?php }?>>
    <div class="schem_component dd_handle">
        <div class="ow_dnd_schem_item schem_component">
            <span class="ow_label dnd-title">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

            </span>
            <span class="action dnd-actions">
                <a class="ow_ic_gear_wheel dnd-control dd_edit" href="javascript://;" data-action="edit">&nbsp;</a>
                <a class="ow_ic_delete close dnd-control dd_delete" href="javascript://;" data-action="delete">&nbsp;</a>
            </span>
        </div>
    </div>
</div><?php }
}
