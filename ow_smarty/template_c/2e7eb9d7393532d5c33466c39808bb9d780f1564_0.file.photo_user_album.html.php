<?php
/* Smarty version 3.1.29, created on 2016-10-13 13:47:41
  from "/home/dancemee/public_html/ow_plugins/photo/views/controllers/photo_user_album.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff745d13e4b4_08544358',
  'file_dependency' => 
  array (
    '2e7eb9d7393532d5c33466c39808bb9d780f1564' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/photo/views/controllers/photo_user_album.html',
      1 => 1475654740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff745d13e4b4_08544358 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_component')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.component.php';
?>


<?php echo $_smarty_tpl->tpl_vars['pageHead']->value;?>


<?php if ($_smarty_tpl->tpl_vars['isOwner']->value || $_smarty_tpl->tpl_vars['isModerator']->value) {?>
    <div id="album-edit" class="ow_photo_album_info_wrap clearfix">
        <div class="ow_photo_album_toolbar ow_smallmargin clearfix">
            <div class="ow_photo_album_btns ow_right clearfix edit_btn">
                <ul class="ow_bl clearfix ow_small ow_right">
                    <li>
                        <a href="javascript://">
                            <?php echo smarty_function_text(array('key'=>"photo+edit_album"),$_smarty_tpl);?>

                        </a>
                    </li>
                </ul>
            </div>

            <div style="display: none" class="ow_photo_album_btns_edit ow_right clearfix edit_done">
                <ul class="ow_bl clearfix ow_small ow_right">
                    <li>
                        <a class="done" href="javascript://">
                            <?php echo smarty_function_text(array('key'=>"photo+done"),$_smarty_tpl);?>

                        </a>
                    </li>
                    <?php ob_start();
echo smarty_function_text(array('key'=>"photo+newsfeed_album"),$_smarty_tpl);
$_tmp1=ob_get_clean();
if ($_smarty_tpl->tpl_vars['album']->value->name != $_tmp1) {?>
                        <li>
                            <a class="ow_mild_red delete_album" href="javascript://">
                                <?php echo smarty_function_text(array('key'=>"photo+delete_album"),$_smarty_tpl);?>

                            </a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="ow_photo_album_info">
            <div class="ow_photo_album_cover ow_high1" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['coverUrl']->value;?>
)">
                <?php if ($_smarty_tpl->tpl_vars['isOwner']->value) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['coverUrlOrig']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['album']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" class="ow_hidden cover_orig" />
                    <?php if (empty($_smarty_tpl->tpl_vars['noCover']->value)) {?>
                        <a class="ow_lbutton" href="javascript://" style="display: none"><?php echo smarty_function_text(array('key'=>"photo+edit_cover_label"),$_smarty_tpl);?>
</a>
                    <?php }?>
                <?php }?>
            </div>
            <h3 class="ow_photo_album_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['album']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h3>
            <div class="ow_photo_album_description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['album']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</div>
            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>"albumEditForm",'style'=>"display: none")); $_block_repeat=true; echo smarty_block_form(array('name'=>"albumEditForm",'style'=>"display: none"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo smarty_function_input(array('name'=>"albumName"),$_smarty_tpl);
echo smarty_function_error(array('name'=>"albumName"),$_smarty_tpl);?>

                <?php echo smarty_function_input(array('name'=>"desc",'class'=>'ow_smallmargin'),$_smarty_tpl);?>


                <?php
$_from = $_smarty_tpl->tpl_vars['extendInputs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_input_0_saved_item = isset($_smarty_tpl->tpl_vars['input']) ? $_smarty_tpl->tpl_vars['input'] : false;
$_smarty_tpl->tpl_vars['input'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['input']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->_loop = true;
$__foreach_input_0_saved_local_item = $_smarty_tpl->tpl_vars['input'];
?>
                    <div id="<?php echo $_smarty_tpl->tpl_vars['input']->value;?>
" class="ow_smallmargin">
                        <div class="ow_smallmargin">
                            <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['input']->value),$_smarty_tpl);
echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['input']->value),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['input']->value),$_smarty_tpl);?>

                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['input'] = $__foreach_input_0_saved_local_item;
}
if ($__foreach_input_0_saved_item) {
$_smarty_tpl->tpl_vars['input'] = $__foreach_input_0_saved_item;
}
?>

                <?php echo smarty_function_add_content(array('key'=>"photo.onRenderEditAlbum",'albumId'=>$_smarty_tpl->tpl_vars['album']->value->id,'userId'=>$_smarty_tpl->tpl_vars['album']->value->userId),$_smarty_tpl);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"albumEditForm",'style'=>"display: none"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

        </div>
    </div>
    <div id="photo-menu" style="display: none" class="ow_fw_menu ow_high2 clearfix ow_smallmargin">
        <div style="padding-top: 4px; margin-right: 8px;" class="ow_left">
            <input type="checkbox" value="1" name="selectAll" class="plan_id" />
            <span style="vertical-align: top;"><?php echo smarty_function_text(array('key'=>"photo+check_all"),$_smarty_tpl);?>
</span>
        </div>
        <ul class="ow_bl clearfix ow_small ow_left">
            <li>
                <a href="javascript://" class="ow_mild_red delete">
                    <?php echo smarty_function_text(array('key'=>"photo+delete_selected"),$_smarty_tpl);?>

                </a>
            </li>
        </ul>
        <?php if ($_smarty_tpl->tpl_vars['isOwner']->value) {?>
            <div style="float: left;" class="ow_context_action_block ow_context_action_value_block clearfix">
                <div class="ow_context_action">
                    <a class="ow_context_action_value"><?php echo smarty_function_text(array('key'=>"photo+move_to_album"),$_smarty_tpl);?>
</a><span class="ow_context_more"></span>
                    <div style="opacity: 1; top: 18px;" class="ow_tooltip ow_small ow_tooltip_top_right">
                        <div class="ow_tooltip_tail">
                            <span></span>
                        </div>
                        <div class="ow_tooltip_body">
                            <ul class="ow_context_action_list ow_border">
                                <li><a href="javascript://"><?php echo smarty_function_text(array('key'=>"photo+create_album"),$_smarty_tpl);?>
</a></li>
                                <?php if (!empty($_smarty_tpl->tpl_vars['albumNameList']->value)) {?>
                                    <li><div class="ow_console_divider"></div></li>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['albumNameList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_albumName_1_saved_item = isset($_smarty_tpl->tpl_vars['albumName']) ? $_smarty_tpl->tpl_vars['albumName'] : false;
$_smarty_tpl->tpl_vars['albumName'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['albumName']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['albumName']->key => $_smarty_tpl->tpl_vars['albumName']->value) {
$_smarty_tpl->tpl_vars['albumName']->_loop = true;
$__foreach_albumName_1_saved_local_item = $_smarty_tpl->tpl_vars['albumName'];
?>
                                        <li><a href="javascript://" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['albumName']->key, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['albumName']->value;?>
</a></li>
                                    <?php
$_smarty_tpl->tpl_vars['albumName'] = $__foreach_albumName_1_saved_local_item;
}
if ($__foreach_albumName_1_saved_item) {
$_smarty_tpl->tpl_vars['albumName'] = $__foreach_albumName_1_saved_item;
}
?>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="ow_bl clearfix ow_small ow_left">
                <li class="ow_bl_disabled set_as_cover">
                    <a href="javascript://">
                        <?php echo smarty_function_text(array('key'=>"photo+set_as_cover_label"),$_smarty_tpl);?>

                    </a>
                    <div style="top: -27px; " class="ow_tip ow_tip_top">
                        <div style="left: 16px;" class="ow_tip_arrow">
                            <span></span>
                        </div>
                        <div class="ow_tip_box">
                            <span style="white-space:nowrap; font-weight: normal; max-width: 200px;" class="ow_tip_title">
                                <?php echo smarty_function_text(array('key'=>"photo+select_one_photo_warning"),$_smarty_tpl);?>

                            </span>
                        </div>
                    </div>
                </li>
            </ul>
        <?php }?>
    </div>
<?php } else { ?>
    <?php echo smarty_function_component(array('class'=>'PHOTO_CMP_AlbumInfo','album'=>$_smarty_tpl->tpl_vars['album']->value),$_smarty_tpl);?>

<?php }?>

<?php echo smarty_function_component(array('class'=>"PHOTO_CMP_PhotoList",'type'=>"albumPhotos",'albumId'=>$_smarty_tpl->tpl_vars['album']->value->id),$_smarty_tpl);?>

<?php }
}
