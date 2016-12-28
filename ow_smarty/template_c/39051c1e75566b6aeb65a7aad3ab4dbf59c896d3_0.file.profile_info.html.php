<?php
/* Smarty version 3.1.29, created on 2016-10-12 18:32:51
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/profile_info.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe65b3928df9_87441538',
  'file_dependency' => 
  array (
    '39051c1e75566b6aeb65a7aad3ab4dbf59c896d3' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/profile_info.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe65b3928df9_87441538 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="<?php if ($_smarty_tpl->tpl_vars['displaySections']->value) {?>owm_profile_info_all<?php } else { ?>owm_profile_info<?php }?> owm_std_margin_bottom">
    <table <?php if ($_smarty_tpl->tpl_vars['displaySections']->value) {?>class="owm_tab_info"<?php }?>>
        <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['questionArray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_questions_0_saved_item = isset($_smarty_tpl->tpl_vars['questions']) ? $_smarty_tpl->tpl_vars['questions'] : false;
$__foreach_questions_0_saved_key = isset($_smarty_tpl->tpl_vars['section']) ? $_smarty_tpl->tpl_vars['section'] : false;
$_smarty_tpl->tpl_vars['questions'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['questions']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['questions']->value) {
$_smarty_tpl->tpl_vars['questions']->_loop = true;
$__foreach_questions_0_saved_local_item = $_smarty_tpl->tpl_vars['questions'];
?>
                <?php if ($_smarty_tpl->tpl_vars['displaySections']->value) {?>
                    <tr>
                        <th colspan="2" class="ow_section">
                            <span><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);?>
</span>
                        </th>
                    </tr>
                <?php }?>
                    
                <?php
$_from = $_smarty_tpl->tpl_vars['questions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_question_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question'] : false;
$__foreach_question_1_saved_item = isset($_smarty_tpl->tpl_vars['question']) ? $_smarty_tpl->tpl_vars['question'] : false;
$__foreach_question_1_saved_key = isset($_smarty_tpl->tpl_vars['sort']) ? $_smarty_tpl->tpl_vars['sort'] : false;
$__foreach_question_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['question'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_question'] = new Smarty_Variable(array());
$_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable();
$__foreach_question_1_first = true;
$__foreach_question_1_iteration=0;
$_smarty_tpl->tpl_vars['question']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sort']->value => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
$__foreach_question_1_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['first'] = $__foreach_question_1_first;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] = $__foreach_question_1_iteration == $__foreach_question_1_total;
$__foreach_question_1_first = false;
$__foreach_question_1_saved_local_item = $_smarty_tpl->tpl_vars['question'];
?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['questionData']->value[$_smarty_tpl->tpl_vars['question']->value['name']])) {?>
                        <tr <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['first'] : null)) {?>class="own_tr_first"<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] : null)) {?>class="owm_tr_last"<?php }?>>
                            <td class="owm_td_label owm_remark">
                                <?php if (empty($_smarty_tpl->tpl_vars['questionLabelList']->value[$_smarty_tpl->tpl_vars['question']->value['name']])) {?>
                                    <?php echo smarty_function_text(array('key'=>"base+questions_question_".((string)$_smarty_tpl->tpl_vars['question']->value['name'])."_label"),$_smarty_tpl);?>
:
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['questionLabelList']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>
:
                                <?php }?>
                            </td>
                            <td class="owm_td_value">
                                <span class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['hidden'])) {?>ow_field_eye ow_remark profile_hidden_field<?php }?>">
                                    <?php echo $_smarty_tpl->tpl_vars['questionData']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>

                                </span>
                            </td>
                        </tr>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_1_saved_local_item;
}
if ($__foreach_question_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_question'] = $__foreach_question_1_saved;
}
if ($__foreach_question_1_saved_item) {
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_1_saved_item;
}
if ($__foreach_question_1_saved_key) {
$_smarty_tpl->tpl_vars['sort'] = $__foreach_question_1_saved_key;
}
?>
            <?php
$_smarty_tpl->tpl_vars['questions'] = $__foreach_questions_0_saved_local_item;
}
if ($__foreach_questions_0_saved_item) {
$_smarty_tpl->tpl_vars['questions'] = $__foreach_questions_0_saved_item;
}
if ($__foreach_questions_0_saved_key) {
$_smarty_tpl->tpl_vars['section'] = $__foreach_questions_0_saved_key;
}
?>
        </tbody>
    </table>
</div><?php }
}
