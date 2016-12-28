<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:59:16
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/questions_pages.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe8804b2a8a5_57323777',
  'file_dependency' => 
  array (
    'd970036365b7c3a9e382972003e5ad6009f2ce18' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/questions_pages.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe8804b2a8a5_57323777 ($_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_url_for')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


window.editLangValue = function editLangValue(_prefix, _key, _callback){

    if ( !window.question_langs_floatbox_display )
    {
        window.question_langs_floatbox_display = true;
        $.post( '<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:ajaxEditLanguageValuesForm"),$_smarty_tpl);?>
?prefix='+_prefix+'&key='+_key, {}, function(json){
            if(document['ajaxLangValueEditForms'] == undefined)
                    {
                        document['ajaxLangValueEditForms'] = [];
                    }

            document['ajaxLangValueEditForms'][_prefix+'-'+_key] = new OW_FloatBox({$title: '<?php echo smarty_function_text(array('key'=>"admin+questions_edit_section_name_title"),$_smarty_tpl);?>
', $contents: json['markup'], width: 556});
                    document['ajaxLangValueEditForms'][_prefix+'-'+_key+'callback'] = _callback;

            document['ajaxLangValueEditForms'][_prefix+'-'+_key].bind("close", function() {
                window.question_langs_floatbox_display = false;
            });

            OW.addScriptFiles(json['include_js'], function(){ OW.addScript(json['js']); });

        }, 'json');
    }
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>




<div class="ow_admin_profile_questions_list_div">

    <table class="ow_table_2 ow_smallmargin ow_lables_table">
        <tr class="ow_tr_first">
            <th colspan="4" class="ow_tr_top_empty ow_txtleft">
                <?php echo smarty_function_text(array('key'=>"admin+questions_page_description"),$_smarty_tpl);?>

            </th>
            <th colspan="5" class="ow_tr_top">
                <div class="ow_tr_top_buttons">
                    <div class="ow_tr_top_button" onclick=' window.location.href="<?php echo $_smarty_tpl->tpl_vars['accountTypesUrl']->value;?>
"; '><div><?php echo smarty_function_text(array('key'=>'admin+question_menu_account_types'),$_smarty_tpl);?>
</div></div>
                    <div class="ow_tr_top_button ow_tr_top_button_selected"><div><?php echo smarty_function_text(array('key'=>'admin+question_menu_properties'),$_smarty_tpl);?>
</div></div>
                </div>
            </th>
        </tr>
        <tr class="ow_tr_last ow_tr_titles">
            <th class="question_label_th"   ><div class="question_label_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_question'),$_smarty_tpl);?>
</div></th>
            <th class="question_account_type_th"><div class="question_account_type_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_type'),$_smarty_tpl);?>
</div></th>
            <th class="question_values_th"><div class="question_values_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_values'),$_smarty_tpl);?>
</div></th>
            <th class="question_buttons_th" ><div class="question_buttons_div"></div></th>
            <th class="question_require_th ow_small ow_lightweigh" ><div class="question_require_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_require'),$_smarty_tpl);?>
</div></th>
            <th class="question_sign_up_th ow_small ow_lightweight"> <div class="question_sign_up_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_sign_up'),$_smarty_tpl);?>
</div></th>
            <th class="question_edit_th ow_small ow_lightweight" ><div class="question_edit_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_profile_edit'),$_smarty_tpl);?>
</div></th>
            <th class="question_view_th ow_small ow_lightweight" ><div class="question_view_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_view'),$_smarty_tpl);?>
</div></th>
            <th class="question_search_th ow_small ow_lightweight" ><div class="question_search_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_search'),$_smarty_tpl);?>
</div></th>
        </tr>
    </table>

    <?php
$_from = $_smarty_tpl->tpl_vars['questionsBySections']->value;
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
    <table class="ow_table_2 ow_smallmargin ow_admin_profile_questions_list <?php if (!$_smarty_tpl->tpl_vars['section']->value) {?>no_section<?php } else {
echo $_smarty_tpl->tpl_vars['section']->value;
}?> " sectionName=<?php if ($_smarty_tpl->tpl_vars['section']->value) {?>"<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
"<?php } else { ?>"no_section"<?php }?>>
        <tr class="question_section_tr ow_tr_first">
            <th class="section_value <?php if ($_smarty_tpl->tpl_vars['section']->value) {?>ow_admin_profile_question_dnd_cursor<?php }?>" colspan="9">
               <div class="ow_section_label" ><?php if ($_smarty_tpl->tpl_vars['section']->value) {
echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);
} else {
echo smarty_function_text(array('key'=>"base+questions_no_section_label"),$_smarty_tpl);
}?></div>

                   <div class="delete_edit_buttons quest_buttons ow_right">
                        <?php if ($_smarty_tpl->tpl_vars['section']->value) {?>
                            <a href="javascript://" class="ow_lbutton edit_sectionNameLang" style="visibility:hidden;" ><?php echo smarty_function_text(array('key'=>'admin+btn_label_edit'),$_smarty_tpl);?>
</a>
                            <?php if ($_smarty_tpl->tpl_vars['sectionList']->value[$_smarty_tpl->tpl_vars['section']->value]->isDeletable) {?>
                                <a href="javascript://" class="ow_lbutton ow_red section_delete_button"style="visibility:hidden;" ><?php echo smarty_function_text(array('key'=>'admin+btn_label_delete'),$_smarty_tpl);?>
</a>
                            <?php }?>
                        <?php }?>
                    </div>

            </th>
        </tr>
       <?php if (isset($_smarty_tpl->tpl_vars['questions']->value)) {?>
           <?php
$_from = $_smarty_tpl->tpl_vars['questions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_question_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question'] : false;
$__foreach_question_1_saved_item = isset($_smarty_tpl->tpl_vars['question']) ? $_smarty_tpl->tpl_vars['question'] : false;
$__foreach_question_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['question'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_question'] = new Smarty_Variable(array());
$__foreach_question_1_iteration=0;
$_smarty_tpl->tpl_vars['question']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
$__foreach_question_1_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] = $__foreach_question_1_iteration == $__foreach_question_1_total;
$__foreach_question_1_saved_local_item = $_smarty_tpl->tpl_vars['question'];
?>
                  <?php $_smarty_tpl->_cache['capture_stack'][] = array("evenstyle", null, null); ob_start();
echo smarty_function_cycle(array('name'=>"acc_".((string)$_smarty_tpl->tpl_vars['section']->value),'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                  <tr class="question_tr ow_admin_profile_question_dnd_cursor <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] : null)) {?>ow_tr_last<?php }?>" question_name="<?php echo $_smarty_tpl->tpl_vars['question']->value['name'];?>
">
                    <td class="question_label_td <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['evenstyle']) ? $_smarty_tpl->_cache['__smarty_capture']['evenstyle'] : null);?>
 ow_txtleft" >
                        <div class="question_label_div ow_overflow_hidden"  ><?php echo smarty_function_text(array('key'=>"base+questions_question_".((string)$_smarty_tpl->tpl_vars['question']->value['name'])."_label"),$_smarty_tpl);?>
</div>
                    </td>

                    <td class="question_account_type_td <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['evenstyle']) ? $_smarty_tpl->_cache['__smarty_capture']['evenstyle'] : null);?>
 ow_small" >
                        <div class="question_account_type_div ow_overflow_hidden" ><?php echo smarty_function_text(array('key'=>"base+questions_question_presentation_".((string)$_smarty_tpl->tpl_vars['question']->value['presentation'])."_label"),$_smarty_tpl);?>
</div>
                    </td>

                    <td class="question_values_td question_values_type_td <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['evenstyle']) ? $_smarty_tpl->_cache['__smarty_capture']['evenstyle'] : null);?>
 ow_small">
                        <?php if (!empty($_smarty_tpl->tpl_vars['previewValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']])) {?>
                            <div class="question_values_div"><?php echo $_smarty_tpl->tpl_vars['previewValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>
</div>                            
                        <?php } else { ?>
                            <?php if (isset($_smarty_tpl->tpl_vars['questionValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['values'])) {?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['question']->value['parentUrl'])) {?>
                                    <div class="question_values_div ow_overflow_hidden"><?php echo smarty_function_text(array('key'=>'admin+questions_matched_question_values','label'=>$_smarty_tpl->tpl_vars['question']->value['parentLabel'],'parentId'=>$_smarty_tpl->tpl_vars['question']->value['parentId'],'url'=>$_smarty_tpl->tpl_vars['question']->value['parentUrl']),$_smarty_tpl);?>
</div>
                                <?php } else { ?>
                                <div class="question_values_div">
                                    <center><a class="question_values" href="javascript://"><?php echo smarty_function_text(array('key'=>"admin+questions_values_count",'count'=>$_smarty_tpl->tpl_vars['questionValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['count']),$_smarty_tpl);?>
</a></center>

                                    <div style="padding:0 0 0 15px;text-align:left;display:none;width:100px;overflow:hidden;" >
                                        <ul style="list-style-type:disc;">
                                            <?php
$_from = $_smarty_tpl->tpl_vars['questionValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['values'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_2_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_2_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
                                                   <li><?php echo $_smarty_tpl->tpl_vars['valueLabels']->value[$_smarty_tpl->tpl_vars['question']->value['name']][$_smarty_tpl->tpl_vars['value']->value->value];?>
</li>
                                            <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved_local_item;
}
if ($__foreach_value_2_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved_item;
}
?>
                                        </ul>
                                    </div>
                                </div>
                                <?php }?>
                            <?php } else { ?>
                                <div class="question_values_div"></div>
                            <?php }?>
                        <?php }?>
                    </td>

                    <td class="question_buttons_td <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['evenstyle']) ? $_smarty_tpl->_cache['__smarty_capture']['evenstyle'] : null);?>
 ow_nowrap quest_buttons">
                        
                            <?php if (!empty($_smarty_tpl->tpl_vars['deleteEditButtons']->value[$_smarty_tpl->tpl_vars['question']->value['name']])) {?>
                                <div class="question_buttons_div ow_overflow_hidden">
                                    <?php echo $_smarty_tpl->tpl_vars['deleteEditButtons']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>

                                </div>
                            <?php } else { ?>
                                <div class="question_buttons_div delete_edit_buttons ow_overflow_hidden">
                                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
">
                                    <a href="javascript://" class="ow_lbutton question_edit_button" style="visibility:hidden;"><?php echo smarty_function_text(array('key'=>'admin+btn_label_edit'),$_smarty_tpl);?>
</a>
                                    <?php if ($_smarty_tpl->tpl_vars['question']->value['base'] != 1 && $_smarty_tpl->tpl_vars['question']->value['removable'] == 1 && empty($_smarty_tpl->tpl_vars['question']->value['parentUrl'])) {?>
                                        <a href="javascript://" class="ow_lbutton ow_red question_delete_button" style="visibility:hidden;"><?php echo smarty_function_text(array('key'=>'admin+btn_label_delete'),$_smarty_tpl);?>
</a>
                                    <?php }?>
                                </div>
                            <?php }?>
                    </td>

                    <td class="question_require_td <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['evenstyle']) ? $_smarty_tpl->_cache['__smarty_capture']['evenstyle'] : null);?>
" >
                        <div class="question_require_div table_content_block" >
                            <?php if (!empty($_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['required'])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['required'];?>

                            <?php } else { ?>
                                <div class="required ow_checkbox
                                     <?php if ($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['disable_required'] == 1) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['required'] == 1) {?>ow_checkbox_cell_marked_lock<?php } else { ?>ow_checkbox_cell_lock<?php }?>
                                     <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['required'] == 1) {?>ow_checkbox_cell_marked<?php } else { ?>ow_checkbox_cell<?php }?>
                                     <?php }?>"></div>
                            <?php }?>
                        </div>
                    </td>

                    <td class="question_sign_up_td <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['evenstyle']) ? $_smarty_tpl->_cache['__smarty_capture']['evenstyle'] : null);?>
" >
                        <div class="question_sign_up_div table_content_block ">
                            <?php if (!empty($_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['join'])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['join'];?>

                            <?php } else { ?>
                                <div class="on_join ow_checkbox
                                     <?php if ($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['disable_on_join'] == 1) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['onJoin'] == 1) {?>ow_checkbox_cell_marked_lock<?php } else { ?>ow_checkbox_cell_lock<?php }?>
                                     <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['onJoin'] == 1) {?>ow_checkbox_cell_marked<?php } else { ?>ow_checkbox_cell<?php }?>
                                     <?php }?>"></div>
                            <?php }?>

                        </div>
                    </td>
                    <td class="question_edit_td <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['evenstyle']) ? $_smarty_tpl->_cache['__smarty_capture']['evenstyle'] : null);?>
" >
                        <div class="question_edit_div table_content_block ">
                            <?php if (!empty($_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['edit'])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['edit'];?>

                            <?php } else { ?>
                                    <div class="on_edit ow_checkbox
                                                 <?php if ($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['disable_on_edit'] == 1) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['question']->value['onEdit'] == 1) {?>ow_checkbox_cell_marked_lock<?php } else { ?>ow_checkbox_cell_lock<?php }?>
                                                 <?php } else { ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['question']->value['onEdit'] == 1) {?>ow_checkbox_cell_marked<?php } else { ?>ow_checkbox_cell<?php }?>
                                                 <?php }?>"></div>
                            <?php }?>
                        </div>
                    </td>

                    <td class="question_view_td <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['evenstyle']) ? $_smarty_tpl->_cache['__smarty_capture']['evenstyle'] : null);?>
" >
                        <div class="question_view_div table_content_block ">
                            <?php if (!empty($_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['view'])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['view'];?>

                            <?php } else { ?>
                                <div class="on_view ow_checkbox
                                     <?php if ($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['disable_on_view'] == 1) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['onView'] == 1) {?>ow_checkbox_cell_marked_lock<?php } else { ?>ow_checkbox_cell_lock<?php }?>
                                     <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['onView'] == 1) {?>ow_checkbox_cell_marked<?php } else { ?>ow_checkbox_cell<?php }?>
                                     <?php }?>"></div>
                            <?php }?>
                        </div>
                    </td>

                    <td class="question_search_td <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['evenstyle']) ? $_smarty_tpl->_cache['__smarty_capture']['evenstyle'] : null);?>
" >
                        <div class="question_search_div table_content_block ">
                            <?php if (!empty($_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['search'])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['pagesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['search'];?>

                            <?php } else { ?>
                                <div class="on_search ow_checkbox
                                     <?php if ($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['disable_on_search'] == 1) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['onSearch'] == 1) {?>ow_checkbox_cell_marked_lock<?php } else { ?>ow_checkbox_cell_lock<?php }?>
                                     <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['onSearch'] == 1) {?>ow_checkbox_cell_marked<?php } else { ?>ow_checkbox_cell<?php }?>
                                     <?php }?>"></div>
                            <?php }?>

                        </div>
                    </td>
                 </tr>
           <?php
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_1_saved_local_item;
}
if ($__foreach_question_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_question'] = $__foreach_question_1_saved;
}
if ($__foreach_question_1_saved_item) {
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_1_saved_item;
}
?>
        <?php }?>

        <tr class="question_tr no_question" style="display:none;">
            <td colspan="9"></td>
        </tr>

        <tr class="ow_tr_delimiter"><td></td></tr>
    </table>
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
</div>
<div class="clearfix ow_std_margin">
    <div class="ow_right">
        <?php echo smarty_function_decorator(array('name'=>'button','class'=>"ow_ic_add add_new_question_button ow_positive",'langLabel'=>'admin+questions_add_question_button'),$_smarty_tpl);?>

        <?php echo smarty_function_decorator(array('name'=>'button','class'=>"ow_ic_add add_new_section_button ow_positive",'langLabel'=>'admin+questions_add_section_button'),$_smarty_tpl);?>

    </div>
</div>
<?php }
}
