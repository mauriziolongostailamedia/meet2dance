<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:37:34
  from "/home/dancemee/public_html/ow_plugins/video/views/components/video_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe82eeba2e73_54154182',
  'file_dependency' => 
  array (
    '96660f45d278270fcd43890c5ffb4db1b9900766' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/video/views/components/video_list.html',
      1 => 1475654753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe82eeba2e73_54154182 ($_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
?>

<?php if (!$_smarty_tpl->tpl_vars['no_content']->value) {?>

	<div class="ow_video_list ow_stdmargin clearfix">
	
	    <?php $_smarty_tpl->tpl_vars['alt1'] = new Smarty_Variable(true, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'alt1', 0);?>
	    <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'cnt', 0);?>
	
		<?php
$_from = $_smarty_tpl->tpl_vars['clips']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_c_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_c']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_c'] : false;
$__foreach_c_0_saved_item = isset($_smarty_tpl->tpl_vars['clip']) ? $_smarty_tpl->tpl_vars['clip'] : false;
$__foreach_c_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['clip'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_c'] = new Smarty_Variable(array('iteration' => 0));
$__foreach_c_0_iteration=0;
$_smarty_tpl->tpl_vars['clip']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['clip']->value) {
$_smarty_tpl->tpl_vars['clip']->_loop = true;
$__foreach_c_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_c']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_c']->value['last'] = $__foreach_c_0_iteration == $__foreach_c_0_total;
$__foreach_c_0_saved_local_item = $_smarty_tpl->tpl_vars['clip'];
?>
		
	        <?php if ($_smarty_tpl->tpl_vars['cnt']->value == $_smarty_tpl->tpl_vars['count']->value) {?>
	            <?php if ($_smarty_tpl->tpl_vars['alt1']->value) {
$_smarty_tpl->tpl_vars['alt1'] = new Smarty_Variable(false, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'alt1', 0);
} else {
$_smarty_tpl->tpl_vars['alt1'] = new Smarty_Variable(true, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'alt1', 0);
}?>
	            <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'cnt', 0);?>
	        <?php }?>
	        
	        <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_Variable($_smarty_tpl->tpl_vars['cnt']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'cnt', 0);?>
		
	        <?php $_smarty_tpl->tpl_vars['userId'] = new Smarty_Variable($_smarty_tpl->tpl_vars['clip']->value['userId'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'userId', 0);?>
	
	        <?php if ($_smarty_tpl->tpl_vars['cnt']->value == 1) {?>
	            <div class="clearfix <?php if ($_smarty_tpl->tpl_vars['alt1']->value) {?>ow_alt1<?php } else { ?>ow_alt2<?php }?>">
	        <?php }?> 
	                
		    <?php echo smarty_function_decorator(array('name'=>'video_list_item','data'=>$_smarty_tpl->tpl_vars['clip']->value,'listType'=>$_smarty_tpl->tpl_vars['listType']->value,'username'=>$_smarty_tpl->tpl_vars['usernames']->value[$_smarty_tpl->tpl_vars['userId']->value],'displayName'=>$_smarty_tpl->tpl_vars['displayNames']->value[$_smarty_tpl->tpl_vars['userId']->value]),$_smarty_tpl);?>

	        
            <?php if ($_smarty_tpl->tpl_vars['cnt']->value == $_smarty_tpl->tpl_vars['count']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_c']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_c']->value['iteration'] : null) != 1 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_c']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_c']->value['last'] : null)) {?>
                </div>
            <?php }?>
	        
	    <?php
$_smarty_tpl->tpl_vars['clip'] = $__foreach_c_0_saved_local_item;
}
if ($__foreach_c_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_c'] = $__foreach_c_0_saved;
}
if ($__foreach_c_0_saved_item) {
$_smarty_tpl->tpl_vars['clip'] = $__foreach_c_0_saved_item;
}
?>
	    
	</div>
	
    <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

    
<?php } else { ?>
    <div class="ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['no_content']->value;?>
</div>
<?php }
}
}
