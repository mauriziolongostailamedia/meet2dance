<?php
/* Smarty version 3.1.29, created on 2016-10-14 20:06:41
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/components/uploaded_files_floatbox.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58011eb1623557_14070646',
  'file_dependency' => 
  array (
    '9058d0b874325e9dea6d4a02dca33000459d7e88' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/components/uploaded_files_floatbox.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58011eb1623557_14070646 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_hidden">
    <div id="ow-photo-view" class="ow_photoview_wrap clearfix ow_bg_color">
        <?php if (!empty($_smarty_tpl->tpl_vars['authError']->value)) {?>
        <div id="ow-photo-view-error" style="padding: 45px 10px 65px">
            <div class="ow_anno ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['authError']->value;?>
</div>
        </div>
        <?php } else { ?>
        <div class="ow_photoview_stage_wrap">
            <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="ow_photo_img ow_photo_view" />
            <div class="ow_photo_context_action" style="display: none"></div>
            <a class="ow_photoview_arrow_left" href="javascript://"><i></i></a>
            <a class="ow_photoview_arrow_right" href="javascript://"><i></i></a>
        </div>
        <div class="ow_photoview_info_wrap">
            <div class="ow_photoview_info">
                <div class="ow_photo_scroll_cont">
                    <input type="hidden" class="ow_photoview_id" name="photo_id" />
                    <div class="ow_photoview_title ow_small ow_smallmargin">
                        <h5><?php echo smarty_function_text(array('key'=>"admin+title"),$_smarty_tpl);?>
:</h5>
                        <input type="text" name="title" />
                    </div>

                    <div class="ow_photoview_url ow_small ow_smallmargin">
                        <h5><?php echo smarty_function_text(array('key'=>"admin+url"),$_smarty_tpl);?>
:</h5>
                        <input type="text" name="url" disabled="disabled" class="ow_disabled" />
                        <a href="#">Copy</a>
                    </div>

                    <div class="ow_photoview_date ow_small">
                        <?php echo smarty_function_text(array('key'=>"admin+date"),$_smarty_tpl);?>
: <b><span id="photo-date"></span></b>
                    </div>
                    <div class="ow_photoview_size ow_small">
                        <?php echo smarty_function_text(array('key'=>"admin+size"),$_smarty_tpl);?>
: <b><span id="photo-size"></span></b>
                    </div>
                    <div class="ow_photoview_filesize ow_small">
                        <?php echo smarty_function_text(array('key'=>"admin+filesize"),$_smarty_tpl);?>
: <b><span id="photo-filesize"></span></b>
                    </div>

                    <div class="ow_photoview_save ow_small ow_right">
                        <span class="ow_button">
                            <span class=" ow_positive ow_btn_delimiter">
                                <input type="submit" name="save" value="Save" class="ow_positive ow_btn_delimiter image_save_data" name="submit" />
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="ow_feed_comments_input_sticky"></div>
        </div>
        <?php }?>
    </div>
</div><?php }
}
