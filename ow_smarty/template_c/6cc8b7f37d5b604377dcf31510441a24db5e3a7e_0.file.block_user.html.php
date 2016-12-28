<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:26:46
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/block_user.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe8e76de24a2_91817349',
  'file_dependency' => 
  array (
    '6cc8b7f37d5b604377dcf31510441a24db5e3a7e' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/block_user.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe8e76de24a2_91817349 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_center">
        <?php echo smarty_function_text(array('key'=>"base+user_block_confirm_message"),$_smarty_tpl);?>
<br /><br /><br />
        <?php echo smarty_function_decorator(array('name'=>"button",'id'=>"baseBlockButton",'type'=>"submit",'buttonName'=>"user_block_btn",'class'=>"ow_ic_delete ow_red",'langLabel'=>"base+user_block_btn_lbl"),$_smarty_tpl);?>

        </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
