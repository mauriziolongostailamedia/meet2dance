<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:39:55
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/finance_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe837b4e5a30_31780890',
  'file_dependency' => 
  array (
    'b5a6289818e2c6fd19ef6e55059dba7a35aa5df4' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/finance_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe837b4e5a30_31780890 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_user_link')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.user_link.php';
if (!is_callable('smarty_function_format_date')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.format_date.php';
?>

<?php echo $_smarty_tpl->tpl_vars['paging']->value;?>


<table class="ow_table_2">
    <tr class="ow_tr_first">
        <th class="ow_nowrap"><?php echo smarty_function_text(array('key'=>'base+billing_transaction_id'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'base+billing_gateway'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'admin+plugin'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'base+billing_details'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'base+billing_amount'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'admin+currency'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'admin+user'),$_smarty_tpl);?>
</th>
        <th><?php echo smarty_function_text(array('key'=>'base+time'),$_smarty_tpl);?>
</th>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sale_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_sale']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sale'] : false;
$__foreach_sale_0_saved_item = isset($_smarty_tpl->tpl_vars['sale']) ? $_smarty_tpl->tpl_vars['sale'] : false;
$__foreach_sale_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['sale'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_sale'] = new Smarty_Variable(array());
$__foreach_sale_0_iteration=0;
$_smarty_tpl->tpl_vars['sale']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sale']->value) {
$_smarty_tpl->tpl_vars['sale']->_loop = true;
$__foreach_sale_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sale']->value['last'] = $__foreach_sale_0_iteration == $__foreach_sale_0_total;
$__foreach_sale_0_saved_local_item = $_smarty_tpl->tpl_vars['sale'];
?>
    <tr class="ow_alt<?php echo smarty_function_cycle(array('values'=>'1,2'),$_smarty_tpl);?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sale']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sale']->value['last'] : null)) {?>ow_tr_last<?php }?>">
        <td><?php echo $_smarty_tpl->tpl_vars['sale']->value['transactionUid'];?>
</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['sale']->value['gatewayKey'] != '') {?>
                <?php echo smarty_function_text(array('key'=>((string)$_smarty_tpl->tpl_vars['sale']->value['gatewayKey'])."+gateway_title"),$_smarty_tpl);?>

            <?php } else { ?>
                <span class="ow_small ow_remark"><?php echo smarty_function_text(array('key'=>'base+billing_gateway_unavailable'),$_smarty_tpl);?>
</span>
            <?php }?>
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['sale']->value['pluginTitle'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sale']->value['entityDescription'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sale']->value['totalAmount'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sale']->value['currency'];?>
</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['sale']->value['userId'] != null) {?>
                <?php echo smarty_function_user_link(array('username'=>$_smarty_tpl->tpl_vars['userNames']->value[$_smarty_tpl->tpl_vars['sale']->value['userId']],'name'=>$_smarty_tpl->tpl_vars['displayNames']->value[$_smarty_tpl->tpl_vars['sale']->value['userId']]),$_smarty_tpl);?>

            <?php } else { ?>
                <span class="ow_small ow_remark">-</span>
            <?php }?>
        </td>
        <td class="ow_small"><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['sale']->value['timeStamp']),$_smarty_tpl);?>
</td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['sale'] = $__foreach_sale_0_saved_local_item;
}
if ($__foreach_sale_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_sale'] = $__foreach_sale_0_saved;
}
if ($__foreach_sale_0_saved_item) {
$_smarty_tpl->tpl_vars['sale'] = $__foreach_sale_0_saved_item;
}
?>
</table>

<?php echo $_smarty_tpl->tpl_vars['paging']->value;?>


<div class="ow_supernarrow ow_automargin">
<table class="ow_table_3">
<tr class="ow_tr_first"><th class="ow_label" style="text-align: center" colspan="2"><b><?php echo smarty_function_text(array('key'=>'base+billing_statistics'),$_smarty_tpl);?>
</b></th></tr>
<?php
$_from = $_smarty_tpl->tpl_vars['stats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sum_1_saved_item = isset($_smarty_tpl->tpl_vars['sum']) ? $_smarty_tpl->tpl_vars['sum'] : false;
$__foreach_sum_1_saved_key = isset($_smarty_tpl->tpl_vars['cur']) ? $_smarty_tpl->tpl_vars['cur'] : false;
$_smarty_tpl->tpl_vars['sum'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cur'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['sum']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cur']->value => $_smarty_tpl->tpl_vars['sum']->value) {
$_smarty_tpl->tpl_vars['sum']->_loop = true;
$__foreach_sum_1_saved_local_item = $_smarty_tpl->tpl_vars['sum'];
?>
    <tr>
        <td class="ow_label"><?php echo $_smarty_tpl->tpl_vars['cur']->value;?>
</td>
        <td class="ow_value"><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
</td>
    </tr>
<?php
$_smarty_tpl->tpl_vars['sum'] = $__foreach_sum_1_saved_local_item;
}
if ($__foreach_sum_1_saved_item) {
$_smarty_tpl->tpl_vars['sum'] = $__foreach_sum_1_saved_item;
}
if ($__foreach_sum_1_saved_key) {
$_smarty_tpl->tpl_vars['cur'] = $__foreach_sum_1_saved_key;
}
?>
</table>
</div><?php }
}
