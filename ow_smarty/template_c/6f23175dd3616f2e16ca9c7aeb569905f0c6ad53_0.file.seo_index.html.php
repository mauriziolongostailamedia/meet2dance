<?php
/* Smarty version 3.1.29, created on 2016-10-15 11:24:31
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/seo_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5801f5cfa125f1_97462423',
  'file_dependency' => 
  array (
    '6f23175dd3616f2e16ca9c7aeb569905f0c6ad53' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/seo_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5801f5cfa125f1_97462423 ($_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_html_options')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
?>
<style>
    .ow_info_icon {
        width: 20px;
        height: 20px;
        display: inline-block;
    }
    .ow_info_icon:hover {
        cursor: pointer;
    }
    .ow_letter_count {
        padding-top: 7px;
    }
    .ow_letter_count input {
        width: 44px;
        height: 24px;
    }
</style>
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

addInputCounter = function( $input, $counter, $count ){
    $counter.val($input.val().length);

    if( $counter.val()-$count == 1 ){
        $counter.addClass("ow_red");
    }

    if( $count-$counter.val() == 1 ){
        $counter.removeClass("ow_red");
    }
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<div class="seo_admin_select ow_stdmargin">
    <span><?php echo smarty_function_text(array('key'=>'base+seo_meta_choose_pages_label'),$_smarty_tpl);?>
 </span><?php echo smarty_function_html_options(array('name'=>'meta_sections','options'=>$_smarty_tpl->tpl_vars['sections']->value,'selected'=>$_smarty_tpl->tpl_vars['currentSection']->value,'onchange'=>"window.location='".((string)$_smarty_tpl->tpl_vars['currentUrl']->value)."'.replace('#sec#', this.value)"),$_smarty_tpl);?>

</div>
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>"meta_form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"meta_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1 ow_form">
     <tbody>
     <?php
$_from = $_smarty_tpl->tpl_vars['entities']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['iconClass'])) {
echo $_smarty_tpl->tpl_vars['item']->value['iconClass'];
} else { ?>ow_ic_file<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
            </th>
        </tr>
        <tr class="ow_alt1">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>"seo_title_".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>"seo_title_".((string)$_smarty_tpl->tpl_vars['key']->value),'onkeydown'=>"addInputCounter("."$"."(this), "."$"."('input.seo_title_".((string)$_smarty_tpl->tpl_vars['key']->value)."'), ".((string)$_smarty_tpl->tpl_vars['item']->value['title']['max']).")"),$_smarty_tpl);?>

                <div class="ow_letter_count ow_txtright ow_small"><input class="seo_title_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" readonly="" type="text" name="" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title']['length'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['title']['isRed']) {?> class="ow_red"<?php }?>></div>
                <?php echo smarty_function_error(array('name'=>"seo_title_".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>

            </td>
            <td class="ow_desc ow_small"><span class="ow_info_icon ow_ic_info" title="<?php echo smarty_function_desc(array('name'=>"seo_title_".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>
"></span></td>
        </tr>
        <tr class="ow_alt2">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>"seo_description_".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>"seo_description_".((string)$_smarty_tpl->tpl_vars['key']->value),'onkeydown'=>"addInputCounter("."$"."(this), "."$"."('input.seo_desc_".((string)$_smarty_tpl->tpl_vars['key']->value)."'), ".((string)$_smarty_tpl->tpl_vars['item']->value['desc']['max']).")"),$_smarty_tpl);?>

                <div class="ow_letter_count ow_txtright ow_small"><input class="seo_desc_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" readonly="" type="text" name="" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['desc']['length'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['desc']['isRed']) {?> class="ow_red"<?php }?>></div>
                <?php echo smarty_function_error(array('name'=>"seo_description_".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>

            </td>
            <td class="ow_desc ow_small"><span class="ow_info_icon ow_ic_info" title="<?php echo smarty_function_desc(array('name'=>"seo_description_".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>
"></span></td>
        </tr>
        <tr class="ow_alt1">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>"seo_keywords_".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>"seo_keywords_".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>"seo_keywords_".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>
</td>
            <td class="ow_desc ow_small"></td>
        </tr>
        <tr class="ow_alt2 ow_tr_last">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>"seo_index_".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>"seo_index_".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>
</td>
            <td class="ow_desc"></td>
        </tr>
        <tr class="ow_tr_delimiter"><td></td></tr>
     <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
if ($__foreach_item_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_0_saved_key;
}
?>
    </tbody>
</table>
<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>"save"),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"meta_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
