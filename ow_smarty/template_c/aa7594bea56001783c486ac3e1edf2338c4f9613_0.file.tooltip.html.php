<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:14:10
  from "/home/dancemee/public_html/ow_system_plugins/base/decorators/tooltip.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf0d21257d3_72036162',
  'file_dependency' => 
  array (
    'aa7594bea56001783c486ac3e1edf2338c4f9613' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/decorators/tooltip.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf0d21257d3_72036162 ($_smarty_tpl) {
?>

<div class="ow_tooltip <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];
}?>">
    <div class="ow_tooltip_tail">
        <span></span>
    </div>
    <div class="ow_tooltip_body">
        <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

    </div>
</div><?php }
}
