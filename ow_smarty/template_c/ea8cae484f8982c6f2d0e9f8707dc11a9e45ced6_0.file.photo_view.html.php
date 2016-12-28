<?php
/* Smarty version 3.1.29, created on 2016-10-12 18:52:00
  from "/home/dancemee/public_html/ow_plugins/photo/mobile/views/controllers/photo_view.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe6a30d65ee2_83202328',
  'file_dependency' => 
  array (
    'ea8cae484f8982c6f2d0e9f8707dc11a9e45ced6' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/photo/mobile/views/controllers/photo_view.html',
      1 => 1475654740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe6a30d65ee2_83202328 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_url_for_route')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_format_date')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.format_date.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .owm_photo_stage { background-image: url(<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
); }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div>
<?php if (!empty($_smarty_tpl->tpl_vars['authError']->value)) {?>
    <div class="owm_padding">
        <div class="owm_info owm_anno"><?php echo $_smarty_tpl->tpl_vars['authError']->value;?>
</div>
    </div>
<?php } else { ?>
    <div class="owm_photo_view">
        <div class="owm_photo_bg">
            <div class="owm_photo_holder">
                <div class="owm_photo_stage"><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value->description, ENT_QUOTES, 'UTF-8', true);?>
" /></div>
                <?php if ($_smarty_tpl->tpl_vars['nextPhoto']->value) {?><a href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['nextPhoto']->value)."]"),$_smarty_tpl);?>
" class="owm_photo_next"></a><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['previousPhoto']->value) {?><a href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['previousPhoto']->value)."]"),$_smarty_tpl);?>
" class="owm_photo_prev"></a><?php }?>
            </div>
            <div class="owm_photo_info">
                <div class="owm_photo_album_block clearfix">
                    <div class="owm_photo_album owm_float_left">
                        <a class="owm_photo_album_name" href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['album']->value->name,60);?>
</a>
                        <span class="owm_photo_number"><?php echo $_smarty_tpl->tpl_vars['photoIndex']->value;?>
</span> / <span class="owm_photo_amount"><?php echo $_smarty_tpl->tpl_vars['photoCount']->value;?>
</span>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['fullsizeUrl']->value) {?><a class="owm_photo_enlarge owm_float_right" href="<?php echo $_smarty_tpl->tpl_vars['fullsizeUrl']->value;?>
"></a><?php }?>
                </div>
                <div class="owm_photo_author clearfix">
                    <div class="owm_float_left"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatar']->value),$_smarty_tpl);?>
</div>
                    <div class="owm_photo_string">
                        <div class="owm_photo_name"><a href="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['avatar']->value['title'];?>
</a></div>
                        <div class="owm_photo_date"><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['photo']->value->addDatetime),$_smarty_tpl);?>
</div>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['photo']->value->description) {?><div class="owm_photo_descr"><?php echo $_smarty_tpl->tpl_vars['photo']->value->description;?>
</div><?php }?>
            </div>
        </div>

        <?php echo $_smarty_tpl->tpl_vars['comments']->value;?>


    </div>
<?php }?>
</div><?php }
}
