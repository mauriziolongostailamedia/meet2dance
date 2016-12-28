<?php
/* Smarty version 3.1.29, created on 2016-10-14 20:07:54
  from "/home/dancemee/public_html/ow_themes/astoria/master_pages/dndindex.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58011efa1f99b1_37468925',
  'file_dependency' => 
  array (
    'cbce177e393a7e5ee5635321433de3d373889186' => 
    array (
      0 => '/home/dancemee/public_html/ow_themes/astoria/master_pages/dndindex.html',
      1 => 1476466200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58011efa1f99b1_37468925 ($_smarty_tpl) {
if (!is_callable('smarty_function_component')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.component.php';
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
?>
<div class="ow_page_wrap">
	<div class="ow_menu_fullpage">
		<div class="ow_menu_fullpage_wrap"><?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>
</div>
	</div>

	<div class="ow_site_panel clearfix">
			<div class="ow_nav_btn"></div>
			<div class="ow_console_right">
				<?php echo smarty_function_component(array('class'=>'BASE_CMP_Console'),$_smarty_tpl);?>

			</div>
			<div ></div>
	</div>
	<div class="ow_header">
        <div class="ow_header_pic"></div>
	</div>
	
	<div class="ow_page_padding">
		<div class="ow_page_container">
			<div class="ow_canvas">
				<div class="ow_page ow_bg_color clearfix">
				<div class="ow_menu_wrap"><?php echo smarty_function_component(array('class'=>'BASE_CMP_MainMenu','responsive'=>true),$_smarty_tpl);?>
</div>
					<h1 class="ow_stdmargin <?php echo $_smarty_tpl->tpl_vars['heading_icon_class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h1>
	<div class="ow_content_wrap">
				<div class="ow_content">
					<?php echo smarty_function_add_content(array('key'=>'base.add_page_top_content'),$_smarty_tpl);?>

					<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

					<?php echo smarty_function_add_content(array('key'=>'base.add_page_bottom_content'),$_smarty_tpl);?>

				</div>
				<div class="ow_sidebar">
					
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ow_footer">

	<div class="ow_canvas">
		<div class="ow_page clearfix">
			<?php echo $_smarty_tpl->tpl_vars['bottom_menu']->value;?>

			<div class="ow_copyright ow_stdmargin"><?php echo smarty_function_text(array('key'=>'base+copyright'),$_smarty_tpl);?>
</div>
            <div class="ow_center"><?php echo $_smarty_tpl->tpl_vars['bottomPoweredByLink']->value;?>
</div>
		</div>
	</div>
		</div> <div class="ow_logo_wrap">
          <?php if (isset($_smarty_tpl->tpl_vars['imageControlValues']->value['logoImage']['src'])) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
" class="ow_logo_img"></a>
          <?php } else { ?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
" class="ow_logo_img"></a>
          <?php }?>
</div>
	</div> 
</div>    
<?php echo smarty_function_decorator(array('name'=>'floatbox'),$_smarty_tpl);?>

<?php echo '<script'; ?>
 type="text/javascript">
	$(window).scroll(function() {
	var $menuwrappos = $('.ow_menu_wrap').offset().top;
    if ($(this).scrollTop() > $menuwrappos) { 
        $('.ow_page_wrap').addClass('ow_hidden_menu');
    }
    else {
    	$('.ow_page_wrap').removeClass('ow_hidden_menu');
    }
	});
	$('.ow_nav_btn').click(function() {
    	if ($('body').hasClass('ow_menu_active')) {
    		$('body').removeClass('ow_menu_active');
    	}
    	else {
    		$('body').addClass('ow_menu_active');
    	}
    })
    $('.ow_menu_fullpage_wrap a').click(function() {
    	$('body').removeClass('ow_menu_active');
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$(function() {

	
	var sticky_navigation_offset_top = $('.ow_menu_wrap').offset().top;
	
	
	var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop(); 
		
		
		if (scroll_top > sticky_navigation_offset_top) { 
			$('.ow_menu_wrap').css({ 'position': 'fixed', 'top':0, 'left':0, 'z-index':98, 'margin-top':43, 'background-color':'rgba (0, 0, 0, 0.6)',  });
			


		} else {
			$('.ow_menu_wrap').css({ 'position': 'relative', 'margin-top':'0','background-color':'rgba (0, 0, 0, 0.6)','z-index':1 }); 
			

		}   
	};
	
	
	sticky_navigation();
	
	
	$(window).scroll(function() {
		 sticky_navigation();
	});
	
	
	$('a[href="#"]').click(function(event){ 
		event.preventDefault(); 
	});
	
});
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
(function($) {



  $.fn.visible = function(partial) {
    
      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
    
})(jQuery);

<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>

$(window).scroll(function(event) {
  
  $(".ow_newsfeed_avatar").each(function(i, el) {
    var el = $(el);
    if (el.visible(false)) {
      el.addClass("bounce-in"); 
    } 
  });
  
});
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

$(window).scroll(function(event) {
  
  $(".ow_canvas .ow_newsfeed_body").each(function(i, el) {
    var el = $(el);
    if (el.visible(false)) {
      el.addClass("bounce-in"); 
    } 
  });
  
});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
var win = $(window);
var allMods = $(".ow_canvas .ow_newsfeed_body, .ow_newsfeed_avatar");

// Already visible modules
allMods.each(function(i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("already-visible"); 
  } 
});

win.scroll(function(event) {
  
  allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("bounce-in"); 
    } 
  });
  
});

<?php echo '</script'; ?>
><?php }
}
