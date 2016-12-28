<?php
/* Smarty version 3.1.29, created on 2016-10-12 19:49:27
  from "/home/dancemee/public_html/ow_plugins/photo/mobile/views/controllers/photo_view_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe77a7b06b48_34724074',
  'file_dependency' => 
  array (
    '65f6fa6c7ad73a522c612299f8653e701163f1f9' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/photo/mobile/views/controllers/photo_view_list.html',
      1 => 1475654740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe77a7b06b48_34724074 ($_smarty_tpl) {
?>
<div>
    <div class="owm_photo_block">
        <?php if (!empty($_smarty_tpl->tpl_vars['authError']->value)) {?>
            <div class="owm_padding">
                <div class="owm_info owm_anno"><?php echo $_smarty_tpl->tpl_vars['authError']->value;?>
</div>
            </div>
        <?php } else { ?>
            <div class="clearfix">
                <?php if (!empty($_smarty_tpl->tpl_vars['uploadUrl']->value)) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['uploadUrl']->value;?>
" class="owm_add_photo"></a>
                <?php } elseif (!empty($_smarty_tpl->tpl_vars['id']->value)) {?>
                    <a href="javascript://" class="owm_add_photo" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></a>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

            </div>
            <div class="owm_photo_list">
                <div class="owm_photo_list_tr clearfix" id="photo-list-cont"><?php echo $_smarty_tpl->tpl_vars['photos']->value;?>
</div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['loadMore']->value) {?>
            <div class="owm_photo_list_load_more owm_bg_color_3">
                <a href="javascript://" id="btn-photo-load-more"></a>
            </div>
            <?php }?>
        <?php }?>
    </div>
</div>
<?php }
}
