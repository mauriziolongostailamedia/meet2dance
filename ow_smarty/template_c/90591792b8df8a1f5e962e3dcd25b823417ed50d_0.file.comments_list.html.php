<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:33
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/comments_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf1251a6042_32515459',
  'file_dependency' => 
  array (
    '90591792b8df8a1f5e962e3dcd25b823417ed50d' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/comments_list.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf1251a6042_32515459 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_modifier_more')) require_once '/home/dancemee/public_html/ow_smarty/plugin/modifier.more.php';
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['cmpContext']->value;?>
">
    <div class="ow_comments_list">
        <?php if (!empty($_smarty_tpl->tpl_vars['countToLoad']->value) && $_smarty_tpl->tpl_vars['countToLoad']->value > 0) {?>
        <div class="ow_comment_list_loader ow_feed_comments_viewall ow_small">
            <a href="javascript://">+<span><?php echo $_smarty_tpl->tpl_vars['countToLoad']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['loadMoreLabel']->value;?>
</a>
        </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['noComments']->value)) {?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"base+comment_no_comments"),$_smarty_tpl);?>
</div>
        <?php } else { ?>
        <?php
$_from = $_smarty_tpl->tpl_vars['comments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_comment_0_saved_item = isset($_smarty_tpl->tpl_vars['comment']) ? $_smarty_tpl->tpl_vars['comment'] : false;
$_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['comment']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
$__foreach_comment_0_saved_local_item = $_smarty_tpl->tpl_vars['comment'];
?>
        <div class="ow_comments_item clearfix">
            <div class="cnx_action" style="display: none"><?php echo $_smarty_tpl->tpl_vars['comment']->value['cnxAction'];?>
</div>
            <div class="ow_comments_item_picture">
                <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['comment']->value['avatar']),$_smarty_tpl);?>

            </div>
            <div class="ow_comments_item_info">
                <span class="<?php if (!empty($_smarty_tpl->tpl_vars['comment']->value['cnxAction'])) {?>ow_comments_date_hover <?php }?>ow_comments_date ow_nowrap ow_tiny ow_remark"><?php echo $_smarty_tpl->tpl_vars['comment']->value['date'];?>
</span>
                <div class="ow_comments_item_header"><a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['profileUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['displayName'];?>
</a></div>
                <div class="ow_comments_content ow_smallmargin">
                    <?php if (!empty($_smarty_tpl->tpl_vars['comment']->value['previewMaxChar'])) {?>
                    <?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['comment']->value['content'],$_smarty_tpl->tpl_vars['comment']->value['previewMaxChar']);?>

                    <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

                    <?php }?>
                </div><?php echo $_smarty_tpl->tpl_vars['comment']->value['content_add'];?>

            </div>
        </div>
        <?php
$_smarty_tpl->tpl_vars['comment'] = $__foreach_comment_0_saved_local_item;
}
if ($__foreach_comment_0_saved_item) {
$_smarty_tpl->tpl_vars['comment'] = $__foreach_comment_0_saved_item;
}
?>
        <?php }?>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['pages']->value)) {?>
    <div class="ow_paging clearfix ow_stdmargin">
        <span><?php echo smarty_function_text(array('key'=>'base+pages_label'),$_smarty_tpl);?>
</span>
        <?php
$_from = $_smarty_tpl->tpl_vars['pages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_page_1_saved_item = isset($_smarty_tpl->tpl_vars['page']) ? $_smarty_tpl->tpl_vars['page'] : false;
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
$__foreach_page_1_saved_local_item = $_smarty_tpl->tpl_vars['page'];
?>
        <?php if (!isset($_smarty_tpl->tpl_vars['page']->value['pageIndex'])) {?>
        <span><?php echo $_smarty_tpl->tpl_vars['page']->value['label'];?>
</span>
        <?php } else { ?>
        <a href="javascript://" class="page-<?php echo $_smarty_tpl->tpl_vars['page']->value['pageIndex'];
if (isset($_smarty_tpl->tpl_vars['page']->value['active']) && $_smarty_tpl->tpl_vars['page']->value['active']) {?> active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['page']->value['label'];?>
</a>
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['page'] = $__foreach_page_1_saved_local_item;
}
if ($__foreach_page_1_saved_item) {
$_smarty_tpl->tpl_vars['page'] = $__foreach_page_1_saved_item;
}
?>
    </div>
    <?php }?>
</div>
<?php }
}
