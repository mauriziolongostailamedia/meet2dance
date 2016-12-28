<?php
/* Smarty version 3.1.29, created on 2016-10-16 13:12:10
  from "/home/dancemee/public_html/ow_plugins/contact_importer/views/components/email_invite.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5803608ae35a24_06407679',
  'file_dependency' => 
  array (
    '70799b489055bc44c9eff96e347b81f4231aa2d7' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/contact_importer/views/components/email_invite.html',
      1 => 1469551372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5803608ae35a24_06407679 ($_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'inite-friends')); $_block_repeat=true; echo smarty_block_form(array('name'=>'inite-friends'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_input(array('name'=>'emailList'),$_smarty_tpl);?>

    <div class="ow_smallmargin"><?php echo smarty_function_input(array('name'=>'text'),$_smarty_tpl);?>
</div>
    <div class="clearfix ow_smallmargin">
        <div class="ow_right"><?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>
</div>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'inite-friends'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
