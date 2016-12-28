<?php
/* Smarty version 3.1.29, created on 2016-10-13 13:47:41
  from "/home/dancemee/public_html/ow_plugins/photo/views/components/album_info.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff745d1654d0_30254445',
  'file_dependency' => 
  array (
    '34b02da92a51bd5ec988e6a3a9229e14d7bd7f77' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/photo/views/components/album_info.html',
      1 => 1475654740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff745d1654d0_30254445 ($_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
?>


<div id="photo-album-info" class="ow_photo_album_info_wrap clearfix">
    <div class="ow_photo_album_info">
        <div class="ow_photo_album_cover ow_high1" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['coverUrl']->value;?>
)">
            <img src="<?php echo $_smarty_tpl->tpl_vars['coverUrlOrig']->value;?>
" alt="" class="cover_orig ow_hidden" />
        </div>
        <h3 class="ow_photo_album_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['album']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h3>
        <div class="ow_photo_album_description ow_stdmargin"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['album']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</div>

        <?php echo smarty_function_add_content(array('key'=>'photo.view_album','album'=>$_smarty_tpl->tpl_vars['album']->value),$_smarty_tpl);?>

    </div>
</div>
<?php }
}
