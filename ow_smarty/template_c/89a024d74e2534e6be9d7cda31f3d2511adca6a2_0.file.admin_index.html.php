<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:14:22
  from "/home/dancemee/public_html/ow_plugins/social_sharing/views/controllers/admin_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf0de354d31_81051352',
  'file_dependency' => 
  array (
    '89a024d74e2534e6be9d7cda31f3d2511adca6a2' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/social_sharing/views/controllers/admin_index.html',
      1 => 1469551372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf0de354d31_81051352 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .settings_file_upload .error
    {
        margin-left: auto;
        margin-right: auto;
    }

    .upload_container
    {
        display:block;
    }

    .padding_left{
        padding-left:12px;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="ow_automargin ow_wide">

        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'iconClass'=>"ow_ic_add",'langLabel'=>"socialsharing+api_key_title")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'iconClass'=>"ow_ic_add",'langLabel'=>"socialsharing+api_key_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"normal",'addClass'=>"ow_superwide ow_automargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_superwide ow_automargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <p><?php echo smarty_function_text(array('key'=>"socialsharing+api_key_description"),$_smarty_tpl);?>
</p>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_superwide ow_automargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_small_wide ow_wide ow_automargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_small_wide ow_wide ow_automargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>"api_key_form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"api_key_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        
                        <div class="ow_left" style="margin-right:5px;"><?php echo smarty_function_input(array('name'=>'api_key'),$_smarty_tpl);?>
</div>
                        <div class="ow_left" ><?php echo smarty_function_submit(array('name'=>'save_api_key','class'=>'ow_ic_save','langLabel'=>'socialsharing+save_api_key'),$_smarty_tpl);?>
</div><br><div style="color:red;"><?php echo smarty_function_error(array('name'=>'api_key'),$_smarty_tpl);?>
</div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"api_key_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_small_wide ow_wide ow_automargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'iconClass'=>"ow_ic_add",'langLabel'=>"socialsharing+api_key_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


	
	<table id="socialsharing_settings" class="ow_table_2 ow_form ow_stdmargin ow_center">
            
            <tr class="ow_tr_first">
                <th width="1" colspan="2"><?php echo smarty_function_text(array('key'=>'socialsharing+social_services'),$_smarty_tpl);?>
</th>
            </tr>

            <?php
$_from = $_smarty_tpl->tpl_vars['order']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
            <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1, ow_alt2'),$_smarty_tpl);?>
 sharing_item" item="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
">
                <td class="ow_txtleft">
                    <?php echo smarty_function_text(array('key'=>"socialsharing+".((string)$_smarty_tpl->tpl_vars['item']->value)),$_smarty_tpl);?>

                </td>
                <td>
                    <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['item']->value]) && $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['item']->value]) {?>checked="checked"<?php }?>>
                </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'upload')); $_block_repeat=true; echo smarty_block_form(array('name'=>'upload'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	</table>
        
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'iconClass'=>"ow_ic_add",'langLabel'=>"socialsharing+default_image_title")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'iconClass'=>"ow_ic_add",'langLabel'=>"socialsharing+default_image_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"normal",'addClass'=>"ow_superwide ow_automargin ow_stdmargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_superwide ow_automargin ow_stdmargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <p><?php echo smarty_function_text(array('key'=>"socialsharing+default_image_description"),$_smarty_tpl);?>
</p>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_superwide ow_automargin ow_stdmargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_small_wide ow_wide ow_automargin settings_file_upload")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_small_wide ow_wide ow_automargin settings_file_upload"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="ow_center ow_std_margin"><img src="<?php echo $_smarty_tpl->tpl_vars['imageUrl']->value;?>
"></div>
                <?php echo smarty_function_input(array('name'=>'image','class'=>"ow_automargin upload_container"),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'image'),$_smarty_tpl);?>

                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_small_wide ow_wide ow_automargin settings_file_upload"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


            <div class="ow_right"><?php echo smarty_function_submit(array('name'=>'upload_image','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'iconClass'=>"ow_ic_add",'langLabel'=>"socialsharing+default_image_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'upload'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

</div>
<?php }
}
