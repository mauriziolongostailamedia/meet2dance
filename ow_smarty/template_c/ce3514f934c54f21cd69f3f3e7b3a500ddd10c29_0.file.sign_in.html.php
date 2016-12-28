<?php
/* Smarty version 3.1.29, created on 2016-10-12 17:54:35
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/sign_in.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe5cbba526e4_72891037',
  'file_dependency' => 
  array (
    'ce3514f934c54f21cd69f3f3e7b3a500ddd10c29' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/sign_in.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe5cbba526e4_72891037 ($_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_url_for_route')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
if (!is_callable('smarty_function_component')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.component.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'sign-in')); $_block_repeat=true; echo smarty_block_form(array('name'=>'sign-in'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="owm_login_form">
    <div class="clearfix owm_std_margin_top">
        <div class="owm_login_txt owm_float_left">
            <?php echo smarty_function_text(array('key'=>'base+base_sign_in_cap_label'),$_smarty_tpl);?>

        </div>
        <a href="<?php echo smarty_function_url_for_route(array('for'=>'base_forgot_password'),$_smarty_tpl);?>
" class="owm_forgot_txt owm_float_right"><?php echo smarty_function_text(array('key'=>'base+forgot_password_label'),$_smarty_tpl);?>
</a>
    </div>
    <div class="owm_login_field owm_login_username">
        <?php echo smarty_function_input(array('name'=>'identity'),$_smarty_tpl);?>

    </div>
    <div class="owm_login_field owm_login_pass">
        <?php echo smarty_function_input(array('name'=>'password'),$_smarty_tpl);?>

    </div>
    <div style="display:none;"><?php echo smarty_function_input(array('name'=>'remember'),$_smarty_tpl);
echo smarty_function_label(array('name'=>'remember'),$_smarty_tpl);?>
</div>
    <div class="owm_btn_wide owm_btn_positive owm_std_margin_top">
        <?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>

    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'sign-in'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php echo smarty_function_component(array('class'=>"BASE_MCMP_ConnectButtonList"),$_smarty_tpl);?>


<?php }
}
