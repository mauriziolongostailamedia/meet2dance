<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:16:09
  from "/home/dancemee/public_html/ow_system_plugins/base/decorators/button_list_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe7de93997f7_76706856',
  'file_dependency' => 
  array (
    '66b5fe15cd0e998fad6dae9465d14de534f3713b' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/decorators/button_list_item.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe7de93997f7_76706856 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>

<span class="ow_blitem<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];
}?>"><span><input type="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['type']) && $_smarty_tpl->tpl_vars['data']->value['type'] == 'submit') {?>submit<?php } else { ?>button<?php }?>"  value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['langLabel'])) {
echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['data']->value['langLabel']),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['data']->value['label'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['buttonName'])) {?> name="<?php echo $_smarty_tpl->tpl_vars['data']->value['buttonName'];?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['extraString'])) {
echo $_smarty_tpl->tpl_vars['data']->value['extraString'];
}?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['onclick'])) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['data']->value['onclick'];?>
"<?php }?> /></span></span><?php }
}
