<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:36:58
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/total_score.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe90daf1a567_24498248',
  'file_dependency' => 
  array (
    '00296bf3810d9ab62733205da1df3437a7bbe057' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/total_score.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe90daf1a567_24498248 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
?>
<div class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>'base+total_score_label','ratesCount'=>$_smarty_tpl->tpl_vars['info']->value['ratesCount'],'avgScore'=>$_smarty_tpl->tpl_vars['info']->value['avgScore']),$_smarty_tpl);?>

<div style="width:65px;margin:0 auto;">
	<div class="inactive_rate_list">
   	<div class="active_rate_list" style="width:<?php if ($_smarty_tpl->tpl_vars['info']->value['width']) {
echo $_smarty_tpl->tpl_vars['info']->value['width'];
} else { ?>0<?php }?>%;">
      </div>
   </div>
</div>
</div>
<?php }
}
