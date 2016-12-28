<?php
/* Smarty version 3.1.29, created on 2016-10-16 11:38:44
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/storage_ftp_attrs.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58034aa4cf6783_47917712',
  'file_dependency' => 
  array (
    '100a897c9defcfa65a2cb9e0a1e042be8b943df7' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/storage_ftp_attrs.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58034aa4cf6783_47917712 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_active_plugins tr, .ow_inactive_plugins tr{
    border-top:1px solid #ccc;
}
.ow_plugin_controls{
    display:none;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<div class="ow_narrow ow_automargin" >
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_ftp_box_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_ftp_box_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'ftp')); $_block_repeat=true; echo smarty_block_form(array('name'=>'ftp'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_form ow_smallmargin">
       <tr>
           <td class="ow_label"><?php echo smarty_function_label(array('name'=>'host'),$_smarty_tpl);?>
</td>
           <td class="ow_input"><?php echo smarty_function_input(array('name'=>'host'),$_smarty_tpl);?>
</td>
       </tr>
       <tr>
           <td class="ow_label"><?php echo smarty_function_label(array('name'=>'login'),$_smarty_tpl);?>
</td>
           <td class="ow_input"><?php echo smarty_function_input(array('name'=>'login'),$_smarty_tpl);?>
</td>
       </tr>
       <tr>
           <td class="ow_label"><?php echo smarty_function_label(array('name'=>'password'),$_smarty_tpl);?>
</td>
           <td class="ow_input"><?php echo smarty_function_input(array('name'=>'password'),$_smarty_tpl);?>
</td>
       </tr>
       <tr>
           <td class="ow_label"><?php echo smarty_function_label(array('name'=>'port'),$_smarty_tpl);?>
</td>
           <td class="ow_input"><?php echo smarty_function_input(array('name'=>'port'),$_smarty_tpl);?>
</td>
       </tr>
   </table>
   <div class="clearfix"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'ftp'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_ftp_box_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

</div><?php }
}
