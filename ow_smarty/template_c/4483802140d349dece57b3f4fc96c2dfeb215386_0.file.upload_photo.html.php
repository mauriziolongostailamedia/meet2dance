<?php
/* Smarty version 3.1.29, created on 2016-10-20 20:18:44
  from "/home/dancemee/public_html/ow_plugins/photo/mobile/views/controllers/upload_photo.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58090a8492c6f8_40613593',
  'file_dependency' => 
  array (
    '4483802140d349dece57b3f4fc96c2dfeb215386' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/photo/mobile/views/controllers/upload_photo.html',
      1 => 1475654740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58090a8492c6f8_40613593 ($_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
if ($_smarty_tpl->tpl_vars['auth_msg']->value) {?>
<div class="owm_padding">
    <div class="owm_info owm_anno"><?php echo $_smarty_tpl->tpl_vars['auth_msg']->value;?>
</div>
</div>
<?php } else { ?>
<div class="owm_upload_photo">
    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'upload-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'upload-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="owm_upload_photo_browse_wrap clearfix owm_bg_color_3">
		<div class="owm_upload_photo_left_label">
			<span class="owm_upload_choose_label"><span><?php echo smarty_function_text(array('key'=>'photo+mobile_choose_photo'),$_smarty_tpl);?>
</span></span>
			<span class="owm_upload_replace_label"><span><?php echo smarty_function_text(array('key'=>'photo+mobile_replace_photo'),$_smarty_tpl);?>
</span></span>
		</div>
		<div class="owm_upload_photo_right_label">
			<span class="owm_upload_img_name_label"><img id="photo-file-prevew" style="height: 44px; display: none;" /><span></span></span>
		</div>
		<div class="owm_upload_photo_btn">
			<a class="owm_upload_photo_choose_btn" href="javascript://"><?php echo smarty_function_input(array('name'=>'photo','accept'=>'image/*','id'=>'upload-file-field'),$_smarty_tpl);?>
</a>
		</div>
    </div>
    <div class="owm_input_wrap">
        <?php echo smarty_function_input(array('name'=>'description'),$_smarty_tpl);?>

    </div>
    <div class="owm_upload_photo_album_wrap owm_input_wrap">
		<div class="owm_fake_input">
			<?php echo smarty_function_input(array('name'=>'album'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['albums']->value) {?>
                <div class="owm_choose_album owm_float_right">
                    <?php echo smarty_function_text(array('key'=>'photo+choose_album'),$_smarty_tpl);?>

                    <select id="album_select">
                        <option value="" disabled="disabled" selected="selected"><?php echo smarty_function_text(array('key'=>'photo+choose_album'),$_smarty_tpl);?>
</option>
                        <?php
$_from = $_smarty_tpl->tpl_vars['albums']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_album_0_saved_item = isset($_smarty_tpl->tpl_vars['a']) ? $_smarty_tpl->tpl_vars['a'] : false;
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$__foreach_album_0_saved_local_item = $_smarty_tpl->tpl_vars['a'];
?><option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['dto']->name;?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['dto']->name;?>
</option><?php
$_smarty_tpl->tpl_vars['a'] = $__foreach_album_0_saved_local_item;
}
if ($__foreach_album_0_saved_item) {
$_smarty_tpl->tpl_vars['a'] = $__foreach_album_0_saved_item;
}
?>
                    </select>
                </div>
            <?php }?>
		</div>
    </div>
    <div class="owm_upload_photo_btn_wrap clearfix owm_input_wrap">
        
        <?php echo smarty_function_submit(array('name'=>'submit','class'=>'owm_float_right'),$_smarty_tpl);?>

    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'upload-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

</div>
<?php }
}
}
