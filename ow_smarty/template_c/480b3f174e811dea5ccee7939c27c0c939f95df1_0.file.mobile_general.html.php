<?php
/* Smarty version 3.1.29, created on 2016-10-20 20:18:23
  from "/home/dancemee/public_html/ow_themes/astoria/mobile/master_pages/mobile_general.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58090a6f2b0f04_73820452',
  'file_dependency' => 
  array (
    '480b3f174e811dea5ccee7939c27c0c939f95df1' => 
    array (
      0 => '/home/dancemee/public_html/ow_themes/astoria/mobile/master_pages/mobile_general.html',
      1 => 1476466200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58090a6f2b0f04_73820452 ($_smarty_tpl) {
if (!is_callable('smarty_function_component')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.component.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
?>
<div id="left" class="owm_sidebar_left">
	<div class="owm_sidebar_left_padding">
		<header>
			<div class="owm_sidebar_left_header_txt"><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
</a></div>
		</header>
		<div class="owm_logo"><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
"></a></div>
		<?php echo $_smarty_tpl->tpl_vars['topMenu']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['bottomMenu']->value;?>

	</div>
</div>
<div id="right" class="owm_sidebar_right">
	<div class="owm_sidebar_right_padding">

		<?php if ($_smarty_tpl->tpl_vars['isAuthenticated']->value) {?>
			<?php echo smarty_function_component(array('class'=>'BASE_MCMP_Console'),$_smarty_tpl);?>

		<?php } else { ?>
			<header><div class="owm_sidebar_right_header_txt"><?php echo smarty_function_text(array('key'=>'mobile+right_sidebar_guest_heading'),$_smarty_tpl);?>
</div></header>
			<section class="owm_sidebar_right_cont"><?php echo $_smarty_tpl->tpl_vars['signIn']->value;?>
</section>
		<?php }?>

	</div>
</div>
<div id="main" class="clearfix">
	<header>
		 <nav id="head-navigation">
			<a href="<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['left']['href'];?>
" class="owm_nav_menu<?php if (!empty($_smarty_tpl->tpl_vars['buttonData']->value['left']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['buttonData']->value['left']['class'];
}?>" id="<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['left']['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['left']['extraString'];?>
></a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['right']['href'];?>
" class="owm_nav_profile<?php if (!empty($_smarty_tpl->tpl_vars['buttonData']->value['left']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['buttonData']->value['right']['class'];
}?>" id="<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['right']['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['right']['extraString'];?>
></a>
			<a href="javascript://" class="owm_content_header_count" style="display: none;">
				 <span class="owm_content_header_count_cont"><span class="owm_content_header_count_txt" id="console-counter"></span></span>
			</a>
			<div class="owm_top_title" id="owm_heading"><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</div>
		 </nav>
	</header>
	<section><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</section>
	<div class="owm_overlay" id="owm_overlay" style="display:none;"></div>
</div>
<?php echo smarty_function_decorator(array('name'=>'floatbox','heading'=>$_smarty_tpl->tpl_vars['heading']->value),$_smarty_tpl);?>

<?php }
}
