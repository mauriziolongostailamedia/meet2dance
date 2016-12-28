<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:32
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/about_me_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf124d0cc17_91199436',
  'file_dependency' => 
  array (
    '36a55e7bf7e8d6a4d46f783c9b6776e17c66786e' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/about_me_widget.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf124d0cc17_91199436 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



.ow_about_me_widget {
    padding: 5px 4px 10px;
    overflow: hidden;
}


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>



<div class="ow_highbox ow_about_me_widget">
    <?php if ($_smarty_tpl->tpl_vars['ownerMode']->value) {?>
        <div class="ow_center">
            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>"about_me_form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"about_me_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="form_auto_click"> 
                    <div class="ow_smallmargin"><?php echo smarty_function_input(array('name'=>"about_me"),$_smarty_tpl);?>
</div>
                    <div class="<?php if ($_smarty_tpl->tpl_vars['noContent']->value) {?>ow_submit_auto_click<?php }?>">
                        <?php echo smarty_function_submit(array('name'=>"save"),$_smarty_tpl);?>

                    </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"about_me_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['contentText']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['contentText']->value;?>

    <?php }?>

</div><?php }
}
