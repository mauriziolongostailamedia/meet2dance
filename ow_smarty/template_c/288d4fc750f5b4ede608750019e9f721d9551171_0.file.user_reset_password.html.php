<?php
/* Smarty version 3.1.29, created on 2016-12-22 20:18:16
  from "/home/dancemee/public_html/ow_system_plugins/base/views/controllers/user_reset_password.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_585c26f8430502_52624584',
  'file_dependency' => 
  array (
    '288d4fc750f5b4ede608750019e9f721d9551171' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/controllers/user_reset_password.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585c26f8430502_52624584 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_forgot_password{
    margin:0 auto;
    padding:100px;
    width:350px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<div class="ow_forgot_password">
    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','langLabel'=>'base+reset_password_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','langLabel'=>'base+reset_password_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div style="padding: 0 5px 5px;"><?php echo $_smarty_tpl->tpl_vars['formText']->value;?>
</div>
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'reset-password')); $_block_repeat=true; echo smarty_block_form(array('name'=>'reset-password'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div style="width: 250px;margin: 0 auto;">
        <?php echo smarty_function_label(array('name'=>'password'),$_smarty_tpl);
echo smarty_function_input(array('name'=>'password','class'=>'ow_smallmargin'),$_smarty_tpl);?>

        <?php echo smarty_function_label(array('name'=>'repeatPassword'),$_smarty_tpl);
echo smarty_function_input(array('name'=>'repeatPassword','class'=>'ow_smallmargin'),$_smarty_tpl);?>

        <div class="clearfix"><div class="ow_left"><?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive'),$_smarty_tpl);?>
</div></div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'reset-password'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','langLabel'=>'base+reset_password_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

</div><?php }
}
