<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:23:34
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/pages_manage.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf306110f70_88705102',
  'file_dependency' => 
  array (
    '4c7281183474344d2bce997a41f9afa50df51a7a' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/pages_manage.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf306110f70_88705102 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_url_for')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_url_for_route')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	.ph{
		border: 1px solid #999;
		float: left;
		height: 26px;
		margin-right: 4px;
	}
        
        .dnd-pannel {
            min-height: 102px;
        }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	$(document).ready(function(){
		$('#main-menu-items, #bottom-menu-items, #hidden-menu-items').sortable({
			placeholder: 'ph',
			tolerance: 'pointer',
			connectWith: '#main-menu-items, #bottom-menu-items, #hidden-menu-items',
			start:	function(event, ui){
				$(ui.placeholder).width($(ui.item).width());
			},
			stop:	function(event, ui){

			},
			recieve:	function(event, ui){},
			update:	function(event, ui){
				if(ui.sender){
					return;
				}

				var set = {};
				$('.ow_navbox', '#main-menu-items').each(function(i){
					set['main-menu['+i+']'] = $('input:hidden', this).val();
				});

				$('.ow_navbox', '#bottom-menu-items').each(function(i){
					set['bottom-menu['+i+']'] = $('input:hidden', this).val();
				});

				$('.ow_navbox', '#hidden-menu-items').each(function(i){
					set['hidden-menu['+i+']'] = $('input:hidden', this).val();
				});

				var url = '<?php echo smarty_function_url_for(array('for'=>'ADMIN_CTRL_Pages:ajaxReorder'),$_smarty_tpl);?>
';
				$.post(url, set);
			}
		});
	});

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>



<p><?php echo smarty_function_text(array('key'=>'admin+pages_and_menus_instructions'),$_smarty_tpl);?>
</p>

<!-- Std block for page -->
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin clearfix','iconClass'=>'ow_ic_folder','langLabel'=>'admin+pages_and_menus_main_menu_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin clearfix','iconClass'=>'ow_ic_folder','langLabel'=>'admin+pages_and_menus_main_menu_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ow_main_menu_scheme"></div>
    <div id="main-menu-items" class="dnd-pannel" style="width: 650px;" class="ow_left clearfix ow_box_empty">
	<?php
$_from = $_smarty_tpl->tpl_vars['menuItems']->value['main'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_menu_0_saved_item = isset($_smarty_tpl->tpl_vars['menu']) ? $_smarty_tpl->tpl_vars['menu'] : false;
$_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['menu']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
$__foreach_menu_0_saved_local_item = $_smarty_tpl->tpl_vars['menu'];
?>
			<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            
				$('#menu-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
').hover( function(){$('#edit-link-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
').show();}, function(){ $('#edit-link-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
').hide(); } );
				
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

		
					<?php if ($_smarty_tpl->tpl_vars['menu']->value['externalUrl']) {?>
						<?php $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable('admin_pages_edit_external', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'route', 0);?>
					<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['routePath']) {?>
						<?php $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable('admin_pages_edit_plugin', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'route', 0);?>
					<?php } else { ?>
						<?php $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable('admin_pages_edit_local', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'route', 0);?>
					<?php }?>
					
			<div id="menu-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
" class="ow_navbox <?php if ($_smarty_tpl->tpl_vars['menu']->value['visibleFor'] == 1) {?>ow_mild_red<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['visibleFor'] == 2) {?>ow_mild_green<?php }?>">
				<div id="edit-link-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
" style="background-color: #999; font-weight: bold; display: none; position:absolute; margin-top: -15px; padding: 0px 3px;">
					<a style="color: white;" href="<?php echo smarty_function_url_for_route(array('for'=>((string)$_smarty_tpl->tpl_vars['route']->value).":[id=>".((string)$_smarty_tpl->tpl_vars['menu']->value['id'])."]"),$_smarty_tpl);?>
">edit</a>
				</div>
	        	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
">
	            <a class="move" href="#"><?php echo smarty_function_text(array('key'=>((string)$_smarty_tpl->tpl_vars['menu']->value['prefix'])."+".((string)$_smarty_tpl->tpl_vars['menu']->value['key'])),$_smarty_tpl);?>
</a>
	        </div>
	<?php
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['menu']->_loop) {
?>
		<div class="empty_" style="text-align: center; display: none;">drag here..</div>        
	<?php
}
if ($__foreach_menu_0_saved_item) {
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_0_saved_item;
}
?>
    </div>
    <div class="ow_right ow_txtright">
    	<?php $_smarty_tpl->_cache['capture_stack'][] = array('default', "add_main", null); ob_start();
echo smarty_function_url_for_route(array('for'=>"admin_pages_add:[type=>main]"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    	<?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_add",'langLabel'=>"base+pages_add_item",'onclick'=>"location.href='".((string)$_smarty_tpl->tpl_vars['add_main']->value)."';"),$_smarty_tpl);?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin clearfix','iconClass'=>'ow_ic_folder','langLabel'=>'admin+pages_and_menus_main_menu_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<!-- End of STD block -->
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin clearfix','iconClass'=>'ow_ic_folder','langLabel'=>'admin+pages_and_menus_bottom_menu_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin clearfix','iconClass'=>'ow_ic_folder','langLabel'=>'admin+pages_and_menus_bottom_menu_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ow_bottom_menu_scheme"></div>
    <div id="bottom-menu-items" class="dnd-pannel" style="width: 650px;" class="ow_left clearfix ow_box_empty">
    <?php if (count($_smarty_tpl->tpl_vars['menuItems']->value['bottom'])) {?> 
		<?php
$_from = $_smarty_tpl->tpl_vars['menuItems']->value['bottom'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_menu_1_saved_item = isset($_smarty_tpl->tpl_vars['menu']) ? $_smarty_tpl->tpl_vars['menu'] : false;
$_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['menu']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
$__foreach_menu_1_saved_local_item = $_smarty_tpl->tpl_vars['menu'];
?>
		
			<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            
					
						$('#menu-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
').hover( function(){$('#edit-link-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
').show();}, function(){ $('#edit-link-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
').hide(); } );
					
					
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

					<?php if ($_smarty_tpl->tpl_vars['menu']->value['externalUrl']) {?>
						<?php $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable('admin_pages_edit_external', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'route', 0);?>
					<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['routePath']) {?>
						<?php $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable('admin_pages_edit_plugin', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'route', 0);?>
					<?php } else { ?>
						<?php $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable('admin_pages_edit_local', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'route', 0);?>
					<?php }?>
					
	        <div id="menu-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
" class="ow_navbox <?php if ($_smarty_tpl->tpl_vars['menu']->value['visibleFor'] == 1) {?>ow_mild_red<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['visibleFor'] == 2) {?>ow_mild_green<?php }?>">
	        	<div id="edit-link-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
"  style=" background-color: #999; color: #fff;font-weight: bold; display: none; position:absolute; margin-top: -15px; padding: 0px 3px;">
	        		<a style="color: white;" href="<?php echo smarty_function_url_for_route(array('for'=>((string)$_smarty_tpl->tpl_vars['route']->value).":[id=>".((string)$_smarty_tpl->tpl_vars['menu']->value['id'])."]"),$_smarty_tpl);?>
">
	        			edit
        			</a>
       			</div>
		        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
">
		    	<a class="move" href="#"><?php echo smarty_function_text(array('key'=>((string)$_smarty_tpl->tpl_vars['menu']->value['prefix'])."+".((string)$_smarty_tpl->tpl_vars['menu']->value['key'])),$_smarty_tpl);?>
</a>
		    </div>
		<?php
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_1_saved_local_item;
}
if ($__foreach_menu_1_saved_item) {
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_1_saved_item;
}
?>
	<?php } else { ?>
		<div class="empty_" style="display: none;">drag here..</div>
    <?php }?>
    </div>
	<div class="ow_right ow_txtright">
    	<?php $_smarty_tpl->_cache['capture_stack'][] = array('default', "add_bottom", null); ob_start();
echo smarty_function_url_for_route(array('for'=>"admin_pages_add:[type=>bottom]"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    	<?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_add",'langLabel'=>"base+pages_add_item",'onclick'=>"location.href='".((string)$_smarty_tpl->tpl_vars['add_bottom']->value)."';"),$_smarty_tpl);?>

	</div>    
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin clearfix','iconClass'=>'ow_ic_folder','langLabel'=>'admin+pages_and_menus_bottom_menu_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_delete','langLabel'=>'admin+pages_and_menus_hidden_pages_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_delete','langLabel'=>'admin+pages_and_menus_hidden_pages_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="clearfix">
    <div id="hidden-menu-items" class="ow_stdmargin clearfix ow_center ow_nomargin dnd-hidden-pannel" style="height:25px;">
	    <?php if (count($_smarty_tpl->tpl_vars['menuItems']->value['hidden'])) {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['menuItems']->value['hidden'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_menu_2_saved_item = isset($_smarty_tpl->tpl_vars['menu']) ? $_smarty_tpl->tpl_vars['menu'] : false;
$_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['menu']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
$__foreach_menu_2_saved_local_item = $_smarty_tpl->tpl_vars['menu'];
?>

					<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    
					
								$('#menu-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
').hover( function(){$('#edit-link-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
').show();}, function(){ $('#edit-link-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
').hide(); } );
					
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

					
			
					<?php if ($_smarty_tpl->tpl_vars['menu']->value['externalUrl']) {?>
						<?php $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable('admin_pages_edit_external', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'route', 0);?>
					<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['routePath']) {?>
						<?php $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable('admin_pages_edit_plugin', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'route', 0);?>
					<?php } else { ?>
						<?php $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable('admin_pages_edit_local', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'route', 0);?>
					<?php }?>
		        <div id="menu-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
" class="ow_navbox <?php if ($_smarty_tpl->tpl_vars['menu']->value['visibleFor'] == 1) {?>ow_mild_red<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['visibleFor'] == 2) {?>ow_mild_green<?php }?>">
		        	<div id="edit-link-<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
" style="background-color: #999999; color: #fff;font-weight: bold; display: none; position:absolute; margin-top: -15px; padding: 0px 3px;">
		        		<a style="color: white;" href="<?php echo smarty_function_url_for_route(array('for'=>((string)$_smarty_tpl->tpl_vars['route']->value).":[id=>".((string)$_smarty_tpl->tpl_vars['menu']->value['id'])."]"),$_smarty_tpl);?>
">
		        			edit
	        			</a>
	       			</div>
			        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
">
			    	<a class="move" href="#"><?php echo smarty_function_text(array('key'=>((string)$_smarty_tpl->tpl_vars['menu']->value['prefix'])."+".((string)$_smarty_tpl->tpl_vars['menu']->value['key'])),$_smarty_tpl);?>
</a>
			    </div>
			<?php
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_2_saved_local_item;
}
if ($__foreach_menu_2_saved_item) {
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_2_saved_item;
}
?>
		<?php } else { ?>
			<div class="empty_" style="display: none;">drag here..</div>
	    <?php }?>
	</div>
        </div>
    <p><?php echo smarty_function_text(array('key'=>'admin+pages_and_menus_hidden_desc'),$_smarty_tpl);?>
</p>
	
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_delete','langLabel'=>'admin+pages_and_menus_hidden_pages_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>
	

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_help','langLabel'=>'admin+pages_and_menus_legend_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_help','langLabel'=>'admin+pages_and_menus_legend_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<div class="clearfix"><div class="ow_navbox"><b><?php echo smarty_function_text(array('key'=>'admin+pages_and_menus_item_label'),$_smarty_tpl);?>
</b></div> - <?php echo smarty_function_text(array('key'=>'admin+pages_and_menus_legend_everyone_label'),$_smarty_tpl);?>
</div>
	<div class="clearfix"><div class="ow_navbox ow_mild_red"><b><?php echo smarty_function_text(array('key'=>'admin+pages_and_menus_item_label'),$_smarty_tpl);?>
</b></div> - <?php echo smarty_function_text(array('key'=>'admin+pages_and_menus_legend_guests_label'),$_smarty_tpl);?>
</div>
	<div class="clearfix"><div class="ow_navbox ow_mild_green"><b><?php echo smarty_function_text(array('key'=>'admin+pages_and_menus_item_label'),$_smarty_tpl);?>
</b></div> - <?php echo smarty_function_text(array('key'=>'admin+pages_and_menus_legend_members_label'),$_smarty_tpl);?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_help','langLabel'=>'admin+pages_and_menus_legend_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
