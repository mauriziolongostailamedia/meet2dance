<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:21:32
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/themes_choose_theme.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf28c8f3950_10767978',
  'file_dependency' => 
  array (
    '486da5e44fb9b4c64071546fb58bdf86758a6ded' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/themes_choose_theme.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf28c8f3950_10767978 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
?>
<div class="clearfix ow_admin_choose_theme">

<div class="selected_theme_info">
<div class="selected_theme_info_stick">
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>"ow_ic_info",'langLabel'=>'admin+theme_info_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>"ow_ic_info",'langLabel'=>'admin+theme_info_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<div class="themes_preview">
    <div class="theme_wrap"><a onclick="new OW_FloatBox({$contents:$('.selected_theme_info .theme_preview'), $title:'Preview', width:'720px'})" class="theme_icon" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['previewUrl'];?>
);"></a></div>
    <div class="theme_text_wrap">
        <div class="theme_title"><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['title'];?>
</div>
        <div class="theme_desc"><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['description'];?>
</div>
    </div>
</div>
    <div class="theme_info">
			<table class="ow_table_3">
			<tr class="ow_tr_first">
				<td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+theme_info_author_label'),$_smarty_tpl);?>
:</td>
				<td class="ow_value"><span class="author"><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['author'];?>
</span></td>
			</tr>
			<tr>
				<td class="ow_label ow_tr_last"><?php echo smarty_function_text(array('key'=>'admin+theme_info_author_url_label'),$_smarty_tpl);?>
:</td>
				<td class="ow_value"><span class="author_url"><a href="<?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['authorUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['authorUrl'];?>
</a></span></td>
			</tr>
			</table>
        <div class="clearfix">
            <div class="ow_right theme_control_button ow_btn_delimiter">
                <span class="dlt_btn"<?php if (empty($_smarty_tpl->tpl_vars['themeInfo']->value['delete_url'])) {?> style="display:none;"<?php }?>>
                    <?php echo smarty_function_decorator(array('name'=>'button','class'=>'theme_select_delete_btn ow_ic_delete','langLabel'=>'admin+themes_choose_delete_button_label'),$_smarty_tpl);?>

                </span> 
                <span class="lsn_btn"<?php if (empty($_smarty_tpl->tpl_vars['themeInfo']->value['license_url'])) {?> style="display:none;"<?php }?>>
                    <?php echo smarty_function_decorator(array('name'=>'button','class'=>'theme_select_lsn_btn','langLabel'=>'admin+manage_plugins_add_license_label'),$_smarty_tpl);?>

                </span> 
                <?php echo smarty_function_decorator(array('name'=>'button','class'=>'theme_select_submit ow_positive','langLabel'=>'admin+themes_choose_activate_button_label'),$_smarty_tpl);?>
</div></div>
            <div style="display: none;"><div class="theme_preview" style="text-align: center;"><img src="<?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['previewUrl'];?>
" /></div></div>
		</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>"ow_ic_info",'langLabel'=>'admin+theme_info_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

</div>
</div>

<div class="theme_thumbs">
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+themes_choose_list_cap_title')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+themes_choose_list_cap_title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="themes_select clearfix">
<?php
$_from = $_smarty_tpl->tpl_vars['themes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_theme_0_saved_item = isset($_smarty_tpl->tpl_vars['theme']) ? $_smarty_tpl->tpl_vars['theme'] : false;
$_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['theme']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
$__foreach_theme_0_saved_local_item = $_smarty_tpl->tpl_vars['theme'];
?>
<div class="theme_item<?php if ($_smarty_tpl->tpl_vars['theme']->value['active']) {?> active<?php }
if (!empty($_smarty_tpl->tpl_vars['theme']->value['update_url']) && empty($_smarty_tpl->tpl_vars['theme']->value['license_url'])) {?> theme_update<?php }
if (!empty($_smarty_tpl->tpl_vars['theme']->value['license_url'])) {?> theme_invalid<?php }?>">
	<a class="theme_icon <?php echo $_smarty_tpl->tpl_vars['theme']->value['key'];?>
" href="javascript://" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['theme']->value['iconUrl'];?>
);">
		<span class="fake<?php if ($_smarty_tpl->tpl_vars['theme']->value['active']) {?> clicked<?php }?>"></span>
		<span class="name"><?php echo $_smarty_tpl->tpl_vars['theme']->value['title'];?>
</span>
	</a>
    <?php if ($_smarty_tpl->tpl_vars['theme']->value['update_url'] && empty($_smarty_tpl->tpl_vars['theme']->value['license_url'])) {?><div class="theme_update_label"><a class="ow_lbutton ow_green" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value['update_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_update_button_label'),$_smarty_tpl);?>
</a></div><?php }?>
</div>
<?php
$_smarty_tpl->tpl_vars['theme'] = $__foreach_theme_0_saved_local_item;
}
if ($__foreach_theme_0_saved_item) {
$_smarty_tpl->tpl_vars['theme'] = $__foreach_theme_0_saved_item;
}
?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+themes_choose_list_cap_title'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+themes_admin_list_cap_title')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+themes_admin_list_cap_title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="themes_select admin_themes_select clearfix">
<?php
$_from = $_smarty_tpl->tpl_vars['adminThemes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_theme_1_saved_item = isset($_smarty_tpl->tpl_vars['theme']) ? $_smarty_tpl->tpl_vars['theme'] : false;
$_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['theme']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
$__foreach_theme_1_saved_local_item = $_smarty_tpl->tpl_vars['theme'];
?>

<div class="theme_item<?php if ($_smarty_tpl->tpl_vars['theme']->value['active']) {?> active<?php }
if ($_smarty_tpl->tpl_vars['theme']->value['update_url']) {?> theme_update<?php }?>">
    <a class="theme_icon <?php echo $_smarty_tpl->tpl_vars['theme']->value['key'];?>
" href="javascript://" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['theme']->value['iconUrl'];?>
);">
		<span class="fake clicked"></span>
		<span class="name"><?php echo $_smarty_tpl->tpl_vars['theme']->value['title'];?>
</span>
	</a>
    <?php if ($_smarty_tpl->tpl_vars['theme']->value['update_url']) {?><div class="theme_update_label"><a class="ow_lbutton ow_green" href="<?php echo $_smarty_tpl->tpl_vars['theme']->value['update_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_update_button_label'),$_smarty_tpl);?>
</a></div><?php }?>
</div>

<?php
$_smarty_tpl->tpl_vars['theme'] = $__foreach_theme_1_saved_local_item;
}
if ($__foreach_theme_1_saved_item) {
$_smarty_tpl->tpl_vars['theme'] = $__foreach_theme_1_saved_item;
}
?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>"ow_ic_monitor",'langLabel'=>'admin+themes_admin_list_cap_title'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+themes_add_new_box_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+themes_add_new_box_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'theme-add')); $_block_repeat=true; echo smarty_block_form(array('name'=>'theme-add'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_center ow_stdmargin">
<?php echo smarty_function_input(array('name'=>'file'),$_smarty_tpl);?>

</div>
<div class="clearfix"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'theme-add'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+themes_add_new_box_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

</div>
    <div style="display: none;">
        <div class="delete_confirm_node clearfix">    
            <div class="message ow_stdmargin"></div>
            <div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'theme_select_delete ow_positive','langLabel'=>'base+yes'),$_smarty_tpl);?>
</div>
        </div>
    </div>
</div>
<?php }
}
