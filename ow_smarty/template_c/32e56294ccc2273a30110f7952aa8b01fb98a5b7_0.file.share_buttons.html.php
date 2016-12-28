<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:21:53
  from "/home/dancemee/public_html/ow_plugins/social_sharing/views/components/share_buttons.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf2a12d5b56_53005934',
  'file_dependency' => 
  array (
    '32e56294ccc2273a30110f7952aa8b01fb98a5b7' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/social_sharing/views/components/share_buttons.html',
      1 => 1469551372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf2a12d5b56_53005934 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_small clearfix" style="display: inline-block;">
   <span class="ow_left" style="margin-right: 4px;"><?php echo smarty_function_text(array('key'=>'socialsharing+share'),$_smarty_tpl);?>
</span>
        <div class="addthis_toolbox addthis_default_style addthis_16x16_style <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 ">
            <?php
$_from = $_smarty_tpl->tpl_vars['order']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value === 'twitter') {?>
            <a class="addthis_button_twitter ow_social_sharing_button" <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)) {?>tw:url="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['title']->value)) {?>tw:text="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"<?php } elseif (!empty($_smarty_tpl->tpl_vars['description']->value)) {?>tw:text="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"<?php }?> ></a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['item']->value === 'facebook') {?>
            <a class="addthis_button_facebook ow_social_sharing_button" fb:like:layout="button_count"></a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['item']->value === 'googlePlus') {?>
            <a class="addthis_button_google_plusone_share ow_social_sharing_button" g:plusone:size="medium"></a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['item']->value === 'pinterest') {?>
            <a class="addthis_button_pinterest_share ow_social_sharing_button" <?php if (!empty($_smarty_tpl->tpl_vars['imageUrl']->value)) {?>pi:pinit:media="<?php echo $_smarty_tpl->tpl_vars['imageUrl']->value;?>
" <?php }?> ></a>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
if ($__foreach_item_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_0_saved_key;
}
?>
        </div>
</div><?php }
}
