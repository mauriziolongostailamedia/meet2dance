<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:34:50
  from "/home/dancemee/public_html/ow_plugins/hint/views/components/private_hint.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe905a4898c7_21251766',
  'file_dependency' => 
  array (
    'b838985d79a544b116332022094c0729a1b25d37' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/hint/views/components/private_hint.html',
      1 => 1476209468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe905a4898c7_21251766 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


#<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
 .uhint-avatar-image
{
    background-image: url(<?php echo $_smarty_tpl->tpl_vars['avatar']->value['src'];?>
);
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
" class="hint-private-hint uhint-wrap">
    <div class="uhint-avatar ow_avatar_console ow_bg_color ow_border">
        <div class="uhint-avatar-image"></div>
    </div>
    <div class="ph-info">
        <div class="ph-info-title"><?php echo $_smarty_tpl->tpl_vars['avatar']->value['title'];?>
</div>
        <div class="ph-info-content ow_remark"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
    </div>
</div>
<?php }
}
