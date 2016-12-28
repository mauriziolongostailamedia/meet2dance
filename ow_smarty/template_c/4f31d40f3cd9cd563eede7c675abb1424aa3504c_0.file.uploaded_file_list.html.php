<?php
/* Smarty version 3.1.29, created on 2016-10-14 20:06:41
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/components/uploaded_file_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58011eb1662824_09595281',
  'file_dependency' => 
  array (
    '4f31d40f3cd9cd563eede7c675abb1424aa3504c' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/components/uploaded_file_list.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58011eb1662824_09595281 ($_smarty_tpl) {
if (!is_callable('smarty_function_component')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.component.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_fw_menu ow_high2 clearfix ow_smallmargin">
    <div class="ow_admin_date_filter"><?php echo smarty_function_component(array('class'=>"ADMIN_CMP_UploadedFilesFilter"),$_smarty_tpl);?>
</div>
    <div class="ow_admin_bulk_options"><?php echo smarty_function_component(array('class'=>"ADMIN_CMP_UploadedFilesBulkOptions"),$_smarty_tpl);?>
</div>
    <div class="ow_admin_upload_button"><?php echo smarty_function_component(array('class'=>"BASE_CMP_AjaxFileUploadButton"),$_smarty_tpl);?>
</div>
</div>

<div class="ow_photo_list_wrap ow_photo_no_sidebar">
    <div id="browse-photo" class="ow_photo_list ow_photo_pint_mode clearfix"></div>
    <div id="browse-photo-preloader" class="ow_fw_menu ow_preloader"></div>
</div>

<div id="browse-photo-item-prototype" class="ow_photo_item_wrap" style="display: none">
    <div class="ow_photo_item">
        <div class="ow_photo_pint_album">
            <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" width="0" height="0" alt="" />
            <div class="ow_photo_chekbox_area" style="display: none;"><div class="ow_photo_checkbox"></div></div>
        </div>
        <div class="ow_photo_item_info ow_small">
            <div class="ow_photo_item_info_title"><?php echo smarty_function_text(array('key'=>"admin+title"),$_smarty_tpl);?>
: <b><span></span></b></div>
            <div class="ow_photo_item_info_dimensions"><?php echo smarty_function_text(array('key'=>"admin+size"),$_smarty_tpl);?>
: <b><span></span></b></div>
            <div class="ow_photo_item_info_fileszie"><?php echo smarty_function_text(array('key'=>"admin+filesize"),$_smarty_tpl);?>
: <b><span></span></b></div>
            <div class="ow_photo_item_info_uploaddate"><?php echo smarty_function_text(array('key'=>"admin+upload_date"),$_smarty_tpl);?>
: <b><span></span></b></div>
            <div class="ow_photo_item_info_url">
                <input type="text" class="ow_disabled" disabled="disabled" name="url" />
            </div>
        </div>
    </div>
</div>

<div class="ow_hidden">
    <div id="context-action-prototype" class="ow_context_action">
        <div class="ow_tooltip ow_small ow_tooltip_top_right" style="opacity: 1; top: 19px;">
            <div class="ow_tooltip_tail"><span></span></div>
            <div class="ow_tooltip_body"></div>
        </div>
    </div>
    <iframe name="photo-downloader"  style="display:none;"></iframe>
</div><?php }
}
