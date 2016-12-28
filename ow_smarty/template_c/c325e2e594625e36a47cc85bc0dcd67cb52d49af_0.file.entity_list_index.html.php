<?php
/* Smarty version 3.1.29, created on 2016-10-13 09:47:50
  from "/home/dancemee/public_html/ow_plugins/google_map_location/views/controllers/entity_list_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ff3c26c9cbe3_26851531',
  'file_dependency' => 
  array (
    'c325e2e594625e36a47cc85bc0dcd67cb52d49af' => 
    array (
      0 => '/home/dancemee/public_html/ow_plugins/google_map_location/views/controllers/entity_list_index.html',
      1 => 1475826391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff3c26c9cbe3_26851531 ($_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_block_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!empty($_smarty_tpl->tpl_vars['menu']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['locationName']->value) {?>
<div class="ow_std_margin">
    <h2><?php echo smarty_function_text(array('key'=>"googlelocation+user_list_location_sring",'location'=>$_smarty_tpl->tpl_vars['locationName']->value),$_smarty_tpl);?>
</h2>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['backUrl']->value) {?>
    
    <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
        $(function(){
            $(".back_to_map_button").click(
                function() { window.location = "<?php echo $_smarty_tpl->tpl_vars['backUrl']->value;?>
" }
            );
       });
    <?php echo '</script'; ?>
>
    

    <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'style'=>"margin-bottom:20px")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'style'=>"margin-bottom:20px"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_decorator(array('name'=>"button",'buttonName'=>"back_to_map",'class'=>"back_to_map_button ow_ic_left_arrow",'langLabel'=>"googlelocation+back_to_map"),$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'style'=>"margin-bottom:20px"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['cmp']->value;?>

<?php }
}
