<?php
/* Smarty version 3.1.29, created on 2016-10-12 22:47:40
  from "/home/dancemee/public_html/ow_plugins/slideshow/views/components/custom_settings.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fea16cd5c253_93681307',
  'file_dependency' => 
  array (
    'a46caeae38587a5da6dd0cce99fcc7f688e23a76' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/slideshow/views/components/custom_settings.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fea16cd5c253_93681307 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .ow_slider_actions {
        height: 25px;
        width: 100px;
    }
    .ow_slider_actions a {
        display: none;
    }
	.ow_slider_settings_image_preview {
	    width: 50%;
	    height: 120px;
	}
	.ow_slider_settings_image_preview img {
	    width: 100%;
	    height: 120px;
	    cursor: move;
	}
	.ow_slider_settings_image_desc {
	    width: 47%;
	}
	.slides_tbl_cell {
	   width: 472px;
	}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="ow_automargin" style="width: 450px;">

<h3 class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>'slideshow+images'),$_smarty_tpl);?>
</h3>

<?php if ($_smarty_tpl->tpl_vars['markup']->value != '') {?>
    <p><?php echo smarty_function_text(array('key'=>'slideshow+rearrange_tip'),$_smarty_tpl);?>
</p>
<?php }?>

<table class="ow_table_1 ow_smallmargin" id="slides-tbl">
<tbody>
    <?php if ($_smarty_tpl->tpl_vars['markup']->value) {?>
        <?php echo $_smarty_tpl->tpl_vars['markup']->value;?>

    <?php } else { ?>
        <tr><td><div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'slideshow+no_images'),$_smarty_tpl);?>
</div></td></tr>
    <?php }?>
</tbody>
</table>

<div class="ow_submit ow_txtright ow_smallmargin">
    <?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'slideshow+add_new','class'=>'ow_ic_add','id'=>'btn-add-image'),$_smarty_tpl);?>

</div>

<h3 class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>'slideshow+settings'),$_smarty_tpl);?>
</h3>

</div><?php }
}
