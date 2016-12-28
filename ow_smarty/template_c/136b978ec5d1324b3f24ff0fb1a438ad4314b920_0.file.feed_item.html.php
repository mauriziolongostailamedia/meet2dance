<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:33
  from "/home/dancemee/public_html/ow_plugins/newsfeed/views/components/feed_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf12538dbd1_52058531',
  'file_dependency' => 
  array (
    '136b978ec5d1324b3f24ff0fb1a438ad4314b920' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/newsfeed/views/components/feed_item.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf12538dbd1_52058531 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    .ow_newsfeed_line
    {
        display: block;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<li id="<?php echo $_smarty_tpl->tpl_vars['item']->value['autoId'];?>
" class="ow_newsfeed_item <?php echo $_smarty_tpl->tpl_vars['item']->value['view']['class'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['line'])) {?>ow_newsfeed_line_item<?php }?>" <?php if ($_smarty_tpl->tpl_vars['item']->value['view']['style']) {?>style="<?php echo $_smarty_tpl->tpl_vars['item']->value['view']['style'];?>
"<?php }?> data-entity-type="<?php echo $_smarty_tpl->tpl_vars['item']->value['entityType'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['activity'])) {?>data-activity-type="<?php echo $_smarty_tpl->tpl_vars['item']->value['activity']['activityType'];?>
"<?php }?>>
	<div class="clearfix">
            
	    <?php if (empty($_smarty_tpl->tpl_vars['item']->value['line'])) {?>
	        <div class="ow_newsfeed_avatar">
                    
                    <?php echo smarty_function_decorator(array('name'=>"avatar_item",'title'=>$_smarty_tpl->tpl_vars['item']->value['user']['name'],'url'=>$_smarty_tpl->tpl_vars['item']->value['user']['url'],'src'=>$_smarty_tpl->tpl_vars['item']->value['user']['avatarUrl'],'label'=>$_smarty_tpl->tpl_vars['item']->value['user']['roleLabel']['label'],'labelColor'=>$_smarty_tpl->tpl_vars['item']->value['user']['roleLabel']['labelColor']),$_smarty_tpl);?>

	        </div>
	    <?php } else { ?>
	         <div class="ow_newsfeed_line ow_smallmargin <?php if ($_smarty_tpl->tpl_vars['item']->value['view']['iconClass']) {
echo $_smarty_tpl->tpl_vars['item']->value['view']['iconClass'];
} else { ?>ow_ic_info<?php }?> ow_icon_control">
	            <?php if ($_smarty_tpl->tpl_vars['item']->value['context']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['context']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['context']['label'];?>
</a> &raquo; <?php }
echo $_smarty_tpl->tpl_vars['item']->value['line'];?>

	         </div>
	    <?php }?>

	    <div class="ow_newsfeed_body">
	        <div class="ow_newsfeed_context_menu_wrap">
                    <div class="ow_newsfeed_context_menu">
                       <?php echo $_smarty_tpl->tpl_vars['item']->value['contextActionMenu'];?>

                    </div>
                    <?php if (empty($_smarty_tpl->tpl_vars['item']->value['line'])) {?>
                        <div class="ow_newsfeed_string ow_small ow_smallmargin">
                           <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['user']['url'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['user']['name'];?>
</b></a>
                           <?php if ($_smarty_tpl->tpl_vars['item']->value['context']) {?>  &raquo; <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['context']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['context']['label'];?>
</a><?php }?>
                           <?php echo $_smarty_tpl->tpl_vars['item']->value['string'];?>

                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['item']->value['content']) {?>
                        <div class="ow_newsfeed_content ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
                    <?php }?>
                </div>

            <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['toolbar'])) {?>
            <div class="ow_newsfeed_toolbar ow_small ow_remark clearfix"> <span class="ow_newsfeed_toolbar_space">&nbsp;</span><?php
$_from = $_smarty_tpl->tpl_vars['item']->value['toolbar'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_toolbarItem_0_saved_item = isset($_smarty_tpl->tpl_vars['toolbarItem']) ? $_smarty_tpl->tpl_vars['toolbarItem'] : false;
$_smarty_tpl->tpl_vars['toolbarItem'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['toolbarItem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['toolbarItem']->value) {
$_smarty_tpl->tpl_vars['toolbarItem']->_loop = true;
$__foreach_toolbarItem_0_saved_local_item = $_smarty_tpl->tpl_vars['toolbarItem'];
?><span class="ow_newsfeed_control ow_nowrap <?php if (!empty($_smarty_tpl->tpl_vars['toolbarItem']->value['class'])) {
echo $_smarty_tpl->tpl_vars['toolbarItem']->value['class'];
}?>"><?php if (!empty($_smarty_tpl->tpl_vars['toolbarItem']->value['href'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['toolbarItem']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['toolbarItem']->value['label'];?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['toolbarItem']->value['label'];
}?><span class="ow_newsfeed_toolbar_space">&nbsp;</span> </span><?php
$_smarty_tpl->tpl_vars['toolbarItem'] = $__foreach_toolbarItem_0_saved_local_item;
}
if ($__foreach_toolbarItem_0_saved_item) {
$_smarty_tpl->tpl_vars['toolbarItem'] = $__foreach_toolbarItem_0_saved_item;
}
?></div>
            <?php }?>

            <div class="ow_newsfeed_btns ow_small ow_remark clearfix">

                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['permalink'];?>
" class="ow_nowrap create_time ow_newsfeed_date ow_small"><?php echo $_smarty_tpl->tpl_vars['item']->value['createTime'];?>
</a>

                <div class="ow_newsfeed_left">
                    <span class="ow_newsfeed_control">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']) {?>
                        <span class="ow_newsfeed_btn_wrap <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']['expanded']) {?>ow_newsfeed_active<?php }?>">
                            <span class="ow_miniic_control ow_cursor_pointer newsfeed_comment_btn_cont <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']['expanded']) {?>active<?php }?>">
                                <span class="ow_miniic_comment newsfeed_comment_btn <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']['expanded']) {?>newsfeed_active_button<?php }?>"></span>
                            </span><span class="newsfeed_counter_comments"><?php echo $_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']['count'];?>
</span>
                        </span>
                        <?php }?>

                        <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['features']['custom'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_btn_1_saved_item = isset($_smarty_tpl->tpl_vars['btn']) ? $_smarty_tpl->tpl_vars['btn'] : false;
$_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['btn']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
$__foreach_btn_1_saved_local_item = $_smarty_tpl->tpl_vars['btn'];
?>
                            <span class="ow_newsfeed_btn_wrap <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['class'])) {
echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>">
                                <span class="ow_miniic_control ow_cursor_pointer newsfeed-feature-button-control <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['active'])) {?>active<?php }?>">
                                    <span <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['title'])) {?>title="<?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
"<?php }?> class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['iconClass'];?>
 newsfeed-feature-button" <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['onclick'])) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['onclick'];?>
"<?php }?> ></span>
                                </span><span class="ow_newsfeed_btn_label newsfeed-feature-label"><?php echo $_smarty_tpl->tpl_vars['btn']->value['label'];?>
</span>
                            </span>

                            <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['string'])) {?>
                                <span class="ow_newsfeed_btn_string newsfeed-feature-string">
                                    <?php echo $_smarty_tpl->tpl_vars['btn']->value['string'];?>

                                </span>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['btn'] = $__foreach_btn_1_saved_local_item;
}
if ($__foreach_btn_1_saved_item) {
$_smarty_tpl->tpl_vars['btn'] = $__foreach_btn_1_saved_item;
}
?>

                        <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']) {?>
                        <span class="ow_newsfeed_btn_wrap <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['liked']) {?>ow_newsfeed_active<?php }?>">
                            <span class="ow_miniic_control <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['allow']) {?>ow_cursor_pointer<?php }?> newsfeed_like_btn_cont <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['liked']) {?>active<?php }?>">
                                <span <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['error'])) {?>data-error="<?php echo $_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['error'];?>
"<?php }?> class="ow_miniic_like <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['allow']) {?>newsfeed_like_btn<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['liked']) {?>newsfeed_active_button<?php }?>"></span>
                            </span><span class="newsfeed_counter_likes"><?php echo $_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['count'];?>
</span>
                        </span>

                        <div class="ow_newsfeed_string">
                            <div class="newsfeed_likes_string" <?php if (!$_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['count']) {?>style="display: none"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['cmp'];?>

                            </div>
                        </div>
                        <?php }?>
                    </span>

                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']) {?>
                <div <?php if (!$_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']['expanded']) {?>style="display: none"<?php }?> class="newsfeed-comments-cont ow_newsfeed_features">
                    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'tooltip','addClass'=>'ow_newsfeed_tooltip ow_add_comments_form ow_small')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'tooltip','addClass'=>'ow_newsfeed_tooltip ow_add_comments_form ow_small'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']) {?>
                            <div class="ow_newsfeed_comments">
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']['cmp'];?>

                            </div>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'tooltip','addClass'=>'ow_newsfeed_tooltip ow_add_comments_form ow_small'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

                </div>
            <?php }?>

	    </div>
            
            
	</div>

        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['cycle'])) {?>
            <div <?php if ($_smarty_tpl->tpl_vars['item']->value['cycle']['lastItem']) {?>style="display: none"<?php }?> class="newsfeed-item-delim ow_border ow_newsfeed_delimiter ow_newsfeed_doublesided_stdmargin"></div>
        <?php }?>
</li><?php }
}
