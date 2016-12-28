<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:35:10
  from "/home/dancemee/public_html/ow_plugins/groups/views/controllers/groups_user_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe906ea8da01_36182054',
  'file_dependency' => 
  array (
    'a82eba582ce6ffe3949f87d3b45b9d4df71baa6d' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/groups/views/controllers/groups_user_list.html',
      1 => 1476259984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe906ea8da01_36182054 ($_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
?>
<div class="ow_stdmargin">
    <?php echo $_smarty_tpl->tpl_vars['groupBriefInfo']->value;?>

</div>

<?php echo smarty_function_add_content(array('key'=>'groups.content.user_list.after_cap','groupId'=>$_smarty_tpl->tpl_vars['groupId']->value),$_smarty_tpl);?>


<?php echo $_smarty_tpl->tpl_vars['listCmp']->value;?>


<?php echo smarty_function_add_content(array('key'=>'groups.content.user_list.bottom','groupId'=>$_smarty_tpl->tpl_vars['groupId']->value),$_smarty_tpl);
}
}
