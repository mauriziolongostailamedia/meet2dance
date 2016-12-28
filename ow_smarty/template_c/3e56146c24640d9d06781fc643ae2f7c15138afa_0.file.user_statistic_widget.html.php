<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:16:09
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/components/user_statistic_widget.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe7de93ddeb4_16326495',
  'file_dependency' => 
  array (
    '3e56146c24640d9d06781fc643ae2f7c15138afa' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/components/user_statistic_widget.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe7de93ddeb4_16326495 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_url_for_route')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    #admin-user-statistics-header #user-statistics-menu {
        float:right;
    }

    #admin-user-statistics-container .ow_ajaxloader_preloader {
        min-height:300px;
    }

    #admin-user-browse {
        float:right;
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    var defaultPeriod = "<?php echo $_smarty_tpl->tpl_vars['defaultPeriod']->value;?>
";

    $("#user-statistics-menu a").on("click", function(){
        defaultPeriod = $(this).attr("id");
        defaultPeriod = defaultPeriod.replace("user_menu_statistics_", "");

        reloadChart();
    });

    /**
     * Reload chart
     *
     * @return void
     */
    function reloadChart()
    {
        if (!defaultPeriod)
        {
            return;
        }

        OW.loadComponent("ADMIN_CMP_UserStatistic",
                [{ "defaultPeriod" : defaultPeriod }], "#admin-user-statistics-container");
    }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div id="admin-user-statistics-header">
    <div id="user-statistics-menu">
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

    </div>
    <div class="clearfix"></div>
</div>

<div id="admin-user-statistics-container">
    <?php echo $_smarty_tpl->tpl_vars['statistics']->value;?>

</div>

<div id="admin-user-browse">
    <?php ob_start();
echo smarty_function_url_for_route(array('for'=>'admin_users_browse'),$_smarty_tpl);
$_tmp2=ob_get_clean();
echo smarty_function_decorator(array('name'=>"button_list_item",'langLabel'=>"admin+statistics_browse_users",'onclick'=>"location.href='".$_tmp2."'"),$_smarty_tpl);?>

</div>
<div class="clearfix"></div>
<?php }
}
