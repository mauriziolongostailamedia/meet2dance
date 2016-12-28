<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:26:38
  from "/home/dancemee/public_html/ow_plugins/groups/views/components/brief_info_content.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe805e098cb2_44740185',
  'file_dependency' => 
  array (
    '92cfb30e296390635dd06ca97effe88b5d756b69' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/groups/views/components/brief_info_content.html',
      1 => 1476259984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe805e098cb2_44740185 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_modifier_autolink')) require_once '/home/dancemee/public_html/ow_smarty/plugin/modifier.autolink.php';
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_group_brief_info .image
{
    width: 100px;
    margin-right: -100px;
}

.ow_group_brief_info .image img
{
    width: 100px;
}

.ow_group_brief_info .details
{
    padding-left: 5px;
    position: relative;
    overflow: hidden;
}

.ow_group_brief_info .details .controls
{
    position: absolute;
    right: 0;
    top: 0;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value)); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_group_brief_info clearfix ow_smallmargin">
    <?php if ($_smarty_tpl->tpl_vars['group']->value['imgUrl']) {?>
        <div class="image ow_left">
            <a href="<?php echo $_smarty_tpl->tpl_vars['group']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['group']->value['imgUrl'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
        </div>
        <div class="details" style="margin-left: 100px;">
    <?php } else { ?>
        <div class="details">
    <?php }?>

        <h3 class="title">
            <a href="<?php echo $_smarty_tpl->tpl_vars['group']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['title'];?>
</a><?php if ($_smarty_tpl->tpl_vars['group']->value['status'] == "approval") {?> <span class="ow_small ow_remark">(<?php echo smarty_function_text(array('key'=>"base+pending_approval"),$_smarty_tpl);?>
)</span><?php }?>
        </h3>

        <div class="body ow_smallmargin">
            <?php echo smarty_modifier_autolink($_smarty_tpl->tpl_vars['group']->value['description']);?>

        </div>
        <div class="clearfix">
                <?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons','title'=>$_smarty_tpl->tpl_vars['group']->value['title'],'url'=>$_smarty_tpl->tpl_vars['group']->value['url'],'description'=>$_smarty_tpl->tpl_vars['group']->value['description'],'image'=>$_smarty_tpl->tpl_vars['group']->value['imgUrl'],'entityType'=>'groups','entityId'=>$_smarty_tpl->tpl_vars['group']->value['id']),$_smarty_tpl);?>

        </div>
    </div>

</div>
<div class="clearfix">
    <?php echo smarty_function_add_content(array('key'=>'groups.brief_info.content.after_group_description'),$_smarty_tpl);?>

</div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
