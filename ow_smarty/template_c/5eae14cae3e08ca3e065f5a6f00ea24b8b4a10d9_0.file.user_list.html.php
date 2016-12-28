<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:24:17
  from "/home/dancemee/public_html/ow_plugins/hint/views/components/user_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf331118667_55446915',
  'file_dependency' => 
  array (
    '5eae14cae3e08ca3e065f5a6f00ea24b8b4a10d9' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/hint/views/components/user_list.html',
      1 => 1476209468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf331118667_55446915 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>




<div class="hint-user-list" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <?php
$_from = $_smarty_tpl->tpl_vars['avatars']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_0_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_0_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['src'];?>
" /></a>
    <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_local_item;
}
if ($__foreach_user_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_item;
}
?>
    <?php if ($_smarty_tpl->tpl_vars['viewAll']->value) {?>
        <a href="javascript://" class="hint-view-all ow_border" title="<?php echo smarty_function_text(array('key'=>"hint+view_all_users_title"),$_smarty_tpl);?>
"></a>
    <?php }?>
</div><?php }
}
