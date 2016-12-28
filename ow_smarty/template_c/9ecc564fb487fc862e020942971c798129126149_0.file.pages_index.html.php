<?php
/* Smarty version 3.1.29, created on 2016-10-13 11:18:09
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/pages_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff5151acf0c8_57511865',
  'file_dependency' => 
  array (
    '9ecc564fb487fc862e020942971c798129126149' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/pages_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff5151acf0c8_57511865 ($_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_desc')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


$(document).ready(function(){

	$radio1 = $('#address1');
	$radio2 = $('#address2');

	$url1 = $('#url1');
	$url2 = $('#url2');

	$radio1.bind('click', function(){
		var disabled = !this.checked;
		$('#meta-keywords-tr').show();
		$('#meta-desc-tr').show();
		$('#meta-tags').attr( 'disabled', disabled );
		$('#content').attr( 'disabled', disabled );
		$('#content-tr').show();
		$('#title').attr( 'disabled', disabled );
		$('#title-tr').show();
	}).bind('click', function(){
		$('#type').attr('value', 'local');
	});
	
	$radio1.bind('click', function(){
		$url1[0].focus();
	})

<?php if (!$_smarty_tpl->tpl_vars['isLocal']->value) {?>
	
	$('#meta-keywords-tr').hide();
	$('#meta-desc-tr').hide();
	$('#content-tr').hide();
	$('#title-tr').hide();
	$('#address2').attr('checked', 'checked');
	
<?php } else { ?>

	$('#address1').attr('checked', 'checked');

<?php }?>

	$radio2.bind('click', function(){
		var disabled = this.checked;
		$('#meta-keywords-tr').hide();
		$('#meta-desc-tr').hide();
		$('#meta-tags').attr( 'disabled', disabled );
		$('#content').attr( 'disabled', disabled );
		$('#content-tr').hide();
		$('#title').attr( 'disabled', disabled );
		$('#title-tr').hide();
	}).bind('click', function(){

		$('#type').attr('value', 'external');
	}).bind('click', function(){
		$url2[0].focus();
	});
});

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>"page-add-form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"page-add-form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1" id="new-page-form">

    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 ow_tr_first">
        <td style="width: 15%;" class="ow_label"><?php echo smarty_function_label(array('name'=>"name"),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>"name"),$_smarty_tpl);?>

        	<br /><?php echo smarty_function_error(array('name'=>"name"),$_smarty_tpl);?>

        </td>
        <td class="ow_description ow_small" style="width: 25%">
        </td>
    </tr>

    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>"type"),$_smarty_tpl);?>
</td>
        <td class="ow_value">
	       	<?php echo smarty_function_input(array('name'=>"type",'style'=>"display: none;"),$_smarty_tpl);?>

	           <input type="radio" name="address" id="address1"/>
	           <label for="address1">Local page</label>, http://yoursite.com/<?php echo smarty_function_input(array('name'=>"local-url",'style'=>"width: 200px;margin-left: 6px;"),$_smarty_tpl);?>
<br /> <?php echo smarty_function_error(array('name'=>'local-url'),$_smarty_tpl);?>

	           <div class="ow_center" style="margin:5px 0;">- <?php echo smarty_function_text(array('key'=>"admin+pages_new_form_or"),$_smarty_tpl);?>
 -</div>
	           <input type="radio" name="address" id="address2" />
	           <label for="address2">External URL</label>
	           <?php echo smarty_function_input(array('name'=>"external-url"),$_smarty_tpl);?>

	           <?php echo smarty_function_error(array('name'=>'external-url'),$_smarty_tpl);?>

	           <?php echo smarty_function_input(array('name'=>"ext-open-in-new-window"),$_smarty_tpl);?>

	           <?php echo smarty_function_label(array('name'=>"ext-open-in-new-window"),$_smarty_tpl);?>

      	</td>
      	<td class="ow_description ow_small"></td>
    </tr>
    <tr id="title-tr" class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
">
        <td class="ow_label">
        	<?php echo smarty_function_label(array('name'=>"title"),$_smarty_tpl);?>

       	</td>
        <td class="ow_value">
        	<?php echo smarty_function_input(array('name'=>"title"),$_smarty_tpl);?>

        	<br /><?php echo smarty_function_error(array('name'=>"title"),$_smarty_tpl);?>

        </td>
        <td class="ow_description ow_small"></td>
    </tr>      
	
    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>"visible-for"),$_smarty_tpl);?>
</td>
        <td class="ow_value">
        	<?php echo smarty_function_input(array('name'=>"visible-for"),$_smarty_tpl);?>

        	<br /><?php echo smarty_function_error(array('name'=>"visible-for"),$_smarty_tpl);?>

       </td>
       <td class="ow_description ow_small"></td>
    </tr>

	<tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 ow_tr_last" id="content-tr">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>"content"),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>"content"),$_smarty_tpl);?>

        	<br /><?php echo smarty_function_error(array('name'=>"content"),$_smarty_tpl);?>

        </td>
        <td class="ow_description ow_small"> <?php echo smarty_function_desc(array('name'=>"content"),$_smarty_tpl);?>
</td>
    </tr>

	<tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
" id="meta-desc-tr">
	<td class="ow_label"><?php echo smarty_function_label(array('name'=>"meta_desc"),$_smarty_tpl);?>
</td>
	<td class="ow_value"><?php echo smarty_function_input(array('name'=>"meta_desc"),$_smarty_tpl);?>

		<br /><?php echo smarty_function_error(array('name'=>"meta_desc"),$_smarty_tpl);?>

	</td>
	<td class="ow_description ow_small"> <?php echo smarty_function_desc(array('name'=>"meta_desc"),$_smarty_tpl);?>

	</td>
	</tr>

	<tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
" id="meta-keywords-tr">
	<td class="ow_label"><?php echo smarty_function_label(array('name'=>"meta_keywords"),$_smarty_tpl);?>
</td>
	<td class="ow_value"><?php echo smarty_function_input(array('name'=>"meta_keywords"),$_smarty_tpl);?>

		<br /><?php echo smarty_function_error(array('name'=>"meta_keywords"),$_smarty_tpl);?>

	</td>
	<td class="ow_description ow_small"> <?php echo smarty_function_desc(array('name'=>"meta_keywords"),$_smarty_tpl);?>

	</td>
	</tr>
</table>
<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>"submit",'class'=>"ow_positive"),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"page-add-form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
