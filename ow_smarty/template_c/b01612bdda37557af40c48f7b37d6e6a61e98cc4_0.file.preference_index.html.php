<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:30:38
  from "/home/dancemee/public_html/ow_system_plugins/base/views/controllers/preference_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe8f5e067157_22622211',
  'file_dependency' => 
  array (
    'b01612bdda37557af40c48f7b37d6e6a61e98cc4' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/controllers/preference_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe8f5e067157_22622211 ($_smarty_tpl) {
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


tr.ow_preference td.ow_label{
    width:30%
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if (empty($_smarty_tpl->tpl_vars['preferenceList']->value)) {?>
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

             <?php echo smarty_function_text(array('key'=>"base+preference_no_items"),$_smarty_tpl);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php } else { ?>
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'preferenceForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'preferenceForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <table class="ow_table_1 ow_form">
                <?php
$_from = $_smarty_tpl->tpl_vars['preferenceList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_preferences_0_saved_item = isset($_smarty_tpl->tpl_vars['preferences']) ? $_smarty_tpl->tpl_vars['preferences'] : false;
$__foreach_preferences_0_saved_key = isset($_smarty_tpl->tpl_vars['section']) ? $_smarty_tpl->tpl_vars['section'] : false;
$_smarty_tpl->tpl_vars['preferences'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['preferences']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['preferences']->value) {
$_smarty_tpl->tpl_vars['preferences']->_loop = true;
$__foreach_preferences_0_saved_local_item = $_smarty_tpl->tpl_vars['preferences'];
?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)) {?>
                        <tr class="ow_name ow_txtleft ow_tr_first">
                            <th colspan="3">
                                <?php if (!empty($_smarty_tpl->tpl_vars['sectionLabels']->value[$_smarty_tpl->tpl_vars['section']->value]['label'])) {?>
                                    <span class="ow_section_icon <?php if (!empty($_smarty_tpl->tpl_vars['sectionLabels']->value[$_smarty_tpl->tpl_vars['section']->value]['iconClass'])) {?> <?php echo $_smarty_tpl->tpl_vars['sectionLabels']->value[$_smarty_tpl->tpl_vars['section']->value]['iconClass'];?>
 <?php }?>">
                                        <?php echo $_smarty_tpl->tpl_vars['sectionLabels']->value[$_smarty_tpl->tpl_vars['section']->value]['label'];?>

                                    </span>
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['section']->value;?>

                                <?php }?>
                            </th>
                        </tr>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['preferences']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_preference_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_preference']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_preference'] : false;
$__foreach_preference_1_saved_item = isset($_smarty_tpl->tpl_vars['preference']) ? $_smarty_tpl->tpl_vars['preference'] : false;
$__foreach_preference_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['preference'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_preference'] = new Smarty_Variable(array());
$__foreach_preference_1_iteration=0;
$_smarty_tpl->tpl_vars['preference']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['preference']->value) {
$_smarty_tpl->tpl_vars['preference']->_loop = true;
$__foreach_preference_1_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_preference']->value['last'] = $__foreach_preference_1_iteration == $__foreach_preference_1_total;
$__foreach_preference_1_saved_local_item = $_smarty_tpl->tpl_vars['preference'];
?>
                        <tr class="ow_preference <?php echo smarty_function_cycle(array('name'=>$_smarty_tpl->tpl_vars['section']->value,'values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_preference']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_preference']->value['last'] : null)) {?>ow_tr_last<?php }?>">
                            <td class="ow_label">
                                <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['preference']->value),$_smarty_tpl);?>

                            </td>
                            <td class="ow_value">
                                <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['preference']->value),$_smarty_tpl);?>

                                <div style="height:1px;"></div>
                                <?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['preference']->value),$_smarty_tpl);?>

                            </td>
                            <td class="ow_desc">
                                <?php echo smarty_function_desc(array('name'=>$_smarty_tpl->tpl_vars['preference']->value),$_smarty_tpl);?>

                            </td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['preference'] = $__foreach_preference_1_saved_local_item;
}
if ($__foreach_preference_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_preference'] = $__foreach_preference_1_saved;
}
if ($__foreach_preference_1_saved_item) {
$_smarty_tpl->tpl_vars['preference'] = $__foreach_preference_1_saved_item;
}
?>
                <?php
$_smarty_tpl->tpl_vars['preferences'] = $__foreach_preferences_0_saved_local_item;
}
if ($__foreach_preferences_0_saved_item) {
$_smarty_tpl->tpl_vars['preferences'] = $__foreach_preferences_0_saved_item;
}
if ($__foreach_preferences_0_saved_key) {
$_smarty_tpl->tpl_vars['section'] = $__foreach_preferences_0_saved_key;
}
?>
            </table>
            <div class="clearfix ow_stdmargin"><div class="ow_right">
            <?php echo smarty_function_submit(array('name'=>'preferenceSubmit'),$_smarty_tpl);?>

			</div></div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'preferenceForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
