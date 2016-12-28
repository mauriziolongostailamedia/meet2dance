<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:23:28
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/settings_page.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf30097bbc4_15357584',
  'file_dependency' => 
  array (
    '8d54827cca6c9783b2a8c5956e1f977ac0858b54' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/settings_page.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf30097bbc4_15357584 ($_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'page_settings')); $_block_repeat=true; echo smarty_block_form(array('name'=>'page_settings'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1 ow_form">
   <tr class="ow_alt2 ow_tr_first">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'head_code'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'head_code'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'head_code'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small">
            <?php echo smarty_function_desc(array('name'=>'head_code'),$_smarty_tpl);?>

        </td>
    </tr>
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'bottom_code'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'bottom_code'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'bottom_code'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small">
            <?php echo smarty_function_desc(array('name'=>'bottom_code'),$_smarty_tpl);?>

        </td>
    </tr>
    <tr class="ow_alt2 ow_tr_last">
        <td class="ow_label"><label><?php echo smarty_function_label(array('name'=>'favicon'),$_smarty_tpl);?>
 <?php echo smarty_function_input(array('name'=>'enable_favicon'),$_smarty_tpl);?>
</label></td>
        <td class="ow_value">
            <div id="favicon_desabled"<?php if (!empty($_smarty_tpl->tpl_vars['faviconEnabled']->value)) {?> style="display:none;"<?php }?>><?php echo smarty_function_text(array('key'=>'admin+page_settings_no_favicon_label'),$_smarty_tpl);?>
</div>
            <div id="favicon_enabled"<?php if (empty($_smarty_tpl->tpl_vars['faviconEnabled']->value)) {?> style="display:none;"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['faviconSrc']->value;?>
" /> <?php echo smarty_function_input(array('name'=>'favicon'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'favicon'),$_smarty_tpl);?>
</div>
        </td>
        <td class="ow_desc ow_small">
            <?php echo smarty_function_desc(array('name'=>'favicon'),$_smarty_tpl);?>

        </td>
    </tr>
</table>
<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'page_settings'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
