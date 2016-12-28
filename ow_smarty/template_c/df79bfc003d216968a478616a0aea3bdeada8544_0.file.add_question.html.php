<?php
/* Smarty version 3.1.29, created on 2016-10-14 09:15:04
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/components/add_question.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580085f863d5a1_77184040',
  'file_dependency' => 
  array (
    'df79bfc003d216968a478616a0aea3bdeada8544' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/components/add_question.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580085f863d5a1_77184040 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    span.tag {
        background: url("images/tag_bg.png") repeat-x scroll 0 0 #F8F8F8;
        border: 1px solid #DCDCDC;
        border-radius: 2px 2px 2px 2px;
        float: left;
        line-height: 22px;
        margin-bottom: 3px;
        margin-right: 4px;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>



<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'qst_add_form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'qst_add_form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<table class="ow_table_1 ow_form ow_admin_add_profile_question">
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
$__foreach_f_0_first = true;
$__foreach_f_0_iteration=0;
$_smarty_tpl->tpl_vars['field']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['formEl']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
$__foreach_f_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['first'] = $__foreach_f_0_first;
$_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['last'] = $__foreach_f_0_iteration == $__foreach_f_0_total;
$__foreach_f_0_first = false;
$__foreach_f_0_saved_local_item = $_smarty_tpl->tpl_vars['field'];
?>
                    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 tr_<?php echo $_smarty_tpl->tpl_vars['formEl']->value;?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['first'] : null)) {?>ow_tr_first<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['last'] : null)) {?>ow_tr_last<?php }?> <?php if (empty($_smarty_tpl->tpl_vars['displayedFormElements']->value[$_smarty_tpl->tpl_vars['formEl']->value])) {?>ow_hidden<?php }?>">
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
    <div class="clearfix ow_stdmargin">
        <div class="ow_right">
             <?php echo smarty_function_submit(array('name'=>'qst_submit'),$_smarty_tpl);?>

        </div>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'qst_add_form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
