<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:29:02
  from "/home/dancemee/public_html/ow_system_plugins/base/views/controllers/edit_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe80eec47aa2_50419882',
  'file_dependency' => 
  array (
    '1c436d1766c620404dadb1b542ec754e7585f53f' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/controllers/edit_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe80eec47aa2_50419882 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_question_description_lang')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.question_description_lang.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    .anno_padding_left {
        padding-left:45px;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
    $(function(){
        $(".unregister_profile_button").click(
            function() { window.location = "<?php echo $_smarty_tpl->tpl_vars['unregisterProfileUrl']->value;?>
" }
        );
   });
<?php echo '</script'; ?>
>


<?php if (!empty($_smarty_tpl->tpl_vars['changePassword']->value)) {?>
    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo $_smarty_tpl->tpl_vars['changePassword']->value;?>
</div></div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (isset($_smarty_tpl->tpl_vars['editSynchronizeHook']->value)) {?>
    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'addClass'=>"ow_center",'iconClass'=>'ow_ic_update','langLabel'=>'base+edit_remote_field_synchronize_title','style'=>"overflow:hidden;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_center",'iconClass'=>'ow_ic_update','langLabel'=>'base+edit_remote_field_synchronize_title','style'=>"overflow:hidden;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

       <?php
$_from = $_smarty_tpl->tpl_vars['editSynchronizeHook']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
          <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

       <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_center",'iconClass'=>'ow_ic_update','langLabel'=>'base+edit_remote_field_synchronize_title','style'=>"overflow:hidden;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_text(array('key'=>"base+join_or"),$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'editForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'editForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_1 ow_form ow_stdmargin">
        <?php if ($_smarty_tpl->tpl_vars['displayAccountType']->value) {?>
            <tr class="ow_alt1 ow_tr_first">
                <td class="ow_label">
                    <?php echo smarty_function_label(array('name'=>'accountType'),$_smarty_tpl);?>

                </td>
                <td class="ow_value">
                    <?php echo smarty_function_input(array('name'=>'accountType'),$_smarty_tpl);?>

                    <div style="height:1px;"></div>
                    <?php echo smarty_function_error(array('name'=>'accountType'),$_smarty_tpl);?>

                </td>
                <td class="ow_desc ow_small">

                </td>
            </tr>
        <?php }?>
        <tr class="ow_tr_delimiter"><td></td></tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['questionArray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_question_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question'] : false;
$__foreach_question_1_saved_item = isset($_smarty_tpl->tpl_vars['questions']) ? $_smarty_tpl->tpl_vars['questions'] : false;
$__foreach_question_1_saved_key = isset($_smarty_tpl->tpl_vars['section']) ? $_smarty_tpl->tpl_vars['section'] : false;
$__foreach_question_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['questions'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_question'] = new Smarty_Variable(array());
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable();
$__foreach_question_1_first = true;
$__foreach_question_1_iteration=0;
$_smarty_tpl->tpl_vars['questions']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['questions']->value) {
$_smarty_tpl->tpl_vars['questions']->_loop = true;
$__foreach_question_1_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['first'] = $__foreach_question_1_first;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] = $__foreach_question_1_iteration == $__foreach_question_1_total;
$__foreach_question_1_first = false;
$__foreach_question_1_saved_local_item = $_smarty_tpl->tpl_vars['questions'];
?>
            <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)) {?>
                <tr class="ow_tr_first"><th colspan="3"><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);?>
</th></tr>
            <?php }?>
            
            <?php
$_from = $_smarty_tpl->tpl_vars['questions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_question_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question'] : false;
$__foreach_question_2_saved_item = isset($_smarty_tpl->tpl_vars['question']) ? $_smarty_tpl->tpl_vars['question'] : false;
$__foreach_question_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['question'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_question'] = new Smarty_Variable(array());
$__foreach_question_2_first = true;
$__foreach_question_2_iteration=0;
$_smarty_tpl->tpl_vars['question']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
$__foreach_question_2_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['first'] = $__foreach_question_2_first;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] = $__foreach_question_2_iteration == $__foreach_question_2_total;
$__foreach_question_2_first = false;
$__foreach_question_2_saved_local_item = $_smarty_tpl->tpl_vars['question'];
?>
                <?php echo smarty_function_cycle(array('assign'=>'alt','name'=>$_smarty_tpl->tpl_vars['section']->value,'values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

                <tr class=" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] : null)) {?>ow_tr_last<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['changeList']->value[$_smarty_tpl->tpl_vars['question']->value['name']]) && $_smarty_tpl->tpl_vars['adminMode']->value) {?> ow_premoderation_high <?php }?>">
                    <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_label">
                        <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                    </td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_value">
                        <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                        <div style="height:1px;"></div>
                        <?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                    </td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_desc ow_small">
                        <?php echo smarty_function_question_description_lang(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                    </td>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_2_saved_local_item;
}
if ($__foreach_question_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_question'] = $__foreach_question_2_saved;
}
if ($__foreach_question_2_saved_item) {
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_2_saved_item;
}
?>
            <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)) {
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['first'] : null)) {?>
            <tr class="ow_tr_delimiter"><td></td></tr>
            <?php }?>
            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['questions'] = $__foreach_question_1_saved_local_item;
}
if ($__foreach_question_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_question'] = $__foreach_question_1_saved;
}
if ($__foreach_question_1_saved_item) {
$_smarty_tpl->tpl_vars['questions'] = $__foreach_question_1_saved_item;
}
if ($__foreach_question_1_saved_key) {
$_smarty_tpl->tpl_vars['section'] = $__foreach_question_1_saved_key;
}
?>
        <tr class="ow_tr_delimiter"><td></td></tr>
        <tr class="ow_tr_first">
            <th colspan="3"><?php echo smarty_function_text(array('key'=>'base+questions_section_user_photo_label'),$_smarty_tpl);?>
</th>
        </tr>
        <tr>
            <td class="ow_alt1 ow_label">
                <?php echo smarty_function_label(array('name'=>'avatar'),$_smarty_tpl);?>

            </td>
            <td class="ow_alt1 ow_value">
                <?php echo smarty_function_input(array('name'=>'avatar'),$_smarty_tpl);?>

                <?php echo smarty_function_error(array('name'=>'avatar'),$_smarty_tpl);?>

            </td>
            <td class="ow_alt1 ow_desc ow_small"></td>
        </tr>
    </table>

    <?php if (!$_smarty_tpl->tpl_vars['adminMode']->value && !$_smarty_tpl->tpl_vars['isAdmin']->value && $_smarty_tpl->tpl_vars['approveEnabled']->value) {?>
        <div class="ow_anno ow_std_margin anno_padding_left"><?php echo smarty_function_text(array('key'=>"base+edit_profile_warning"),$_smarty_tpl);?>
</div>
    <?php }?>

	<div class="clearfix ow_stdmargin<?php if (!$_smarty_tpl->tpl_vars['isAdmin']->value) {?> ow_btn_delimiter<?php }?>">
           <?php if ($_smarty_tpl->tpl_vars['adminMode']->value) {?>
                <?php if (!$_smarty_tpl->tpl_vars['isUserApproved']->value && !$_smarty_tpl->tpl_vars['isEditedUserModerator']->value) {?>
                    <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"delete_user_by_moderator ow_ic_delete ow_red ow_negative",'langLabel'=>'base+delete_profile'),$_smarty_tpl);?>

                <?php }?>

                <div class="ow_right">
                    <?php if (!$_smarty_tpl->tpl_vars['isUserApproved']->value) {?>
                        <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"write_message_button ow_green ow_positive",'langLabel'=>'base+write_message'),$_smarty_tpl);?>

                        <?php echo smarty_function_submit(array('name'=>'saveAndApprove'),$_smarty_tpl);?>

                    <?php } else { ?>
                        <?php echo smarty_function_submit(array('name'=>'editSubmit'),$_smarty_tpl);?>

                    <?php }?>
                </div>
           <?php } else { ?>
                 <?php if (!$_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                    <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"unregister_profile_button ow_ic_delete ow_red ow_negative",'langLabel'=>'base+delete_profile'),$_smarty_tpl);?>

                 <?php }?>
                 <div class="ow_right">
                    <?php echo smarty_function_submit(array('name'=>'editSubmit'),$_smarty_tpl);?>

                 </div>
		   <?php }?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'editForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
