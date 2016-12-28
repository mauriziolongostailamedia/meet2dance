<?php
/* Smarty version 3.1.29, created on 2016-10-13 09:21:13
  from "/home/dancemee/public_html/ow_plugins/hint/views/components/context_button.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff35e9a28b90_57958930',
  'file_dependency' => 
  array (
    '5c876949cf49f53e39004147ad6dfa98077c1242' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/hint/views/components/context_button.html',
      1 => 1476209468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff35e9a28b90_57958930 ($_smarty_tpl) {
?>
<div <?php if (!empty($_smarty_tpl->tpl_vars['uniqId']->value)) {?>id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
"<?php }?> class="h-context-w ow_context_action_block clearfix ow_profile_toolbar_group <?php if ($_smarty_tpl->tpl_vars['iconClass']->value) {?>h-context-has-icon<?php }?> ow_context_action_value_block">
    
    <div class="ow_context_action">
        <a href="javascript://" data-type="current" class="ow_context_action_value h-context-label <?php if ($_smarty_tpl->tpl_vars['iconClass']->value) {
echo $_smarty_tpl->tpl_vars['iconClass']->value;
}?>">
            <?php echo $_smarty_tpl->tpl_vars['label']->value;?>

        </a>
        <span class="ow_context_more"></span>
        
        <?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
        <div class="ow_tooltip ow_small ow_tooltip_top_right" style="display: none;">
            <div class="ow_tooltip_tail">
                <span></span>
            </div>
            
            <div class="ow_tooltip_body h-context-content">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
            
        </div>
        <?php }?>
    </div>
    
    <div class="h-context-btn-overlay"></div>
</div><?php }
}
