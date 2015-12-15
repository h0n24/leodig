<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 20:32:18
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/address.tpl" */ ?>
<?php /*%%SmartyHeaderCode:962600025566730422e7271-67484585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9d0f2c43c956ed7e31d86b0f5dd5956b06763cb' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/address.tpl',
      1 => 1411243927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '962600025566730422e7271-67484585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'address' => 0,
    'countries' => 0,
    'country' => 0,
    'state' => 0,
    'id_address' => 0,
    'link' => 0,
    'ordered_adr_fields' => 0,
    'field_name' => 0,
    'countries_list' => 0,
    'vatnumber_ajax_call' => 0,
    'ajaxurl' => 0,
    'postCodeExist' => 0,
    'stateExist' => 0,
    'dniExist' => 0,
    'one_phone_at_least' => 0,
    'select_address' => 0,
    'back' => 0,
    'mod' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56673042591368_09873654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56673042591368_09873654')) {function content_56673042591368_09873654($_smarty_tpl) {?>

<script type="text/javascript">
// <![CDATA[
var idSelectedCountry = <?php if (isset($_POST['id_state'])){?><?php echo intval($_POST['id_state']);?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->id_state)){?><?php echo intval($_smarty_tpl->tpl_vars['address']->value->id_state);?>
<?php }else{ ?>false<?php }?><?php }?>;
var countries = new Array();
var countriesNeedIDNumber = new Array();
var countriesNeedZipCode = new Array();
<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
	<?php if (isset($_smarty_tpl->tpl_vars['country']->value['states'])&&$_smarty_tpl->tpl_vars['country']->value['contains_states']){?>
		countries[<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
] = new Array();
		<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['country']->value['states']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value){
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
			countries[<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
].push({'id' : '<?php echo $_smarty_tpl->tpl_vars['state']->value['id_state'];?>
', 'name' : '<?php echo addslashes($_smarty_tpl->tpl_vars['state']->value['name']);?>
'});
		<?php } ?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['country']->value['need_identification_number']){?>
		countriesNeedIDNumber.push(<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
);
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['country']->value['need_zip_code'])){?>
		countriesNeedZipCode[<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
] = <?php echo $_smarty_tpl->tpl_vars['country']->value['need_zip_code'];?>
;
	<?php }?>
<?php } ?>
$(function(){
	$('.id_state option[value=<?php if (isset($_POST['id_state'])){?><?php echo intval($_POST['id_state']);?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->id_state)){?><?php echo intval($_smarty_tpl->tpl_vars['address']->value->id_state);?>
<?php }?><?php }?>]').attr('selected', true);
});

	$(document).ready(function() {
		$('#company').on('input',function(){
			vat_number();
		});
		vat_number();
		function vat_number()
		{
			if ($('#company').val() != '')
				$('#vat_number').show();
			else
				$('#vat_number').hide();
		}
	});

//]]>
</script>

<div class="kosik-container kosik-container-add-adress">

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Your addresses'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<h1><?php echo smartyTranslate(array('s'=>'Your addresses'),$_smarty_tpl);?>
</h1>

<?php if (isset($_smarty_tpl->tpl_vars['id_address']->value)&&(isset($_POST['alias'])||isset($_smarty_tpl->tpl_vars['address']->value->alias))){?>
	<?php echo smartyTranslate(array('s'=>'Modify address'),$_smarty_tpl);?>
 
	<?php if (isset($_POST['alias'])){?>
		"<?php echo $_POST['alias'];?>
"
	<?php }else{ ?>
		<?php if (isset($_smarty_tpl->tpl_vars['address']->value->alias)){?>"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->alias, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>
	<?php }?>
<?php }else{ ?>
	<?php echo smartyTranslate(array('s'=>'To add a new address, please fill out the form below.'),$_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std form-horizontal" id="add_address">
	<div class="panel panel-default">
		<h3 class="panel-heading"><?php if (isset($_smarty_tpl->tpl_vars['id_address']->value)){?><?php echo smartyTranslate(array('s'=>'Your address'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'New address'),$_smarty_tpl);?>
<?php }?></h3>
		<div class="panel-body">
			<div class="form_content">
			<p class="required"><sup>*</sup> <label><?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>
</label></p>
		<?php $_smarty_tpl->tpl_vars["stateExist"] = new Smarty_variable(false, null, 0);?>
		<?php $_smarty_tpl->tpl_vars["postCodeExist"] = new Smarty_variable(false, null, 0);?>
		<?php $_smarty_tpl->tpl_vars["dniExist"] = new Smarty_variable(false, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordered_adr_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value){
$_smarty_tpl->tpl_vars['field_name']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='dni'){?>
				<?php $_smarty_tpl->tpl_vars["dniExist"] = new Smarty_variable(true, null, 0);?>
				<div class="form-group text">
					<label class="control-label col-sm-4" for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
</label>
					<div class="col-sm-6">
						<input type="text" class="form-control text" name="dni" id="dni" value="<?php if (isset($_POST['dni'])){?><?php echo $_POST['dni'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->dni)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->dni, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" />
						<span class="form_info"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</span>
					</div>
				</div>
				<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='company'){?>
				<div class="text form-group">
					<label class="control-label col-sm-4" for="company"><?php echo smartyTranslate(array('s'=>'Company'),$_smarty_tpl);?>
</label>
					<div class="col-sm-6">
						<input class="form-control" type="text" id="company" name="company" value="<?php if (isset($_POST['company'])){?><?php echo $_POST['company'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->company)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->company, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" />
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='vat_number'){?>
				<div id="vat_area">
					<div id="vat_number">
						<div class="text form-group">
							<label class="control-label col-sm-4" for="vat_number"><?php echo smartyTranslate(array('s'=>'VAT number'),$_smarty_tpl);?>
</label>
							<div class="col-sm-6">
								<input type="text" class="form-control text" name="vat_number" value="<?php if (isset($_POST['vat_number'])){?><?php echo $_POST['vat_number'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->vat_number)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->vat_number, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" />
							</div>
						</div>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='firstname'){?>
				<div class="required text form-group">
					<label class="control-label col-sm-4" for="firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="firstname" id="firstname" value="<?php if (isset($_POST['firstname'])){?><?php echo $_POST['firstname'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->firstname)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" />
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='lastname'){?>
			<div class="required text form-group">
				<label class="control-label col-sm-4" for="lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
				<div class="col-sm-6">
					<input class="form-control" type="text" id="lastname" name="lastname" value="<?php if (isset($_POST['lastname'])){?><?php echo $_POST['lastname'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->lastname)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" />
				</div>	
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='address1'){?>
			<div class="required text form-group">
				<label class="control-label col-sm-4" for="address1"><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
 <sup>*</sup></label>
				<div class="col-sm-6">
					<input class="form-control" type="text" id="address1" name="address1" value="<?php if (isset($_POST['address1'])){?><?php echo $_POST['address1'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->address1)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->address1, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" />
				</div>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='address2'){?>
			<div class="required text form-group">
				<label class="control-label col-sm-4" for="address2"><?php echo smartyTranslate(array('s'=>'Address (Line 2)'),$_smarty_tpl);?>
</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" id="address2" name="address2" value="<?php if (isset($_POST['address2'])){?><?php echo $_POST['address2'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->address2)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->address2, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" />
				</div>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='city'){?>
			<div class="required text form-group">
				<label class="control-label col-sm-4" for="city"><?php echo smartyTranslate(array('s'=>'City'),$_smarty_tpl);?>
 <sup>*</sup></label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="city" id="city" value="<?php if (isset($_POST['city'])){?><?php echo $_POST['city'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->city)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->city, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" maxlength="64" />
				</div>	
			</div>
			<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='postcode'){?>
			<?php $_smarty_tpl->tpl_vars["postCodeExist"] = new Smarty_variable(true, null, 0);?>
			<div class="required postcode text form-group">
				<label class="control-label col-sm-4" for="postcode"><?php echo smartyTranslate(array('s'=>'Zip / Postal Code'),$_smarty_tpl);?>
 <sup>*</sup></label>
				<div class="col-sm-6">
					<input class="form-control" type="text" id="postcode" name="postcode" value="<?php if (isset($_POST['postcode'])){?><?php echo $_POST['postcode'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->postcode)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->postcode, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
				</div>
			</div>
			<?php }?>
			
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='Country:name'||$_smarty_tpl->tpl_vars['field_name']->value=='country'){?>
			<div class="required select form-group">
				<label class="control-label col-sm-4" for="id_country"><?php echo smartyTranslate(array('s'=>'Country'),$_smarty_tpl);?>
 <sup>*</sup></label>
				<div class="col-sm-6">
					<select class="form-control" id="id_country" name="id_country"><?php echo $_smarty_tpl->tpl_vars['countries_list']->value;?>
</select>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value){?>
			<script type="text/javascript">
			var ajaxurl = '<?php echo $_smarty_tpl->tpl_vars['ajaxurl']->value;?>
';
			
					$(document).ready(function(){
						$('#id_country').change(function() {
							$.ajax({
								type: "GET",
								url: ajaxurl+"vatnumber/ajax.php?id_country="+$('#id_country').val(),
								success: function(isApplicable){
									if(isApplicable == "1")
									{
										$('#vat_area').show();
										$('#vat_number').show();
									}
									else
									{
										$('#vat_area').hide();
									}
								}
							});
						});
					});
			
			</script>
			<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='State:name'){?>
		<?php $_smarty_tpl->tpl_vars["stateExist"] = new Smarty_variable(true, null, 0);?>
			<div class="required id_state select form-group">
				<label class="control-label col-sm-4" for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
				<div class="col-sm-6">
					<select name="id_state" id="id_state" class="form-control">
						<option value="">-</option>
					</select>
				</div>
			</div>
		<?php }?>
		<?php } ?>
		<?php if (!$_smarty_tpl->tpl_vars['postCodeExist']->value){?>
				<div class="control-group required postcode text hidden">
					<label class="control-label col-sm-4" for="postcode"><?php echo smartyTranslate(array('s'=>'Zip / Postal Code'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<div class="col-sm-6">
						<input class="form-control" type="text" id="postcode" name="postcode" value="<?php if (isset($_POST['postcode'])){?><?php echo $_POST['postcode'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->postcode)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->postcode, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
					</div>
				</div>
		<?php }?>		
		<?php if (!$_smarty_tpl->tpl_vars['stateExist']->value){?>
			<div class="required id_state select form-group">
				<label class="control-label col-sm-4" for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
				<div class="col-sm-6">
					<select name="id_state" id="id_state" class="form-control">
						<option value="">-</option>
					</select>
				</div>
			</div>
		<?php }?>
		<?php if (!$_smarty_tpl->tpl_vars['dniExist']->value){?>
		<div class="form-group required text dni">
			<label class="control-label col-sm-4" for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <sup>*</sup></label>
			<div class="col-sm-6">
				<input type="text" class="form-control text" name="dni" id="dni" value="<?php if (isset($_POST['dni'])){?><?php echo $_POST['dni'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->dni)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->dni, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" />
				<span class="form_info"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<?php }?>
			<div class="textarea form-group">
				<label class="control-label col-sm-4" for="other"><?php echo smartyTranslate(array('s'=>'Additional information'),$_smarty_tpl);?>
</label>
				<div class="col-sm-6">
					<textarea class="form-control" id="other" name="other" rows="3"><?php if (isset($_POST['other'])){?><?php echo $_POST['other'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->other)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->other, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?></textarea>
				</div>
			</div>
		<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value){?>
			<p class="inline-infos required"><label class="col-sm-offset-4 col-sm-6"><?php echo smartyTranslate(array('s'=>'You must register at least one phone number.'),$_smarty_tpl);?>
</label></p>
		<?php }?>
			<div class="text form-group">
				<label class="control-label col-sm-4" for="phone"><?php echo smartyTranslate(array('s'=>'Home phone'),$_smarty_tpl);?>
</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" id="phone" name="phone" value="<?php if (isset($_POST['phone'])){?><?php echo $_POST['phone'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->phone)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" />
				</div>
			</div>
			<div class="<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value){?>required <?php }?>text form-group">
			<label class="control-label col-sm-4" for="phone_mobile"><?php echo smartyTranslate(array('s'=>'Mobile phone'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value){?> <sup>*</sup><?php }?></label>
				<div class="col-sm-6">
					<input class="form-control" type="text" id="phone_mobile" name="phone_mobile" value="<?php if (isset($_POST['phone_mobile'])){?><?php echo $_POST['phone_mobile'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value->phone_mobile)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->phone_mobile, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" />
				</div>
			</div>
			<div class="required text form-group" id="adress_alias">
				<label class="control-label col-sm-4" for="alias"><?php echo smartyTranslate(array('s'=>'Název adresy'),$_smarty_tpl);?>
 <sup>*</sup></label>
				<div class="col-sm-6">
					<input class="form-control" type="text" id="alias" name="alias" value="<?php if (isset($_POST['alias'])){?><?php echo $_POST['alias'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['address']->value->alias)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->alias, ENT_QUOTES, 'UTF-8', true);?>
<?php }elseif(!$_smarty_tpl->tpl_vars['select_address']->value){?><?php echo smartyTranslate(array('s'=>'My address'),$_smarty_tpl);?>
<?php }?>" />
					<span class="form_info"><?php echo smartyTranslate(array('s'=>'Přiřaďte této adrese název pro budoucí použití'),$_smarty_tpl);?>
</span>
				</div>
			</div>

			<div  class="col-sm-6 col-lg-offset-4"> 
				<p class="submit2">
					<?php if (isset($_smarty_tpl->tpl_vars['id_address']->value)){?><input type="hidden" name="id_address" value="<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
" /><?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['back']->value)){?><input type="hidden" name="back" value="<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
" /><?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['mod']->value)){?><input type="hidden" name="mod" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" /><?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['select_address']->value)){?><input type="hidden" name="select_address" value="<?php echo intval($_smarty_tpl->tpl_vars['select_address']->value);?>
" /><?php }?>
					<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />		
					<input type="submit" name="submitAddress" id="submitAddress" value="<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
" class="button" />
				</p>
			</div>
		</div>
		</div>
	</div>
	
</form>

</div>
<?php }} ?>