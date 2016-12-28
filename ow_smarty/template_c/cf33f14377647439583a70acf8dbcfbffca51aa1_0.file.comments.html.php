<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:33
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/comments.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf1251e9a39_08947140',
  'file_dependency' => 
  array (
    'cf33f14377647439583a70acf8dbcfbffca51aa1' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/comments.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf1251e9a39_08947140 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['cmpContext']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['mini']->value) {?>ow_comments_mipc<?php } else { ?>ow_comments_ipc<?php }
if ($_smarty_tpl->tpl_vars['bottomList']->value) {?> ow_comments_form_top<?php }
if (empty($_smarty_tpl->tpl_vars['formCmp']->value)) {?> ow_comments_no_form<?php }?>">
   <?php $_smarty_tpl->_cache['capture_stack'][] = array('comments', null, null); ob_start(); ?>
   <?php if ($_smarty_tpl->tpl_vars['topList']->value) {?>
   <div class="comments_list_cont">
	   <?php echo $_smarty_tpl->tpl_vars['commentList']->value;?>

   </div>
   <?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['formCmp']->value)) {?>
      <div class="ow_comments_form_wrap_pre" style="display:none;"></div>
      <div class="ow_comments_form_wrap">
      <div class="ow_comments_input_wrap clearfix">
            <div class="ow_comments_item_picture"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['currentUserInfo']->value),$_smarty_tpl);?>
</div>
            <div class="ow_comments_item_info clearfix"><span class="comment_add_arr"></span>
                <div class="ow_comments_input">
                    <span class="ow_attachment_icons">
                        <div class="ow_attachments clearfix">
                            <?php if (!empty($_smarty_tpl->tpl_vars['attch']->value)) {?><a href="javascript://" class="image" id="<?php echo $_smarty_tpl->tpl_vars['buttonContId']->value;?>
"><?php }?>
                                
                            </a>
                        </div>
                    </span>
                    <textarea id="<?php echo $_smarty_tpl->tpl_vars['taId']->value;?>
" class="comments_fake_autoclick" placeholder="<?php echo smarty_function_text(array('key'=>'base+comment_form_element_invitation_text','escape'=>true),$_smarty_tpl);?>
"></textarea>
                </div>
            </div>
        </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['attch']->value)) {
echo $_smarty_tpl->tpl_vars['attch']->value;
}?>
        <div id="<?php echo $_smarty_tpl->tpl_vars['attchId']->value;?>
"></div>
        
        <div class="clearfix comments_hidden_btn" style="display:none;">
        <span class="ow_attachment_btn"><?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'base+btn_label_send'),$_smarty_tpl);?>
</span>
        </div>
        
        </div>
    <?php } else { ?>
      <div class="ow_smallmargin ow_center ow_comments_msg"><?php echo $_smarty_tpl->tpl_vars['authErrorMessage']->value;?>
</div>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['bottomList']->value) {?>
   <div class="comments_list_cont">
	   <?php echo $_smarty_tpl->tpl_vars['commentList']->value;?>

   </div>
   <?php }?>
   <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
   <?php if ($_smarty_tpl->tpl_vars['wrapInBox']->value) {?>
   <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_add_comments_form ow_stdmargin','langLabel'=>'base+comment_box_cap_label','iconClass'=>'ow_ic_comment')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_add_comments_form ow_stdmargin','langLabel'=>'base+comment_box_cap_label','iconClass'=>'ow_ic_comment'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

   <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['comments']) ? $_smarty_tpl->_cache['__smarty_capture']['comments'] : null);?>

   <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_add_comments_form ow_stdmargin','langLabel'=>'base+comment_box_cap_label','iconClass'=>'ow_ic_comment'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

   <?php } else { ?>
   <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['comments']) ? $_smarty_tpl->_cache['__smarty_capture']['comments'] : null);?>

   <?php }?>
</div><?php }
}
