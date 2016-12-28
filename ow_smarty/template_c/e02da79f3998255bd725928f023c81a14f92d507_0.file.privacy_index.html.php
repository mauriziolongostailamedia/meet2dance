<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:33:07
  from "/home/dancemee/public_html/ow_plugins/privacy/views/controllers/privacy_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe8ff3264133_47179141',
  'file_dependency' => 
  array (
    'e02da79f3998255bd725928f023c81a14f92d507' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/privacy/views/controllers/privacy_index.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe8ff3264133_47179141 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


tr.ow_privacy td.ow_label{
    width:40%
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_stdmargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_stdmargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_text(array('key'=>'privacy+privacy_description'),$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_stdmargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php if (empty($_smarty_tpl->tpl_vars['actionList']->value)) {?>
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

             <?php echo smarty_function_text(array('key'=>"privacy+no_items"),$_smarty_tpl);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php } else { ?>
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'privacyForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'privacyForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <table class="ow_table_1 ow_form ow_smallmargin">
                <?php
$_from = $_smarty_tpl->tpl_vars['actionList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_a_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_a']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_a'] : false;
$__foreach_a_0_saved_item = isset($_smarty_tpl->tpl_vars['action']) ? $_smarty_tpl->tpl_vars['action'] : false;
$__foreach_a_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['action'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_a'] = new Smarty_Variable(array());
$__foreach_a_0_first = true;
$__foreach_a_0_iteration=0;
$_smarty_tpl->tpl_vars['action']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
$__foreach_a_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_a']->value['first'] = $__foreach_a_0_first;
$_smarty_tpl->tpl_vars['__smarty_foreach_a']->value['last'] = $__foreach_a_0_iteration == $__foreach_a_0_total;
$__foreach_a_0_first = false;
$__foreach_a_0_saved_local_item = $_smarty_tpl->tpl_vars['action'];
?>
                        <tr class="ow_privacy <?php echo smarty_function_cycle(array('name'=>'privacy_action','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_a']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_a']->value['first'] : null)) {?>ow_tr_first<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_a']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_a']->value['last'] : null)) {?>ow_tr_last<?php }?>">
                            <td class="ow_label">
                                <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['action']->value),$_smarty_tpl);?>

                            </td>
                            <td class="ow_value">
                                <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['action']->value),$_smarty_tpl);?>

                                <div style="height:1px;"></div>
                                <?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['action']->value),$_smarty_tpl);?>

                            </td>
                            <td class="ow_desc">
                                <?php echo smarty_function_desc(array('name'=>$_smarty_tpl->tpl_vars['action']->value),$_smarty_tpl);?>

                            </td>
                        </tr>
                <?php
$_smarty_tpl->tpl_vars['action'] = $__foreach_a_0_saved_local_item;
}
if ($__foreach_a_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_a'] = $__foreach_a_0_saved;
}
if ($__foreach_a_0_saved_item) {
$_smarty_tpl->tpl_vars['action'] = $__foreach_a_0_saved_item;
}
?>

            </table>                            
			<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_anno ow_smallmargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_anno ow_smallmargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			   <?php echo smarty_function_text(array('key'=>'privacy+bottom warning'),$_smarty_tpl);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_anno ow_smallmargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>
                            
            <div class="clearfix ow_smallmargin">
				<div class="ow_right"><?php echo smarty_function_submit(array('name'=>'privacySubmit'),$_smarty_tpl);?>
</div>
			</div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'privacyForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
