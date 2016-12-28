<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:28:44
  from "/home/dancemee/public_html/ow_system_plugins/base/views/controllers/user_search_result.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe8eecb8c809_52526329',
  'file_dependency' => 
  array (
    '8a6e92cd85e24a4fe9c7f08261ecabe629580592' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/controllers/user_search_result.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe8eecb8c809_52526329 ($_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (isset($_smarty_tpl->tpl_vars['menu']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php }?>


<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
    $(function(){
        $(".back_to_search_button").click(
            function() { window.location = "<?php echo $_smarty_tpl->tpl_vars['searchUrl']->value;?>
" }
        );
   });
<?php echo '</script'; ?>
>


<?php if (!empty($_smarty_tpl->tpl_vars['listType']->value)) {
echo smarty_function_add_content(array('key'=>"base.content.user_list_top",'listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);
}?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'style'=>"margin-bottom:20px")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'style'=>"margin-bottom:20px"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_decorator(array('name'=>"button",'buttonName'=>"back_to_search",'class'=>"back_to_search_button ow_ic_left_arrow",'langLabel'=>"base+user_search_back_to_search"),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'style'=>"margin-bottom:20px"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php echo smarty_function_add_content(array('key'=>"base.content.user_search.after_back"),$_smarty_tpl);?>


<?php echo $_smarty_tpl->tpl_vars['cmp']->value;
}
}
