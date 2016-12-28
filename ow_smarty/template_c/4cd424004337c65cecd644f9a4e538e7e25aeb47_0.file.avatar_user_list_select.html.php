<?php
/* Smarty version 3.1.29, created on 2016-10-13 09:21:20
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/avatar_user_list_select.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff35f0c3e7b8_47436911',
  'file_dependency' => 
  array (
    '4cd424004337c65cecd644f9a4e538e7e25aeb47' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/avatar_user_list_select.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff35f0c3e7b8_47436911 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



.avatar_select_list{
    height:320px;
    text-align:left;
    padding:0 8px;
}

.avatar_select_list .ow_user_list_picture{
    height:45px;
}

.avatar_select_list .ow_user_list_item{
    cursor:pointer;
}

.avatar_select_list .ow_item_set2{
    width:48%;
}

.avatar_select_list .asl_users{
    height:270px;
    overflow-y:scroll;
}


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<div class="ow_lp_avatars avatar_select_list" id="<?php echo $_smarty_tpl->tpl_vars['contexId']->value;?>
">
    <?php if (empty($_smarty_tpl->tpl_vars['users']->value)) {?>
    <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'base+empty_user_avatar_list_select'),$_smarty_tpl);?>
</div>
    <?php } else { ?>
    <div class="asl_users">
        <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_list_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list'] : false;
$__foreach_user_list_0_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$__foreach_user_list_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list'] = new Smarty_Variable(array('iteration' => 0));
$__foreach_user_list_0_first = true;
$__foreach_user_list_0_iteration=0;
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_list_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['first'] = $__foreach_user_list_0_first;
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last'] = $__foreach_user_list_0_iteration == $__foreach_user_list_0_total;
$__foreach_user_list_0_first = false;
$__foreach_user_list_0_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['first'] : null)) {?>
            <div class="clearfix <?php echo smarty_function_cycle(array('name'=>"rows",'values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
">
        <?php }?>
        <?php echo smarty_function_decorator(array('name'=>"user_list_item",'avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['user']->value['id']],'username'=>$_smarty_tpl->tpl_vars['user']->value['username'],'displayName'=>$_smarty_tpl->tpl_vars['user']->value['title'],'noUserLink'=>1,'contId'=>$_smarty_tpl->tpl_vars['user']->value['linkId'],'set_class'=>'ow_item_set2'),$_smarty_tpl);?>

        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['iteration'] : null)%2 == 0 && !(isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last'] : null)) {?>
            </div>
            <div class="clearfix <?php echo smarty_function_cycle(array('name'=>"rows",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last'] : null)) {?>
          </div>
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_list_0_saved_local_item;
}
if ($__foreach_user_list_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list'] = $__foreach_user_list_0_saved;
}
if ($__foreach_user_list_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_list_0_saved_item;
}
?>
    </div>
    <div class="ow_center" style="padding: 8px;">
    <?php if (!empty($_smarty_tpl->tpl_vars['langs']->value['countLabel'])) {?><input type="hidden" class="count_label" value="<?php echo $_smarty_tpl->tpl_vars['langs']->value['countLabel'];?>
" /><?php }?>
    <input type="hidden" class="button_label" value="<?php echo $_smarty_tpl->tpl_vars['langs']->value['buttonLabel'];?>
" />
    <?php if (!empty($_smarty_tpl->tpl_vars['langs']->value['countLabel'])) {?><div class="count_label"><?php echo $_smarty_tpl->tpl_vars['langs']->value['startCountLabel'];?>
</div><?php }?>
    <div class="submit_cont"><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','label'=>$_smarty_tpl->tpl_vars['langs']->value['startButtonLabel'],'class'=>'submit'),$_smarty_tpl);?>
</div></div>
    </div>
    <?php }?>
</div><?php }
}
