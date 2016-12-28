<?php
/* Smarty version 3.1.29, created on 2016-10-12 18:32:51
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/profile_content_menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe65b396eac6_27252818',
  'file_dependency' => 
  array (
    'ca0d6b6ee828f1be62d02574fa807dc2619576c8' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/profile_content_menu.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe65b396eac6_27252818 ($_smarty_tpl) {
?>
<div class="owm_profile_nav">
    <ul class="owm_profile_nav_list clearfix">
        <?php
$_from = $_smarty_tpl->tpl_vars['actions']->value;
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
            <li>
                <a <?php echo $_smarty_tpl->tpl_vars['action']->value['attrs'];?>
>
                    <span class="owm_profile_nav_img<?php if (!empty($_smarty_tpl->tpl_vars['action']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['action']->value['class'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['action']->value['img'])) {?> style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['action']->value['img'];?>
)"<?php }?>></span>
                    <span class="owm_profile_nav_txt"><?php echo $_smarty_tpl->tpl_vars['action']->value['label'];?>
</span>
                </a>
            </li>
        <?php
$_smarty_tpl->tpl_vars['action'] = $__foreach_action_0_saved_local_item;
}
if ($__foreach_action_0_saved_item) {
$_smarty_tpl->tpl_vars['action'] = $__foreach_action_0_saved_item;
}
?>
    </ul>
</div><?php }
}
