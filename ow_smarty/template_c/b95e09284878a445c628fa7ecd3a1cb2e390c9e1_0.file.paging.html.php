<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:40:37
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/paging.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe83a5e784a2_21871381',
  'file_dependency' => 
  array (
    'b95e09284878a445c628fa7ecd3a1cb2e390c9e1' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/paging.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe83a5e784a2_21871381 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_math')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.math.php';
?>
<div class="ow_paging clearfix ow_smallmargin">
    <span><?php echo smarty_function_text(array('key'=>'base+pages_label'),$_smarty_tpl);?>
</span>
    <?php $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable('0', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'p', 0);?>
    <?php if ($_smarty_tpl->tpl_vars['less']->value) {?><a data-page="1" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
page=1"><?php echo smarty_function_text(array('key'=>"base+paging_label_first"),$_smarty_tpl);?>
</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['prev']->value) {?><a data-page="<?php echo smarty_function_math(array('equation'=>'x-1','x'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
page=<?php echo smarty_function_math(array('equation'=>'x-1','x'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>"base+paging_label_prev"),$_smarty_tpl);?>
</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['less']->value) {?><span>...</span><?php }?>
    <?php
$__section_paging_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_paging']) ? $_smarty_tpl->tpl_vars['__smarty_section_paging'] : false;
$__section_paging_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['page_shortcut_count']->value+1) ? count($_loop) : max(0, (int) $_loop));
$__section_paging_0_start = min(1, $__section_paging_0_loop);
$__section_paging_0_total = min(($__section_paging_0_loop - $__section_paging_0_start), $__section_paging_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_paging'] = new Smarty_Variable(array());
if ($__section_paging_0_total != 0) {
for ($__section_paging_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_paging']->value['index'] = $__section_paging_0_start; $__section_paging_0_iteration <= $__section_paging_0_total; $__section_paging_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_paging']->value['index']++){
?>
    	<?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['start']->value,'y'=>(isset($_smarty_tpl->tpl_vars['__smarty_section_paging']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_paging']->value['index'] : null),'assign'=>'p'),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['p']->value <= $_smarty_tpl->tpl_vars['count']->value) {?><a <?php if ($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['page']->value) {?>class="active"<?php }?> data-page="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
page=<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a><?php }?>
    <?php
}
}
if ($__section_paging_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_paging'] = $__section_paging_0_saved;
}
?>
    <?php if ($_smarty_tpl->tpl_vars['more']->value) {?><span>...</span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['next']->value) {?><a data-page="<?php echo smarty_function_math(array('equation'=>'x+1','x'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
page=<?php echo smarty_function_math(array('equation'=>'x+1','x'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>'base+paging_label_next'),$_smarty_tpl);?>
</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['more']->value) {?><a data-page="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
page=<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
"><?php echo smarty_function_text(array('key'=>'base+paging_label_last'),$_smarty_tpl);?>
</a><?php }?>
</div><?php }
}
