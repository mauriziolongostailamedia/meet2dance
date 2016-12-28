<?php
/* Smarty version 3.1.29, created on 2016-10-13 10:34:04
  from "/home/dancemee/public_html/ow_plugins/notifications/views/components/notification_html.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff46fc025e08_15836405',
  'file_dependency' => 
  array (
    '9d3a6534d3d70b3efac058d727062b8ed333892c' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/notifications/views/components/notification_html.html',
      1 => 1469551370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff46fc025e08_15836405 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_modifier_simple_date')) require_once '/home/dancemee/public_html/ow_smarty/plugin/modifier.simple_date.php';
?>
<div style="font-size:13px;font-family:Lucida Grande,Verdana;">
    <p>
       <?php echo smarty_function_text(array('key'=>"notifications+email_html_head",'userName'=>$_smarty_tpl->tpl_vars['userName']->value),$_smarty_tpl);?>

    </p>
    <p>
      <?php echo smarty_function_text(array('key'=>"notifications+email_html_description"),$_smarty_tpl);?>

    </p>
    <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_section_0_saved_item = isset($_smarty_tpl->tpl_vars['section']) ? $_smarty_tpl->tpl_vars['section'] : false;
$__foreach_section_0_saved_key = isset($_smarty_tpl->tpl_vars['time']) ? $_smarty_tpl->tpl_vars['time'] : false;
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['time'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['section']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['time']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
$__foreach_section_0_saved_local_item = $_smarty_tpl->tpl_vars['section'];
?>
        <div style="font-weight: bold"><?php echo smarty_modifier_simple_date($_smarty_tpl->tpl_vars['time']->value,$_smarty_tpl->tpl_vars['time']->value,true);?>
</div>
        <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['section']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                <li style="padding: 3px; list-style-type: none; margin-left: 5px; list-style-position: outside; width: 490px;">
                    <div style="display: inline-block; width: 40px; vertical-align: top;">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['avatar']['url'];?>
" style="text-decoration: none;" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['avatar']['title'])) {?>title="<?php echo $_smarty_tpl->tpl_vars['item']->value['avatar']['title'];?>
"<?php }?>>
                            <img width="40" height="40" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['avatar']['src'];?>
">
                        </a>
                    </div>
                    <div style="display: inline-block; word-wrap: break-word; vertical-align: top; width: 400px;">
                        <div><?php echo $_smarty_tpl->tpl_vars['item']->value['string'];?>
</div>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['content']) {?>
                            <div style="font-size:11px;color:#666;"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
                        <?php }?>
                    </div>

                    <div style="display: inline-block; width: 40px; word-wrap: break-word; vertical-align: top;">
                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['contentImage']['src'])) {?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['contentImage']['url'])) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['contentImage']['url'];?>
">
                            <?php }?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['contentImage']['src'];?>
" width="40" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['contentImage']['title'])) {?>title="<?php echo $_smarty_tpl->tpl_vars['item']->value['contentImage']['title'];?>
"<?php }?>>
                            <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['contentImage']['url'])) {?>
                                </a>
                            <?php }?>
                        <?php }?>
                    </div>
                </li>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
?>
        </ul>
    <?php
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_0_saved_local_item;
}
if ($__foreach_section_0_saved_item) {
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_0_saved_item;
}
if ($__foreach_section_0_saved_key) {
$_smarty_tpl->tpl_vars['time'] = $__foreach_section_0_saved_key;
}
?>

<p>
<?php echo smarty_function_text(array('key'=>"notifications+email_html_bottom"),$_smarty_tpl);?>

</p>
<?php if ($_smarty_tpl->tpl_vars['single']->value) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['unsubscribeUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>"notifications+unsubscribe_one_label"),$_smarty_tpl);?>
</a>
<?php }?>
<a href="<?php echo $_smarty_tpl->tpl_vars['settingsUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>"notifications+settings_edit_label"),$_smarty_tpl);?>
</a> |
<a href="<?php echo $_smarty_tpl->tpl_vars['unsubscribeAllUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>"notifications+unsubscribe_all_label"),$_smarty_tpl);?>
</a>
</div>
<?php }
}
