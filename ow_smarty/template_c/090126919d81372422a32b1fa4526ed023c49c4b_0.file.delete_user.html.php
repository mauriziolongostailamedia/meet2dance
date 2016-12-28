<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:25:20
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/delete_user.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe8010b85535_81204814',
  'file_dependency' => 
  array (
    '090126919d81372422a32b1fa4526ed023c49c4b' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/delete_user.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe8010b85535_81204814 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ow_stdmargin" style="text-align: center;">
        <?php echo smarty_function_text(array('key'=>"base+admin_delete_user_text"),$_smarty_tpl);?>
<br /><br /><br />
        <?php echo smarty_function_decorator(array('name'=>"button",'id'=>"baseDCButton",'type'=>"submit",'buttonName'=>"delete_user_button",'class'=>"ow_ic_delete ow_red",'langLabel'=>"base+delete_user_delete_button"),$_smarty_tpl);?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
