<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:23:46
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/drag_and_drop_item_customize.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf3122afab3_27302358',
  'file_dependency' => 
  array (
    '27631ab09cc82928de8827d86af633326082d594' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/drag_and_drop_item_customize.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf3122afab3_27302358 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
?>
<div <?php if (!empty($_smarty_tpl->tpl_vars['box']->value['avaliable_sections'])) {?>ow_avaliable_sections="<?php echo $_smarty_tpl->tpl_vars['box']->value['avaliable_sections'];?>
"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['box']->value['clone']) {?>clone<?php }
if ($_smarty_tpl->tpl_vars['box']->value['freeze']) {?> ow_dnd_freezed<?php }?> access_<?php echo $_smarty_tpl->tpl_vars['box']->value['access'];?>
 clearfix component" id="<?php echo $_smarty_tpl->tpl_vars['box']->value['uniqName'];?>
">
    <div class="schem_component dd_handle" <?php if ($_smarty_tpl->tpl_vars['render']->value) {?> style="display: none" <?php }?>>
        <div class="ow_dnd_schem_item schem_component <?php echo $_smarty_tpl->tpl_vars['box']->value['icon'];?>
" >
            <span class="ow_label dd_title">
                <?php echo $_smarty_tpl->tpl_vars['box']->value['title'];?>

            </span>
            <span class="action" style="display: none">
                
                <a class="ow_ic_gear_wheel dd_edit" href="javascript://;" title="<?php echo smarty_function_text(array('key'=>"base+widgets_action_edit"),$_smarty_tpl);?>
">&nbsp;</a>
                <a class="ow_ic_delete close dd_delete" href="javascript://;" title="<?php echo smarty_function_text(array('key'=>"base+widgets_action_delete"),$_smarty_tpl);?>
">&nbsp;</a>
                
            </span>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['render']->value) {?>
        <div class="view_component ow_dnd_widget ow_dnd_widget_customize <?php echo $_smarty_tpl->tpl_vars['box']->value['uniqName'];?>
">
            <?php $_smarty_tpl->_cache['capture_stack'][] = array("boxCap", null, null); ob_start(); ?>
                <?php if (!$_smarty_tpl->tpl_vars['box']->value['freeze']) {?>
                    <div class="ow_box_icons actions">
                        <a href="javascript://;" class="ow_ic_gear_wheel control dd_edit">&nbsp;</a>
                        <a href="javascript://;" class="ow_ic_delete control dd_delete">&nbsp;</a>
                    </div>
                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'capAddClass'=>"ow_dnd_configurable_component dd_handle clearfix",'capContent'=>(isset($_smarty_tpl->_cache['__smarty_capture']['boxCap']) ? $_smarty_tpl->_cache['__smarty_capture']['boxCap'] : null),'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>"ow_stdmargin clearfix",'toolbar'=>$_smarty_tpl->tpl_vars['box']->value['toolbar'])); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'capAddClass'=>"ow_dnd_configurable_component dd_handle clearfix",'capContent'=>(isset($_smarty_tpl->_cache['__smarty_capture']['boxCap']) ? $_smarty_tpl->_cache['__smarty_capture']['boxCap'] : null),'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>"ow_stdmargin clearfix",'toolbar'=>$_smarty_tpl->tpl_vars['box']->value['toolbar']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'capAddClass'=>"ow_dnd_configurable_component dd_handle clearfix",'capContent'=>(isset($_smarty_tpl->_cache['__smarty_capture']['boxCap']) ? $_smarty_tpl->_cache['__smarty_capture']['boxCap'] : null),'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>"ow_stdmargin clearfix",'toolbar'=>$_smarty_tpl->tpl_vars['box']->value['toolbar']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

        </div>
    <?php }?>

</div><?php }
}
