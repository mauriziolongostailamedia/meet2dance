<?php
/* Smarty version 3.1.29, created on 2016-10-16 13:12:10
  from "/home/dancemee/public_html/ow_plugins/contact_importer/views/components/widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5803608ae66472_18351133',
  'file_dependency' => 
  array (
    '5d7bd73fd66556ccc1d7b0da3b6d8c805db9f923' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/contact_importer/views/components/widget.html',
      1 => 1469551372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5803608ae66472_18351133 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.contactimporter_provider_button
{
	margin: 3px;
        display: inline-block;
	cursor: pointer;
}

.contactimporter_provider_button img
{
    width: 45px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<center>
    <?php
$_from = $_smarty_tpl->tpl_vars['btns']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_b_0_saved_item = isset($_smarty_tpl->tpl_vars['b']) ? $_smarty_tpl->tpl_vars['b'] : false;
$_smarty_tpl->tpl_vars['b'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['b']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
$__foreach_b_0_saved_local_item = $_smarty_tpl->tpl_vars['b'];
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['b']->value['href'];?>
" onclick="<?php echo $_smarty_tpl->tpl_vars['b']->value['onclick'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['b']->value['class'];?>
 contactimporter_provider_button">
            <img src="<?php echo $_smarty_tpl->tpl_vars['b']->value['iconUrl'];?>
" />
        </a>
    <?php
$_smarty_tpl->tpl_vars['b'] = $__foreach_b_0_saved_local_item;
}
if ($__foreach_b_0_saved_item) {
$_smarty_tpl->tpl_vars['b'] = $__foreach_b_0_saved_item;
}
?>
</center>
<div style="display:none;">
<div class="contactimporter_email_invite_cont">
<?php echo $_smarty_tpl->tpl_vars['eicmp']->value;?>

</div>
</div><?php }
}
