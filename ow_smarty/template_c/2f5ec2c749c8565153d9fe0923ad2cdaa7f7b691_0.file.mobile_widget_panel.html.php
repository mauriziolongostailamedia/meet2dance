<?php
/* Smarty version 3.1.29, created on 2016-10-14 20:03:12
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/components/mobile_widget_panel.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58011de0a299e7_58418197',
  'file_dependency' => 
  array (
    '2f5ec2c749c8565153d9fe0923ad2cdaa7f7b691' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/components/mobile_widget_panel.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58011de0a299e7_58418197 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_mobile_dd_sections {
    width: 300px;
}

.ow_mobile_dd_sections_left,
.ow_mobile_dd_sections_right {
}

.ow_mobile_dd_sections_left .ow_highbox,
.ow_mobile_dd_sections_menu_new,
.ow_mobile_dd_sections_menu_hidden {
    padding: 0px 11px 16px;
}

.ow_mobile_dd_sections_left .ow_highbox {
    padding-top: 6px; 
}

.ow_mobile_dd_sections_menu_new {
    padding-bottom: 15px; 
    border-bottom: 1px solid #ccc; 
    margin-bottom: 5px;
}

.ow_mobile_dd_sections_left {
    margin-right: 8px;
}

.ow_mobile_dd_sections_right {
    border-left: 1px solid #CCCCCC;
    margin-left: 8px;
    margin-top: 5px;
}

.ow_mobile_dd_sections_menu_label {
    color: #ccc; 
    padding: 6px; 
    text-transform: uppercase;
}

.ow_mobile_dd_sections_menu_bottom .ow_mobile_dd_sections_menu_label {
    padding-top: 40px;
}

.ow_mobile_dd_sections_menu_hidden .ow_mobile_dd_sections_menu_label {
    padding-bottom: 7px;
}

.ow_mobile_dd_sections .ow_dnd_schem_item {
    padding-left: 5px;
}

.ow_mobile_dd_sections .dd_delete,
.ow_mobile_dd_sections .dd_edit {
    display: inline-block;
    width: 18px;
    height: 18px;
    background-repeat: no-repeat;
}

.ow_mobile_dd_sections .component .schem_component .action .dd_delete:hover,
.ow_mobile_dd_sections .component .schem_component .action .dd_edit:hover {
    text-decoration: none;
}

.ow_mobile_dd_sections .ow_dnd_schem_item span.action {
    right: 3px;
    top: 7px;
    width: 40px;
}

.ow_mobile_nav_setting_popup {
    width: 500px;
}

/* My classes */

.ow_mobile_dd_sections div.ow_dnd_schem_item {
    background-image: none;
}

.ow_mobile_dnd_section {
    min-height: 34px;
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

<div class="ow_dragndrop_sections ow_stdmargin ow_superwide ow_automargin">
    <div class="clearfix" style="overflow: hidden;">
        
        <div class="ow_mobile_dd_sections ow_left ow_column_equal_fix">
            <div class="ow_mobile_dd_sections_left">
                <div class="ow_highbox">
                    <div class="ow_mobile_dd_sections_menu_top" id="place_sections">
                        <div class="ow_mobile_dd_sections_menu_label"><?php echo smarty_function_text(array('key'=>"mobile+admin_widgets_main_section_label"),$_smarty_tpl);?>
</div>
                        <div class="ow_mobile_dnd_section place_section" ow_place_section="mobile.main">
                            <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']["mobile.main"])) {?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['componentList']->value['section']["mobile.main"];
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
                </div>
            </div>
        </div>

        <div class="ow_mobile_dd_sections ow_left ow_column_equal_fix right_section ow_narrow">
            <div class="ow_mobile_dd_sections_right">

                <div class="ow_mobile_dd_sections_menu_new ow_mobile_dnd_section" id="clonable_components">
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

                <div class="ow_mobile_dd_sections_menu_hidden">   
                    <div class="ow_mobile_dd_sections_menu_label"><?php echo smarty_function_text(array('key'=>"mobile+admin_widgets_hidden_section_label"),$_smarty_tpl);?>
</div>

                    <div class="ow_mobile_dnd_section" id="place_components">
                        <?php
$_from = $_smarty_tpl->tpl_vars['componentList']->value['place'];
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
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'isClone'=>$_smarty_tpl->tpl_vars['component']->value['clone']),$_smarty_tpl);?>

                        <?php
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_2_saved_local_item;
}
if ($__foreach_component_2_saved_item) {
$_smarty_tpl->tpl_vars['component'] = $__foreach_component_2_saved_item;
}
?>
                    </div>

                </div>

            </div>
        </div>

     </div>
</div><?php }
}
