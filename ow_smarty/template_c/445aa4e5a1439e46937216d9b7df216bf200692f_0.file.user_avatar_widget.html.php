<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:32
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/user_avatar_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf124caf0c5_87623657',
  'file_dependency' => 
  array (
    '445aa4e5a1439e46937216d9b7df216bf200692f' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/user_avatar_widget.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf124caf0c5_87623657 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_online_now')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.online_now.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    .ow_avatar_console .ow_avatar_label {
        bottom: 5px;
        right: 5px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
    }
    #avatar_console_image {
        background-repeat: no-repeat;
        background-position: center center;
        position:relative;
        width: 100%;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php if ($_smarty_tpl->tpl_vars['owner']->value || $_smarty_tpl->tpl_vars['moderation']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        
        (function(){
            $("#avatar-console").hover(
              function(){
                $("#avatar-change").fadeIn("fast");
                $("#avatar-approve").fadeIn("fast");
              },
              function(){
                $("#avatar-change").fadeOut("fast");
                $("#avatar-approve").fadeOut("fast");
              }
          );            
       }());
       
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }?>


<div class="ow_avatar_console ow_center" id="avatar-console">
    <div id="avatar_console_image" style="height: <?php echo $_smarty_tpl->tpl_vars['avatarSize']->value;?>
px; background-image: url(<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
);">
        
        <div class="ow_avatar_pending_approval" style="<?php if (!$_smarty_tpl->tpl_vars['hasAvatar']->value || $_smarty_tpl->tpl_vars['isModerator']->value || !$_smarty_tpl->tpl_vars['owner']->value || !$_smarty_tpl->tpl_vars['isModerator']->value && !empty($_smarty_tpl->tpl_vars['avatarDto']->value) && $_smarty_tpl->tpl_vars['avatarDto']->value->status == 'active') {?>display:none;<?php } else {
}?>position: absolute; top: 0; right: 0; left: 0; bottom: 0; background-color: rgba(0,0,0,0.6); color: #fff; padding: 8px;"><?php echo smarty_function_text(array('key'=>'base+avatar_pending_approval'),$_smarty_tpl);?>
</div>

        <?php if ($_smarty_tpl->tpl_vars['owner']->value) {?>
            <div class="ow_avatar_button ow_avatar_change" id="avatar-change" style="display: none">
                <a class="ow_lbutton" href="javascript://"><?php echo smarty_function_text(array('key'=>'base+avatar_change'),$_smarty_tpl);?>
</a>
            </div>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['moderation']->value) {?>
            <div class="ow_avatar_button ow_avatar_change" id="avatar-approve" style="display: none">
                <a class="ow_lbutton" href="javascript://"><?php echo smarty_function_text(array('key'=>'base+approve'),$_smarty_tpl);?>
</a>
            </div>
        <?php }?>
        
        <?php if (isset($_smarty_tpl->tpl_vars['role']->value['label'])) {?><span class="ow_avatar_label <?php if ($_smarty_tpl->tpl_vars['isUserOnline']->value) {?>avatar_console_label<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['role']->value['custom'])) {?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['role']->value['custom'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['role']->value['label'];?>
</span><?php }?>
    </div>
    <div class="user_online_wrap"><?php if ($_smarty_tpl->tpl_vars['isUserOnline']->value) {
echo smarty_function_online_now(array('userId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);
}?></div>
</div><?php }
}
