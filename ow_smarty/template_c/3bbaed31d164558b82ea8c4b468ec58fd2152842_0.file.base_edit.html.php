<?php
/* Smarty version 3.1.29, created on 2016-10-13 09:22:20
  from "/home/dancemee/public_html/ow_plugins/event/views/controllers/base_edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff362ce26903_09711878',
  'file_dependency' => 
  array (
    '3bbaed31d164558b82ea8c4b468ec58fd2152842' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/event/views/controllers/base_edit.html',
      1 => 1476171742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff362ce26903_09711878 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



.ow_event_time {
    padding-left: 3px;
}


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="ow_superwide ow_automargin">

    <?php if (empty($_smarty_tpl->tpl_vars['err_msg']->value)) {?>
		<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'event_edit')); $_block_repeat=true; echo smarty_block_form(array('name'=>'event_edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<table class="ow_table_1 ow_form ow_stdmargin">
            <tr class="ow_alt2 ow_tr_first">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'title'),$_smarty_tpl);?>
</td>
                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'title'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'title'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_title_desc'),$_smarty_tpl);?>
</td>
		    </tr>
		    <tr class="ow_alt1">
		        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'event+add_form_date_label'),$_smarty_tpl);?>
</td>
                <td class="ow_value">
                    <div class="clearfix">
                        <div class="ow_left ow_event_date"><?php echo smarty_function_input(array('name'=>'start_date'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'start_date'),$_smarty_tpl);?>
</div>
                        <div class="ow_left ow_event_time"><?php echo smarty_function_input(array('name'=>'start_time'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'start_time'),$_smarty_tpl);?>
</div>
                    </div>
                </td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_date_desc'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt2" id="<?php echo $_smarty_tpl->tpl_vars['tdId']->value;?>
">
		        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'event+add_form_end_date_label'),$_smarty_tpl);?>
 <input type="checkbox" name="endDateFlag" id="<?php echo $_smarty_tpl->tpl_vars['chId']->value;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['endDateFlag']->value)) {?> checked="checked"<?php }?> /></td>
		        <td class="ow_value">
                    <div class="clearfix">
                        <div class="ow_left ow_event_date">
                            <?php echo smarty_function_input(array('name'=>'end_date'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'end_date'),$_smarty_tpl);?>
</div>
                        <div class="ow_left ow_event_time"><?php echo smarty_function_input(array('name'=>'end_time'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'end_time'),$_smarty_tpl);?>
</div>
                    </div>
                </td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_end_date_desc'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt1">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'desc'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'desc'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'desc'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_desc_desc'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt2">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'location'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'location'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'location'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_location_desc'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt1">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'image'),$_smarty_tpl);?>
</td>
                <td class="ow_value"><?php if (!empty($_smarty_tpl->tpl_vars['imgsrc']->value)) {?><img src="<?php echo $_smarty_tpl->tpl_vars['imgsrc']->value;?>
" />&nbsp;&nbsp;<?php }
echo smarty_function_input(array('name'=>'image'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'image'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_image_desc'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt2">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'who_can_view'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'who_can_view'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'who_can_view'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_who_can_view_desc'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt1 ow_tr_last">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'who_can_invite'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'who_can_invite'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'who_can_invite'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'event+add_form_who_can_invite_desc'),$_smarty_tpl);?>
</td>
		    </tr>
		</table>
		<div class="clearfix ow_stdmargin ow_submit">
			<div class="ow_right"><?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_ic_edit'),$_smarty_tpl);?>
</div>
		</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'event_edit'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php } else { ?>
        <div class="ow_anno ow_std_margin ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['err_msg']->value;?>
</div>
    <?php }?>
</div><?php }
}
