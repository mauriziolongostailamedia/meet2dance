<?php
/* Smarty version 3.1.29, created on 2016-10-12 21:04:37
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/users_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe894552ecc3_32527269',
  'file_dependency' => 
  array (
    '085d97d637bed31ce5cac08889eda37c7b5c0d50' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/users_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe894552ecc3_32527269 ($_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



    $("#invite_btn").click(function(){
	    var $form_content = $("#invite_members");
	
	    window.invite_members_floatbox = new OW_FloatBox({
	        $title: OW.getLanguageText('admin', 'invite_members_cap_label'),
	        $contents: $form_content,
	        icon_class: 'ow_ic_add',
	        width: 550
	    });
    });
    
    $("#username-search-input").focus();


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="ow_hidden">
    <div id="invite_members" class="ow_center">
        <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>'invite-members')); $_block_repeat=true; echo smarty_block_form(array('name'=>'invite-members'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_input(array('name'=>'emails'),$_smarty_tpl);?>

        <div style="text-align: center;padding: 5px;"><?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>
</div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'invite-members'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    </div>
</div>

<?php echo smarty_function_text(array('key'=>'admin+total_users','count'=>$_smarty_tpl->tpl_vars['totalUsers']->value),$_smarty_tpl);?>


<div class="ow_stdmargin clearfix">
	<div class="ow_right ow_superwide ow_txtright">
        <form method="get">
		<div class="ow_box ow_admin_search_box ow_smallmargin">
	       <?php echo smarty_function_text(array('key'=>'admin+search_by'),$_smarty_tpl);?>

	       <select name="search_by">
	           <?php
$_from = $_smarty_tpl->tpl_vars['searchQ']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_label_0_saved_item = isset($_smarty_tpl->tpl_vars['label']) ? $_smarty_tpl->tpl_vars['label'] : false;
$__foreach_label_0_saved_key = isset($_smarty_tpl->tpl_vars['question']) ? $_smarty_tpl->tpl_vars['question'] : false;
$_smarty_tpl->tpl_vars['label'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['question'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['label']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
$__foreach_label_0_saved_local_item = $_smarty_tpl->tpl_vars['label'];
?>
	           <option value="<?php echo $_smarty_tpl->tpl_vars['question']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['currentSearch']->value['question'] == $_smarty_tpl->tpl_vars['question']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</option>
	           <?php
$_smarty_tpl->tpl_vars['label'] = $__foreach_label_0_saved_local_item;
}
if ($__foreach_label_0_saved_item) {
$_smarty_tpl->tpl_vars['label'] = $__foreach_label_0_saved_item;
}
if ($__foreach_label_0_saved_key) {
$_smarty_tpl->tpl_vars['question'] = $__foreach_label_0_saved_key;
}
?>
	       </select> :
	       <input type="text" name="search" id="username-search-input" style="width: 280px" value="<?php echo $_smarty_tpl->tpl_vars['currentSearch']->value['value'];?>
" />
	       <?php echo smarty_function_decorator(array('name'=>'button','type'=>"submit",'langLabel'=>'admin+go'),$_smarty_tpl);?>

	    </div>
	    
	    <?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','langLabel'=>'admin+invite_members_button_label','id'=>'invite_btn'),$_smarty_tpl);?>

	    </form>	
	</div>
</div>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php echo $_smarty_tpl->tpl_vars['userList']->value;?>

<?php }
}
