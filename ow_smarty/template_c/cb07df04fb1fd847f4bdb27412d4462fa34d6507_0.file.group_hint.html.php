<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:26:37
  from "/home/dancemee/public_html/ow_plugins/hint/views/components/group_hint.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe805d441e28_13797892',
  'file_dependency' => 
  array (
    'cb07df04fb1fd847f4bdb27412d4462fa34d6507' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/hint/views/components/group_hint.html',
      1 => 1476209468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe805d441e28_13797892 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
?>




<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


#<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
 .uhint-avatar-image
{
    background-image: url(<?php echo $_smarty_tpl->tpl_vars['group']->value['avatar'];?>
);
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
" class="ghint-wrap uhint-wrap <?php if (!$_smarty_tpl->tpl_vars['options']->value['hasLines']) {?>hint-on-lines<?php }?> <?php if ($_smarty_tpl->tpl_vars['options']->value['has0line']) {?>hint-0-line<?php }?> <?php if (empty($_smarty_tpl->tpl_vars['cover']->value)) {?>uhint-no-cover<?php } else { ?>uhint-has-cover<?php }?>">
    <div class="uhint-body">

        <div class="uhb-head ow_border" <?php if (!empty($_smarty_tpl->tpl_vars['cover']->value)) {?>style="height: <?php echo $_smarty_tpl->tpl_vars['cover']->value['height'];?>
px;"<?php }?>>

            <?php if (!empty($_smarty_tpl->tpl_vars['cover']->value)) {?>
                <img class="uhint-cover-img" src="<?php echo $_smarty_tpl->tpl_vars['cover']->value['url'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['cover']->value['imageCss'];?>
" />
            <?php }?>

            <div class="uhb-head-text-wrap <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['line0'])) {?>uhbht-extra-line<?php }?>">
                <div class="uhb-head-text">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['group']->value['url'];?>
" class="uhbht-title">
                        <?php echo $_smarty_tpl->tpl_vars['group']->value['title'];?>

                    </a>
                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['line0'])) {?>
                        <div class="uhbht-info-line hb-info-line0 ow_small <?php if (empty($_smarty_tpl->tpl_vars['cover']->value)) {?>ow_remark<?php }?>"><?php echo $_smarty_tpl->tpl_vars['info']->value['line0'];?>
</div>
                    <?php }?>
                </div>
            </div>
        </div>

        <div class="uhb-info clearfix">

            <div class="uhint-avatar ow_avatar_console ow_bg_color ow_border">
                <div class="uhint-avatar-image">
                </div>
            </div>
            <div class="hb-info-content">
                <div class="hb-info-line hb-info-line1">
                    <?php echo $_smarty_tpl->tpl_vars['info']->value['line1'];?>

                </div>
                <div class="hb-info-line hb-info-line2"><?php echo $_smarty_tpl->tpl_vars['info']->value['line2'];?>
</div>
            </div>
        </div>

    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['buttons']->value)) {?>
    <div class="uhint-foot ow_border">
        <ul class="ow_bl clearfix">
            <?php
$_from = $_smarty_tpl->tpl_vars['buttons']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_button_0_saved_item = isset($_smarty_tpl->tpl_vars['button']) ? $_smarty_tpl->tpl_vars['button'] : false;
$_smarty_tpl->tpl_vars['button'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['button']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->_loop = true;
$__foreach_button_0_saved_local_item = $_smarty_tpl->tpl_vars['button'];
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['button']->value['html'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['button']->value['html'];?>

                <?php } else { ?>
                    <li><a <?php echo $_smarty_tpl->tpl_vars['button']->value['attrs'];?>
><?php echo $_smarty_tpl->tpl_vars['button']->value['label'];?>
</a></li>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['button'] = $__foreach_button_0_saved_local_item;
}
if ($__foreach_button_0_saved_item) {
$_smarty_tpl->tpl_vars['button'] = $__foreach_button_0_saved_item;
}
?>
        </ul>
    </div>
    <?php }?>
</div><?php }
}
