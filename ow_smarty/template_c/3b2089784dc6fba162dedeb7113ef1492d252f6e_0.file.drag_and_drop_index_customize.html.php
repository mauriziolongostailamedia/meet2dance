<?php
/* Smarty version 3.1.29, created on 2016-10-12 22:46:25
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/drag_and_drop_index_customize.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fea12128bae6_87508374',
  'file_dependency' => 
  array (
    '3b2089784dc6fba162dedeb7113ef1492d252f6e' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/drag_and_drop_index_customize.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fea12128bae6_87508374 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    .hidden-placeholder {
        display: none;
    }

    .dd_handle {
       cursor: move;
    }

    .component .action {
           display: none;
    }

    .component .action .dd_delete {
           display: none;
    }

    #place_components .clone .action .dd_delete {
           display: inline-block;
    }

    .component .action {
           display: none;
    }

    #place_components .component {
        float: left;
    }

    .place_section .component {

    }

    .place_section {
       min-height: 60px;
       padding-top: 10px;
    }

	.access_member .ow_dnd_schem_item {
	    background-color: #AAFFAA;
	}

	.access_guest .ow_dnd_schem_item {
	    background-color: #FFAAAA;
	}

    .ow_dragndrop_panel .ow_dnd_schem_item{
       width: 166px;
    }

    .ow_dnd_locked_section {
        opacity: 0.5;
        filter: alpha(opacity=50)
    }

    .ow_dnd_locked_section .ow_dnd_placeholder {
        display: none;
    }

    .add_btn_cont {
        position: absolute;
        right: 0px;
        top: 0px;
    }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php echo smarty_function_add_content(array('key'=>'base.widget_panel_customize.content.top','placeName'=>$_smarty_tpl->tpl_vars['placeName']->value),$_smarty_tpl);?>

<?php echo smarty_function_add_content(array('key'=>'base.`$placeName`_customize.content.top'),$_smarty_tpl);?>


<?php $_smarty_tpl->_cache['capture_stack'][] = array("sidebar", null, null); ob_start(); ?>
    <div class="ow_sidebar">
        <div class="ow_highbox place_section sidebar_section" ow_place_section="sidebar">
            <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['sidebar'])) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['sidebar'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_component_0_saved_item = isset($_smarty_tpl->tpl_vars['component']) ? $_smarty_tpl->tpl_vars['component'] : false;
$_smarty_tpl->tpl_vars['component'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['component']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['component']->value) {
$_smarty_tpl->tpl_vars['component']->_loop = true;
$__foreach_component_0_saved_local_item = $_smarty_tpl->tpl_vars['component'];
?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                <?php
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_0_saved_local_item;
}
if ($__foreach_component_0_saved_item) {
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_0_saved_item;
}
?>
            <?php }?>
        </div>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_cache['capture_stack']);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
$_smarty_tpl->_cache['__smarty_capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


 <div style="display: none" id="fb_settings">
     <div class="settings_title">
        <?php echo smarty_function_text(array('key'=>"base+widgets_fb_setting_box_title"),$_smarty_tpl);?>

     </div>
     <div class="settings_content component_settings" style="min-height: 300px;"></div>
     <div class="settings_controls component_controls">
		<div class="clearfix">
			<div class="ow_right"><?php echo smarty_function_decorator(array('name'=>"button",'class'=>"dd_save ow_ic_save",'langLabel'=>"base+edit_button"),$_smarty_tpl);?>
</div>
		</div>
     </div>
 </div>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin index_customize_box')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin index_customize_box'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <div class="ow_center" style="position: relative;">
        <?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'base+widgets_finish_customize_btn','class'=>'ow_ic_ok','id'=>"goto_normal_btn"),$_smarty_tpl);?>

        <div class="add_btn_cont">
            <form style="display: inline;">
                <?php if ($_smarty_tpl->tpl_vars['disableJs']->value) {?>
                    <input type="hidden" name="disable-js" value="0" />
                    <?php echo smarty_function_decorator(array('name'=>'button','type'=>"submit",'langLabel'=>'base+widgets_enable_js','class'=>'ow_ic_unlock ow_mild_green'),$_smarty_tpl);?>

                <?php } else { ?>
                    <input type="hidden" name="disable-js" value="1" />
                    <?php echo smarty_function_decorator(array('name'=>'button','type'=>"submit",'langLabel'=>'base+widgets_disable_js','class'=>'ow_ic_restrict ow_mild_green'),$_smarty_tpl);?>

                <?php }?>
            </form>
        </div>
    </div>

    <div class="ow_dragndrop_panel">

        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','iconClass'=>'ow_ic_add','langLabel'=>'base+widgets_section_box_title','addClass'=>'ow_smallmargin')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_add','langLabel'=>'base+widgets_section_box_title','addClass'=>'ow_smallmargin'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        <p>
            <?php echo smarty_function_text(array('key'=>"base+widgets_avaliable_description",'pluginsUrl'=>$_smarty_tpl->tpl_vars['adminPluginsUrl']->value),$_smarty_tpl);?>

        </p>
        <p>
            <?php echo smarty_function_text(array('key'=>"base+widgets_avaliable_legend"),$_smarty_tpl);?>

        </p>

        <div class="clearfix">
            <div class="ow_dnd_content_components ow_left clearfix" id="place_components">
                <?php
$_from = $_smarty_tpl->tpl_vars['componentList']->value['place'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_component_1_saved_item = isset($_smarty_tpl->tpl_vars['component']) ? $_smarty_tpl->tpl_vars['component'] : false;
$_smarty_tpl->tpl_vars['component'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['component']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['component']->value) {
$_smarty_tpl->tpl_vars['component']->_loop = true;
$__foreach_component_1_saved_local_item = $_smarty_tpl->tpl_vars['component'];
?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName']),$_smarty_tpl);?>

                <?php
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_1_saved_local_item;
}
if ($__foreach_component_1_saved_item) {
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_1_saved_item;
}
?>
           </div>
           <div class="ow_dnd_clonable_components ow_right" id="clonable_components">
                <?php
$_from = $_smarty_tpl->tpl_vars['componentList']->value['clonable'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_component_2_saved_item = isset($_smarty_tpl->tpl_vars['component']) ? $_smarty_tpl->tpl_vars['component'] : false;
$_smarty_tpl->tpl_vars['component'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['component']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['component']->value) {
$_smarty_tpl->tpl_vars['component']->_loop = true;
$__foreach_component_2_saved_local_item = $_smarty_tpl->tpl_vars['component'];
?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName']),$_smarty_tpl);?>

                <?php
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_2_saved_local_item;
}
if ($__foreach_component_2_saved_item) {
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_2_saved_item;
}
?>
           </div>
        </div>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_add','langLabel'=>'base+widgets_section_box_title','addClass'=>'ow_smallmargin'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    </div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_highbox ow_stdmargin index_customize_box'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>




<div class="ow_dragndrop_sections ow_stdmargin" id="place_sections">

    <div class="clearfix">


        <?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value == 'left') {?>
            <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['sidebar']) ? $_smarty_tpl->_cache['__smarty_capture']['sidebar'] : null);?>

        <?php }?>

        <div class="ow_dragndrop_content">

            <div class="ow_highbox place_section top_section" ow_place_section="top">

                <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['top'])) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['top'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_component_3_saved_item = isset($_smarty_tpl->tpl_vars['component']) ? $_smarty_tpl->tpl_vars['component'] : false;
$_smarty_tpl->tpl_vars['component'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['component']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['component']->value) {
$_smarty_tpl->tpl_vars['component']->_loop = true;
$__foreach_component_3_saved_local_item = $_smarty_tpl->tpl_vars['component'];
?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                    <?php
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_3_saved_local_item;
}
if ($__foreach_component_3_saved_item) {
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_3_saved_item;
}
?>
                <?php }?>

            </div>

            <div class="ow_dnd_slider" >
                <div class="ow_dnd_slider_handle ow_ic_move_horizontal"></div>
                <?php
$_from = $_smarty_tpl->tpl_vars['schemeList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_scheme_4_saved_item = isset($_smarty_tpl->tpl_vars['scheme']) ? $_smarty_tpl->tpl_vars['scheme'] : false;
$_smarty_tpl->tpl_vars['scheme'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['scheme']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['scheme']->value) {
$_smarty_tpl->tpl_vars['scheme']->_loop = true;
$__foreach_scheme_4_saved_local_item = $_smarty_tpl->tpl_vars['scheme'];
?>
                    <div class="ow_dnd_slider_item clearfix">
                        <div class="ow_dnd_slider_pusher <?php echo $_smarty_tpl->tpl_vars['scheme']->value->leftCssClass;?>
"></div>
                        <div class="ow_dnd_slider_marker<?php if ($_smarty_tpl->tpl_vars['activeScheme']->value['id'] == $_smarty_tpl->tpl_vars['scheme']->value->id) {?> current<?php }?>"
                           ow_scheme="<?php echo $_smarty_tpl->tpl_vars['scheme']->value->id;?>
" dd_leftclass="<?php echo $_smarty_tpl->tpl_vars['scheme']->value->leftCssClass;?>
" dd_rightclass="<?php echo $_smarty_tpl->tpl_vars['scheme']->value->rightCssClass;?>
" >
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['scheme'] = $__foreach_scheme_4_saved_local_item;
}
if ($__foreach_scheme_4_saved_item) {
$_smarty_tpl->tpl_vars['scheme'] = $__foreach_scheme_4_saved_item;
}
?>
            </div>

             <div class="clearfix" style="overflow: hidden;">

                <div class="ow_left ow_highbox place_section ow_column_equal_fix left_section <?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'])) {
echo $_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'];
}?>" ow_scheme_class="<?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'])) {
echo $_smarty_tpl->tpl_vars['activeScheme']->value['leftCssClass'];
}?>"  ow_place_section="left">

                    <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['left'])) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['left'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_component_5_saved_item = isset($_smarty_tpl->tpl_vars['component']) ? $_smarty_tpl->tpl_vars['component'] : false;
$_smarty_tpl->tpl_vars['component'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['component']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['component']->value) {
$_smarty_tpl->tpl_vars['component']->_loop = true;
$__foreach_component_5_saved_local_item = $_smarty_tpl->tpl_vars['component'];
?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                        <?php
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_5_saved_local_item;
}
if ($__foreach_component_5_saved_item) {
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_5_saved_item;
}
?>
                    <?php }?>

                </div>

                <div class="ow_right ow_highbox place_section ow_column_equal_fix right_section <?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'])) {
echo $_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'];
}?>" ow_scheme_class="<?php if (isset($_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'])) {
echo $_smarty_tpl->tpl_vars['activeScheme']->value['rightCssClass'];
}?>"  ow_place_section="right">

                    <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['right'])) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['right'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_component_6_saved_item = isset($_smarty_tpl->tpl_vars['component']) ? $_smarty_tpl->tpl_vars['component'] : false;
$_smarty_tpl->tpl_vars['component'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['component']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['component']->value) {
$_smarty_tpl->tpl_vars['component']->_loop = true;
$__foreach_component_6_saved_local_item = $_smarty_tpl->tpl_vars['component'];
?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                        <?php
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_6_saved_local_item;
}
if ($__foreach_component_6_saved_item) {
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_6_saved_item;
}
?>
                    <?php }?>

                </div>

             </div>

            <div class="ow_highbox place_section bottom_section" ow_place_section="bottom">

                <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['bottom'])) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['bottom'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_component_7_saved_item = isset($_smarty_tpl->tpl_vars['component']) ? $_smarty_tpl->tpl_vars['component'] : false;
$_smarty_tpl->tpl_vars['component'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['component']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['component']->value) {
$_smarty_tpl->tpl_vars['component']->_loop = true;
$__foreach_component_7_saved_local_item = $_smarty_tpl->tpl_vars['component'];
?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                    <?php
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_7_saved_local_item;
}
if ($__foreach_component_7_saved_item) {
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_7_saved_item;
}
?>
                <?php }?>

            </div>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value == 'right') {?>
	        <?php echo (isset($_smarty_tpl->_cache['__smarty_capture']['sidebar']) ? $_smarty_tpl->_cache['__smarty_capture']['sidebar'] : null);?>

	    <?php }?>

    </div>
</div>

<?php echo smarty_function_add_content(array('key'=>'base.widget_panel_customize.content.bottom','placeName'=>$_smarty_tpl->tpl_vars['placeName']->value),$_smarty_tpl);?>

<?php echo smarty_function_add_content(array('key'=>'base.`$placeName`_customize.content.bottom'),$_smarty_tpl);?>

<?php }
}
