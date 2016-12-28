<?php
/* Smarty version 3.1.29, created on 2016-10-13 09:25:27
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/mass_mailing_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff36e7ec9800_25456298',
  'file_dependency' => 
  array (
    '0dc87c35657509ff913ef87395c86b265366c44f' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/mass_mailing_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff36e7ec9800_25456298 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
?>
<div class="clearfix">
    <?php if (!$_smarty_tpl->tpl_vars['isActive']->value) {?>
        <div class="ow_anno ow_center">
            <?php echo $_smarty_tpl->tpl_vars['expireText']->value;?>

        </div>
    <?php } else { ?>
        <div class="ow_column ow_automargin ow_superwide">
            <p class="total_members"><?php echo smarty_function_text(array('key'=>"admin+massmailing_total_members",'count'=>$_smarty_tpl->tpl_vars['userCount']->value),$_smarty_tpl);?>
</p>
            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'massMailingForm','type'=>'empty','iconClass'=>"ow_ic_edit",'langLabel'=>'admin+massmailing_compose_email')); $_block_repeat=true; echo smarty_block_form(array('name'=>'massMailingForm','type'=>'empty','iconClass'=>"ow_ic_edit",'langLabel'=>'admin+massmailing_compose_email'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <table class="ow_table_1 ow_form">
                    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 ow_tr_first">
                        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'emailFormat'),$_smarty_tpl);?>
</td>
                        <td class="ow_value">
                             <?php echo smarty_function_input(array('name'=>'emailFormat'),$_smarty_tpl);?>

                        </td>
                    </tr>
                    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
">
                        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'userRoles'),$_smarty_tpl);?>
</td>
                        <td class="ow_value">
                             <?php echo smarty_function_input(array('name'=>'userRoles'),$_smarty_tpl);?>

                        </td>
                    </tr>
                    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
">
                        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'subject'),$_smarty_tpl);?>
</td>
                        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'subject','style'=>"width:97%;"),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'subject'),$_smarty_tpl);?>
</td>
                    </tr>
                    <tr class="<?php echo smarty_function_cycle(array('values'=>"ow_alt2,ow_alt1"),$_smarty_tpl);?>
 ow_tr_last">
                        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'body'),$_smarty_tpl);?>
</td>
                        <td class="ow_value">
                            <?php echo smarty_function_input(array('id'=>"mass_mailing_body",'name'=>'body','style'=>"width:97%;height:250px;"),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'body'),$_smarty_tpl);?>

                            <div style="padding:5px;">
                                <?php echo smarty_function_text(array('key'=>'admin+massmailing_following_variables_text'),$_smarty_tpl);?>
<br />
                                
                                    <a id="var_username" onclick="window.massMailing.addVar('{$user_name}')" href="javascript://">{$user_name}</a><br />
                                    <a id="var_username" onclick="window.massMailing.addVar('{$user_email}')" href="javascript://">{$user_email}</a><br />
                                    <a id="var_sitename" onclick="window.massMailing.addVar('{$site_name}')" href="javascript://">{$site_name}</a><br />
                                    <a id="var_siteurl" onclick="window.massMailing.addVar('{$site_url}')" href="javascript://">{$site_url}</a><br />
                                    <a id="site_email" onclick="window.massMailing.addVar('{$site_email}')" href="javascript://">{$site_email}</a><br />
                                    <a id="site_email" onclick="window.massMailing.addVar('{$unsubscribe_url}')" href="javascript://">{$unsubscribe_url}</a><br />
                                
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="clearfix ow_stdmargin">
                    <div class="ow_right">
                        <?php echo smarty_function_submit(array('name'=>'startMailing','class'=>"ow_positive"),$_smarty_tpl);?>

                    </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'massMailingForm','type'=>'empty','iconClass'=>"ow_ic_edit",'langLabel'=>'admin+massmailing_compose_email'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

        </div>
    <?php }?>
</div><?php }
}
