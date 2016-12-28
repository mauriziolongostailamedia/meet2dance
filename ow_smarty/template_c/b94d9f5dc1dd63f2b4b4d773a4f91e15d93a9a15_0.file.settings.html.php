<?php
/* Smarty version 3.1.29, created on 2016-10-12 22:57:34
  from "/home/dancemee/public_html/ow_plugins/snippets/views/components/settings.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fea3be987384_91310922',
  'file_dependency' => 
  array (
    'b94d9f5dc1dd63f2b4b4d773a4f91e15d93a9a15' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/snippets/views/components/settings.html',
      1 => 1475840807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fea3be987384_91310922 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="s-snippets-settings-wrap" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    
    <div class="s-ss-section s-ss-hidden" >
        <div class="s-ss-title ow_remark">
            <?php echo smarty_function_text(array('key'=>"snippets+hidden_section_label"),$_smarty_tpl);?>

        </div>
        <div class="s-ss-section-content clearfix ow_border <?php if (empty($_smarty_tpl->tpl_vars['snippets']->value['hidden'])) {?>s-ss-section-empty<?php }?>" data-section="hidden">
            <?php
$_from = $_smarty_tpl->tpl_vars['snippets']->value['hidden'];
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
                <div class="s-ss-snippet" data-name="<?php echo $_smarty_tpl->tpl_vars['snippet']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['snippet']->value['html'];?>
</div>
            <?php
$_smarty_tpl->tpl_vars['snippet'] = $__foreach_snippet_0_saved_local_item;
}
if ($__foreach_snippet_0_saved_item) {
$_smarty_tpl->tpl_vars['snippet'] = $__foreach_snippet_0_saved_item;
}
?>
            <div class="s-ss-section-empty-msg ow_remark"><?php echo smarty_function_text(array('key'=>"snippets+empty_hidden_section"),$_smarty_tpl);?>
</div>
        </div>
    </div>
    
    <div class="s-ss-section s-ss-active">
        <div class="s-ss-title ow_remark">
            <?php echo smarty_function_text(array('key'=>"snippets+active_section_label"),$_smarty_tpl);?>

        </div>
        <div class="s-ss-section-content clearfix ow_border <?php if (empty($_smarty_tpl->tpl_vars['snippets']->value['active'])) {?>s-ss-section-empty<?php }?>" data-section="active">
            <?php
$_from = $_smarty_tpl->tpl_vars['snippets']->value['active'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_snippet_1_saved_item = isset($_smarty_tpl->tpl_vars['snippet']) ? $_smarty_tpl->tpl_vars['snippet'] : false;
$_smarty_tpl->tpl_vars['snippet'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['snippet']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['snippet']->value) {
$_smarty_tpl->tpl_vars['snippet']->_loop = true;
$__foreach_snippet_1_saved_local_item = $_smarty_tpl->tpl_vars['snippet'];
?>
                <div class="s-ss-snippet" data-name="<?php echo $_smarty_tpl->tpl_vars['snippet']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['snippet']->value['html'];?>
</div>
            <?php
$_smarty_tpl->tpl_vars['snippet'] = $__foreach_snippet_1_saved_local_item;
}
if ($__foreach_snippet_1_saved_item) {
$_smarty_tpl->tpl_vars['snippet'] = $__foreach_snippet_1_saved_item;
}
?>
            <div class="s-ss-section-empty-msg ow_remark"><?php echo smarty_function_text(array('key'=>"snippets+empty_active_section"),$_smarty_tpl);?>
</div>
        </div>
    </div>
    
    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" data-outlet="field" />
</div>

<?php }
}
