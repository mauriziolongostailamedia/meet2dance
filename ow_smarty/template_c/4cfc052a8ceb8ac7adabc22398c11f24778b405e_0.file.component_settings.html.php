<?php
/* Smarty version 3.1.29, created on 2016-10-12 22:46:35
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/component_settings.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fea12b05cfc2_41929798',
  'file_dependency' => 
  array (
    '4cfc052a8ceb8ac7adabc22398c11f24778b405e' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/component_settings.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fea12b05cfc2_41929798 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value) {?>
<table class="ow_table_1 ow_small ow_form ow_smallmargin">
    <?php
$_from = $_smarty_tpl->tpl_vars['settings']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i'] : false;
$__foreach_i_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_i_0_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$__foreach_i_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_i'] = new Smarty_Variable(array());
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$__foreach_i_0_first = true;
$__foreach_i_0_iteration=0;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_i_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first'] = $__foreach_i_0_first;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $__foreach_i_0_iteration == $__foreach_i_0_total;
$__foreach_i_0_first = false;
$__foreach_i_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
        <?php if (!in_array($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['hidden']->value)) {?>
		    <tr class="<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])) {
echo $_smarty_tpl->tpl_vars['item']->value['class'];
}?> <?php if ($_smarty_tpl->tpl_vars['item']->value['display'] == 'table') {
echo smarty_function_cycle(array('name'=>"custom",'values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);
}?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first'] : null)) {?>ow_tr_first<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?>ow_tr_last<?php }?>">
                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['label'])) {?>
                            <td class="ow_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                            <td class="ow_value">
                        <?php } else { ?>
                            <td colspan="2">
                        <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['item']->value['presentation'] == 'custom') {?>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['markup'];?>

		            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['presentation'] == 'number') {?>
		                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" />
		            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['presentation'] == 'text') {?>
		                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" />
		            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['presentation'] == 'textarea') {?>
		                <textarea name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</textarea>
		            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['presentation'] == 'checkbox') {?>
		                <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['value']) {?> checked="checked"<?php }?> />
		            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['presentation'] == 'select') {?>
		                <select name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
		                    <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['optionList'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_label_1_saved_item = isset($_smarty_tpl->tpl_vars['label']) ? $_smarty_tpl->tpl_vars['label'] : false;
$__foreach_label_1_saved_key = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['label'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['label']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
$__foreach_label_1_saved_local_item = $_smarty_tpl->tpl_vars['label'];
?>
		                        <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['item']->value['value']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</option>
		                    <?php
$_smarty_tpl->tpl_vars['label'] = $__foreach_label_1_saved_local_item;
}
if ($__foreach_label_1_saved_item) {
$_smarty_tpl->tpl_vars['label'] = $__foreach_label_1_saved_item;
}
if ($__foreach_label_1_saved_key) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_label_1_saved_key;
}
?>
		                </select>
		            <?php }?>
		            <div id="error_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="setting_error ow_error error"></div>
		        </td>
		    </tr>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_i_0_saved_local_item;
}
if ($__foreach_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i'] = $__foreach_i_0_saved;
}
if ($__foreach_i_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_i_0_saved_item;
}
if ($__foreach_i_0_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_i_0_saved_key;
}
?>
</table>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('iconClass'=>'ow_ic_gear_wheel','langLabel'=>'base+widgets_fb_default_settings_label','name'=>'box','type'=>"empty",'addClass'=>"clearfix")); $_block_repeat=true; echo smarty_block_block_decorator(array('iconClass'=>'ow_ic_gear_wheel','langLabel'=>'base+widgets_fb_default_settings_label','name'=>'box','type'=>"empty",'addClass'=>"clearfix"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <table class="ow_table_1 ow_small ow_form ow_smallmargin">
        <?php if (!in_array('title',$_smarty_tpl->tpl_vars['hidden']->value)) {?>
	        <tr class="<?php echo smarty_function_cycle(array('name'=>"system",'values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 ow_tr_first <?php if (in_array('freeze',$_smarty_tpl->tpl_vars['hidden']->value) && in_array('wrap_in_box',$_smarty_tpl->tpl_vars['hidden']->value) && in_array('show_title',$_smarty_tpl->tpl_vars['hidden']->value)) {?> ow_tr_last<?php }?>">
	            <td class="ow_label"><?php echo smarty_function_text(array('key'=>"base+widgets_default_settings_title"),$_smarty_tpl);?>
</td>
	            <td class="ow_value">
	                <input type="text" name="title" <?php if (isset($_smarty_tpl->tpl_vars['values']->value['title'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['values']->value['title'];?>
" beforevalue="<?php echo $_smarty_tpl->tpl_vars['values']->value['title'];?>
"<?php }?> />
	                <div id="error_title" class="setting_error ow_error error"></div>
	            </td>
	        </tr>
        <?php }?>
        <?php if (!in_array('show_title',$_smarty_tpl->tpl_vars['hidden']->value)) {?>
	        <tr class="<?php echo smarty_function_cycle(array('name'=>"system",'values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);
if (in_array('freeze',$_smarty_tpl->tpl_vars['hidden']->value) && in_array('wrap_in_box',$_smarty_tpl->tpl_vars['hidden']->value)) {?> ow_tr_last<?php }?>">
	            <td class="ow_label"><?php echo smarty_function_text(array('key'=>"base+widgets_default_settings_show_title"),$_smarty_tpl);?>
</td>
	            <td class="ow_value">
	                <input type="checkbox" name="show_title" <?php if (isset($_smarty_tpl->tpl_vars['values']->value['show_title']) && $_smarty_tpl->tpl_vars['values']->value['show_title']) {?>checked="checked"<?php }?> />
                        <?php if (!in_array("icon",$_smarty_tpl->tpl_vars['hidden']->value)) {?>
                            <?php echo smarty_function_text(array('key'=>"base+widgets_default_settings_icon"),$_smarty_tpl);?>
:
                            <select class="choose_icon" name="icon" >
                                <?php
$_from = $_smarty_tpl->tpl_vars['avaliableIcons']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_icon_2_saved_item = isset($_smarty_tpl->tpl_vars['icon']) ? $_smarty_tpl->tpl_vars['icon'] : false;
$_smarty_tpl->tpl_vars['icon'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['icon']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->_loop = true;
$__foreach_icon_2_saved_local_item = $_smarty_tpl->tpl_vars['icon'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['icon']->value['class'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['values']->value['icon']) && $_smarty_tpl->tpl_vars['values']->value['icon'] == $_smarty_tpl->tpl_vars['icon']->value['class']) {?>selected="selected"<?php }?> >
                                        <?php echo $_smarty_tpl->tpl_vars['icon']->value['label'];?>

                                    </option>
                                <?php
$_smarty_tpl->tpl_vars['icon'] = $__foreach_icon_2_saved_local_item;
}
if ($__foreach_icon_2_saved_item) {
$_smarty_tpl->tpl_vars['icon'] = $__foreach_icon_2_saved_item;
}
?>
                            </select>
                        <?php }?>
	            </td>
	        </tr>
        <?php }?>
        <?php if (!in_array('wrap_in_box',$_smarty_tpl->tpl_vars['hidden']->value)) {?>
	        <tr class="<?php echo smarty_function_cycle(array('name'=>"system",'values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 <?php if (in_array('freeze',$_smarty_tpl->tpl_vars['hidden']->value) && in_array('restrict_view',$_smarty_tpl->tpl_vars['hidden']->value)) {?> ow_tr_last<?php }?>">
	            <td class="ow_label"><?php echo smarty_function_text(array('key'=>"base+widgets_default_settings_wib"),$_smarty_tpl);?>
</td>
	            <td class="ow_value">
	                <input type="checkbox" name="wrap_in_box" <?php if (isset($_smarty_tpl->tpl_vars['values']->value['wrap_in_box']) && $_smarty_tpl->tpl_vars['values']->value['wrap_in_box']) {?>checked="checked"<?php }?> />
	            </td>
	        </tr>
        <?php }?>
        <?php if (!in_array('freeze',$_smarty_tpl->tpl_vars['hidden']->value)) {?>
	        <tr class="<?php echo smarty_function_cycle(array('name'=>"system",'values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 <?php if (in_array('restrict_view',$_smarty_tpl->tpl_vars['hidden']->value)) {?>ow_tr_last<?php }?>">
	            <td class="ow_label"><?php echo smarty_function_text(array('key'=>"base+widgets_default_settings_freeze"),$_smarty_tpl);?>
</td>
	            <td class="ow_value">
	                <input type="checkbox" name="freeze" <?php if (isset($_smarty_tpl->tpl_vars['values']->value['freeze']) && $_smarty_tpl->tpl_vars['values']->value['freeze']) {?>checked="checked"<?php }?> />
	            </td>
	        </tr>
        <?php }?>

        <?php if (!in_array('restrict_view',$_smarty_tpl->tpl_vars['hidden']->value)) {?>
	        <tr class="<?php echo smarty_function_cycle(array('name'=>"system",'values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 ow_tr_last" id="ws_restrict_view">
	            <td class="ow_label"><?php echo smarty_function_text(array('key'=>"base+widgets_default_settings_restrict_view"),$_smarty_tpl);?>
</td>
	            <td class="ow_value">
	                <input type="checkbox" name="restrict_view" <?php if (isset($_smarty_tpl->tpl_vars['values']->value['restrict_view']) && $_smarty_tpl->tpl_vars['values']->value['restrict_view']) {?>checked="checked"<?php }?> onclick="$('#ws_access_restrictions')[this.checked ? 'show' : 'hide'](); $('#ws_restrict_view')[this.checked ? 'removeClass' : 'addClass']('ow_tr_last');" />
	            </td>
	        </tr>
                <tr class="<?php echo smarty_function_cycle(array('name'=>"system",'values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 ow_tr_last" id="ws_access_restrictions" <?php if (!isset($_smarty_tpl->tpl_vars['values']->value['restrict_view']) || !$_smarty_tpl->tpl_vars['values']->value['restrict_view']) {?>style="display: none;"<?php }?>>
	            <td class="ow_label"><?php echo smarty_function_text(array('key'=>"base+widgets_default_settings_access_restrictions"),$_smarty_tpl);?>
</td>
	            <td class="ow_value">
                        <?php
$_from = $_smarty_tpl->tpl_vars['roleList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_role_3_saved_item = isset($_smarty_tpl->tpl_vars['role']) ? $_smarty_tpl->tpl_vars['role'] : false;
$_smarty_tpl->tpl_vars['role'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['role']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->_loop = true;
$__foreach_role_3_saved_local_item = $_smarty_tpl->tpl_vars['role'];
?>
                        <input type="checkbox" class="ow_vertical_middle" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->id;?>
" name="access_restrictions[]" <?php if (!isset($_smarty_tpl->tpl_vars['values']->value['access_restrictions']) || in_array($_smarty_tpl->tpl_vars['role']->value->id,$_smarty_tpl->tpl_vars['values']->value['access_restrictions'])) {?>checked="checked"<?php }?> />
                            <?php echo smarty_function_text(array('key'=>"base+authorization_role_".((string)$_smarty_tpl->tpl_vars['role']->value->name)),$_smarty_tpl);?>

                        <?php
$_smarty_tpl->tpl_vars['role'] = $__foreach_role_3_saved_local_item;
}
if ($__foreach_role_3_saved_item) {
$_smarty_tpl->tpl_vars['role'] = $__foreach_role_3_saved_item;
}
?>
	            </td>
	        </tr>
        <?php }?>
    </table>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('iconClass'=>'ow_ic_gear_wheel','langLabel'=>'base+widgets_fb_default_settings_label','name'=>'box','type'=>"empty",'addClass'=>"clearfix"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
