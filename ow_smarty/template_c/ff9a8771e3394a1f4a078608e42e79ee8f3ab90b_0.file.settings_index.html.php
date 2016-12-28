<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:35:55
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/settings_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe828bc0edd3_62795431',
  'file_dependency' => 
  array (
    'ff9a8771e3394a1f4a078608e42e79ee8f3ab90b' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/settings_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe828bc0edd3_62795431 ($_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'configSaveForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'configSaveForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_1 ow_form">
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_script"><?php echo smarty_function_text(array('key'=>'admin+site_installation'),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+site_title'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'siteTitle'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'siteTitle'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"></td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+site_email'),$_smarty_tpl);?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['showVerifyButton']->value) {?>
                <td class="ow_value"><?php echo smarty_function_input(array('style'=>"width:60%;",'name'=>'siteEmail'),$_smarty_tpl);?>
 <?php echo smarty_function_decorator(array('name'=>"button",'class'=>'ow_ic_mail','id'=>"verify_site_email_button",'langLabel'=>'admin+verify_site_email'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'siteEmail'),$_smarty_tpl);?>
</td>
            <?php } else { ?>
                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'siteEmail'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'siteEmail'),$_smarty_tpl);?>
</td>
            <?php }?>
            <td class="ow_desc"><?php echo smarty_function_text(array('key'=>'admin+site_email_desc'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+site_tagline'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'tagline'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'tagline'),$_smarty_tpl);?>
</td>
            <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'admin+site_tagline_desc'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 ow_tr_last">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+site_description'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'description'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'description'),$_smarty_tpl);?>
</td>
            <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'admin+site_description_desc'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_tr_delimiter"><td></td></tr>
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_script"><?php echo smarty_function_text(array('key'=>'admin+captcha_settings'),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+display_captcha_label'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'enableCaptcha'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'enableCaptcha'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"></td>
        </tr>
        <tr class="ow_tr_delimiter"><td></td></tr>
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_clock"><?php echo smarty_function_text(array('key'=>'admin+time_settings'),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"time",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'dateFieldFormat'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'dateFieldFormat'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'dateFieldFormat'),$_smarty_tpl);?>
</td>
            <td class="ow_desc ow_small"></td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"time",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+timezone'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'timezone'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'timezone'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"></td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"time",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+use_relative_time'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'relativeTime'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'relativeTime'),$_smarty_tpl);?>
</td>
            <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'admin+site_relative_time_desc'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"time",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 ow_tr_last">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+use_military_time'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'militaryTime'),$_smarty_tpl);?>
</td>
            <td class="ow_desc ow_small"></td>
        </tr>
        <tr class="ow_tr_delimiter"><td></td></tr>
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_app"><?php echo smarty_function_text(array('key'=>'admin+finance_settings'),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"time",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'currency'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'currency'),$_smarty_tpl);?>
 <br /><?php echo smarty_function_error(array('name'=>'currency'),$_smarty_tpl);?>
</td>
            <td class="ow_desc ow_small"></td>
        </tr>

    </table>
    <div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'configSaveForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['showVerifyButton']->value) {?>
    <div style="display:none;">
        <div id="site-email-verify">
            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_automargin",'style'=>"width:325px;padding-bottom:10px;")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_automargin",'style'=>"width:325px;padding-bottom:10px;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo smarty_function_text(array('key'=>"admin+site_email_verify_promo"),$_smarty_tpl);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_automargin",'style'=>"width:325px;padding-bottom:10px;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo smarty_function_decorator(array('name'=>"button",'class'=>'ow_ic_mail','id'=>"sendVerifyMail",'langLabel'=>'admin+send_verification_email'),$_smarty_tpl);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

        </div>
    </div>
<?php }?>

<?php }
}
