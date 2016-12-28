<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:29:02
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/change_password.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe80eeb5c472_23869888',
  'file_dependency' => 
  array (
    '2a7c128c763c02baf94a131ecfe9ff7c2362a18a' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/change_password.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe80eeb5c472_23869888 ($_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



        $(function(){
            $("#change_password_button").click(
                function() { 
                    window.oldPassword.floatBox = new OW_FloatBox({$title: '<?php echo smarty_function_text(array('key'=>'base+change_password'),$_smarty_tpl);?>
', $contents: $('#change-password-div'), width: 480});
                    window.owForms['change-user-password'].resetForm();
                    window.owForms['change-user-password'].removeErrors();
                }
            );
       });


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php echo smarty_function_decorator(array('name'=>"button",'id'=>"change_password_button",'langLabel'=>'base+change_password'),$_smarty_tpl);?>

<div style="display:none;">
    <div id="change-password-div">
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>"change-user-password")); $_block_repeat=true; echo smarty_block_form(array('name'=>"change-user-password"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <table class="ow_table_1 ow_form">
                    <tr class="ow_alt2 ow_tr_first">
                        <td class="ow_label" style="width:40%;"><?php echo smarty_function_label(array('name'=>'oldPassword'),$_smarty_tpl);?>
</td>
                        <td class="ow_value"><?php echo smarty_function_input(array('name'=>"oldPassword"),$_smarty_tpl);?>
<br/><?php echo smarty_function_error(array('name'=>"oldPassword"),$_smarty_tpl);?>
</td>
                    </tr>
                    <tr class="ow_alt1" width="40">
                        <td class="ow_label" style="width:40%;"><?php echo smarty_function_label(array('name'=>'password'),$_smarty_tpl);?>
</td>
                        <td class="ow_value"><?php echo smarty_function_input(array('name'=>"password"),$_smarty_tpl);?>
<br/><?php echo smarty_function_error(array('name'=>"password"),$_smarty_tpl);?>
</td>
                    </tr>
                    <tr class="ow_alt2 ow_tr_last">
                        <td class="ow_label" style="width:40%;"><?php echo smarty_function_label(array('name'=>'repeatPassword'),$_smarty_tpl);?>
</td>
                        <td class="ow_value"><?php echo smarty_function_input(array('name'=>"repeatPassword"),$_smarty_tpl);?>
<br/><?php echo smarty_function_error(array('name'=>"repeatPassword"),$_smarty_tpl);?>
</td>
                    </tr>

                </table>
                
                <div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>"change"),$_smarty_tpl);?>
</div></div>
         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"change-user-password"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    </div>
</div>
<?php }
}
