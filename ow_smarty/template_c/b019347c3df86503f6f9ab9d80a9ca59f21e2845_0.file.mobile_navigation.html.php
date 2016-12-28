<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:44:48
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/components/mobile_navigation.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe84a0f3ec95_18426258',
  'file_dependency' => 
  array (
    'b019347c3df86503f6f9ab9d80a9ca59f21e2845' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/components/mobile_navigation.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe84a0f3ec95_18426258 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
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

.dnd-item-moving {
    opacity: 0.5;
}

.dnd-actions, 
.dnd-section-new .component:hover .dnd-actions,
html div.dnd-item-locked:hover .dnd-actions {
    display: none;
}

.component:hover .dnd-actions {
    display: block;
}

.dnd-actions .dnd-control {
    cursor: pointer;
}

.dnd-item-locked {
    opacity: 0.7;
}

.dnd-section-new .ow_dnd_placeholder {
    display: none!important;
}

.dnd-section-hidden .dnd-item-custom .dnd-actions .dd_delete {
    display: inline-block;
}

.dnd-section-hidden .dnd-actions .dd_delete {
    display: none;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="ow_dragndrop_sections ow_stdmargin ow_superwide ow_automargin">
    <div class="clearfix" style="overflow: hidden;">
        
<!-- ======================= Begin of    Admin DragnDrop Sections ======================= -->

        <div class="ow_mobile_dd_sections ow_left ow_column_equal_fix">
            <div class="ow_mobile_dd_sections_left">
                <div class="ow_highbox">
                    <div class="ow_mobile_dd_sections_menu_top">
                        <div class="ow_mobile_dd_sections_menu_label"><?php echo smarty_function_text(array('key'=>"mobile+admin_nav_top_section_label"),$_smarty_tpl);?>
</div>
                        <div class="ow_mobile_dnd_section dnd-section dnd-section-top" 
                             data-key="top" data-alias="<?php echo $_smarty_tpl->tpl_vars['panels']->value['top']['key'];?>
" data-delegate="DefaultDelegate" data-relation="bottom, hidden">

                            <?php
$_from = $_smarty_tpl->tpl_vars['panels']->value['top']['items'];
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
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dnd_item'][0][0]->tplItem(array('data'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>

                            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>

                        </div>
                    </div>
                    
                    <div class="ow_mobile_dd_sections_menu_bottom">
                        <div class="ow_mobile_dd_sections_menu_label"><?php echo smarty_function_text(array('key'=>"mobile+admin_nav_bottom_section_label"),$_smarty_tpl);?>
</div>
                        <div class="ow_mobile_dnd_section dnd-section dnd-section-bottom" 
                             data-key="bottom" data-alias="<?php echo $_smarty_tpl->tpl_vars['panels']->value['bottom']['key'];?>
" data-delegate="DefaultDelegate" data-relation="top, hidden">

                            <?php
$_from = $_smarty_tpl->tpl_vars['panels']->value['bottom']['items'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dnd_item'][0][0]->tplItem(array('data'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>

                            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
?>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="ow_mobile_dd_sections ow_left ow_column_equal_fix right_section ow_narrow">
            <div class="ow_mobile_dd_sections_right">

                <div class="ow_mobile_dd_sections_menu_new ow_mobile_dnd_section dnd-section dnd-section-new" 
                     data-key="new" data-alias="<?php echo $_smarty_tpl->tpl_vars['panels']->value['new']['key'];?>
" data-delegate="NewDelegate" data-relation="top, bottom">

                    <?php
$_from = $_smarty_tpl->tpl_vars['panels']->value['new']['items'];
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
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dnd_item'][0][0]->tplItem(array('data'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>

                    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved_local_item;
}
if ($__foreach_item_2_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved_item;
}
?>
                    
                </div>

                <div class="ow_mobile_dd_sections_menu_hidden">   
                    <div class="ow_mobile_dd_sections_menu_label"><?php echo smarty_function_text(array('key'=>"mobile+admin_nav_hidden_section_label"),$_smarty_tpl);?>
</div>

                    <div class="ow_mobile_dnd_section dnd-section dnd-section-hidden" 
                         data-key="hidden" data-alias="<?php echo $_smarty_tpl->tpl_vars['panels']->value['hidden']['key'];?>
" data-delegate="HiddenDelegate" data-relation="top, bottom">
                        <?php
$_from = $_smarty_tpl->tpl_vars['panels']->value['hidden']['items'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_3_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_3_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dnd_item'][0][0]->tplItem(array('data'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>

                        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved_local_item;
}
if ($__foreach_item_3_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved_item;
}
?>
                    </div>

                </div>

            </div>
        </div>

<!-- ======================= End of Admin DragnDrop Sections ======================= -->

     </div>
</div><?php }
}
