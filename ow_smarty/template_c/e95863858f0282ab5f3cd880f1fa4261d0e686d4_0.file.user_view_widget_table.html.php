<?php
/* Smarty version 3.1.29, created on 2016-10-12 10:15:33
  from "/home/dancemee/public_html/ow_system_plugins/base/views/components/user_view_widget_table.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fdf1250200f8_89094698',
  'file_dependency' => 
  array (
    'e95863858f0282ab5f3cd880f1fa4261d0e686d4' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/base/views/components/user_view_widget_table.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdf1250200f8_89094698 ($_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_add_content')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.add_content.php';
if ($_smarty_tpl->tpl_vars['ownerMode']->value || ($_smarty_tpl->tpl_vars['adminMode']->value && !$_smarty_tpl->tpl_vars['superAdminProfile']->value)) {?>
    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        

            .ow_edit_profile_link
            {
                position: absolute;
                right: 0px;
                top: 0px;
            }
        
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        
            (function(){
                $(".user_profile_data").hover(
                  function(){
                    $("#edit-profile").fadeIn();
                  },
                  function(){
                    $("#edit-profile").fadeOut();
                  }
              );
           }());
       
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }?>

<div class="user_profile_data" style="position:relative">
     <?php if ($_smarty_tpl->tpl_vars['ownerMode']->value || ($_smarty_tpl->tpl_vars['adminMode']->value && !$_smarty_tpl->tpl_vars['superAdminProfile']->value)) {?>
         <div style="display: none;" id="edit-profile" class="ow_edit_profile_link">
                <a class="ow_lbutton" href="<?php echo $_smarty_tpl->tpl_vars['profileEditUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>'base+edit_profile_link'),$_smarty_tpl);?>
</a>
         </div>
     <?php }?>

    <?php
$_from = $_smarty_tpl->tpl_vars['sectionsHtml']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_html_0_saved_item = isset($_smarty_tpl->tpl_vars['html']) ? $_smarty_tpl->tpl_vars['html'] : false;
$__foreach_html_0_saved_key = isset($_smarty_tpl->tpl_vars['section']) ? $_smarty_tpl->tpl_vars['section'] : false;
$_smarty_tpl->tpl_vars['html'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['html']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['html']->value) {
$_smarty_tpl->tpl_vars['html']->_loop = true;
$__foreach_html_0_saved_local_item = $_smarty_tpl->tpl_vars['html'];
?>
        <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

    <?php
$_smarty_tpl->tpl_vars['html'] = $__foreach_html_0_saved_local_item;
}
if ($__foreach_html_0_saved_item) {
$_smarty_tpl->tpl_vars['html'] = $__foreach_html_0_saved_item;
}
if ($__foreach_html_0_saved_key) {
$_smarty_tpl->tpl_vars['section'] = $__foreach_html_0_saved_key;
}
?>
 </div>

<?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons','title'=>$_smarty_tpl->tpl_vars['displayName']->value,'image'=>$_smarty_tpl->tpl_vars['avatarUrl']->value,'entityType'=>'user','entityId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>

<?php }
}
