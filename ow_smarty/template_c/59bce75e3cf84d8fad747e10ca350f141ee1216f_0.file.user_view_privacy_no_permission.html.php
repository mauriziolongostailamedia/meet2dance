<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:34:51
  from "/home/dancemee/public_html/ow_system_plugins/base/views/controllers/user_view_privacy_no_permission.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe905ba01752_75784535',
  'file_dependency' => 
  array (
    '59bce75e3cf84d8fad747e10ca350f141ee1216f' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/controllers/user_view_privacy_no_permission.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe905ba01752_75784535 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    .ow_avatar_console .ow_avatar_label {
        bottom: 5px;
        right: 5px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php if (isset($_smarty_tpl->tpl_vars['profileActionToolbar']->value)) {
echo $_smarty_tpl->tpl_vars['profileActionToolbar']->value;?>

<?php }?>

<div class="ow_left ow_supernarrow">
    <div style="" class="ow_box_empty ow_stdmargin clearfix">
        <div id="avatar-console" class="ow_avatar_console ow_center">
            <div style="height: <?php echo $_smarty_tpl->tpl_vars['avatarSize']->value;?>
px; background: url(<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
) no-repeat center center; width: 100%">
                <?php if (isset($_smarty_tpl->tpl_vars['role']->value['label'])) {?><span class="ow_avatar_label"<?php if (isset($_smarty_tpl->tpl_vars['role']->value['custom'])) {?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['role']->value['custom'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['role']->value['label'];?>
</span><?php }?>
            </div>
        </div>
    </div>
</div>

<div class="ow_right ow_superwide">
    <div class="ow_anno ow_center">
        <?php if (!empty($_smarty_tpl->tpl_vars['message']->value)) {
echo $_smarty_tpl->tpl_vars['message']->value;
} else {
echo smarty_function_text(array('key'=>'privacy+no_permission_message'),$_smarty_tpl);
}?>
    </div>
</div><?php }
}
