<?php
/* Smarty version 3.1.29, created on 2016-10-12 19:30:20
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/decorators/box_toolbar.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe732c3704f0_01043694',
  'file_dependency' => 
  array (
    'c85c7204c93663eb9925592f105112c273a2f8f9' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/decorators/box_toolbar.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe732c3704f0_01043694 ($_smarty_tpl) {
?>
<div class="owm_box_toolbar">
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['itemList'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_toolbar_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_toolbar_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>    
    <?php $_smarty_tpl->_cache['capture_stack'][] = array("toolbarCommonAttrs", null, null); ob_start(); ?> <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['item']->value['click'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['item']->value['click'];?>
"<?php }?> style="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['display'])) {?>display: <?php echo $_smarty_tpl->tpl_vars['item']->value['display'];
}?>" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];
}?>"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['title'])) {?> title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])) {?>
        <a <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['toolbarCommonAttrs']) ? $_smarty_tpl->_cache['__smarty_capture']['toolbarCommonAttrs'] : null);?>
 <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['rel'])) {?>rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['rel'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
">
            <span>
    <?php } else { ?>
        <span <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['toolbarCommonAttrs']) ? $_smarty_tpl->_cache['__smarty_capture']['toolbarCommonAttrs'] : null);?>
>
    <?php }?>
    
    <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

    
    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])) {?>
            </span>
        </a>
    <?php } else { ?>
        </span>
    <?php }
$_smarty_tpl->tpl_vars['item'] = $__foreach_toolbar_0_saved_local_item;
}
if ($__foreach_toolbar_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_toolbar_0_saved_item;
}
?>
</div>

<?php }
}
