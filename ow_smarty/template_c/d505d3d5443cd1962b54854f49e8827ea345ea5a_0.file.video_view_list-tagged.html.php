<?php
/* Smarty version 3.1.29, created on 2016-10-13 11:20:37
  from "/home/dancemee/public_html/ow_plugins/video/views/controllers/video_view_list-tagged.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff51e5e9b055_78156874',
  'file_dependency' => 
  array (
    'd505d3d5443cd1962b54854f49e8827ea345ea5a' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/video/views/controllers/video_view_list-tagged.html',
      1 => 1475654753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff51e5e9b055_78156874 ($_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_component')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.component.php';
?>
<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'video.add_content.list.top','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div>

<?php if ($_smarty_tpl->tpl_vars['showAddButton']->value) {?>
    <div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','id'=>'btn-add-new-video','langLabel'=>'video+add_new'),$_smarty_tpl);?>
</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['videoMenu']->value;?>


<?php echo smarty_function_add_content(array('key'=>'video.content.list.after_menu','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>


<?php if (isset($_smarty_tpl->tpl_vars['tag']->value)) {?>
    <div class="clearfix">
        <div class="ow_left ow_superwide">
            <div class="ow_anno ow_std_margin ow_center">
                <?php echo smarty_function_text(array('key'=>'video+tag_search_result'),$_smarty_tpl);?>
 "<b><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</b>"
            </div>
        </div>

        <div class="ow_right ow_supernarrow">
            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','iconClass'=>'ow_ic_tag','langLabel'=>'video+tag_search','addClass'=>'ow_smallmargin')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_tag','langLabel'=>'video+tag_search','addClass'=>'ow_smallmargin'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

               <input type="text" class="ow_text" id="video-tag-search-input" />
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_tag','langLabel'=>'video+tag_search','addClass'=>'ow_smallmargin'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

        </div>
    </div>
    <?php echo smarty_function_component(array('class'=>'VIDEO_CMP_VideoList','type'=>$_smarty_tpl->tpl_vars['listType']->value,'count'=>5,'tag'=>$_smarty_tpl->tpl_vars['tag']->value),$_smarty_tpl);?>

<?php } else { ?>
    <div class="clearfix">
        <div class="ow_left ow_superwide">
            <?php echo $_smarty_tpl->tpl_vars['tags']->value;?>

        </div>

        <div class="ow_right ow_supernarrow">
            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','iconClass'=>'ow_ic_tag','langLabel'=>'video+tag_search','addClass'=>'ow_smallmargin')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_tag','langLabel'=>'video+tag_search','addClass'=>'ow_smallmargin'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

               <input type="text" class="ow_text" id="video-tag-search-input" />
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_tag','langLabel'=>'video+tag_search','addClass'=>'ow_smallmargin'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

        </div>
    </div>
<?php }?>

<?php echo smarty_function_add_content(array('key'=>'video.content.list.bottom','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);
}
}
