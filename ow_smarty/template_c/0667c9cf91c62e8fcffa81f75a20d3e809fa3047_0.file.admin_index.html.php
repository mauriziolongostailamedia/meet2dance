<?php
/* Smarty version 3.1.29, created on 2016-10-15 11:09:06
  from "/home/dancemee/public_html/ow_plugins/google_map_location/views/controllers/admin_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5801f232a971e6_53668877',
  'file_dependency' => 
  array (
    '0667c9cf91c62e8fcffa81f75a20d3e809fa3047' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/google_map_location/views/controllers/admin_index.html',
      1 => 1475826391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5801f232a971e6_53668877 ($_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    
      $(function(){
            $("form[name='configSaveForm'] select[name='map_provider']").change(
               function(){ this.form.submit(); }
            );
       });
   
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'configSaveForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'configSaveForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<table class="ow_table_1 ow_form">
    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_gear_wheel"><?php echo smarty_function_text(array('key'=>'googlelocation+general_settings'),$_smarty_tpl);?>
</span>
        </th>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['elements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_element_0_saved_item = isset($_smarty_tpl->tpl_vars['element']) ? $_smarty_tpl->tpl_vars['element'] : false;
$_smarty_tpl->tpl_vars['element'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['element']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
$__foreach_element_0_saved_local_item = $_smarty_tpl->tpl_vars['element'];
?>
        <tr class="ow_alt1">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['element']->value),$_smarty_tpl);?>
</td>
            <td class="ow_value">
                <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['element']->value),$_smarty_tpl);?>
  <br /> <?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['element']->value),$_smarty_tpl);?>

            </td>
            <td class="ow_desc ow_small"><?php echo smarty_function_desc(array('name'=>$_smarty_tpl->tpl_vars['element']->value),$_smarty_tpl);?>
</td>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['element'] = $__foreach_element_0_saved_local_item;
}
if ($__foreach_element_0_saved_item) {
$_smarty_tpl->tpl_vars['element'] = $__foreach_element_0_saved_item;
}
?>
</table>
<div class="clearfix ow_submit ow_smallmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'configSaveForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
