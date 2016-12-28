<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:26:38
  from "/home/dancemee/public_html/ow_plugins/groups/views/components/user_list_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe805e14bda3_40251085',
  'file_dependency' => 
  array (
    '0fb3b33e19240f25265bbd033efb889a9bfe1b93' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/groups/views/components/user_list_widget.html',
      1 => 1476259984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe805e14bda3_40251085 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_lp_avatars">
        <?php
$_from = $_smarty_tpl->tpl_vars['userIdList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_id_0_saved_item = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->_loop = true;
$__foreach_id_0_saved_local_item = $_smarty_tpl->tpl_vars['id'];
?>
            <?php echo smarty_function_decorator(array('name'=>"avatar_item",'data'=>$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['id']->value]),$_smarty_tpl);?>

        <?php
$_smarty_tpl->tpl_vars['id'] = $__foreach_id_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['id']->_loop) {
?>
            <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'groups+user_list_widget_empty'),$_smarty_tpl);?>
</div>
        <?php
}
if ($__foreach_id_0_saved_item) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_id_0_saved_item;
}
?>
</div>
<?php }
}
