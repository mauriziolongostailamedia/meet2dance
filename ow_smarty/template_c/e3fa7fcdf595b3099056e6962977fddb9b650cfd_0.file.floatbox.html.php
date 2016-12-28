<?php
/* Smarty version 3.1.29, created on 2016-10-12 17:54:35
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/decorators/floatbox.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe5cbbaea334_36766824',
  'file_dependency' => 
  array (
    'e3fa7fcdf595b3099056e6962977fddb9b650cfd' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/decorators/floatbox.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe5cbbaea334_36766824 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    body .owm_floatbox_wrap {
        top: 0px;
    }
    
    .owm_floatbox_preloader {
        height: 50px;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div style="display: none" id="floatbox_prototype">

    <div class="owm_floatbox_wrap" data-tpl="wrap">
        <div class="owm_floatbox clearfix">
            <header data-tpl="header">
		 <nav id="head-navigation">
                    <a href="javascript://" class="owm_nav_menu" data-tpl="left-btn" style="display: none;"></a>
                    <a href="javascript://" class="owm_nav_profile" data-tpl="right-btn" style="display: none;"></a>
                    <div class="owm_top_title" data-tpl="heading"><?php echo $_smarty_tpl->tpl_vars['data']->value['heading'];?>
</div>
		 </nav>
            </header>
            <div class="owm_floatbox_cont clearfix" data-tpl="body">
                <div class="owm_preloader owm_floatbox_preloader"></div>
            </div>
        </div>
    </div>

</div><?php }
}
