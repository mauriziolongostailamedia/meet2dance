<?php
/* Smarty version 3.1.29, created on 2016-10-12 22:50:15
  from "/home/dancemee/public_html/ow_plugins/slideshow/views/components/slide.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fea207827815_12275959',
  'file_dependency' => 
  array (
    'e829e92dd24fa5c73b982ad92c820e05d992c9fa' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/slideshow/views/components/slide.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fea207827815_12275959 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<tr rel="<?php echo $_smarty_tpl->tpl_vars['slide']->value['dto']->id;?>
">
<td class="slides_tbl_cell ow_alt<?php echo smarty_function_cycle(array('values'=>'2,1'),$_smarty_tpl);?>
">
    <div class="ow_right ow_tiny ow_slider_actions ow_txtright">
        <a href="javascript://" class="ow_lbutton action_edit_slide" rel="<?php echo $_smarty_tpl->tpl_vars['slide']->value['dto']->id;?>
"><?php echo smarty_function_text(array('key'=>'base+edit'),$_smarty_tpl);?>
</a>
        <a href="javascript://" class="ow_lbutton ow_red action_delete_slide" rel="<?php echo $_smarty_tpl->tpl_vars['slide']->value['dto']->id;?>
"><?php echo smarty_function_text(array('key'=>'base+delete'),$_smarty_tpl);?>
</a>
    </div>
    <div class="ow_left ow_slider_settings_image_preview"><img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['imageUrl'];?>
" /></div>
    <div class="ow_right ow_slider_settings_image_desc">
        <?php if ($_smarty_tpl->tpl_vars['slide']->value['dto']->label) {?><p><?php echo $_smarty_tpl->tpl_vars['slide']->value['dto']->label;?>
</p><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['slide']->value['dto']->url) {?>
            <div class="ow_small"><a class="ow_remark" href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['dto']->url;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['slide']->value['dto']->url;?>
</a></div>
        <?php }?>
    </div>
</td>
</tr><?php }
}
