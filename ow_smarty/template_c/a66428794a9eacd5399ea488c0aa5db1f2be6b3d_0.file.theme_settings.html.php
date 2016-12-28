<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:21:35
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/theme_settings.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf28ff000e8_70636053',
  'file_dependency' => 
  array (
    'a66428794a9eacd5399ea488c0aa5db1f2be6b3d' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/theme_settings.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf28ff000e8_70636053 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.theme_icon{
	background-repeat:no-repeat;
	background-position:50% 50%;
	height:180px;
	width:180px;
}

.theme_title{
	font-weight:bold;
}

.theme_desc{
	padding:10px 0;
}

.theme_controls input[type="text"]{
	width:232px;
	padding:4px;
}

.theme_control_image{
	background-repeat:no-repeat;
	background-position:0% 0%;
	border:1px solid #ccc;
	height:40px;
	width:170px;
    float:left;
    cursor:pointer;
}

.theme_controls select{
	width:240px;
}

body table.theme_controls td.ow_label{
	width:35%;
}

body table.theme_controls td.ow_input{
	width:30%;
}

body table.theme_controls td.ow_desc{
	text-align:left;
	width:35%;
}

.color_input input[type="text"]{
	width:170px;
}

.theme_controls .color_button{
	width:30px;
	height:27px;
	padding:0;
	box-shadow: 0px 0px 2px rgba(0,0,0,0.5);
}

.preview_graphics{
    background-repeat:no-repeat;
	background-position:50% 50%;
	border:1px solid #ccc;
    width:500px;
    height:350px;
    margin:0 auto;
}


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>

<div class="clearfix">
	<div style="float:left;width:23%;"><div class="theme_icon" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['iconUrl'];?>
);"></div></div>
	<div style="float:right;width:74%;padding:5px;">
		<div class="theme_title"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['title'])) {
echo $_smarty_tpl->tpl_vars['themeInfo']->value['title'];
} else { ?>-<?php }?></div>
		<div class="theme_desc"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['description'])) {
echo $_smarty_tpl->tpl_vars['themeInfo']->value['description'];
} else { ?>-<?php }?></div>
		<div class="theme_info">
			<table class="ow_table_3" style="width:100px">
				<tr class="ow_tr_first">
					<td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+theme_info_version_label'),$_smarty_tpl);?>
:</td>
					<td class="ow_value"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['version'])) {
echo $_smarty_tpl->tpl_vars['themeInfo']->value['version'];
} else { ?>-<?php }?></td>
				</tr>
				<tr>
					<td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+theme_info_compatibility_label'),$_smarty_tpl);?>
:</td>
					<td class="ow_value"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['compatibility'])) {
echo $_smarty_tpl->tpl_vars['themeInfo']->value['compatibility'];
} else { ?>-<?php }?></td>
				</tr>
				<tr>
					<td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+theme_info_author_label'),$_smarty_tpl);?>
:</td>
					<td class="ow_value"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['author'])) {
echo $_smarty_tpl->tpl_vars['themeInfo']->value['author'];
} else { ?>-<?php }?></td>
				</tr>
				<tr class="ow_tr_last">
					<td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+theme_info_author_url_label'),$_smarty_tpl);?>
:</td>
					<td class="ow_value"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['authorUrl'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['authorUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['authorUrl'];?>
</a><?php } else { ?>-<?php }?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','langLabel'=>'admin+theme_settings_cap_label','iconClass'=>'ow_ic_edit')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','langLabel'=>'admin+theme_settings_cap_label','iconClass'=>'ow_ic_edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_superwide ow_automargin">
<?php if (isset($_smarty_tpl->tpl_vars['noControls']->value) && $_smarty_tpl->tpl_vars['noControls']->value) {?>
<div class="no_content"><?php echo smarty_function_text(array('key'=>'admin+theme_settings_no_controls_label'),$_smarty_tpl);?>
</div>
<?php } else {
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'theme-edit')); $_block_repeat=true; echo smarty_block_form(array('name'=>'theme-edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_form ow_table_1 theme_controls">
<?php
$_from = $_smarty_tpl->tpl_vars['inputArray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_inputs_0_saved_item = isset($_smarty_tpl->tpl_vars['inputs']) ? $_smarty_tpl->tpl_vars['inputs'] : false;
$__foreach_inputs_0_saved_key = isset($_smarty_tpl->tpl_vars['section']) ? $_smarty_tpl->tpl_vars['section'] : false;
$_smarty_tpl->tpl_vars['inputs'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['inputs']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['inputs']->value) {
$_smarty_tpl->tpl_vars['inputs']->_loop = true;
$__foreach_inputs_0_saved_local_item = $_smarty_tpl->tpl_vars['inputs'];
?>
   <tr class="ow_tr_first">
	   <th colspan="10" style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['section']->value;?>
</th>
   </tr>
   <?php
$_from = $_smarty_tpl->tpl_vars['inputs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i'] : false;
$__foreach_i_1_saved_item = isset($_smarty_tpl->tpl_vars['input']) ? $_smarty_tpl->tpl_vars['input'] : false;
$__foreach_i_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['input'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_i'] = new Smarty_Variable(array());
$__foreach_i_1_iteration=0;
$_smarty_tpl->tpl_vars['input']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->_loop = true;
$__foreach_i_1_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $__foreach_i_1_iteration == $__foreach_i_1_total;
$__foreach_i_1_saved_local_item = $_smarty_tpl->tpl_vars['input'];
?>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1,ow_alt2','name'=>$_smarty_tpl->tpl_vars['section']->value),$_smarty_tpl);?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?>ow_tr_last<?php }?>">
      <td class="ow_label"><?php echo $_smarty_tpl->tpl_vars['input']->value['title'];?>
</td>
      <td class="ow_value"><?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['input']->value['name']),$_smarty_tpl);?>
</td>
      <td class="ow_desc"><?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])) {
echo $_smarty_tpl->tpl_vars['input']->value['desc'];
}?></td>
      
   </tr>
   <?php
$_smarty_tpl->tpl_vars['input'] = $__foreach_i_1_saved_local_item;
}
if ($__foreach_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i'] = $__foreach_i_1_saved;
}
if ($__foreach_i_1_saved_item) {
$_smarty_tpl->tpl_vars['input'] = $__foreach_i_1_saved_item;
}
?>
   <tr class="ow_tr_delimiter"><td></td></tr>
<?php
$_smarty_tpl->tpl_vars['inputs'] = $__foreach_inputs_0_saved_local_item;
}
if ($__foreach_inputs_0_saved_item) {
$_smarty_tpl->tpl_vars['inputs'] = $__foreach_inputs_0_saved_item;
}
if ($__foreach_inputs_0_saved_key) {
$_smarty_tpl->tpl_vars['section'] = $__foreach_inputs_0_saved_key;
}
?>
       <?php $_smarty_tpl->_cache['capture_stack'][] = array('resetLabel', null, null); ob_start();
echo smarty_function_text(array('key'=>'admin+theme_settings_reset_confirm_message'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</table>
    <div class="clearfix ow_stdmargin ow_btn_delimiter">
        <div class="ow_right">
            <?php echo smarty_function_decorator(array('name'=>"button",'class'=>'ow_red ow_ic_delete','langLabel'=>'admin+themes_settings_reset_label','onclick'=>"if(confirm('".((string)(isset($_smarty_tpl->_cache['__smarty_capture']['resetLabel']) ? $_smarty_tpl->_cache['__smarty_capture']['resetLabel'] : null))."')) window.location = '".((string)$_smarty_tpl->tpl_vars['resetUrl']->value)."';"),$_smarty_tpl);?>
    
			<?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive ow_btn_delimiter'),$_smarty_tpl);?>
     
        </div>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'theme-edit'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','langLabel'=>'admin+theme_settings_cap_label','iconClass'=>'ow_ic_edit'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
