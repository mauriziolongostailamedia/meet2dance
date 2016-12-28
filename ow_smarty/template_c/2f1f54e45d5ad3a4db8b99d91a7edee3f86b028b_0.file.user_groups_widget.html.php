<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:32
  from "/home/dancemee/public_html/ow_plugins/groups/views/components/user_groups_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf124ebfd04_99595737',
  'file_dependency' => 
  array (
    '2f1f54e45d5ad3a4db8b99d91a7edee3f86b028b' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/groups/views/components/user_groups_widget.html',
      1 => 1476259984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf124ebfd04_99595737 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_lp_avatars">
        <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="ow_lp_wrapper" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="45" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" />
            </a>
        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
            <div class="ow_nocontent">
                <?php echo smarty_function_text(array('key'=>'groups+user_groups_widget_empty'),$_smarty_tpl);?>

            </div>
        <?php
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
</div>
<?php }
}
