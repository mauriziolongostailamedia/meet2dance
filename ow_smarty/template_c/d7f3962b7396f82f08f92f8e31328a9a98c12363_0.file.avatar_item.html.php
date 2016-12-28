<?php
/* Smarty version 3.1.29, created on 2016-10-12 17:54:35
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/decorators/avatar_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe5cbb993aa2_58172831',
  'file_dependency' => 
  array (
    'd7f3962b7396f82f08f92f8e31328a9a98c12363' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/decorators/avatar_item.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe5cbb993aa2_58172831 ($_smarty_tpl) {
?>


<div class="owm_avatar<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];
}?>">
<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['isMarked'])) {?>
    <div class="owm_ico_bookmark owm_bookmark_icon"></div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['url'])) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
"><img alt=""<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])) {?> title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])) {?><span class="owm_avatar_label"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['labelColor'])) {?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['data']->value['labelColor'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
</span><?php }?></a>
<?php } else { ?>
    <img alt="" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])) {?> title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" />
<?php }?>
</div><?php }
}
