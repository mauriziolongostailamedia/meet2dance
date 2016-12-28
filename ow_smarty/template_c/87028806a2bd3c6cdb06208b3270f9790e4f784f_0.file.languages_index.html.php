<?php
/* Smarty version 3.1.29, created on 2016-10-12 20:40:38
  from "/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/languages_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fe83a60f3080_29339968',
  'file_dependency' => 
  array (
    '87028806a2bd3c6cdb06208b3270f9790e4f784f' => 
    array (
      0 => '/home/dancemee/public_html/ow_system_plugins/admin/views/controllers/languages_index.html',
      1 => 1469551364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe83a60f3080_29339968 ($_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_cycle')) require_once '/home/dancemee/public_html/ow_libraries/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_url_for')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.url_for.php';
if (!is_callable('smarty_block_form')) require_once '/home/dancemee/public_html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_label')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_error')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) require_once '/home/dancemee/public_html/ow_smarty/plugin/function.submit.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


$(function(){
    $('#add_new_text_btn').click(function(){$('#add_new_text').trigger('click')})
});

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<style>
	input[type="text"].grey-text{color: #BBB;}
	textarea.once{height:30px;}
	
    .lang_value{
        width: 395px;
        overflow: hidden;
    }
    
</style>

    		<div class="ow_anno ow_std_margin" style="text-align:center;">
	                <?php echo smarty_function_text(array('key'=>"admin+you_are_editing"),$_smarty_tpl);?>

                <select onchange="location.href = '<?php echo $_smarty_tpl->tpl_vars['languageSwitchUrl']->value;?>
&language='+this.value;">
                	<?php
$_from = $_smarty_tpl->tpl_vars['langs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_lang_0_saved_item = isset($_smarty_tpl->tpl_vars['lang']) ? $_smarty_tpl->tpl_vars['lang'] : false;
$_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['lang']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
$__foreach_lang_0_saved_local_item = $_smarty_tpl->tpl_vars['lang'];
?>
                	<option <?php if ($_smarty_tpl->tpl_vars['language']->value->getTag() == $_smarty_tpl->tpl_vars['lang']->value->getTag()) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->getTag();?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->getLabel();?>
</option>
                	<?php
$_smarty_tpl->tpl_vars['lang'] = $__foreach_lang_0_saved_local_item;
}
if ($__foreach_lang_0_saved_item) {
$_smarty_tpl->tpl_vars['lang'] = $__foreach_lang_0_saved_item;
}
?>
                </select>
                
                <?php echo smarty_function_text(array('key'=>"admin+check_other_langs",'url'=>"?mod=langs"),$_smarty_tpl);?>

                
            </div>
            
            <div class="ow_stdmargin clearfix">
                <div class="ow_left" style="margin: 6px 10px;<?php if (empty($_smarty_tpl->tpl_vars['devMode']->value)) {?> display: none;<?php }?>">
                	<?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'admin+add_new_text','class'=>'ow_ic_add','id'=>"add_new_text_btn"),$_smarty_tpl);?>

                    <a style="display: none;" id="add_new_text" onclick="new OW_FloatBox({$title: '<?php echo smarty_function_text(array('key'=>"admin+title_add_new_text"),$_smarty_tpl);?>
', $contents: $('#new-key-form'), width: '550px', icon_class: 'ow_ic_add'})"><?php echo smarty_function_text(array('key'=>"admin+add_new_text"),$_smarty_tpl);?>
</a>
                </div>

            	<div class="ow_box ow_right">
                	<?php echo smarty_function_text(array('key'=>"admin+show"),$_smarty_tpl);?>


                    <select onchange="location.href='<?php echo $_smarty_tpl->tpl_vars['section_switch_url']->value;?>
&prefix='+$(this).val();">
                        <option <?php if ($_smarty_tpl->tpl_vars['current_prefix']->value == 'all') {?>selected="selected"<?php }?> value="all"><?php echo smarty_function_text(array('key'=>"admin+all_sections"),$_smarty_tpl);?>
</option>
                        <?php
$_from = $_smarty_tpl->tpl_vars['prefixes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_prefix_1_saved_item = isset($_smarty_tpl->tpl_vars['prefix']) ? $_smarty_tpl->tpl_vars['prefix'] : false;
$_smarty_tpl->tpl_vars['prefix'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['prefix']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['prefix']->value) {
$_smarty_tpl->tpl_vars['prefix']->_loop = true;
$__foreach_prefix_1_saved_local_item = $_smarty_tpl->tpl_vars['prefix'];
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['current_prefix']->value == $_smarty_tpl->tpl_vars['prefix']->value->prefix) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['prefix']->value->prefix;?>
" > <?php echo $_smarty_tpl->tpl_vars['prefix']->value->label;?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['prefix'] = $__foreach_prefix_1_saved_local_item;
}
if ($__foreach_prefix_1_saved_item) {
$_smarty_tpl->tpl_vars['prefix'] = $__foreach_prefix_1_saved_item;
}
?>
                        <option disabled="disabled">-</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['current_prefix']->value == 'missing-text') {?>selected="selected"<?php }?> value="missing-text">
                        	<?php echo smarty_function_text(array('key'=>"admin+missing_text"),$_smarty_tpl);?>

                        </option>
                    </select>

                    &nbsp;&nbsp;<b>OR</b>&nbsp;&nbsp;

                    <form id="search_form" style="display: inline" onsubmit="location.href = '<?php echo $_smarty_tpl->tpl_vars['searchFormActionUrl']->value;?>
&search='+ $('#search_inp').val()+( $('#search_in_inp:checked').length > 0 ? '&in_keys=y': ''); return false;">
                        <input id="search_inp" name="search" type="text" value="<?php echo $_smarty_tpl->tpl_vars['current_search']->value;?>
" style="width: 200px" class="grey-text" onfocus="if(this.flag == undefined){this.flag = false; $(this).removeClass('grey-text').attr('value', '')}" />
                        <?php if (!empty($_smarty_tpl->tpl_vars['devMode']->value)) {?><input id="search_in_inp" name="search_in_keys" <?php if (!empty($_smarty_tpl->tpl_vars['searchInKeys']->value) && $_smarty_tpl->tpl_vars['searchInKeys']->value == 'y') {?>checked="checked"<?php }?> type="checkbox" /> <label>in keys</label><?php }?>
                        <?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'admin+go','class'=>"ow_ic_lens",'type'=>'submit'),$_smarty_tpl);?>

                    </form>
                </div>

            </div>
			<?php if ($_smarty_tpl->tpl_vars['isSearchResults']->value) {?>
           	<div class="ow_anno ow_std_margin">
               <div style="text-align:center;">
               	<?php if (count($_smarty_tpl->tpl_vars['list']->value) > 0) {?>
               		<?php echo smarty_function_text(array('key'=>"admin+search_results_for_keyword",'keyword'=>((string)$_smarty_tpl->tpl_vars['current_search']->value)),$_smarty_tpl);?>

             	<?php } else { ?>
             		<?php echo smarty_function_text(array('key'=>"admin+search_no_results_for_keyword",'keyword'=>((string)$_smarty_tpl->tpl_vars['current_search']->value)),$_smarty_tpl);?>

               	<?php }?>
               	</div>
            </div>
            <?php } else { ?>            
            	<?php if (count($_smarty_tpl->tpl_vars['list']->value) == 0) {?>
		           	<div class="ow_anno ow_std_margin">
		               <div style="text-align:center;">
		               		{ text key="admin+no_values" } 
		               	</div>
		            </div>
            	<?php }?>
            <?php }?>
            
			<center><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</center>
            
<form method="POST" id="main-form">
                      
			<table class="ow_table_1 ow_form" style="width:100%;">
                <tr class="ow_tr_first">
                	<th style="width:47%;text-align:left;"><?php echo smarty_function_text(array('key'=>"admin+original_value",'label'=>$_smarty_tpl->tpl_vars['origLabel']->value,'tag'=>$_smarty_tpl->tpl_vars['origTag']->value),$_smarty_tpl);?>
</th>
                	<th style="width:47%;text-align:left;"><?php echo smarty_function_text(array('key'=>"admin+translation",'label'=>$_smarty_tpl->tpl_vars['label']->value,'tag'=>$_smarty_tpl->tpl_vars['tag']->value),$_smarty_tpl);?>
</th>
                    <th style="width:6%;"></th>
                </tr>
                <!-- custom section -->
               <!-- end of custom section -->

<input type="hidden" name="command" value="edit-values" />
<?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_2_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_2_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                <tr>
                	<td colspan="3" style="text-align:center;"><h3><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</h3></td>
                </tr>
                
                <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['data'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_d2_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_item_d2']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item_d2'] : false;
$__foreach_item_d2_3_saved_item = isset($_smarty_tpl->tpl_vars['item_d2']) ? $_smarty_tpl->tpl_vars['item_d2'] : false;
$__foreach_item_d2_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['item_d2'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_item_d2'] = new Smarty_Variable(array());
$__foreach_item_d2_3_iteration=0;
$_smarty_tpl->tpl_vars['item_d2']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item_d2']->value) {
$_smarty_tpl->tpl_vars['item_d2']->_loop = true;
$__foreach_item_d2_3_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_item_d2']->value['last'] = $__foreach_item_d2_3_iteration == $__foreach_item_d2_3_total;
$__foreach_item_d2_3_saved_local_item = $_smarty_tpl->tpl_vars['item_d2'];
?>
                <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2, ow_alt1'),$_smarty_tpl);?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_item_d2']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item_d2']->value['last'] : null)) {?>ow_tr_last<?php }?>" onmouseover="$('span.del-cont', this).show();" onmouseout="$('span.del-cont', this).hide();">
                	<td class="ow_label" style="text-align:left;">
                        <div class="lang_value">
                        <?php if ($_smarty_tpl->tpl_vars['item_d2']->value['origValue']) {?>
                			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_d2']->value['origValue']->value, ENT_QUOTES, 'utf-8', true);?>

                		<?php }?>
                        </div>
						<div style="margin-top: 10px;" class="ow_small"><span style="padding: 1px 3px;" class="ow_mild_green">{text key='<?php echo $_smarty_tpl->tpl_vars['item']->value['prefix'];?>
+<?php echo $_smarty_tpl->tpl_vars['item_d2']->value['key'];?>
'}</span></div>                	
                	</td>
                    <td class="ow_value">
                    	<?php if ($_smarty_tpl->tpl_vars['item_d2']->value['value']) {?>
                    		<textarea name="values[<?php echo $_smarty_tpl->tpl_vars['item_d2']->value['value']->keyId;?>
]" class="once" onclick="if(this.once === undefined){this.once = true; $(this).removeClass('once')}"><?php echo $_smarty_tpl->tpl_vars['item_d2']->value['value']->value;?>
</textarea>
                    	<?php } else { ?>
							<textarea name="missing[<?php echo $_smarty_tpl->tpl_vars['item']->value['prefix'];?>
][<?php echo $_smarty_tpl->tpl_vars['item_d2']->value['key'];?>
]" class="once"></textarea>
                    	<?php }?>
                   	</td>
                    <td class="ns-hover-block">
                    	<div style="width: 50px;">
	                    	<span class="del-cont" style="display: none;">
	                    	
	                    	<?php if (!$_smarty_tpl->tpl_vars['devMode']->value && $_smarty_tpl->tpl_vars['item']->value['prefix'] == 'ow_custom' || $_smarty_tpl->tpl_vars['devMode']->value) {?>
	                    	<a class="ow_lbutton ow_red" href="<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:deletekey"),$_smarty_tpl);?>
?prefix=<?php echo $_smarty_tpl->tpl_vars['item']->value['prefix'];?>
&key=<?php echo $_smarty_tpl->tpl_vars['item_d2']->value['key'];?>
" 
	                    		onclick="return(confirm('<?php echo smarty_function_text(array('key'=>"admin+are_you_sure"),$_smarty_tpl);?>
'));">
	                    		<?php echo smarty_function_text(array('key'=>"admin+delete"),$_smarty_tpl);?>

	                   		</a>
	                   		<?php }?>
	                   		</span>
                   		</div>
                	</td>
                </tr>
                <?php
$_smarty_tpl->tpl_vars['item_d2'] = $__foreach_item_d2_3_saved_local_item;
}
if ($__foreach_item_d2_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_item_d2'] = $__foreach_item_d2_3_saved;
}
if ($__foreach_item_d2_3_saved_item) {
$_smarty_tpl->tpl_vars['item_d2'] = $__foreach_item_d2_3_saved_item;
}
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved_local_item;
}
if ($__foreach_item_2_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved_item;
}
?>
            </table>    
			<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>"button",'langLabel'=>"admin+save_this_page",'class'=>"ow_ic_save ow_positive",'extraString'=>'onclick="this.form.submit()"'),$_smarty_tpl);?>
</div></div>        
</form>
			<center><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</center>
            
<!-- begin -->
<div style="display:none;">
	<div id="new-key-form">
	<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('form', array('name'=>"form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php echo smarty_function_input(array('name'=>"language"),$_smarty_tpl);?>

	<input type="hidden" name="command" value="add-key">
	<table class="ow_table_1 ow_form" style="width: 100%">
			<tr class="ow_alt2 ow_tr_first" style="<?php if (!$_smarty_tpl->tpl_vars['devMode']->value) {?>display: none;<?php }?>">
				<td class="ow_label"><?php echo smarty_function_label(array('name'=>'prefix'),$_smarty_tpl);?>
</td>
				<td class="ow_value">
					<?php echo smarty_function_input(array('name'=>'prefix'),$_smarty_tpl);?>

					<br /><?php echo smarty_function_error(array('name'=>'prefix'),$_smarty_tpl);?>

				</td>
			</tr>
			<tr class="ow_alt1" style="<?php if (!$_smarty_tpl->tpl_vars['devMode']->value) {?>display: none;<?php }?>">
				<td class="ow_label"><?php echo smarty_function_label(array('name'=>'key'),$_smarty_tpl);?>
</td>
				<td class="ow_value">
					<?php echo smarty_function_input(array('name'=>'key'),$_smarty_tpl);?>

					<br /><?php echo smarty_function_error(array('name'=>'key'),$_smarty_tpl);?>

				</td>
			</tr>
		<tr class="ow_alt2 ow_tr_last">
			<td class="ow_label ow_nowrap"><?php echo smarty_function_label(array('name'=>'value'),$_smarty_tpl);?>
</td>
			<td class="ow_value">
				<?php echo smarty_function_input(array('name'=>'value','style'=>'height: 150px'),$_smarty_tpl);?>

				<br /><?php echo smarty_function_error(array('name'=>'value'),$_smarty_tpl);?>

			</td>
		</tr >
	</table>
    <div class="clearfix ow_submit"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>"submit",'class'=>"ow_positive"),$_smarty_tpl);?>
</div></div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

	</div>
</div>
<!-- end --><?php }
}
