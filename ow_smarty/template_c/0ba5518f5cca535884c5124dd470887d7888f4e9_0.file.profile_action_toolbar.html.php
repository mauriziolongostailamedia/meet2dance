<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:33
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/profile_action_toolbar.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf125636018_46935052',
  'file_dependency' => 
  array (
    '0ba5518f5cca535884c5124dd470887d7888f4e9' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/profile_action_toolbar.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf125636018_46935052 ($_smarty_tpl) {
?>
<div class="ow_profile_gallery_action_toolbar ow_profile_action_toolbar_wrap clearfix ow_stdmargin">
    <ul class="ow_bl ow_profile_action_toolbar clearfix ow_small ow_left">
        <?php
$_from = $_smarty_tpl->tpl_vars['toolbar']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_action_0_saved_item = isset($_smarty_tpl->tpl_vars['action']) ? $_smarty_tpl->tpl_vars['action'] : false;
$_smarty_tpl->tpl_vars['action'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['action']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
$__foreach_action_0_saved_local_item = $_smarty_tpl->tpl_vars['action'];
?>
            <?php if (isset($_smarty_tpl->tpl_vars['action']->value['html'])) {?>
                <?php echo $_smarty_tpl->tpl_vars['action']->value['html'];?>

            <?php } elseif (isset($_smarty_tpl->tpl_vars['action']->value['extraLabel'])) {?>
                <li>
                    <?php echo $_smarty_tpl->tpl_vars['action']->value['extraLabel'];?>

                </li>
            <?php } else { ?>
                <li>
                    <a <?php echo $_smarty_tpl->tpl_vars['action']->value['attrs'];?>
 >
                        <?php echo $_smarty_tpl->tpl_vars['action']->value['label'];?>

                    </a>
                </li>
            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['action'] = $__foreach_action_0_saved_local_item;
}
if ($__foreach_action_0_saved_item) {
$_smarty_tpl->tpl_vars['action'] = $__foreach_action_0_saved_item;
}
?>
    </ul>

    <?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_group_1_saved_item = isset($_smarty_tpl->tpl_vars['group']) ? $_smarty_tpl->tpl_vars['group'] : false;
$_smarty_tpl->tpl_vars['group'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
$__foreach_group_1_saved_local_item = $_smarty_tpl->tpl_vars['group'];
?>
        <?php echo $_smarty_tpl->tpl_vars['group']->value;?>

    <?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_1_saved_local_item;
}
if ($__foreach_group_1_saved_item) {
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_1_saved_item;
}
?>

    <?php echo $_smarty_tpl->tpl_vars['cmpsMarkup']->value;?>

</div>
<?php }
}
