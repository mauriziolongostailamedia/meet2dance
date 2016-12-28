<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:24:30
  from "/home/dancemee/public_html/ow_plugins/photo/views/components/sort_control.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf33e7f5b57_02672217',
  'file_dependency' => 
  array (
    '62887c5ddcb2575c628901def54dfa311545b18b' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/photo/views/components/sort_control.html',
      1 => 1475654740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf33e7f5b57_02672217 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>


<div class="ow_box_menu ow_fw_menu">
    <span class="ow_explore_photos_show"><?php echo smarty_function_text(array('key'=>"photo+show_by"),$_smarty_tpl);?>
:</span>
    <div class="ow_fw_btns">
        <?php
$_from = $_smarty_tpl->tpl_vars['itemList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" list-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['isActive']) {?> class="active"<?php }?>>
                <span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
            </a>
        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
if ($__foreach_item_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_0_saved_key;
}
?>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['initSearchEngine']->value)) {?>
        <div id="photo-list-search" class="ow_right">
            <div class="ow_searchbar clearfix">
                <div class="ow_searchbar_input ow_left">
                    <input id="search-photo" type="text" class="invitation" placeholder="<?php echo smarty_function_text(array('key'=>'photo+search_invitation'),$_smarty_tpl);?>
" value="<?php if (!empty($_smarty_tpl->tpl_vars['tag']->value)) {
echo $_smarty_tpl->tpl_vars['tag']->value;
}?>">
                    <div class="ow_searchbar_ac_wrap">
                        <ul class="ow_searchbar_ac" style="display: none"></ul>
                        <div class="ow_hidden">
                            <li class="hash-prototype browse-photo-search clearfix" style="display: none">
                                <div class="ow_search_result_tag"></div>
                                <span class="ow_searchbar_ac_count ow_right"></span>
                            </li>
                            <li class="user-prototype browse-photo-search clearfix" style="display: none">
                                <div class="ow_search_result_user ow_mini_avatar ow_left">
                                    <div class="ow_avatar">
                                        <img style="max-width: 100%;" alt="" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D">
                                    </div>
                                    <span class="ow_searchbar_username ow_small"></span>
                                </div>
                                <span class="ow_searchbar_ac_count ow_right"></span>
                            </li>
                        </div>
                    </div>
                    <div class="ow_btn_close_search"></div>
                </div>
                <span class="ow_searchbar_btn ow_ic_lens ow_cursor_pointer ow_left"></span>
            </div>
        </div>
    <?php }?>
</div>
<?php }
}
