<?php
/* Smarty version 3.1.29, created on 2016-10-14 20:09:58
  from "/home/dancemee/public_html/ow_plugins/video/views/controllers/admin_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58011f76cf0781_04246831',
  'file_dependency' => 
  array (
    'ea1f6773b1a15829270a242df64fecee116f1617' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/video/views/controllers/admin_index.html',
      1 => 1475654753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58011f76cf0781_04246831 ($_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'configSaveForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'configSaveForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<table class="ow_table_1 ow_form ow_stdmargin">
    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_monitor"><?php echo smarty_function_text(array('key'=>'video+view_settings'),$_smarty_tpl);?>
</span>
        </th>
    </tr>
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'video+player_size'),$_smarty_tpl);?>
</td>
        <td class="ow_value">
            <?php echo smarty_function_input(array('name'=>'playerWidth','class'=>'ow_settings_input'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'playerWidth'),$_smarty_tpl);?>
 x
            <?php echo smarty_function_input(array('name'=>'playerHeight','class'=>'ow_settings_input'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'playerHeight'),$_smarty_tpl);?>

        </td>
        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'video+size_desc'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="ow_alt2 ow_tr_last">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'perPage'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'perPage','class'=>'ow_settings_input'),$_smarty_tpl);?>
 <br /><?php echo smarty_function_error(array('name'=>'perPage'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'video+per_page_desc'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="ow_tr_delimiter"><td></td>
    </tr>
    
    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_lock"><?php echo smarty_function_text(array('key'=>'video+quotas'),$_smarty_tpl);?>
</span>
        </th>
    </tr>
    <tr class="ow_alt1 ow_tr_last">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'quota'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'quota','class'=>'ow_settings_input'),$_smarty_tpl);?>
 <br /><?php echo smarty_function_error(array('name'=>'quota'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'video+quota_desc'),$_smarty_tpl);?>
</td>
    </tr>
</table>
<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'configSaveForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
