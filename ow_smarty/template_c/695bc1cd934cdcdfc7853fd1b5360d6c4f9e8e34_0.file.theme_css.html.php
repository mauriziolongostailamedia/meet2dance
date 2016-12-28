<?php
/* Smarty version 3.1.29, created on 2016-10-14 19:33:42
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/theme_css.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580116f6256bd2_13373706',
  'file_dependency' => 
  array (
    '695bc1cd934cdcdfc7853fd1b5360d6c4f9e8e34' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/theme_css.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580116f6256bd2_13373706 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


textarea.edit_css{
    height:400px;
}
.css_code pre{
	padding:10px;
	height:400px;
	overflow:scroll;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'admin+theme_css_existing_css_box_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'admin+theme_css_existing_css_box_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="css_code"><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'admin+theme_css_existing_css_box_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','style'=>'text-align:center;','iconClass'=>"ow_ic_write",'langLabel'=>'admin+theme_css_edit_css_box_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','style'=>'text-align:center;','iconClass'=>"ow_ic_write",'langLabel'=>'admin+theme_css_edit_css_box_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'add-css')); $_block_repeat=true; echo smarty_block_form(array('name'=>'add-css'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo smarty_function_input(array('name'=>'css','class'=>'edit_css'),$_smarty_tpl);?>

<div class="clearfix ow_smallmargin">
<div class="ow_right" style="padding-top: 20px;padding-left: 10px; padding-right: 15px;">
<?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive'),$_smarty_tpl);?>

</div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'add-css'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','style'=>'text-align:center;','iconClass'=>"ow_ic_write",'langLabel'=>'admin+theme_css_edit_css_box_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php }
}
