<?php
/* Smarty version 3.1.29, created on 2016-10-15 11:25:46
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/seo_sitemap.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5801f61aa481c2_61850540',
  'file_dependency' => 
  array (
    'b0d41efa3278693a806d522d3c7ca10cfa02f5e9' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/seo_sitemap.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5801f61aa481c2_61850540 ($_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>"sitemapForm")); $_block_repeat=true; echo smarty_block_form(array('name'=>"sitemapForm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_1 ow_form">
        <tbody>

            <tr class="ow_tr_first">
                <th colspan="3" class="ow_name ow_txtleft">
                    <span class="ow_section_icon ow_ic_script"><?php echo smarty_function_text(array('key'=>"admin+seo_sitemap_settings"),$_smarty_tpl);?>
</span>
                </th>
            </tr>

            <tr class="ow_alt<?php echo smarty_function_cycle(array('values'=>'1,2'),$_smarty_tpl);?>
">
                <td class="ow_label">
                    <?php echo smarty_function_label(array('name'=>'schedule'),$_smarty_tpl);?>

                </td>
                <td class="ow_value">
                    <?php echo smarty_function_input(array('name'=>"schedule"),$_smarty_tpl);?>

                    <p><?php echo smarty_function_error(array('name'=>"schedule"),$_smarty_tpl);?>
</p>
                </td>
                <td class="ow_desc ow_small">
                    <?php echo smarty_function_desc(array('name'=>'schedule'),$_smarty_tpl);?>

                </td>
            </tr>

            <tr class="ow_tr_delimiter"><td></td></tr>

            <?php if ($_smarty_tpl->tpl_vars['formEntitites']->value) {?>
                <tr class="ow_tr_first">
                    <th colspan="3" class="ow_name ow_txtleft">
                        <span class="ow_section_icon ow_ic_files">
                            <?php echo smarty_function_text(array('key'=>"admin+seo_sitemap_page_types"),$_smarty_tpl);?>

                        </span>
                    </th>
                </tr>

                <?php
$_from = $_smarty_tpl->tpl_vars['formEntitites']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entityName_0_saved_item = isset($_smarty_tpl->tpl_vars['entityName']) ? $_smarty_tpl->tpl_vars['entityName'] : false;
$_smarty_tpl->tpl_vars['entityName'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entityName']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entityName']->value) {
$_smarty_tpl->tpl_vars['entityName']->_loop = true;
$__foreach_entityName_0_saved_local_item = $_smarty_tpl->tpl_vars['entityName'];
?>
                    <tr class="ow_alt<?php echo smarty_function_cycle(array('values'=>'1,2'),$_smarty_tpl);?>
">
                        <td class="ow_label">
                            <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['entityName']->value),$_smarty_tpl);?>

                        </td>
                        <td class="ow_value" colspan="2">
                            <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['entityName']->value),$_smarty_tpl);?>

                            <p><?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['entityName']->value),$_smarty_tpl);?>
</p>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['entityName'] = $__foreach_entityName_0_saved_local_item;
}
if ($__foreach_entityName_0_saved_item) {
$_smarty_tpl->tpl_vars['entityName'] = $__foreach_entityName_0_saved_item;
}
?>
            <?php }?>

        </tbody>
    </table>

    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_anno ow_smallmargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_anno ow_smallmargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_text(array('key'=>'admin+seo_sitemap_note_desc','siteMapUrl'=>$_smarty_tpl->tpl_vars['sitemapUrl']->value),$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center ow_anno ow_smallmargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


    <div class="ow_right">
        <?php echo smarty_function_submit(array('name'=>"save",'class'=>"ow_ic_save ow_submit ow_right"),$_smarty_tpl);?>

    </div>
    <div class="clearfix"></div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"sitemapForm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
