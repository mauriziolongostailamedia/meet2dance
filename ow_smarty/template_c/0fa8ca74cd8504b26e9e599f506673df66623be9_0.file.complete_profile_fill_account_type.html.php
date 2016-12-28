<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:35:53
  from "/home/dancemee/public_html/ow_system_plugins/base/views/controllers/complete_profile_fill_account_type.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe90992906b5_09462722',
  'file_dependency' => 
  array (
    '0fa8ca74cd8504b26e9e599f506673df66623be9' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/controllers/complete_profile_fill_account_type.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe90992906b5_09462722 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_question_description_lang')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.question_description_lang.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box_cap",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;",'langLabel'=>"base+required_profile_questions")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box_cap",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;",'langLabel'=>"base+required_profile_questions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box_cap",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;",'langLabel'=>"base+required_profile_questions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'accountTypeForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'accountTypeForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <table class="ow_table_1 ow_form ow_stdmargin">
            <tr class=" ow_tr_first ow_tr_last">
                <td class="ow_alt1 ow_label">
                    <?php echo smarty_function_label(array('name'=>'accountType'),$_smarty_tpl);?>

                </td>
                <td class="ow_alt1 ow_value">
                    <?php echo smarty_function_input(array('name'=>'accountType'),$_smarty_tpl);?>

                    <div style="height:1px;"></div>
                    <?php echo smarty_function_error(array('name'=>'accountType'),$_smarty_tpl);?>

                </td>
                <td class="ow_alt1 ow_desc ow_small">
                    <?php echo smarty_function_question_description_lang(array('name'=>'accountType'),$_smarty_tpl);?>

                </td>
            </tr>
        </table>
        <div class="clearfix ow_stdmargin">
           <div class="ow_right">
               <?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>

           </div>
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'accountTypeForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
