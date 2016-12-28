<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:40:12
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/console_list_ipc_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe919c1c6704_61742431',
  'file_dependency' => 
  array (
    'ff1e94bb0a33b6cd2b41635cf5505183bf74d769' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/console_list_ipc_item.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe919c1c6704_61742431 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
?>
<div class="clearfix console_list_ipc_item <?php if ($_smarty_tpl->tpl_vars['url']->value) {?>ow_cursor_pointer console_item_with_url<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" >
    <?php echo smarty_function_decorator(array('name'=>"avatar_item",'data'=>$_smarty_tpl->tpl_vars['avatar']->value),$_smarty_tpl);?>

    <?php if (!empty($_smarty_tpl->tpl_vars['contentImage']->value)) {?>
        <div class="ow_console_invt_img">
            <a href="<?php if (empty($_smarty_tpl->tpl_vars['contentImage']->value['url'])) {?>javascript://<?php } else {
echo $_smarty_tpl->tpl_vars['contentImage']->value['url'];
}?>">
                <img <?php if (!empty($_smarty_tpl->tpl_vars['contentImage']->value['title'])) {?>alt="<?php echo $_smarty_tpl->tpl_vars['contentImage']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['contentImage']->value['title'];?>
"<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['contentImage']->value['src'];?>
" />
            </a>
        </div>
    <?php }?>
    <div class="ow_console_invt_cont<?php if (empty($_smarty_tpl->tpl_vars['contentImage']->value)) {?> ow_console_invt_no_img<?php }?>">
        <div class="ow_console_invt_txt"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
        <div class="ow_console_invt_toolbar">
            <?php
$_from = $_smarty_tpl->tpl_vars['toolbar']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                <a href="<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['url'])) {
echo $_smarty_tpl->tpl_vars['item']->value['url'];
} else { ?>javascript://<?php }?>" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['onclick'])) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['item']->value['onclick'];?>
"<?php }?> class="ow_lbutton <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])) {
echo $_smarty_tpl->tpl_vars['item']->value['class'];
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
        </div>
    </div>
</div>
<?php }
}
