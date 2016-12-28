<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:32
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/user_view_section_table.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf124f315c7_72005356',
  'file_dependency' => 
  array (
    'a5801f3b5c908697f1d0c641baee64f80f37fbaa' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/user_view_section_table.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf124f315c7_72005356 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<table class="ow_table_3 ow_nomargin section_<?php echo $_smarty_tpl->tpl_vars['sectionName']->value;?>
 data_table" <?php if (empty($_smarty_tpl->tpl_vars['display']->value)) {?>style="display:none;"<?php }?>>
    <tr class="ow_tr_first">
        <tr class="ow_tr_first">
            <th colspan="2" class="ow_section"><span><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['sectionName']->value)."_label"),$_smarty_tpl);?>
</span></th>
        </tr>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['questions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_question_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question'] : false;
$__foreach_question_0_saved_item = isset($_smarty_tpl->tpl_vars['question']) ? $_smarty_tpl->tpl_vars['question'] : false;
$__foreach_question_0_saved_key = isset($_smarty_tpl->tpl_vars['sort']) ? $_smarty_tpl->tpl_vars['sort'] : false;
$__foreach_question_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['question'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_question'] = new Smarty_Variable(array());
$_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable();
$__foreach_question_0_iteration=0;
$_smarty_tpl->tpl_vars['question']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sort']->value => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
$__foreach_question_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] = $__foreach_question_0_iteration == $__foreach_question_0_total;
$__foreach_question_0_saved_local_item = $_smarty_tpl->tpl_vars['question'];
?>
        <?php if (isset($_smarty_tpl->tpl_vars['questionsData']->value[$_smarty_tpl->tpl_vars['question']->value['name']])) {?>
            <tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] : null)) {?>ow_tr_last<?php }?>">
                <td class="ow_label" style="width: 20%"><?php if (empty($_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['question']->value['name']])) {
echo smarty_function_text(array('key'=>"base+questions_question_".((string)$_smarty_tpl->tpl_vars['question']->value['name'])."_label"),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['question']->value['name']];
}?></td>
                <td class="ow_value"><span class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['hidden'])) {?>ow_field_eye ow_remark profile_hidden_field<?php }?>"><?php echo $_smarty_tpl->tpl_vars['questionsData']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>
</span></td>
            </tr>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_0_saved_local_item;
}
if ($__foreach_question_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_question'] = $__foreach_question_0_saved;
}
if ($__foreach_question_0_saved_item) {
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_0_saved_item;
}
if ($__foreach_question_0_saved_key) {
$_smarty_tpl->tpl_vars['sort'] = $__foreach_question_0_saved_key;
}
?>
</table>


<?php }
}
