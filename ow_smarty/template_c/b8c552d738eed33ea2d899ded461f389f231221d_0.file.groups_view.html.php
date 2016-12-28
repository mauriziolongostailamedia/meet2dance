<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:26:38
  from "/home/dancemee/public_html/ow_plugins/groups/views/controllers/groups_view.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe805e39af79_49436837',
  'file_dependency' => 
  array (
    'b8c552d738eed33ea2d899ded461f389f231221d' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/groups/views/controllers/groups_view.html',
      1 => 1476259984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe805e39af79_49436837 ($_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)) {?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

    </div>
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }
}
}
