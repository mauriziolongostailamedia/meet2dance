<?php
/* Smarty version 3.1.29, created on 2016-10-12 22:01:46
  from "/home/dancemee/public_html/ow_plugins/newsfeed/views/controllers/feed_view_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe96aab96a34_89218604',
  'file_dependency' => 
  array (
    '774c366b7ee605dc512435d9ad64653e50b7b6be' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/newsfeed/views/controllers/feed_view_item.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe96aab96a34_89218604 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.newsfeed_item_view
{
    width: 600px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="clearfix">
    <div class="newsfeed_item_view ow_left">
        <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

    </div>
    <div class="ow_right">
        <?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons'),$_smarty_tpl);?>

        <?php echo smarty_function_add_content(array('key'=>'newsfeed.item.content.right','entityType'=>$_smarty_tpl->tpl_vars['entity']->value['type'],'entityId'=>$_smarty_tpl->tpl_vars['entity']->value['id']),$_smarty_tpl);?>

    </div>
</div><?php }
}
