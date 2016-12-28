<?php
/* Smarty version 3.1.29, created on 2016-10-16 12:16:47
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/pages_edit_local_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5803538f7ed5f5_33220573',
  'file_dependency' => 
  array (
    '5fc68bcdb80456f6a8b9cefd1a712d6c6b66e422' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/pages_edit_local_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5803538f7ed5f5_33220573 ($_smarty_tpl) {
if (!is_callable('smarty_function_url_for_route')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_url_for')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->_cache['capture_stack'][] = array('default', "back_url", null); ob_start();
echo smarty_function_url_for_route(array('for'=>"admin_pages_main"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="ow_stdmargin"><?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_left_arrow",'onclick'=>"location.href='".((string)$_smarty_tpl->tpl_vars['back_url']->value)."';",'langLabel'=>"base+pages_back"),$_smarty_tpl);?>
</div>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>"edit-form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"edit-form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<input id="edit-form-command" type="hidden" name="command" value="save" />
<table class="ow_form ow_table_1">

    <tr id="title-tr" class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 ow_tr_first">
        <td class="ow_label">
        	<?php echo smarty_function_label(array('name'=>"title"),$_smarty_tpl);?>

       	</td>
        <td class="ow_value">
        	<?php echo smarty_function_input(array('name'=>"title"),$_smarty_tpl);?>

        	<br /><?php echo smarty_function_error(array('name'=>"title"),$_smarty_tpl);?>

        </td>
        <td></td>
    </tr>

    <tr id="title-tr" class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
">
        <td class="ow_label">
        	<?php echo smarty_function_label(array('name'=>"name"),$_smarty_tpl);?>

       	</td>
        <td class="ow_value">
        	<?php echo smarty_function_input(array('name'=>"name"),$_smarty_tpl);?>

        	<br /><?php echo smarty_function_error(array('name'=>"name"),$_smarty_tpl);?>

        </td>
        <td></td>                
    </tr>

    <tr id="title-tr" class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
">
        <td class="ow_label">
        	<?php echo smarty_function_label(array('name'=>"url"),$_smarty_tpl);?>

       	</td>
        <td class="ow_value">
        	http://yoursite.com/<?php echo smarty_function_input(array('name'=>"url",'style'=>"width: 200px;margin-left: 6px;"),$_smarty_tpl);?>
<br />
        	<br /><?php echo smarty_function_error(array('name'=>"url"),$_smarty_tpl);?>

        </td>
        <td></td>                
      </tr>

    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
" >
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>"visible-for"),$_smarty_tpl);?>
</td>
        <td class="ow_value">
        	<?php echo smarty_function_input(array('name'=>"visible-for"),$_smarty_tpl);?>

        	<br /><?php echo smarty_function_error(array('name'=>"visible-for"),$_smarty_tpl);?>

       </td>
        <td></td>       
    </tr>

    <tr id="title-tr" class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 ow_tr_last">
        <td class="ow_label">
        	<?php echo smarty_function_label(array('name'=>"content"),$_smarty_tpl);?>

       	</td>
        <td class="ow_value">
        	<?php echo smarty_function_input(array('name'=>"content"),$_smarty_tpl);?>

        	<br /><?php echo smarty_function_error(array('name'=>"content"),$_smarty_tpl);?>

        </td>
        <td class="ow_description ow_small"><?php echo smarty_function_desc(array('name'=>"content"),$_smarty_tpl);?>
</td>
    </tr>

    <tr  id="title-tr" class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
">
    <td class="ow_label">
        <?php echo smarty_function_label(array('name'=>"meta_desc"),$_smarty_tpl);?>

    </td>
    <td class="ow_value">
        <?php echo smarty_function_input(array('name'=>"meta_desc"),$_smarty_tpl);?>

        <br /><?php echo smarty_function_error(array('name'=>"meta_desc"),$_smarty_tpl);?>

    </td>
    <td class="ow_description ow_small" style="width: 30%;"><?php echo smarty_function_desc(array('name'=>"meta_desc"),$_smarty_tpl);?>
</td>
    </tr>

    <tr  id="title-tr" class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
">
    <td class="ow_label">
        <?php echo smarty_function_label(array('name'=>"meta_keywords"),$_smarty_tpl);?>

    </td>
    <td class="ow_value">
        <?php echo smarty_function_input(array('name'=>"meta_keywords"),$_smarty_tpl);?>

        <br /><?php echo smarty_function_error(array('name'=>"meta_keywords"),$_smarty_tpl);?>

    </td>
    <td class="ow_description ow_small" style="width: 30%;"><?php echo smarty_function_desc(array('name'=>"meta_keywords"),$_smarty_tpl);?>
</td>
    </tr>

 </table>
<div class="clearfix ow_stdmargin ow_btn_delimiter">
    <div class="ow_right">
        <?php $_smarty_tpl->_cache['capture_stack'][] = array('default', "del_js", null); ob_start(); ?>if(confirm('<?php echo smarty_function_text(array('key'=>'admin+are_you_sure'),$_smarty_tpl);?>
')) location.href='<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_PagesEditLocal:delete:[id=>".((string)$_smarty_tpl->tpl_vars['id']->value)."]"),$_smarty_tpl);?>
';<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_red ow_ic_delete ow_negative",'extraString'=>"onclick=\"".((string)$_smarty_tpl->tpl_vars['del_js']->value)."\"",'langLabel'=>"admin+delete_btn_label"),$_smarty_tpl);?>

        
        <?php echo smarty_function_submit(array('name'=>"save",'class'=>"ow_positive"),$_smarty_tpl);?>

    </div>
</div>    
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"edit-form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
