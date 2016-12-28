<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:36:21
  from "/home/dancemee/public_html/ow_plugins/video/views/components/video_list_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe90b5e3e611_61279770',
  'file_dependency' => 
  array (
    '1cfc4aaddc100827f4296d2ee93efdf07012cc95' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/video/views/components/video_list_widget.html',
      1 => 1475654753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe90b5e3e611_61279770 ($_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_url_for')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_function_url_for_route')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    $(document).ready(function(){
        var $tb_container = $(".ow_box_toolbar_cont", $("#video_list_widget").parents('.ow_box, .ow_box_empty').get(0));

        $("#video-widget-menu-featured").click(function(){
            $tb_container.html($("div#video-widget-toolbar-featured").html());
        });

        $("#video-widget-menu-latest").click(function(){
            $tb_container.html($("div#video-widget-toolbar-latest").html());
        });

        $("#video-widget-menu-toprated").click(function(){
            $tb_container.html($("div#video-widget-toolbar-toprated").html());
        });
    });

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div id="video_list_widget">

    <?php if ($_smarty_tpl->tpl_vars['latest']->value || $_smarty_tpl->tpl_vars['featured']->value || $_smarty_tpl->tpl_vars['toprated']->value) {?> <?php if (isset($_smarty_tpl->tpl_vars['menu']->value)) {
echo $_smarty_tpl->tpl_vars['menu']->value;
}?> <?php }?>
    
    <?php $_smarty_tpl->_cache['capture_stack'][] = array('default', 'nocontent', null); ob_start(); ?>
       <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'video+no_video'),$_smarty_tpl);?>
, <a href="<?php echo smarty_function_url_for(array('for'=>"VIDEO_CTRL_Add:index"),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>'video+add_new'),$_smarty_tpl);?>
</a></div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<div id="<?php echo $_smarty_tpl->tpl_vars['items']->value['latest']['contId'];?>
">
	<?php if ($_smarty_tpl->tpl_vars['showTitles']->value) {?>
	   <?php
$_from = $_smarty_tpl->tpl_vars['latest']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_clips_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_clips']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_clips'] : false;
$__foreach_clips_0_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration']++;
$__foreach_clips_0_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
	   <div class="clearfix ow_smallmargin">
            <div class="ow_other_video_thumb ow_left">
                <a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
">
                    <?php if ($_smarty_tpl->tpl_vars['c']->value['thumb'] != 'undefined') {?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
                </a>
            </div>
            <div class="ow_other_video_item_title ow_small">
                <a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</a>
            </div>
	   </div>
	   <?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
          <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

	   <?php
}
if ($__foreach_clips_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = $__foreach_clips_0_saved;
}
if ($__foreach_clips_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_0_saved_item;
}
?>
	<?php } else { ?>
	<div class="clearfix ow_center">
	<?php
$_from = $_smarty_tpl->tpl_vars['latest']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_clips_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_clips']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_clips'] : false;
$__foreach_clips_1_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration']++;
$__foreach_clips_1_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration'] : null) == 1) {?>
		   <div class="ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['c']->value['code'];?>
</div>
		<?php } else { ?>
            <div class="ow_other_video_thumb video_thumb_no_title ow_left">
				<a class="ow_other_video_floated" href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
">
					<?php if ($_smarty_tpl->tpl_vars['c']->value['thumb'] != 'undefined') {?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
				</a>
			</div>
		<?php }?>
    <?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
        <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>
		
	<?php
}
if ($__foreach_clips_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = $__foreach_clips_1_saved;
}
if ($__foreach_clips_1_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_1_saved_item;
}
?>
	</div>
	<?php }?>	
	</div>
	
	<?php if ($_smarty_tpl->tpl_vars['featured']->value) {?>
	<div id="<?php echo $_smarty_tpl->tpl_vars['items']->value['featured']['contId'];?>
" style="display: none">
    <?php if ($_smarty_tpl->tpl_vars['showTitles']->value) {?>
       <?php
$_from = $_smarty_tpl->tpl_vars['featured']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_clips_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_clips']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_clips'] : false;
$__foreach_clips_2_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration']++;
$__foreach_clips_2_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
       <div class="clearfix ow_smallmargin">
            <div class="ow_other_video_thumb ow_left">
                <a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
">
                    <?php if ($_smarty_tpl->tpl_vars['c']->value['thumb'] != 'undefined') {?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
                </a>
            </div>
            <div class="ow_other_video_item_title ow_small">
                <a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</a>
            </div>
       </div>
       <?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_2_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
          <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

       <?php
}
if ($__foreach_clips_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = $__foreach_clips_2_saved;
}
if ($__foreach_clips_2_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_2_saved_item;
}
?>
    <?php } else { ?>
    <div class="clearfix ow_center">
    <?php
$_from = $_smarty_tpl->tpl_vars['featured']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_clips_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_clips']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_clips'] : false;
$__foreach_clips_3_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration']++;
$__foreach_clips_3_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration'] : null) == 1) {?>
           <div class="ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['c']->value['code'];?>
</div>
        <?php } else { ?>
	        <a class="ow_other_video_floated" href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
">
	            <?php if ($_smarty_tpl->tpl_vars['c']->value['thumb'] != 'undefined') {?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
	        </a>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_3_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
        <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

    <?php
}
if ($__foreach_clips_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = $__foreach_clips_3_saved;
}
if ($__foreach_clips_3_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_3_saved_item;
}
?>
    </div>
    <?php }?>
    </div>
    <?php }?>
	
	<div id="<?php echo $_smarty_tpl->tpl_vars['items']->value['toprated']['contId'];?>
" style="display: none">
    <?php if ($_smarty_tpl->tpl_vars['showTitles']->value) {?>
       <?php
$_from = $_smarty_tpl->tpl_vars['toprated']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_clips_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_clips']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_clips'] : false;
$__foreach_clips_4_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration']++;
$__foreach_clips_4_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
       <div class="clearfix ow_smallmargin">
            <div class="ow_other_video_thumb ow_left">
                <a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
">
                    <?php if ($_smarty_tpl->tpl_vars['c']->value['thumb'] != 'undefined') {?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
                </a>
            </div>
            <div class="ow_other_video_item_title ow_small">
                <a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</a>
            </div>
       </div>
       <?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_4_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
          <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

       <?php
}
if ($__foreach_clips_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = $__foreach_clips_4_saved;
}
if ($__foreach_clips_4_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_4_saved_item;
}
?>
    <?php } else { ?>
    <div class="clearfix ow_center">
    <?php
$_from = $_smarty_tpl->tpl_vars['toprated']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_clips_5_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_clips']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_clips'] : false;
$__foreach_clips_5_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration']++;
$__foreach_clips_5_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_clips']->value['iteration'] : null) == 1) {?>
           <div class="ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['c']->value['code'];?>
</div>
        <?php } else { ?>
	        <a class="ow_other_video_floated" href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
">
	            <?php if ($_smarty_tpl->tpl_vars['c']->value['thumb'] != 'undefined') {?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
	        </a>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_5_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
        <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>
        
    <?php
}
if ($__foreach_clips_5_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_clips'] = $__foreach_clips_5_saved;
}
if ($__foreach_clips_5_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_clips_5_saved_item;
}
?>
    </div>
    <?php }?>
    </div>
	
	<?php if ($_smarty_tpl->tpl_vars['latest']->value) {?><div id="video-widget-toolbar-latest" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['latest']),$_smarty_tpl);?>
</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['featured']->value) {?><div id="video-widget-toolbar-featured" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['featured']),$_smarty_tpl);?>
</div><?php }?>  
    <?php if ($_smarty_tpl->tpl_vars['toprated']->value) {?><div id="video-widget-toolbar-toprated" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['toprated']),$_smarty_tpl);?>
</div><?php }?>
    
</div><?php }
}
