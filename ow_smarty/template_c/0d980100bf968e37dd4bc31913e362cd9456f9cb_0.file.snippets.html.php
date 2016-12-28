<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:32
  from "/home/dancemee/public_html/ow_plugins/snippets/views/components/snippets.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf124c533f5_67751916',
  'file_dependency' => 
  array (
    '0d980100bf968e37dd4bc31913e362cd9456f9cb' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/snippets/views/components/snippets.html',
      1 => 1475840807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf124c533f5_67751916 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="s-snippets-wrap clearfix" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <?php if (!empty($_smarty_tpl->tpl_vars['snippets']->value)) {?>
    <div class="s-snippets-clip" data-outlet="clip">
        <div class="s-snippets" data-outlet="list">
            <?php
$_from = $_smarty_tpl->tpl_vars['snippets']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_snippet_0_saved_item = isset($_smarty_tpl->tpl_vars['snippet']) ? $_smarty_tpl->tpl_vars['snippet'] : false;
$_smarty_tpl->tpl_vars['snippet'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['snippet']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['snippet']->value) {
$_smarty_tpl->tpl_vars['snippet']->_loop = true;
$__foreach_snippet_0_saved_local_item = $_smarty_tpl->tpl_vars['snippet'];
?>
                <div class="s-snippet-wrap" data-outlet="item">
                    <?php echo $_smarty_tpl->tpl_vars['snippet']->value['html'];?>

                    <div class="s-snippet-more-overlay" data-outlet="more">
                        <div class="s-snippet-more-arrow-wrap" data-outlet="arrows-wrap">
                            <div class="s-snippet-more-arrow s-arrows-icons"></div>
                        </div>
                    </div>
                </div>
            <?php
$_smarty_tpl->tpl_vars['snippet'] = $__foreach_snippet_0_saved_local_item;
}
if ($__foreach_snippet_0_saved_item) {
$_smarty_tpl->tpl_vars['snippet'] = $__foreach_snippet_0_saved_item;
}
?>
        </div>
        
        
    </div>
    <?php } else { ?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"snippets+no_items"),$_smarty_tpl);?>
</div>
    <?php }?>
</div><?php }
}
