<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:20:34
  from "/home/dancemee/public_html/ow_system_plugins/base/views/controllers/user_search_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe7ef227a570_22795386',
  'file_dependency' => 
  array (
    '25c8c7801191acf507f3489534d619b2812e589c' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/controllers/user_search_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe7ef227a570_22795386 ($_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
?>


    <style>
        input.display_name_input {
            width:65%;
        }
    </style>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    
      $(function(){
            $("form[name='MainSearchForm'] select[name='accountType']").change(
               function(){ this.form.submit(); }
            );
       });
   
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php if (isset($_smarty_tpl->tpl_vars['menu']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['authMessage']->value)) {?>
    <div class="ow_anno ow_std_margin ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['authMessage']->value;?>
</div>
<?php } else { ?>
<div class="clearfix">
    <div class="ow_left ow_wide">
                <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'MainSearchForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'MainSearchForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <table class="ow_table_1 ow_form">
                            <?php if ($_smarty_tpl->tpl_vars['displayAccountType']->value == true) {?>
                            <?php echo smarty_function_cycle(array('assign'=>'alt','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

                            <tr class=" ow_tr_first ow_tr_last">
                                <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_label">
                                    <?php echo smarty_function_label(array('name'=>'accountType'),$_smarty_tpl);?>

                                </td>
                                <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_value ow_center">
                                    <?php echo smarty_function_input(array('name'=>'accountType'),$_smarty_tpl);?>

                                    <div style="height:1px;"></div>
                                    <?php echo smarty_function_error(array('name'=>'accountType'),$_smarty_tpl);?>

                                </td>
                            </tr>
                            <tr class="ow_tr_delimiter"><td></td></tr>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['questionList']->value)) {?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['questionList']->value;
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
                                <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)) {?>
                                    <tr class="ow_tr_first"><th colspan="3"><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);?>
</th></tr>
                                <?php }?>
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
                                        <?php echo smarty_function_cycle(array('assign'=>'alt','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

                                        <tr class=" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] : null)) {?>ow_tr_last<?php }?>">
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
                                    <tr class="ow_tr_delimiter"><td></td></tr>
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
                           <?php }?>
                        </table>
                       <div class="clearfix">
                  		<div class="ow_right">
							<?php echo smarty_function_submit(array('name'=>'MainSearchFormSubmit'),$_smarty_tpl);?>

                        </div>
                       </div> 
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'MainSearchForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    </div>
    <div class="ow_right ow_narrow">
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'DisplayNameSearchForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'DisplayNameSearchForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'addClass'=>"ow_center",'iconClass'=>"ow_ic_lens",'langLabel'=>"base+user_search_display_name_search_label")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_center",'iconClass'=>"ow_ic_lens",'langLabel'=>"base+user_search_display_name_search_label"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="clearfix ow_smallmargin">
                    <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['displayNameQuestion']->value['name']),$_smarty_tpl);?>

                    <?php echo smarty_function_input(array('class'=>"display_name_input",'name'=>$_smarty_tpl->tpl_vars['displayNameQuestion']->value['name']),$_smarty_tpl);?>

                </div>
                <?php echo smarty_function_submit(array('class'=>"ow_txtcenter",'name'=>'DisplayNameSearchFormSubmit'),$_smarty_tpl);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_center",'iconClass'=>"ow_ic_lens",'langLabel'=>"base+user_search_display_name_search_label"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'DisplayNameSearchForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    </div>
</div>
<?php }
}
}
