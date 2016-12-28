<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:33:55
  from "/home/dancemee/public_html/ow_plugins/notifications/views/controllers/notifications_settings.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe90230f0654_17597898',
  'file_dependency' => 
  array (
    'f53cedec813e791a6929a7474b5093c528a2e819' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/notifications/views/controllers/notifications_settings.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe90230f0654_17597898 ($_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>




<div class="ow_wide ow_automargin">
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>"notificationSettingForm")); $_block_repeat=true; echo smarty_block_form(array('name'=>"notificationSettingForm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<table class="ow_table_1 ow_form">

    <?php
$_from = $_smarty_tpl->tpl_vars['actions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_plugins_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_plugins']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_plugins'] : false;
$__foreach_plugins_0_saved_item = isset($_smarty_tpl->tpl_vars['plugin']) ? $_smarty_tpl->tpl_vars['plugin'] : false;
$__foreach_plugins_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_plugins'] = new Smarty_Variable(array());
$__foreach_plugins_0_iteration=0;
$_smarty_tpl->tpl_vars['plugin']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
$__foreach_plugins_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_plugins']->value['last'] = $__foreach_plugins_0_iteration == $__foreach_plugins_0_total;
$__foreach_plugins_0_saved_local_item = $_smarty_tpl->tpl_vars['plugin'];
?>
	    <tr class="ow_tr_first">
	        <th class="ow_name ow_txtleft" colspan="2">
	            <span class="ow_section_icon <?php echo $_smarty_tpl->tpl_vars['plugin']->value['icon'];?>
"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['label'];?>
</span>
	        </th>
	    </tr>
	    <?php
$_from = $_smarty_tpl->tpl_vars['plugin']->value['actions'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_actions_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_actions']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actions'] : false;
$__foreach_actions_1_saved_item = isset($_smarty_tpl->tpl_vars['action']) ? $_smarty_tpl->tpl_vars['action'] : false;
$__foreach_actions_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['action'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_actions'] = new Smarty_Variable(array());
$__foreach_actions_1_iteration=0;
$_smarty_tpl->tpl_vars['action']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
$__foreach_actions_1_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['last'] = $__foreach_actions_1_iteration == $__foreach_actions_1_total;
$__foreach_actions_1_saved_local_item = $_smarty_tpl->tpl_vars['action'];
?>
	        <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['last'] : null)) {?>ow_tr_last<?php }?>">
		        <td class="ow_label"><?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['action']->value['action']),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo $_smarty_tpl->tpl_vars['action']->value['description'];?>
</td>
		    </tr>
	    <?php
$_smarty_tpl->tpl_vars['action'] = $__foreach_actions_1_saved_local_item;
}
if ($__foreach_actions_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_actions'] = $__foreach_actions_1_saved;
}
if ($__foreach_actions_1_saved_item) {
$_smarty_tpl->tpl_vars['action'] = $__foreach_actions_1_saved_item;
}
?>
		<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_plugins']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_plugins']->value['last'] : null)) {?>
			<tr class="ow_tr_delimiter"><td></td></tr>
		<?php }?>
    <?php
$_smarty_tpl->tpl_vars['plugin'] = $__foreach_plugins_0_saved_local_item;
}
if ($__foreach_plugins_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_plugins'] = $__foreach_plugins_0_saved;
}
if ($__foreach_plugins_0_saved_item) {
$_smarty_tpl->tpl_vars['plugin'] = $__foreach_plugins_0_saved_item;
}
?>

</table>

<table class="ow_table_1 ow_form">
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft">
                <span class="ow_section_icon ow_ic_script"><?php echo smarty_function_text(array('key'=>"notifications+config_schedule_title"),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="ow_alt1 ow_tr_last">
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>"schedule"),$_smarty_tpl);?>
</td>
        </tr>
</table>

<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save'),$_smarty_tpl);?>
</div><div class="ow_right"></div></div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"notificationSettingForm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

</div><?php }
}
