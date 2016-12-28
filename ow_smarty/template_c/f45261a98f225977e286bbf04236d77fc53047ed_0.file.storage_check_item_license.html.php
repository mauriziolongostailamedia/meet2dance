<?php
/* Smarty version 3.1.29, created on 2016-10-14 19:30:13
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/storage_check_item_license.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58011625435d07_43091148',
  'file_dependency' => 
  array (
    'f45261a98f225977e286bbf04236d77fc53047ed' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/storage_check_item_license.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58011625435d07_43091148 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
?>
<div class="ow_wide ow_automargin">
    <?php if (empty($_smarty_tpl->tpl_vars['message']->value)) {?>    
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+item_license_request_box_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+item_license_request_box_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div style="text-align:center;">
            <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

            <br /><br />
            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'license-key')); $_block_repeat=true; echo smarty_block_form(array('name'=>'license-key'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_label(array('name'=>'key'),$_smarty_tpl);?>
&nbsp;&nbsp;<?php echo smarty_function_input(array('name'=>'key','style'=>'width:160px;'),$_smarty_tpl);?>
<br /><br />
            <?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['backButton']->value)) {
echo smarty_function_submit(array('name'=>'button'),$_smarty_tpl);
}?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'license-key'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+item_license_request_box_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    <?php }?>
</div><?php }
}
