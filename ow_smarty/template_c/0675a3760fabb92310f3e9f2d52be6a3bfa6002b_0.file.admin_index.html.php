<?php
/* Smarty version 3.1.29, created on 2016-10-20 09:32:10
  from "/home/dancemee/public_html/ow_plugins/mailbox/views/controllers/admin_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580872fa0a75a9_82562165',
  'file_dependency' => 
  array (
    '0675a3760fabb92310f3e9f2d52be6a3bfa6002b' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/mailbox/views/controllers/admin_index.html',
      1 => 1475654726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580872fa0a75a9_82562165 ($_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'configSaveForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'configSaveForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<table class="ow_table_1 ow_form">
    <tbody><tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_gear_wheel"><?php echo smarty_function_text(array('key'=>'mailbox+general_settings'),$_smarty_tpl);?>
</span>
        </th>
    </tr>

    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>"active_mode_list"),$_smarty_tpl);?>
</td>
        <td class="ow_value">
            <?php echo smarty_function_input(array('name'=>"active_mode_list"),$_smarty_tpl);?>

        </td>
        <td class="ow_desc ow_small"></td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['mailModeEnabled']->value) {?>
    <tr class="ow_alt2">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>"send_message_interval"),$_smarty_tpl);?>
</td>
        <td class="ow_value">
            <?php echo smarty_function_input(array('name'=>"send_message_interval",'style'=>"width: 40px"),$_smarty_tpl);?>
 <?php echo smarty_function_text(array('key'=>'mailbox+settings_label_send_message_interval_seconds'),$_smarty_tpl);?>

        </td>
        <td>
            &nbsp;
        </td>
    </tr>
    <?php }?>

    
    </tbody></table>
<div class="clearfix ow_submit ow_smallmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'configSaveForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
