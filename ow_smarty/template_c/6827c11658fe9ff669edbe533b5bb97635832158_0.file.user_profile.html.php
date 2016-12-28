<?php
/* Smarty version 3.1.29, created on 2016-10-12 18:32:51
  from "/home/dancemee/public_html/ow_system_plugins/base/mobile/views/controllers/user_profile.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe65b39bc286_55160898',
  'file_dependency' => 
  array (
    '6827c11658fe9ff669edbe533b5bb97635832158' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/mobile/views/controllers/user_profile.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe65b39bc286_55160898 ($_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)) {?>
    <div class="owm_padding">
        <div class="owm_anno owm_info">
            <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

        </div>
    </div>
<?php } else { ?>
    <?php echo smarty_function_add_content(array('key'=>"mobile.content.profile_view_top",'userId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>

    <div class="owm_profile_block owm_bg_color_1">
        <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['info']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['about']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>

    </div>
    <?php echo smarty_function_add_content(array('key'=>"mobile.content.profile_view_bottom",'userId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>

<?php }
}
}
