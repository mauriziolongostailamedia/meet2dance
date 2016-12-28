<?php
/* Smarty version 3.1.29, created on 2016-10-12 22:47:37
  from "/home/dancemee/public_html/ow_plugins/slideshow/views/components/slideshow_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fea1695b4722_51459036',
  'file_dependency' => 
  array (
    '9d9c803f5142781e25bab76b17aff39430139253' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/slideshow/views/components/slideshow_widget.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fea1695b4722_51459036 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .slides_container img { display: none; width: 100%; }
    .pagination {
        margin: 6px 0 0;
        text-align: center;
        list-style: none;
    }

    .pagination li {
        display: inline-block;
        margin: 0 1px;
    }

    .pagination li a {
        display: inline-block;
        width: 13px;
        height: 0;
        padding-top: 13px;
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAnCAYAAADU3MIsAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDowMTgwMTE3NDA3MjA2ODExODcxRkMwMDNFNTU3QkY1QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo2REEyOUM3QThGNTQxMUUxQjE2M0RFODUyMUQ2RjRBRSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo2REEyOUM3OThGNTQxMUUxQjE2M0RFODUyMUQ2RjRBRSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjA0ODAxMTc0MDcyMDY4MTE4NzFGQzAwM0U1NTdCRjVCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjAxODAxMTc0MDcyMDY4MTE4NzFGQzAwM0U1NTdCRjVCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+InkitgAAAaJJREFUeNrsVTFLw0AYTYMIouAgUgeRFgRBUIQEF0HFyVnsIlQUBHF28h8UJ51KS0Wpa/6BOLhYlNTBQRAKQkGwiINQEQSJ7ytfwt31kt7k1Acv313ue5e7+16SVBAElgjXdacRHHAUfALrvu9/izmpUITkLEIFXLNktMFDCMuSCII5tG/BEbABPoCf4Cy4xLkXEO52RI7jDCLegQvgJXiAwS9huXmEEjgE5jDm2WhssaCGG9uigIA+TXTE3WO6kGidb5xZMYDwlJedpYMi0TiPvVjJaHGcINE7d6Z6iNIc30h0xZ18XDaWRPum+jWx1IbNJ/ZK9cFgFRxWBDTZCXcLYp0W0b7mOj0rdVpmgYen5HSOOAdXejoCxVW3MKN6j4URbM2+fzWUMCC0Ew0LltUnkWEfNQKLD6fE+41EZNgqDyZhB9wMRaFhTdBlWBPQviXDmkIyrCkkw5qgSe+VaFgTFMKD+AE3VKto4IFFsbj34Dx4o0mmyfbpoxIZtpiZlDIqY+kuw+59tNpx3usACX3D9g37H4YVbUT/p1WTL+yfAAMAENmkCGf35LkAAAAASUVORK5CYII=");
        background-position: 0 0;
        float: left;
        overflow: hidden;
    }

    .pagination li.current a, .pagination li.current a:hover { background-position: 0 -13px; }

    .pagination li a:hover { background-position: 0 -26px; }
    
    .ow_slide_caption{
        background: 0 0 rgba(0, 0, 0, 0.5);
	    border-top: 1px solid #000000;
	    bottom: -35px;
	    color: #FFFFFF;
	    font-size: 13px;
	    height: 30px;
	    left: 0;
	    width: 100%;
	    position: absolute;
	    z-index: 500;
        display: none;
    }
    .ow_slide_caption div {
        padding: 5px 10px;
    }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php if ($_smarty_tpl->tpl_vars['slides']->value) {?>
<div id="slideshow-<?php echo $_smarty_tpl->tpl_vars['uniqName']->value;?>
" class="ow_slideshow">
    <div class="slides_container" style="height: 0px;">
    <?php
$_from = $_smarty_tpl->tpl_vars['slides']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_s_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_s']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_s'] : false;
$__foreach_s_0_saved_item = isset($_smarty_tpl->tpl_vars['slide']) ? $_smarty_tpl->tpl_vars['slide'] : false;
$_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_s'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['slide']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_s']->value['iteration']++;
$__foreach_s_0_saved_local_item = $_smarty_tpl->tpl_vars['slide'];
?>
        <div class="ow_slide">
            <?php if ($_smarty_tpl->tpl_vars['slide']->value['dto']->url) {?><a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['dto']->url;?>
"><?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['imageUrl'];?>
" /><?php if ($_smarty_tpl->tpl_vars['slide']->value['dto']->url) {?></a><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['slide']->value['dto']->label) {?><div class="ow_slide_caption" id="caption-<?php echo $_smarty_tpl->tpl_vars['uniqName']->value;?>
-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_s']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_s']->value['iteration'] : null);?>
"><div><?php echo $_smarty_tpl->tpl_vars['slide']->value['dto']->label;?>
</div></div><?php }?>
        </div>
    <?php
$_smarty_tpl->tpl_vars['slide'] = $__foreach_s_0_saved_local_item;
}
if ($__foreach_s_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_s'] = $__foreach_s_0_saved;
}
if ($__foreach_s_0_saved_item) {
$_smarty_tpl->tpl_vars['slide'] = $__foreach_s_0_saved_item;
}
?>
    </div>
</div>
<?php } else { ?>
    <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'slideshow+no_images'),$_smarty_tpl);?>
</div>
<?php }
}
}
