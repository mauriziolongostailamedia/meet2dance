<?php
/* Smarty version 3.1.29, created on 2016-10-16 12:32:00
  from "/home/dancemee/public_html/ow_plugins/contact_importer/views/controllers/admin_facebook.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58035720a6a0b4_00247444',
  'file_dependency' => 
  array (
    '9346ecb61acdb2f1473479a31308cbd5eac287c8' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/contact_importer/views/controllers/admin_facebook.html',
      1 => 1469551372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58035720a6a0b4_00247444 ($_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>"fasebook_settings")); $_block_repeat=true; echo smarty_block_form(array('name'=>"fasebook_settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_1 ow_form">
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_script"><?php echo smarty_function_text(array('key'=>'contactimporter+facebook_app_settings'),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>"appId"),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>"appId"),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>"appId"),$_smarty_tpl);?>
</td>
            <td class="ow_desc"><a href="<?php echo $_smarty_tpl->tpl_vars['manualUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>"contactimporter+facebook_how_to_config"),$_smarty_tpl);?>
</a></td>
        </tr>

        <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 ow_tr_last">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>"appSecret"),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>"appSecret"),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>"appSecret"),$_smarty_tpl);?>
</td>
            <td class="ow_desc"></td>
        </tr>

    </table>
    <div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_positive ow_ic_save'),$_smarty_tpl);?>
</div><div class="ow_right"></div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"fasebook_settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
