<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:14:09
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/file_attachment.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf0d1eb2ec2_36808512',
  'file_dependency' => 
  array (
    '979d976caafa333e38c812c6325f02a03906b183' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/file_attachment.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf0d1eb2ec2_36808512 ($_smarty_tpl) {
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['data']->value['uid'];?>
">
    <div class="ow_file_attachment_preview clearfix"<?php if (empty($_smarty_tpl->tpl_vars['data']->value['showPreview'])) {?> style="display:none;"<?php }?>></div>
    <?php if (empty($_smarty_tpl->tpl_vars['data']->value['selector'])) {?>
    <div class="clearfix ow_status_update_btn_block">
        <span class="ow_attachment_icons">
            <div id="nfa-feed1" class="ow_attachments">
              <span class="buttons clearfix">
                  <a title="Attach" href="javascript://" class="attach"></a>
              </span>
            </div>
        </span>
    </div>
    <?php }?>
</div><?php }
}
