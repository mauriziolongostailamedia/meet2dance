<?php
/* Smarty version 3.1.29, created on 2016-10-16 12:32:46
  from "/home/dancemee/public_html/ow_plugins/fbconnect/views/controllers/admin_settings.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5803574ea306f7_27438363',
  'file_dependency' => 
  array (
    '180baa9bff447c9ed809112e67509ee495de07ac' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/fbconnect/views/controllers/admin_settings.html',
      1 => 1475828468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5803574ea306f7_27438363 ($_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


$('#fbc-reset').click(function(){
    var self = this, rsp = $(this).attr('ow_rsp');

    OW.inProgressNode(self);
    $('#fbc-reset-preloader').show();
    $.getJSON(rsp, function(message){
        OW.info(message);
        OW.activateNode(self);
        $('#fbc-reset-preloader').hide();
    });

});

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


#fbc-reset-preloader {
    display: inline-block;
    width: 16px;
    height: 11px;
    margin-bottom: -1px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<table class="ow_table_1 ow_form">

    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_app"><?php echo smarty_function_text(array('key'=>'fbconnect+application_configuration_title'),$_smarty_tpl);?>
</span>
        </th>
    </tr>
    <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
">
        <td class="ow_label">
            <a href="<?php echo $_smarty_tpl->tpl_vars['appUrl']->value;?>
" target="_blank">
                
                <?php echo smarty_function_text(array('key'=>"fbconnect+app_edit_title"),$_smarty_tpl);?>

            </a>
        </td>
        <td class="ow_desc">
            
            <?php echo smarty_function_text(array('key'=>"fbconnect+app_edit_desc"),$_smarty_tpl);?>

        </td>
    </tr>

    

    <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
 ow_tr_last">
        <td class="ow_label">
            <div style="display: none;" class="fbconnect_preloader" id="fbc-reset-preloader"></div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['deleteUrl']->value;?>
">
                <?php echo smarty_function_text(array('key'=>"fbconnect+app_remove_app_title"),$_smarty_tpl);?>

            </a>
        </td>
        <td class="ow_desc">
            <?php echo smarty_function_text(array('key'=>"fbconnect+app_remove_app_desc"),$_smarty_tpl);?>

        </td>
    </tr>

</table>
<?php }
}
