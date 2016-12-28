<?php
/* Smarty version 3.1.29, created on 2016-10-12 19:30:20
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/decorators/box.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe732c196df5_89584215',
  'file_dependency' => 
  array (
    '2d0676b904d51988a608356b176c2e83620e7e6d' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/decorators/box.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe732c196df5_89584215 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
?>
<div class="owm_box<?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];?>
">
    <?php if ($_smarty_tpl->tpl_vars['data']->value['capEnabled']) {?>
        <div class="owm_box_cap<?php echo $_smarty_tpl->tpl_vars['data']->value['capAddClass'];?>
 clearfix">
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])) {?><h3 class="<?php echo $_smarty_tpl->tpl_vars['data']->value['iconClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
</h3><?php }
echo $_smarty_tpl->tpl_vars['data']->value['capContent'];?>

        </div>
    <?php }?>
    <div class="owm_box_body">
        <div class="owm_box_body_cont clearfix">
            <div class="owm_box_padding">
                <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

            </div>
        </div>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['toolbar'])) {?>
        <div class="owm_box_bottom">
            <?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['data']->value['toolbar']),$_smarty_tpl);?>

        </div>
    <?php }?>
</div><?php }
}
