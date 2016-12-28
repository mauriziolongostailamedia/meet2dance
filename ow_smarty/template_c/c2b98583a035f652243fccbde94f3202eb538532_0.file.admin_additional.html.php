<?php
/* Smarty version 3.1.29, created on 2016-10-16 18:06:38
  from "/home/dancemee/public_html/ow_plugins/groups/views/controllers/admin_additional.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5803a58e558d50_10847584',
  'file_dependency' => 
  array (
    'c2b98583a035f652243fccbde94f3202eb538532' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/groups/views/controllers/admin_additional.html',
      1 => 1476259984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5803a58e558d50_10847584 ($_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_url_for')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php if ($_smarty_tpl->tpl_vars['isForumAvailable']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['isForumConnected']->value) {?>
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','iconClass'=>"ow_ic_forum",'langLabel'=>'forum+forum_settings','addClass'=>'ow_center','type'=>'empty')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>"ow_ic_forum",'langLabel'=>'forum+forum_settings','addClass'=>'ow_center','type'=>'empty'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p><?php echo smarty_function_text(array('key'=>"forum+forum_already_connected"),$_smarty_tpl);?>
</p>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>"ow_ic_forum",'langLabel'=>'forum+forum_settings','addClass'=>'ow_center','type'=>'empty'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


    <?php } else { ?>
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','iconClass'=>"ow_ic_forum",'langLabel'=>'forum+forum_settings','addClass'=>'ow_center','type'=>'empty')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>"ow_ic_forum",'langLabel'=>'forum+forum_settings','addClass'=>'ow_center','type'=>'empty'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p><?php echo smarty_function_text(array('key'=>"forum+connect_forum_to_entity"),$_smarty_tpl);?>
</p>

            <?php $_smarty_tpl->_cache['capture_stack'][] = array('default', 'onclick', null); ob_start(); ?>window.location.href='<?php echo smarty_function_url_for(array('for'=>"GROUPS_CTRL_Admin:connect_forum"),$_smarty_tpl);?>
?isForumConnected=yes'<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo smarty_function_decorator(array('name'=>'button','type'=>'button','id'=>'btn-connect-forum','langLabel'=>'forum+connect_forum_button','class'=>'ow_ic_add','onclick'=>$_smarty_tpl->tpl_vars['onclick']->value),$_smarty_tpl);?>


        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>"ow_ic_forum",'langLabel'=>'forum+forum_settings','addClass'=>'ow_center','type'=>'empty'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


    <?php }
} else { ?>

        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_center','type'=>'empty')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_center','type'=>'empty'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p><?php echo smarty_function_text(array('key'=>"base+empty_list"),$_smarty_tpl);?>
</p>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_center','type'=>'empty'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php }
}
}
