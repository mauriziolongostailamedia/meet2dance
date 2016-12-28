<?php
/* Smarty version 3.1.29, created on 2016-10-12 17:54:35
  from "/home/dancemee/public_html/ow_plugins/newsfeed/mobile/views/components/feed_item.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe5cbb963170_26946414',
  'file_dependency' => 
  array (
    '6b4dfe55dcb3efd01e22ff1b76c7e15142d78fec' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/newsfeed/mobile/views/components/feed_item.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe5cbb963170_26946414 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_math')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    .ow_newsfeed_line
    {
        display: block;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['autoId'];?>
" class="owm_newsfeed_item <?php echo $_smarty_tpl->tpl_vars['item']->value['view']['class'];?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value['responded']) {?>owm_newsfeed_responded<?php }?>  <?php if (empty($_smarty_tpl->tpl_vars['item']->value['content'])) {?>owm_newsfeed_item_no_body<?php }?>" style="<?php echo $_smarty_tpl->tpl_vars['item']->value['view']['style'];?>
">
    <?php if ($_smarty_tpl->tpl_vars['displayType']->value != "page") {?>
        <div class="owm_newsfeed_date"><?php echo $_smarty_tpl->tpl_vars['item']->value['createTime'];?>
</div>
    <?php }?>
    <div class="owm_newsfeed_item_cont <?php if ($_smarty_tpl->tpl_vars['item']->value['disabled']) {?>owm_newsfeed_item_disabled_wrap<?php }?>">
        <div class="owm_newsfeed_context_menu">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['contextActionMenu'];?>

        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['item']->value['responded']) {?>
            <div class="owm_newsfeed_header_responded">
                <div class="owm_newsfeed_header_responded_cont">
                    <div class="owm_newsfeed_header_responded_txt"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['respond']['user']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['respond']['user']['name'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['item']->value['respond']['text'];?>
</div>
                </div>
            </div>
        
            <div class="owm_newsfeed_body_responded">
                <?php if (empty($_smarty_tpl->tpl_vars['item']->value['content'])) {?>
                    <div class="owm_newsfeed_item_padding owm_newsfeed_item_box clearfix">
                <?php }?>
        <?php }?>
        
        <div class="owm_newsfeed_header clearfix">
            <div class="owm_newsfeed_header_pic">
                <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['users'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_0_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_0_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
                    <?php echo smarty_function_decorator(array('name'=>"avatar_item",'url'=>$_smarty_tpl->tpl_vars['user']->value['url'],'src'=>$_smarty_tpl->tpl_vars['user']->value['avatarUrl'],'label'=>$_smarty_tpl->tpl_vars['user']->value['roleLabel']['label'],'labelColor'=>$_smarty_tpl->tpl_vars['user']->value['roleLabel']['labelColor']),$_smarty_tpl);?>

                <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_local_item;
}
if ($__foreach_user_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_item;
}
?>
            </div>
            <div class="owm_newsfeed_header_cont">
                <div class="owm_newsfeed_header_txt">
                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['user']['url'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['user']['name'];?>
</b></a>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['context']) {?>  &raquo; <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['context']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['context']['label'];?>
</a><?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['string'];?>

                    <?php if ($_smarty_tpl->tpl_vars['displayType']->value == "page") {?>
                        <div class="owm_newsfeed_date"><?php echo $_smarty_tpl->tpl_vars['item']->value['createTime'];?>
</div>
                    <?php }?>
                </div>
            </div>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['item']->value['content']) {?>
            <div class="owm_newsfeed_body">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

            </div>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['item']->value['responded']) {?>
                <?php if (empty($_smarty_tpl->tpl_vars['item']->value['content'])) {?>
                    </div>
                <?php }?>
            </div>
        <?php }?>
        
        <div class="owm_newsfeed_footer">
            <div class="owm_newsfeed_control clearfix">
                <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['features']['items'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_feature_1_saved_item = isset($_smarty_tpl->tpl_vars['feature']) ? $_smarty_tpl->tpl_vars['feature'] : false;
$_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['feature']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
$__foreach_feature_1_saved_local_item = $_smarty_tpl->tpl_vars['feature'];
?>
                    <?php if (empty($_smarty_tpl->tpl_vars['feature']->value['hideButton'])) {?>
                    <div class="owm_newsfeed_control_left" id="<?php echo $_smarty_tpl->tpl_vars['feature']->value['uniqId'];?>
" style="width: <?php echo smarty_function_math(array('equation'=>"100 / x ",'x'=>$_smarty_tpl->tpl_vars['item']->value['features']['buttonsCount']),$_smarty_tpl);?>
%;">
                        <a class="owm_newsfeed_control_btn <?php echo $_smarty_tpl->tpl_vars['feature']->value['class'];?>
 <?php if ($_smarty_tpl->tpl_vars['feature']->value['active']) {?>owm_newsfeed_control_active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['feature']->value['url'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['onclick'])) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['feature']->value['onclick'];?>
"<?php }?>>
                            <?php if (isset($_smarty_tpl->tpl_vars['feature']->value['string'])) {?>
                                 <span class="owm_newsfeed_control_txt"><?php echo $_smarty_tpl->tpl_vars['feature']->value['string'];?>
</span>
                            <?php }?>
                            
                            <?php if (isset($_smarty_tpl->tpl_vars['feature']->value['count'])) {?>
                                <span class="owm_newsfeed_control_counter"><?php echo $_smarty_tpl->tpl_vars['feature']->value['count'];?>
</span>				            						
                            <?php }?>
                        </a>
                         
                        <?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['innerHtml'])) {?>
                            <div class="owm_newsfeed_control_inner_html">
                                <?php echo $_smarty_tpl->tpl_vars['feature']->value['innerHtml'];?>

                            </div>
                        <?php }?>
                    </div>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['feature'] = $__foreach_feature_1_saved_local_item;
}
if ($__foreach_feature_1_saved_item) {
$_smarty_tpl->tpl_vars['feature'] = $__foreach_feature_1_saved_item;
}
?>
            </div>
            
            <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['features']['items'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_feature_2_saved_item = isset($_smarty_tpl->tpl_vars['feature']) ? $_smarty_tpl->tpl_vars['feature'] : false;
$_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['feature']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
$__foreach_feature_2_saved_local_item = $_smarty_tpl->tpl_vars['feature'];
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['html'])) {?>
                    <div id="<?php echo $_smarty_tpl->tpl_vars['feature']->value['uniqId'];?>
-html" class="owm_newsfeed_control_html ">
                        <?php echo $_smarty_tpl->tpl_vars['feature']->value['html'];?>

                    </div>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['feature'] = $__foreach_feature_2_saved_local_item;
}
if ($__foreach_feature_2_saved_item) {
$_smarty_tpl->tpl_vars['feature'] = $__foreach_feature_2_saved_item;
}
?>
        </div>
        <div class="owm_newsfeed_item_disabled" onclick="OWM.error($(this).data('message'));" data-message='<?php echo smarty_function_text(array('key'=>"newsfeed+mobile_disabled_actions_message",'desktopUrl'=>$_smarty_tpl->tpl_vars['item']->value['desktopUrl']),$_smarty_tpl);?>
'></div>
    </div>
</div><?php }
}
