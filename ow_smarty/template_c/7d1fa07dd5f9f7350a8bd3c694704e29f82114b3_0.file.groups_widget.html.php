<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:36:22
  from "/home/dancemee/public_html/ow_plugins/groups/views/components/groups_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe90b6045e06_30985411',
  'file_dependency' => 
  array (
    '7d1fa07dd5f9f7350a8bd3c694704e29f82114b3' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/groups/views/components/groups_widget.html',
      1 => 1476259984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe90b6045e06_30985411 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .ow_lp_groups .ow_lp_wrapper{
        width: 75px;
        float: left;
        margin-right: -80px;
    }

    .ow_lp_groups .ow_lp_wrapper_inline {
        display:inline-block;
        margin:0 3px 3px 0;
        width:75px;
    }


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    var $tb_container = $(".ow_box_toolbar_cont", $("#groups-list_widget").parents('.ow_box, .ow_box_empty').get(0));

    $("#groups-widget-menu-popular").click(function(){
        $tb_container.html($("#groups-widget-toolbar-popular").html());
    });

    $("#groups-widget-menu-latest").click(function(){
        $tb_container.html($("#groups-widget-toolbar-latest").html());
    });

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div id="groups-list_widget">

    <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


    <?php if (!empty($_smarty_tpl->tpl_vars['menuItems']->value)) {?>
        <div class="ow_lp_groups ow_hidden" id="<?php echo $_smarty_tpl->tpl_vars['menuItems']->value[1]['contId'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['showTitles']->value) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['popular']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                   <div class="clearfix ow_smallmargin">
                       <div class="ow_lp_wrapper">
                           <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
                                <img title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="75" />
                           </a>
                       </div>
                       <div class="ow_lp_label ow_small">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                            <br />
                            <?php echo smarty_function_text(array('key'=>"groups+listing_users_label",'count'=>$_smarty_tpl->tpl_vars['item']->value['users']),$_smarty_tpl);?>

                       </div>
                   </div>
                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
            <?php } else { ?>
                <div class="ow_center">
                <?php
$_from = $_smarty_tpl->tpl_vars['popular']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?><a class="ow_lp_wrapper_inline" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"> <img title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="75" /> </a><?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
?>
                </div>
            <?php }?>
        </div>

        <div class="ow_lp_groups" id="<?php echo $_smarty_tpl->tpl_vars['menuItems']->value[0]['contId'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['showTitles']->value) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['latest']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_2_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_2_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                   <div class="clearfix ow_smallmargin">
                       <div class="ow_lp_wrapper">
                           <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
                                <img title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="75" />
                           </a>
                       </div>
                       <div class="ow_lp_label ow_small">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                            <br />
                            <?php echo smarty_function_text(array('key'=>"groups+listing_users_label",'count'=>$_smarty_tpl->tpl_vars['item']->value['users']),$_smarty_tpl);?>

                       </div>
                   </div>
                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved_local_item;
}
if ($__foreach_item_2_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved_item;
}
?>
            <?php } else { ?>
                <div class="ow_center ">
                <?php
$_from = $_smarty_tpl->tpl_vars['latest']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_3_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_3_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?><a class="ow_lp_wrapper_inline" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"> <img title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="75" /> </a><?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved_local_item;
}
if ($__foreach_item_3_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved_item;
}
?></div>
            <?php }?>
        </div>

        <div id="groups-widget-toolbar-latest" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['latest']),$_smarty_tpl);?>
</div>
        <div id="groups-widget-toolbar-popular" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['popular']),$_smarty_tpl);?>
</div>

    <?php } else { ?>
        <div class="ow_nocontent" id="groups-create-btn-c">
            <?php echo smarty_function_text(array('key'=>'groups+groups_widget_empty'),$_smarty_tpl);?>
, <a href="<?php echo $_smarty_tpl->tpl_vars['createUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>'groups+add_new'),$_smarty_tpl);?>
</a>
        </div>
    <?php }?>

</div>
<?php }
}
