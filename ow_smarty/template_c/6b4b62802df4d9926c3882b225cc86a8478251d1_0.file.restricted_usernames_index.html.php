<?php
/* Smarty version 3.1.29, created on 2016-10-16 22:01:18
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/restricted_usernames_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5803dc8e0c4f47_58952372',
  'file_dependency' => 
  array (
    '6b4b62802df4d9926c3882b225cc86a8478251d1' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/restricted_usernames_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5803dc8e0c4f47_58952372 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_url_for')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="clearfix">
    <div class="ow_column ow_left">
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'iconClass'=>"ow_ic_edit",'langLabel'=>'admin+restrictedusernames_add_username')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'iconClass'=>"ow_ic_edit",'langLabel'=>'admin+restrictedusernames_add_username'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'restrictedUsernamesForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'restrictedUsernamesForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <table class="ow_form ow_automargin">
            <tr>
                <td class="ow_label ow_valign_middle"><?php echo smarty_function_label(array('name'=>'restrictedUsername'),$_smarty_tpl);?>
</td>
                <td class="ow_value ow_valign_middle"><?php echo smarty_function_input(array('name'=>'restrictedUsername','style'=>"width:97%;"),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'restrictedUsername'),$_smarty_tpl);?>
</td>
                <td class="ow_submit ow_valign_middle"><?php echo smarty_function_submit(array('name'=>'addUsername'),$_smarty_tpl);?>
</td>
            </tr>
        </table>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'restrictedUsernamesForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'iconClass'=>"ow_ic_edit",'langLabel'=>'admin+restrictedusernames_add_username'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    </div>

    <div class="ow_column ow_right">
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box_cap",'type'=>'empty','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+restrictedusernames_restricted_list_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box_cap",'type'=>'empty','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+restrictedusernames_restricted_list_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box_cap",'type'=>'empty','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+restrictedusernames_restricted_list_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


        <table class="ow_table_2">
	        <?php
$_from = $_smarty_tpl->tpl_vars['restricted_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item'] : false;
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_item'] = new Smarty_Variable(array());
$__foreach_item_0_first = true;
$__foreach_item_0_iteration=0;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['first'] = $__foreach_item_0_first;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['last'] = $__foreach_item_0_iteration == $__foreach_item_0_total;
$__foreach_item_0_first = false;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
            <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1, ow_alt2'),$_smarty_tpl);?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['first'] : null)) {?>ow_tr_first<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['last'] : null)) {?>ow_tr_last<?php }?>" onmouseover="$('span.del-cont', this).show();" onmouseout="$('span.del-cont', this).hide();">
                <td style="width: 90%;">
                    <div class="ow_left ow_txtleft">
		        		<?php echo $_smarty_tpl->tpl_vars['item']->value->username;?>

                    </div>
                </td>
                <td class="ns-hover-block">
                    <div style="width: 50px;">
                        <span class="del-cont" style="display: none;">
                            <a class="ow_lbutton ow_red" href="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_RestrictedUsernames:delete"),$_smarty_tpl);?>
?username=<?php echo $_smarty_tpl->tpl_vars['item']->value->username;?>
"
		                    		onclick="return(confirm('<?php echo smarty_function_text(array('key'=>"admin+are_you_sure"),$_smarty_tpl);?>
'));">
		                    		<?php echo smarty_function_text(array('key'=>"admin+delete"),$_smarty_tpl);?>

                        </a>
                    </span>
                </div>
            </td>
        </tr>
	        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_item'] = $__foreach_item_0_saved;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
    </table>

</div>
</div><?php }
}
