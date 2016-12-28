<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:16:47
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/components/edit_question.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe7e0fdc57c6_34078962',
  'file_dependency' => 
  array (
    'af3d8c8499c3f756360d5152198b352f9324a849' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/components/edit_question.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe7e0fdc57c6_34078962 ($_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'qst_edit_form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'qst_edit_form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<table class="ow_table_1 ow_form ow_admin_edit_profile_question">

         <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 tr_qst_name ow_tr_first">
		        <td class="ow_label">
                     <?php echo smarty_function_text(array('key'=>"admin+questions_question_name_label"),$_smarty_tpl);?>

		        </td>
		        <td class="ow_value">
                     <a href="javascript://" class="question_label"><?php echo $_smarty_tpl->tpl_vars['questionLabel']->value;?>
</a>
		        </td>
		        <td class="ow_desc ow_small">
		        </td>
		 </tr>
         <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 tr_qst_name">
		        <td class="ow_label">
                    <?php echo smarty_function_text(array('key'=>"admin+questions_edit_question_description_label"),$_smarty_tpl);?>

		        </td>
		        <td class="ow_value">
                    <a href="javascript://"  class="question_description" ><?php echo $_smarty_tpl->tpl_vars['questionDescription']->value;?>
</a>
		        </td>
		        <td class="ow_desc ow_small">
		        </td>
		 </tr>

		<?php
$_from = $_smarty_tpl->tpl_vars['formData']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_f_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_f']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f'] : false;
$__foreach_f_0_saved_item = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field'] : false;
$__foreach_f_0_saved_key = isset($_smarty_tpl->tpl_vars['formEl']) ? $_smarty_tpl->tpl_vars['formEl'] : false;
$__foreach_f_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['field'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_f'] = new Smarty_Variable(array());
$_smarty_tpl->tpl_vars['formEl'] = new Smarty_Variable();
$__foreach_f_0_iteration=0;
$_smarty_tpl->tpl_vars['field']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['formEl']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
$__foreach_f_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['last'] = $__foreach_f_0_iteration == $__foreach_f_0_total;
$__foreach_f_0_saved_local_item = $_smarty_tpl->tpl_vars['field'];
?>
		    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 tr_<?php echo $_smarty_tpl->tpl_vars['formEl']->value;?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['last'] : null)) {?>ow_tr_last<?php }?>">
		        <td class="ow_label">
		            <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>

		        </td>
		        <td class="ow_value">
                <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>

                <br/>
                <?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>

		        </td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_desc(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>
</td>
		    </tr>
        <?php
$_smarty_tpl->tpl_vars['field'] = $__foreach_f_0_saved_local_item;
}
if ($__foreach_f_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_f'] = $__foreach_f_0_saved;
}
if ($__foreach_f_0_saved_item) {
$_smarty_tpl->tpl_vars['field'] = $__foreach_f_0_saved_item;
}
if ($__foreach_f_0_saved_key) {
$_smarty_tpl->tpl_vars['formEl'] = $__foreach_f_0_saved_key;
}
?>
		</table>
    <div class="clearfix ow_stdmargin ow_submit"><div class="ow_right">
    <?php echo smarty_function_submit(array('name'=>'qst_submit'),$_smarty_tpl);?>

    </div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'qst_edit_form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
