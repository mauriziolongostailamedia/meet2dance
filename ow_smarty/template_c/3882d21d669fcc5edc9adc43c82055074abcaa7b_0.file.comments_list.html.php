<?php
/* Smarty version 3.1.29, created on 2016-10-12 17:54:35
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/comments_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe5cbb8bc523_07424694',
  'file_dependency' => 
  array (
    '3882d21d669fcc5edc9adc43c82055074abcaa7b' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/comments_list.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe5cbb8bc523_07424694 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['cmpContext']->value;?>
">
    <?php if ($_smarty_tpl->tpl_vars['countToLoad']->value > 0) {?>
    <div class="owm_newsfeed_comment_load_more cmnt_load_more_cont"><span class="owm_newsfeed_comment_load_txt"><span class="cmnt_load_more">+<?php echo $_smarty_tpl->tpl_vars['countToLoad']->value;?>
</span></span></div>
    <?php }?>
    <div class="owm_newsfeed_comment_list">
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
        <div class="owm_newsfeed_comment_item clearfix">
            <div class="owm_newsfeed_comment_thumb"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['comment']->value['avatar']),$_smarty_tpl);?>
</div>
            <div class="owm_newsfeed_comment_info">
                <div class="owm_newsfeed_comment_author"><b><a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['profileUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['displayName'];?>
</a></b></div>
                <div class="owm_newsfeed_comment_txt"><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</div><?php echo $_smarty_tpl->tpl_vars['comment']->value['content_add'];?>

                <div class="owm_newsfeed_comment_date"><?php echo $_smarty_tpl->tpl_vars['comment']->value['date'];?>
</div>
            </div>
        </div>
        <?php
$_smarty_tpl->tpl_vars['comment'] = $__foreach_comment_0_saved_local_item;
}
if ($__foreach_comment_0_saved_item) {
$_smarty_tpl->tpl_vars['comment'] = $__foreach_comment_0_saved_item;
}
?>
    </div>
</div><?php }
}
