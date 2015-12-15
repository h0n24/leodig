<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:54:41
         compiled from "/srv/www/helveti/helveti.cz/override/controllers/admin/templates/products/features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200318730556671961141f26-52831472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac88aca7fd33f486ee07a7539efa8d4b8d553569' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/override/controllers/admin/templates/products/features.tpl',
      1 => 1409156960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200318730556671961141f26-52831472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'available_features' => 0,
    'available_feature' => 0,
    'value' => 0,
    'link' => 0,
    'languages' => 0,
    'language' => 0,
    'default_form_language' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566719614cc667_20478944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566719614cc667_20478944')) {function content_566719614cc667_20478944($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['product']->value->id)){?>
	<input type="hidden" name="submitted_tabs[]" value="Features" />
	<h4><?php echo smartyTranslate(array('s'=>'Assign features to this product:'),$_smarty_tpl);?>
</h4>
	<div class="separation"></div>
				<ul>
					<li><?php echo smartyTranslate(array('s'=>'You can specify a value for each relevant feature regarding this product, empty fields will not be displayed.'),$_smarty_tpl);?>
</li>
					<li><?php echo smartyTranslate(array('s'=>'You can either create a specific value or select among existing pre-defined values you added previously.'),$_smarty_tpl);?>
</li>
				</ul>
			</td>
		</tr>
	</table>
	<br />
	<table border="0" cellpadding="0" cellspacing="0" class="table" style="width:100%;">
		<colgroup>
			<col width="300">
			<col width="">
			<col width="300">
		</colgroup>
		<tr>
			<th height="39px"><?php echo smartyTranslate(array('s'=>'Feature'),$_smarty_tpl);?>
</th>
			<th><?php echo smartyTranslate(array('s'=>'Pre-defined value'),$_smarty_tpl);?>
</th>
			<th><u><?php echo smartyTranslate(array('s'=>'or'),$_smarty_tpl);?>
</u> <?php echo smartyTranslate(array('s'=>'Customized value'),$_smarty_tpl);?>
</th>
		</tr>
	</table>
	<?php  $_smarty_tpl->tpl_vars['available_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['available_feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['available_feature']->key => $_smarty_tpl->tpl_vars['available_feature']->value){
$_smarty_tpl->tpl_vars['available_feature']->_loop = true;
?>
	<table cellpadding="5" style="background-color:#fff; width: 100%;border:1px solid #ccc; border-top:none;  padding:4px 6px;">
			<colgroup>
			<col width="300">
			<col width="">
			<col width="300">
		</colgroup>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['available_feature']->value['name'];?>
</td>
		<td>
		<?php if (sizeof($_smarty_tpl->tpl_vars['available_feature']->value['featureValues'])){?>
			<div style="max-width:300px;max-height:200px;margin:4px 4px;padding:2px;border:1px solid #e0d0b1;overflow: auto;text-align:left;">
			<input type="checkbox" style="display:none;" name="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value[]" id="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value" value="" <?php if ($_smarty_tpl->tpl_vars['available_feature']->value['custom']){?>checked="checked"<?php }?>/>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_feature']->value['featureValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
				<label style="padding:2px;text-align:left;cursor:pointer;width:99%;<?php if (in_array($_smarty_tpl->tpl_vars['value']->value['id_feature_value'],$_smarty_tpl->tpl_vars['available_feature']->value['current_item'])){?>background-color:#acd8fe;<?php }?>">
				<input type="checkbox" name="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value[]" class="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id_feature_value'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['value']->value['id_feature_value'],$_smarty_tpl->tpl_vars['available_feature']->value['current_item'])){?>checked="checked"<?php }?>
				onchange="$('.custom_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_').val(''); $('#feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value').attr('checked', false); if ($(this).attr('checked')) $(this).closest('label').css('background-color', '#acd8fe'); else $(this).closest('label').css('background-color', '#ffffff');">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value['value'],40);?>
&nbsp;</label><br />
			<?php } ?>
			</div>
		<?php }else{ ?>
			<input type="hidden" name="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value" value="0" />
				<span><?php echo smartyTranslate(array('s'=>'N/A'),$_smarty_tpl);?>
 -
				<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminFeatures'), 'htmlall', 'UTF-8');?>
&amp;addfeature_value&id_feature=<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
"
				 class="confirm_leave button"><img src="../img/admin/add.gif" alt="values_first" title="<?php echo smartyTranslate(array('s'=>'Add pre-defined values first'),$_smarty_tpl);?>
" />&nbsp;<?php echo smartyTranslate(array('s'=>'Add pre-defined values first'),$_smarty_tpl);?>
</a>
			</span>
		<?php }?>
		</td>
		<td class="translatable">
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
			<div class="lang_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['default_form_language']->value){?>display:none;<?php }?>float: left;">
			<textarea class="custom_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_" name="custom_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" cols="40" rows="1"
				onkeyup="if (isArrowKey(event)) return; $('#feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value').attr('checked', true); $('.feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value').attr('checked', false); $('.feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value').closest('label').css('background-color', '#ffffff');" ><?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['available_feature']->value['val'][$_smarty_tpl->tpl_vars['k']->value]['value'], 'htmlall', 'UTF-8'))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
			</div>
		<?php } ?>
		</td>
	</tr>
	
	<?php }
if (!$_smarty_tpl->tpl_vars['available_feature']->_loop) {
?>
		<tr><td colspan="3" style="text-align:center;"><?php echo smartyTranslate(array('s'=>'No features defined'),$_smarty_tpl);?>
</td></tr>
	<?php } ?>
	
	</table>
	<div class="separation"></div>
	<div>
		<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminFeatures'), 'htmlall', 'UTF-8');?>
&amp;addfeature" class="confirm_leave button">
			<img src="../img/admin/add.gif" alt="new_features" title="<?php echo smartyTranslate(array('s'=>'Add a new feature'),$_smarty_tpl);?>
" />&nbsp;<?php echo smartyTranslate(array('s'=>'Add a new feature'),$_smarty_tpl);?>

		</a>
	</div>
<?php }?>
<?php }} ?>