<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:23:46
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/components/drag_and_drop_panel.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf31225a210_97090894',
  'file_dependency' => 
  array (
    'b96d0ebcec98c41e623f1e4479f41adb6df248bb' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/components/drag_and_drop_panel.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf31225a210_97090894 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
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

    .place_section .component .action .dd_delete {
           display: inline-block;
    }

    #place_components .component {
        float: left;
    }

    .place_section {
       min-height: 60px;
       padding-top: 3px;
    }

    .component {
       width: 200px;
    }

    .place_section .component {
           width: auto;
           margin-left: 4px;
    }

    .ow_dnd_slider {
        margin: 10px 0 0;
    }

    .ow_dnd_locked_section {
        opacity: 0.5;
        filter: alpha(opacity=50)
    }

    .ow_dnd_locked_section .ow_dnd_placeholder {
        display: none;
    }

 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


 <div style="display: none" id="fb_settings">
     <div class="settings_title">
        <?php echo smarty_function_text(array('key'=>"base+widgets_fb_setting_box_title"),$_smarty_tpl);?>

     </div>
     <div class="settings_content component_settings" style="min-height: 300px;"></div>
     <div class="settings_controls component_controls">
         <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"dd_save ow_ic_save",'langLabel'=>"admin+save_btn_label"),$_smarty_tpl);?>

     </div>
 </div>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','add_class'=>'ow_stdmargin')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','add_class'=>'ow_stdmargin'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<p>
    <?php echo smarty_function_text(array('key'=>"base+widgets_admin_section_information"),$_smarty_tpl);?>


</p>

 <div class="clearfix ow_stdmargin">
   <div class="clearfix" style="float:left;width:74%;" id="place_components">
   	<?php
$_from = $_smarty_tpl->tpl_vars['componentList']->value['place'];
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
   		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'isClone'=>$_smarty_tpl->tpl_vars['component']->value['clone']),$_smarty_tpl);?>

   	<?php
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_0_saved_local_item;
}
if ($__foreach_component_0_saved_item) {
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_0_saved_item;
}
?>
   </div>
   <div style="float:right;width:24%;border-left:1px solid #ccc;padding-left:10px;" id="clonable_components">
        <?php
$_from = $_smarty_tpl->tpl_vars['componentList']->value['clonable'];
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
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'isClone'=>$_smarty_tpl->tpl_vars['component']->value['clone']),$_smarty_tpl);?>

        <?php
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_1_saved_local_item;
}
if ($__foreach_component_1_saved_item) {
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_1_saved_item;
}
?>
   </div>
</div>

<div class="ow_dragndrop_sections ow_stdmargin ow_superwide ow_automargin" id="place_sections">

    <div class="clearfix">

        <div class="ow_highbox place_section top_section" ow_place_section="top">

            <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['top'])) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['top'];
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
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                <?php
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_2_saved_local_item;
}
if ($__foreach_component_2_saved_item) {
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_2_saved_item;
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
$__foreach_scheme_3_saved_item = isset($_smarty_tpl->tpl_vars['scheme']) ? $_smarty_tpl->tpl_vars['scheme'] : false;
$_smarty_tpl->tpl_vars['scheme'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['scheme']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['scheme']->value) {
$_smarty_tpl->tpl_vars['scheme']->_loop = true;
$__foreach_scheme_3_saved_local_item = $_smarty_tpl->tpl_vars['scheme'];
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
$_smarty_tpl->tpl_vars['scheme'] = $__foreach_scheme_3_saved_local_item;
}
if ($__foreach_scheme_3_saved_item) {
$_smarty_tpl->tpl_vars['scheme'] = $__foreach_scheme_3_saved_item;
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
$__foreach_component_4_saved_item = isset($_smarty_tpl->tpl_vars['component']) ? $_smarty_tpl->tpl_vars['component'] : false;
$_smarty_tpl->tpl_vars['component'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['component']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['component']->value) {
$_smarty_tpl->tpl_vars['component']->_loop = true;
$__foreach_component_4_saved_local_item = $_smarty_tpl->tpl_vars['component'];
?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                    <?php
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_4_saved_local_item;
}
if ($__foreach_component_4_saved_item) {
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_4_saved_item;
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

         </div>

        <div class="ow_highbox place_section bottom_section" ow_place_section="bottom">

            <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']['bottom'])) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['componentList']->value['section']['bottom'];
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

</div>


<p>
    <?php echo smarty_function_text(array('key'=>"base+widgets_admin_legend"),$_smarty_tpl);?>

</p>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','add_class'=>'ow_stdmargin'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','iconClass'=>'ow_ic_user','langLabel'=>'base+widgets_admin_customization_box_title','addClass'=>'ow_stdmargin','type'=>'empty')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_user','langLabel'=>'base+widgets_admin_customization_box_title','addClass'=>'ow_stdmargin','type'=>'empty'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


 <p><?php echo smarty_function_text(array('key'=>"base+widgets_allow_customize_legend"),$_smarty_tpl);?>
</p>
   <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_automargin ow_wide ow_center')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_automargin ow_wide ow_center'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

      <input id="allow_customize_btn" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['customizeAllowed']->value) {?> checked="checked"<?php }?>/>
      <label for="allow_customize_btn"><?php echo smarty_function_text(array('key'=>'base+widgets_allow_customize_label'),$_smarty_tpl);?>
</label>
   <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_automargin ow_wide ow_center'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>



<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_user','langLabel'=>'base+widgets_admin_customization_box_title','addClass'=>'ow_stdmargin','type'=>'empty'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php }
}
