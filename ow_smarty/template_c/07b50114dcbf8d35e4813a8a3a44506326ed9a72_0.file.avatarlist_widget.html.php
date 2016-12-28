<?php
/* Smarty version 3.1.29, created on 2016-12-21 14:32:08
  from "/home/dancemee/public_html/ow_plugins/mslidefree/views/components/avatarlist_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_585a84583541e1_80867811',
  'file_dependency' => 
  array (
    '07b50114dcbf8d35e4813a8a3a44506326ed9a72' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/mslidefree/views/components/avatarlist_widget.html',
      1 => 1482327081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585a84583541e1_80867811 ($_smarty_tpl) {
?>
<div class="ow_center">
 <div id="ms-carousel-container">
  
   <button id="ms-prev">
     <i class="fa fa-arrow-circle-left"><h2><</h2></i>
   </button>
   <button id="ms-next">
     <i class="fa fa-arrow-circle-right"><h2>></h2></i>
   </button>
   <?php
$_from = $_smarty_tpl->tpl_vars['ra']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_0_saved_item = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data'] : false;
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['data']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$__foreach_data_0_saved_local_item = $_smarty_tpl->tpl_vars['data'];
?>
     <div>
       <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['avatar'];?>
" alt="#" /></a>
     </div>
   <?php
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved_local_item;
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved_item;
}
?>   
 </div>
</div><?php }
}
