<?php
/* Smarty version 3.1.29, created on 2016-10-12 17:54:35
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/comments.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe5cbb8d0806_63740360',
  'file_dependency' => 
  array (
    'a23e6f8a55b12e266d490ccaa7dbf0b505d6cf96' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/components/comments.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe5cbb8d0806_63740360 ($_smarty_tpl) {
?>
<div class="owm_newsfeed_comments" id="<?php echo $_smarty_tpl->tpl_vars['cmpContext']->value;?>
">
    <a name="comments"></a>
    <?php echo $_smarty_tpl->tpl_vars['commentList']->value;?>

    <?php if (isset($_smarty_tpl->tpl_vars['formCmp']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value;?>

    <?php } else { ?>
    <div class="owm_nocontent"><?php echo $_smarty_tpl->tpl_vars['authErrorMessage']->value;?>
</div>
    <?php }?>
</div>				            	<?php }
}
