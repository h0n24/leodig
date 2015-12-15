<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:39:45
         compiled from "/srv/www/helveti/themes/leodig/authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197965970154610671bf5061-34216858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44a809fcaa9e98e574e60f36f43c0b12bdfa242c' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/authentication.tpl',
      1 => 1411856533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197965970154610671bf5061-34216858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email_create' => 0,
    'link' => 0,
    'navigationPipe' => 0,
    'content_dir' => 0,
    'LEO_THEMENAME' => 0,
    'countries' => 0,
    'country' => 0,
    'state' => 0,
    'back' => 0,
    'inOrderProcess' => 0,
    'current_step' => 0,
    'authentification_error' => 0,
    'account_error' => 0,
    'v' => 0,
    'PS_GUEST_CHECKOUT_ENABLED' => 0,
    'one_phone_at_least' => 0,
    'dlv_all_fields' => 0,
    'field_name' => 0,
    'sl_country' => 0,
    'inv_all_fields' => 0,
    'postCodeExist' => 0,
    'stateExist' => 0,
    'dniExist' => 0,
    'newsletter' => 0,
    'HOOK_CREATE_ACCOUNT_FORM' => 0,
    'HOOK_CREATE_ACCOUNT_TOP' => 0,
    'genders' => 0,
    'gender' => 0,
    'days' => 0,
    'day' => 0,
    'sl_day' => 0,
    'months' => 0,
    'k' => 0,
    'sl_month' => 0,
    'month' => 0,
    'years' => 0,
    'year' => 0,
    'sl_year' => 0,
    'b2b_enable' => 0,
    'PS_REGISTRATION_PROCESS_TYPE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54610672ecf6e3_02044011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610672ecf6e3_02044011')) {function content_54610672ecf6e3_02044011($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/tools/smarty/plugins/modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
	<?php if (!isset($_smarty_tpl->tpl_vars['email_create']->value)){?><?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
<?php }else{ ?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
</a>
		<span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Create your account'),$_smarty_tpl);?>

	<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/js/kosik-formulare.js"></script>
<script type="text/javascript">
// <![CDATA[
var idSelectedCountry = <?php if (isset($_POST['id_state'])){?><?php echo intval($_POST['id_state']);?>
<?php }else{ ?>false<?php }?>;
var countries = new Array();
var countriesNeedIDNumber = new Array();
var countriesNeedZipCode = new Array();
<?php if (isset($_smarty_tpl->tpl_vars['countries']->value)){?>
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
].push({'id' : '<?php echo intval($_smarty_tpl->tpl_vars['state']->value['id_state']);?>
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
<?php }?>
//]]>

$(document).ready(function() {
	/*
	$('#company').on('input',function(){
		vat_number();
	});
	$('#company_invoice').on('input',function(){
		vat_number_invoice();
	});
	function vat_number()
	{
		if (($('#company').length) && ($('#company').val() != '')) 
			$('#vat_number').show();
		else
			$('#vat_number').hide();
	}
	function vat_number_invoice()
	{
		if (($('#company_invoice').length) && ($('#company_invoice').val() != '')) 
			$('#vat_number_block_invoice').show();
		else
			$('#vat_number_block_invoice').hide();
	}
	vat_number();
	vat_number_invoice();*/

	$('.id_state option[value=<?php if (isset($_POST['id_state'])){?><?php echo intval($_POST['id_state']);?>
<?php }?>]').prop('selected', true);

});

</script>


<?php if (!isset($_smarty_tpl->tpl_vars['back']->value)||$_smarty_tpl->tpl_vars['back']->value!='my-account'){?><?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('login', null, 0);?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<?php if (!(isset($_smarty_tpl->tpl_vars['inOrderProcess']->value)||isset($_smarty_tpl->tpl_vars['current_step']->value))){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["postCodeExist"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["dniExist"] = new Smarty_variable(false, null, 0);?>
<?php if (!isset($_smarty_tpl->tpl_vars['email_create']->value)){?>
	<script type="text/javascript">
	
	$(document).ready(function(){
		// Retrocompatibility with 1.4
		if (typeof baseUri === "undefined" && typeof baseDir !== "undefined")
		baseUri = baseDir;
		$('#create-account_form').submit(function(){
			submitFunction();
			return false;
		});
		$('#invoice_address').click(function() {
			bindCheckbox();
		});
		bindCheckbox();
	});
	function submitFunction()
	{
		$('#create_account_error').html('').hide();
		//send the ajax request to the server
		$.ajax({
			type: 'POST',
			url: baseUri,
			async: true,
			cache: false,
			dataType : "json",
			data: {
				controller: 'authentication',
				SubmitCreate: 1,
				ajax: true,
				email_create: $('#email_create').val(),
				back: $('input[name=back]').val(),
				token: token
			},
			success: function(jsonData)
			{
				if (jsonData.hasError)
				{
					var errors = '';
					for(error in jsonData.errors)
						//IE6 bug fix
						if(error != 'indexOf')
							errors += '<li>'+jsonData.errors[error]+'</li>';
					$('#create_account_error').html('<ol>'+errors+'</ol>').show();
				}
				else
				{
					// adding a div to display a transition
					$('#center_column').html('<div class="maincontainer"><div id="noSlide">'+$('#center_column').html()+'</div></div>');
					$('#noSlide').fadeOut('slow', function(){
						$('#noSlide').html(jsonData.page);
						// update the state (when this file is called from AJAX you still need to update the state)
						bindStateInputAndUpdate();
						$(this).fadeIn('slow', function(){
							document.location = '#account-creation';
						});
					});
				}
			},
			error: function(XMLHttpRequest, textStatus, errorThrown)
			{
				alert("TECHNICAL ERROR: unable to load form.\n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus);
			}
		});
	}
	function bindCheckbox()
	{
		if ($('#invoice_address:checked').length > 0)
		{
			$('#opc_invoice_address').slideDown('slow');
			/*if ($('#company_invoice').val() == '')
				$('#vat_number_block_invoice').hide();*/
			updateState('invoice');
			updateNeedIDNumber('invoice');
			updateZipCode('invoice');

			$('.id_state option[value=<?php if (isset($_POST['id_state'])){?><?php echo intval($_POST['id_state']);?>
<?php }?>]').prop('selected', true);
			$('.id_state_invoice option[value=<?php if (isset($_POST['id_state_invoice'])){?><?php echo intval($_POST['id_state_invoice']);?>
<?php }?>]').prop('selected', true);

		}
		else
			$('#opc_invoice_address').slideUp('slow');
	}
	
	</script>
	<!--<?php if (isset($_smarty_tpl->tpl_vars['authentification_error']->value)){?>
	<div class="error">
		<?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['authentification_error']->value);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?>
			<p><?php echo smartyTranslate(array('s'=>'There\'s at least one error'),$_smarty_tpl);?>
 :</p>
			<?php }else{ ?>
			<p><?php echo smartyTranslate(array('s'=>'There are %s errors','sprintf'=>array(count($_smarty_tpl->tpl_vars['account_error']->value))),$_smarty_tpl);?>
 :</p>
		<?php }?>
		<ol>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['authentification_error']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
			<?php } ?>
		</ol>
	</div>
	<?php }?>-->
	

		<?php if (isset($_smarty_tpl->tpl_vars['inOrderProcess']->value)||isset($_smarty_tpl->tpl_vars['current_step']->value)){?>
	<div class="kosik-container">
		<div><?php if ((isset($_smarty_tpl->tpl_vars['inOrderProcess']->value)||isset($_smarty_tpl->tpl_vars['current_step']->value))){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div>
			<h1><?php echo smartyTranslate(array('s'=>'Objednávka bez registrace:'),$_smarty_tpl);?>
</h1>
	<div id="prihlaseni_v_kosiku" class="prihlaseni_v_kosiku <?php if (isset($_smarty_tpl->tpl_vars['authentification_error']->value)){?>hidden<?php }?>" >
		<i class="fa fa-check"></i> Už jste u nás nakupovali? <a  href="" id="zobraz_login" class="zobraz_login">Přihlašte se</a>
	</div>
	<?php }?>
	<div class="authentication-page row kosik-container kosik-container-login  <?php if (isset($_smarty_tpl->tpl_vars['inOrderProcess']->value)||isset($_smarty_tpl->tpl_vars['current_step']->value)){?>kosik-container-vkosiku<?php }else{ ?>kosik-container-prihlaseni<?php }?>">
		<div class="registration_form_container">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="create-account_form" class="std form-horizontal">
				<div  id="registrace" class="panel panel-default <?php if (isset($_smarty_tpl->tpl_vars['inOrderProcess']->value)||isset($_smarty_tpl->tpl_vars['current_step']->value)){?>hidden<?php }?>">
				<div class="panel-body clearfix">
					<fieldset>
					<legend><?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>
</legend>
					
						<p class="title_block"><?php echo smartyTranslate(array('s'=>'Please enter your email address to create an account.'),$_smarty_tpl);?>
.</p>
						<div class="error" id="create_account_error" style="display:none"></div>
						<div class="form-group text">
							<label class="col-sm-3 control-label" for="email_create"><?php echo smartyTranslate(array('s'=>'Email address'),$_smarty_tpl);?>
</label>
							<div class="col-sm-4">
								<input type="text" id="email_create" name="email_create" value="<?php if (isset($_POST['email_create'])){?><?php echo stripslashes($_POST['email_create']);?>
<?php }?>" class="account_input form-control" />
							</div>	
						</div>
					
					</fieldset>

					<p class="submit">
							<?php if (isset($_smarty_tpl->tpl_vars['back']->value)){?><input type="hidden" class="hidden" name="back" value="<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
" /><?php }?>
							<input type="submit" id="SubmitCreate" name="SubmitCreate" class="button" value="<?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>
" />
							<input type="hidden" class="hidden" name="SubmitCreate" value="<?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>
" />
					</p>
					</div>
				</div>
			</form>
		</div>
		<div class="login_form_container">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="login_form" class="std form-horizontal clearfix">
				<div  id="prihlaseni" class="panel panel-default <?php if (isset($_smarty_tpl->tpl_vars['inOrderProcess']->value)){?>hidden<?php }?>">
					<div class="panel-body clearfix">
						<fieldset>
						<legend><?php echo smartyTranslate(array('s'=>'Přihlásit se'),$_smarty_tpl);?>
</legend>
						<div class="form-group text">
							<label class="col-sm-3 control-label" for="email"><?php echo smartyTranslate(array('s'=>'Email address'),$_smarty_tpl);?>
 <sup>*</sup></label>
							<div class="col-sm-4" id="email_div">
								<input type="text" id="email" name="email" value="<?php if (isset($_POST['email'])){?><?php echo stripslashes($_POST['email']);?>
<?php }?>" class="account_input form-control" />
							</div>
						</div>
						<div class="form-group text">
							<label class="col-sm-3 control-label" for="passwd"><?php echo smartyTranslate(array('s'=>'Password'),$_smarty_tpl);?>
 <sup>*</sup></label>
							<div class="col-sm-4"><input type="password" id="passwd" name="passwd" value="<?php if (isset($_POST['passwd'])){?><?php echo stripslashes($_POST['passwd']);?>
<?php }?>" class="account_input form-control" /></div>
						</div>
						<p class="lost_password"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('password'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Recover your forgotten password'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Forgot your password?'),$_smarty_tpl);?>
</a></p>
						</fieldset>
						<p class="submitlogin">
							<?php if (isset($_smarty_tpl->tpl_vars['inOrderProcess']->value)||isset($_smarty_tpl->tpl_vars['current_step']->value)){?>
							<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['back']->value, 'htmlall', 'UTF-8');?>
" class="zpet_na_registraci<?php if (isset($_smarty_tpl->tpl_vars['authentification_error']->value)){?>_off<?php }?>"><i class="fa fa-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Zpět na objednávku bez registrace'),$_smarty_tpl);?>
</a>
							<?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['back']->value)){?><input type="hidden" class="hidden" name="back" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['back']->value, 'htmlall', 'UTF-8');?>
" /><?php }?>
							<input type="submit" id="SubmitLogin" name="SubmitLogin" class="button" value="<?php echo smartyTranslate(array('s'=>'Přihlásit se'),$_smarty_tpl);?>
" />
						</p>
					</div>
					
				</div>
			</form>
		</div>
	</div>
	<?php if (isset($_smarty_tpl->tpl_vars['inOrderProcess']->value)&&$_smarty_tpl->tpl_vars['inOrderProcess']->value&&$_smarty_tpl->tpl_vars['PS_GUEST_CHECKOUT_ENABLED']->value){?>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true,null,"back=".((string)$_smarty_tpl->tpl_vars['back']->value)), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="new_account_form" class="std form-horizontal clearfix">
		<div  id="bez_registrace"  class="panel panel-default">
			<div id="opc_account_form" style="display: block; ">
				<!-- Account -->
				<fieldset>
				<legend>Osobní údaje</legend>
				<div class="form-group required text">
					<label class="control-label col-sm-2" for="guest_email"><?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<div class="col-sm-4" id="guest_email_div">
						<input type="text" class="form-control text" id="guest_email" name="guest_email" value="<?php if (isset($_POST['guest_email'])){?><?php echo $_POST['guest_email'];?>
<?php }?>" />
						</div>
						
					</div>
	
				<div class="form-group <?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value){?>required <?php }?>text">
					<label class="control-label col-sm-2" for="phone_mobile"><?php echo smartyTranslate(array('s'=>'Telefon'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value){?> <sup>*</sup><?php }?></label>
					<div class="col-sm-4">
						<input type="text" class="form-control text" name="phone_mobile" id="phone_mobile" value="<?php if (isset($_POST['phone_mobile'])){?><?php echo $_POST['phone_mobile'];?>
<?php }?>" />
					</div>
					<div class="icko_formular"><span class="ikonka_i">i</i></span>Slouží jen pro dopravce</div>
				</div>
				</fieldset>
			
				<fieldset>
				<legend>Fakturační adresa</legend>
				<div class="form-group required text">
					<label class="control-label col-sm-2" for="firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<div class="col-sm-4">
						<input type="text" class="form-control text" id="firstname" name="firstname" onblur="$('#customer_firstname').val($(this).val());" value="<?php if (isset($_POST['firstname'])){?><?php echo $_POST['firstname'];?>
<?php }?>" />
						<input type="hidden" class="text" id="customer_firstname" name="customer_firstname" value="<?php if (isset($_POST['firstname'])){?><?php echo $_POST['firstname'];?>
<?php }?>" />
					</div>
				</div>
				<div class="form-group required text">
					<label class="control-label col-sm-2" for="lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<div class="col-sm-4">
						<input type="text" class="form-control text" id="lastname" name="lastname" onblur="$('#customer_lastname').val($(this).val());" value="<?php if (isset($_POST['lastname'])){?><?php echo $_POST['lastname'];?>
<?php }?>" />
						<input type="hidden" class="text" id="customer_lastname" name="customer_lastname" value="<?php if (isset($_POST['lastname'])){?><?php echo $_POST['lastname'];?>
<?php }?>" />
					</div>
				</div>
				<?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dlv_all_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value){
$_smarty_tpl->tpl_vars['field_name']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['field_name']->value=="company"){?>
					<div class="form-group text nakup_na_firmu">
						<label class="control-label col-sm-2">&nbsp;</label>
							<div class="col-sm-4">
								<label for="nakup_na_firmu">
						<input type="checkbox" name="nakup_na_firmu" id="nakup_na_firmu"<?php if (isset($_POST['company'])){?> checked="checked"<?php }?> autocomplete="off"/>
								<?php echo smartyTranslate(array('s'=>'Nakupuji na firmu'),$_smarty_tpl);?>
</label>
							</div>
						</div>
					
					<div id="firemni_udaje" style="display:none;">
						<div class="form-group text">
							<label class="control-label col-sm-2" for="company"><?php echo smartyTranslate(array('s'=>'Firma'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control text" id="company" name="company" value="<?php if (isset($_POST['company'])){?><?php echo $_POST['company'];?>
<?php }?>" />
							</div>
						</div>
						<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="dni"){?>
						<?php $_smarty_tpl->tpl_vars['dniExist'] = new Smarty_variable(true, null, 0);?>
						<div class="form-group text">
							<label class="col-sm-2 control-label" for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
							<div class="col-sm-4">
								<input type="text" class="text form-control" name="dni" id="dni" value="<?php if (isset($_POST['dni'])){?><?php echo $_POST['dni'];?>
<?php }?>" />
								
							</div>
						</div>
						<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="vat_number"){?>
						<div id="vat_number" >
							<div class="form-group text">
								<label class="col-sm-2 control-label" for="vat_number"><?php echo smartyTranslate(array('s'=>'VAT number'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control text" name="vat_number" value="<?php if (isset($_POST['vat_number'])){?><?php echo $_POST['vat_number'];?>
<?php }?>" />
								</div>
							</div>
						</div>
						</div>
						<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="address1"){?>
						<div class="form-group required text">
							<label class="col-sm-2 control-label" for="address1"><?php echo smartyTranslate(array('s'=>'Ulice a čp'),$_smarty_tpl);?>
 <sup>*</sup></label>
							<div class="col-sm-4">
								<input type="text" class="form-control text" name="address1" id="address1" value="<?php if (isset($_POST['address1'])){?><?php echo $_POST['address1'];?>
<?php }?>" />
							</div>
						</div>
						<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="city"){?>
						<div class="form-group required text">
							<label class="col-sm-2 control-label" for="city"><?php echo smartyTranslate(array('s'=>'Město'),$_smarty_tpl);?>
 <sup>*</sup></label>
							<div class="col-sm-4">
								<input type="text" class="form-control text" name="city" id="city" value="<?php if (isset($_POST['city'])){?><?php echo $_POST['city'];?>
<?php }?>" />
							</div>
						</div>
						<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="postcode"){?>
						<?php $_smarty_tpl->tpl_vars['postCodeExist'] = new Smarty_variable(true, null, 0);?>
						<div class="form-group required postcode text">
							<label class="col-sm-2 control-label" for="postcode"><?php echo smartyTranslate(array('s'=>'Zip / Postal Code'),$_smarty_tpl);?>
 <sup>*</sup></label>
							<div class="col-sm-3">
								<input type="text" class="form-control text" name="postcode" id="postcode" value="<?php if (isset($_POST['postcode'])){?><?php echo $_POST['postcode'];?>
<?php }?>" onblur="$('#postcode').val($('#postcode').val().toUpperCase());" />
							</div>
						</div>
						
						<!--
							   if customer hasn't update his layout address, country has to be verified
							   but it's deprecated
						   -->
						<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="Country:name"||$_smarty_tpl->tpl_vars['field_name']->value=="country"){?>
						<div class="form-group required select">
							<label class="col-sm-2 control-label" for="id_country"><?php echo smartyTranslate(array('s'=>'Country'),$_smarty_tpl);?>
 <sup>*</sup></label>
							<div class="col-sm-4">
								<select name="id_country" id="id_country" class="form-control">
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
"<?php if ((isset($_POST['id_country'])&&$_POST['id_country']==$_smarty_tpl->tpl_vars['v']->value['id_country'])||(!isset($_POST['id_country'])&&$_smarty_tpl->tpl_vars['sl_country']->value==$_smarty_tpl->tpl_vars['v']->value['id_country'])){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
									<?php } ?>
								</select>
							</div>
						</div>
						<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="State:name"){?>
						<?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(true, null, 0);?>
						<div class="form-group required id_state select">
							<label class="col-sm-2 control-label" for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
							<div class="col-sm-4">
								<select name="id_state" id="id_state" class="form-control">
									<option value="">-</option>
								</select>
							</div>
						</div>
					
					<?php }?>
				<?php } ?>
			
				</fieldset>
							</div>
				<div class="form-group">
					<div class="col-sm-8">
						<div class="checkbox">
							<label for="invoice_address">
								<input type="checkbox" name="invoice_address" id="invoice_address"<?php if (isset($_POST['invoice_address'])&&$_POST['invoice_address']){?> checked="checked"<?php }?> autocomplete="off"/>
								<?php echo smartyTranslate(array('s'=>'Doručit na jinou adresu'),$_smarty_tpl);?>
</label>
						</div>
					</div>
				</div>
				
			
			<div id="opc_invoice_address" class="hidden">
			<fieldset>
			<legend>Doručit na jinou adresu</legend>
					<?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(false, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['postCodeExist'] = new Smarty_variable(false, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['dniExist'] = new Smarty_variable(false, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inv_all_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value){
$_smarty_tpl->tpl_vars['field_name']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['field_name']->value=="company"){?>
					<div class="form-group text">
						<label class="control-label col-sm-2" for="company_invoice"><?php echo smartyTranslate(array('s'=>'Firma'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
						<div class="col-sm-4">
							<input type="text" class="form-control text" id="company_invoice" name="company_invoice" value="<?php if (isset($_POST['company_invoice'])){?><?php echo $_POST['company_invoice'];?>
<?php }?>" />
						</div>
					</div>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="vat_number"){?>
					<div id="vat_number_block_invoice" >
						<div class="form-group text">
							<label class="control-label col-sm-2" for="vat_number_invoice"><?php echo smartyTranslate(array('s'=>'VAT number'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control text" id="vat_number_invoice" name="vat_number_invoice" value="<?php if (isset($_POST['vat_number_invoice'])){?><?php echo $_POST['vat_number_invoice'];?>
<?php }?>" />
							</div>
						</div>
					</div>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="dni"){?>
					<?php $_smarty_tpl->tpl_vars['dniExist'] = new Smarty_variable(true, null, 0);?>
					<div class="form-group text">
						<label class="control-label col-sm-2" for="dni_invoice"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
						<div class="col-sm-4">
							<input type="text" class="form-control text" name="dni_invoice" id="dni_invoice" value="<?php if (isset($_POST['dni_invoice'])){?><?php echo $_POST['dni_invoice'];?>
<?php }?>" />
							
						</div>
					</div>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="firstname"){?>
					<div class="form-group required text">
						<label class="control-label col-sm-2" for="firstname_invoice"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-4">
							<input type="text" class="form-control text" id="firstname_invoice" name="firstname_invoice" value="<?php if (isset($_POST['firstname_invoice'])){?><?php echo $_POST['firstname_invoice'];?>
<?php }?>" />
						</div>
					</div>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="lastname"){?>
					<div class="form-group required text">
						<label class="control-label col-sm-2" for="lastname_invoice"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-4">
							<input type="text" class="form-control text" id="lastname_invoice" name="lastname_invoice" value="<?php if (isset($_POST['firstname_invoice'])){?><?php echo $_POST['firstname_invoice'];?>
<?php }?>" />
						</div>
					</div>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="address1"){?>
					<div class="form-group required text">
						<label class="control-label col-sm-2" for="address1_invoice"><?php echo smartyTranslate(array('s'=>'Ulice a čp'),$_smarty_tpl);?>
  <sup>*</sup></label>
						<div class="col-sm-4">
							<input type="text" class="form-control text" name="address1_invoice" id="address1_invoice" value="<?php if (isset($_POST['address1_invoice'])){?><?php echo $_POST['address1_invoice'];?>
<?php }?>" />
						</div>
					</div>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="city"){?>
					<div class="form-group required text">
						<label class="control-label col-sm-2" for="city_invoice"><?php echo smartyTranslate(array('s'=>'Město'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-4">
							<input type="text" class="form-control text" name="city_invoice" id="city_invoice" value="<?php if (isset($_POST['city_invoice'])){?><?php echo $_POST['city_invoice'];?>
<?php }?>" />
						</div>
					</div>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="postcode"){?>
					<?php $_smarty_tpl->tpl_vars['postCodeExist'] = new Smarty_variable(true, null, 0);?>
					<div class="form-group required postcode_invoice text">
						<label class="control-label col-sm-2" for="postcode_invoice"><?php echo smartyTranslate(array('s'=>'Zip / Postal Code'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-3">
							<input type="text" class="form-control text" name="postcode_invoice" id="postcode_invoice" value="<?php if (isset($_POST['postcode_invoice'])){?><?php echo $_POST['postcode_invoice'];?>
<?php }?>" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
						</div>
					</div>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="country"||$_smarty_tpl->tpl_vars['field_name']->value=="Country:name"){?>
					<div class="form-group required select">
						<label class="control-label col-sm-2" for="id_country_invoice"><?php echo smartyTranslate(array('s'=>'Country'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-4">
							<select name="id_country_invoice" id="id_country_invoice" class="form-control">
								<option value="">-</option>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
"<?php if ((isset($_POST['id_country_invoice'])&&$_POST['id_country_invoice']==$_smarty_tpl->tpl_vars['v']->value['id_country'])||(!isset($_POST['id_country_invoice'])&&$_smarty_tpl->tpl_vars['sl_country']->value==$_smarty_tpl->tpl_vars['v']->value['id_country'])){?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['v']->value['name'], 'htmlall', 'UTF-8');?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="state"||$_smarty_tpl->tpl_vars['field_name']->value=='State:name'){?>
					<?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(true, null, 0);?>
					<div class="form-group required id_state_invoice select" style="display:none;">
						<label class="control-label col-sm-2" for="id_state_invoice"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-4">
							<select name="id_state_invoice" id="id_state_invoice" class="form-control">
								<option value="">-</option>
							</select>
						</div>
					</div>
					<?php }?>
					<?php } ?>
					<?php if (!$_smarty_tpl->tpl_vars['postCodeExist']->value){?>
					<div class="form-group required postcode_invoice text hidden">
						<label class="control-label col-sm-2" for="postcode_invoice"><?php echo smartyTranslate(array('s'=>'Zip / Postal Code'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-3">
							<input type="text" class="form-control text" name="postcode_invoice" id="postcode_invoice" value="<?php if (isset($_POST['postcode_invoice'])){?><?php echo $_POST['postcode_invoice'];?>
<?php }?>" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
						</div>
					</div>
					<?php }?>					
					<?php if (!$_smarty_tpl->tpl_vars['stateExist']->value){?>
					<div class="form-group required id_state_invoice select hidden">
						<label class="control-label col-sm-2" for="id_state_invoice"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-4">
							<select name="id_state_invoice" id="id_state_invoice" class="form-control">
								<option value="">-</option>
							</select>
						</div>
					</div>
					<?php }?>
					<?php if (!$_smarty_tpl->tpl_vars['dniExist']->value){?>
					<div class="form-group required text dni_invoice">
						<label class="control-label col-sm-2" for="dni_invoice"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-4">
							<input type="text" class="form-control text" name="dni_invoice" id="dni_invoice" value="<?php if (isset($_POST['dni_invoice'])){?><?php echo $_POST['dni_invoice'];?>
<?php }?>" />
							
						</div>
					</div>
					<?php }?>
					
					<input type="hidden" name="alias_invoice" id="alias_invoice" value="<?php echo smartyTranslate(array('s'=>'My Invoice address'),$_smarty_tpl);?>
" />
				</div>
					<?php if (isset($_smarty_tpl->tpl_vars['newsletter']->value)&&$_smarty_tpl->tpl_vars['newsletter']->value){?>
					<div class="form-group">
						<div class="col-sm-8">
							<div class="checkbox">
								<label for="newsletter">
								<input type="checkbox" name="newsletter" id="newsletter" value="1" <?php if (!isset($_POST['newsletter'])||$_POST['newsletter']=='1'){?>checked="checked"<?php }?> autocomplete="off" />
								<?php echo smartyTranslate(array('s'=>'Sign up for our newsletter!'),$_smarty_tpl);?>
</label>
							</div>
						</div>
					</div>
					
				<?php }?>
				</div>
							
			</fieldset>

				
				<?php if ($_smarty_tpl->tpl_vars['postCodeExist']->value==false){?>
					<div class="required postcode form-group text hidden">
						<label class="col-sm-2 control-label" for="postcode"><?php echo smartyTranslate(array('s'=>'Zip / Postal Code'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-3">
							<input type="text" class="text" name="postcode" id="postcode" value="<?php if (isset($_POST['postcode'])){?><?php echo $_POST['postcode'];?>
<?php }?>" onblur="$('#postcode').val($('#postcode').val().toUpperCase());" />
						</div>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['stateExist']->value==false){?>
					<div class="form-group required id_state select hidden">
						<label class="control-label col-sm-2" for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-4">
							<select name="id_state" id="id_state" class="form-control">
								<option value="">-</option>
							</select>
						</div>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['dniExist']->value==false){?>
				<div class="form-group required text dni">
					<label class="control-label col-sm-2" for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<div class="col-sm-4">
						<input type="text" class="form-control text" name="dni" id="dni" value="<?php if (isset($_POST['dni'])){?><?php echo $_POST['dni'];?>
<?php }?>" />
						
					</div>
				</div>
				<?php }?>
				<input type="hidden" name="alias" id="alias" value="<?php echo smartyTranslate(array('s'=>'My address'),$_smarty_tpl);?>
" />
				<input type="hidden" name="is_new_customer" id="is_new_customer" value="0" />
			</div>
				<p class="cart_navigation required submit">
					<input type="hidden" name="display_guest_checkout" value="1" />
					<input type="submit" class="button pull-right standard-checkout" name="submitGuestAccount" id="submitGuestAccount" value="<?php echo smartyTranslate(array('s'=>'Pokračovat v objednávce'),$_smarty_tpl);?>
" />

					<a href="<?php if ((isset($_SERVER['HTTP_REFERER'])&&strstr($_SERVER['HTTP_REFERER'],'order.php'))||isset($_SERVER['HTTP_REFERER'])&&strstr($_SERVER['HTTP_REFERER'],'order-opc')||!isset($_SERVER['HTTP_REFERER'])){?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['secureReferrer'][0][0]->secureReferrer(smarty_modifier_escape($_SERVER['HTTP_REFERER'], 'htmlall', 'UTF-8'));?>
<?php }?>" class="zpet-do-obchodu" title="<?php echo smartyTranslate(array('s'=>'Zpět do obchodu'),$_smarty_tpl);?>
"><i class="fa fa-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Zpět do obchodu'),$_smarty_tpl);?>
</a>
				</p>

			</div>
		</div>
		
		<?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_FORM']->value;?>

		
	</form>
	<?php }?>
<?php }else{ ?>
	<!--<?php if (isset($_smarty_tpl->tpl_vars['account_error']->value)){?>
	<div class="error">
		<?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['account_error']->value);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==1){?>
			<p><?php echo smartyTranslate(array('s'=>'There\'s at least one error'),$_smarty_tpl);?>
 :</p>
			<?php }else{ ?>
			<p><?php echo smartyTranslate(array('s'=>'There are %s errors','sprintf'=>array(count($_smarty_tpl->tpl_vars['account_error']->value))),$_smarty_tpl);?>
 :</p>
		<?php }?>
		<ol>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['account_error']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
			<?php } ?>
		</ol>
	</div>
	<?php }?>-->
<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="account-creation_form" class=" std form-horizontal clearfix kosik-container ">
	<?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_TOP']->value;?>

	<div class="account_creation panel panel-default">
		<h3 class="panel-heading"><?php echo smartyTranslate(array('s'=>'Your personal information'),$_smarty_tpl);?>
</h3>
		<div class="panel-body">
			<div class="required form-group">
				<label class="control-label col-sm-2"><?php echo smartyTranslate(array('s'=>'Title'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
				<div class="col-sm-4">
					<?php  $_smarty_tpl->tpl_vars['gender'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gender']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['genders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gender']->key => $_smarty_tpl->tpl_vars['gender']->value){
$_smarty_tpl->tpl_vars['gender']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['gender']->key;
?>
						<label for="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" class="top radio-inline">
						<input type="radio" name="id_gender" id="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" <?php if (isset($_POST['id_gender'])&&$_POST['id_gender']==$_smarty_tpl->tpl_vars['gender']->value->id){?>checked="checked"<?php }?> />
						<?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>
</label>
					<?php } ?>
				</div>
			</div>
			<div class="required text form-group">
				<label class="control-label col-sm-2" for="customer_firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
				<div class="col-sm-4">
					<input class="form-control" onkeyup="$('#firstname').val(this.value);" type="text" class="text" id="customer_firstname" name="customer_firstname" value="<?php if (isset($_POST['customer_firstname'])){?><?php echo $_POST['customer_firstname'];?>
<?php }?>" />
				</div>
			</div>
			<div class="required text form-group">
				<label class="control-label col-sm-2" for="customer_lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
				<div class="col-sm-4">
					<input onkeyup="$('#lastname').val(this.value);" type="text" class="text form-control" id="customer_lastname" name="customer_lastname" value="<?php if (isset($_POST['customer_lastname'])){?><?php echo $_POST['customer_lastname'];?>
<?php }?>" />
				</div>
			</div>
			<div class="required text form-group">
				<label class="control-label col-sm-2" for="email"><?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>
 <sup>*</sup></label>
				<div class="col-sm-4" id="email_div">
					<input type="text" class="text form-control" id="email" name="email" value="<?php if (isset($_POST['email'])){?><?php echo $_POST['email'];?>
<?php }?>" />
				</div>
			</div>
			<div class="required password form-group">
				<label class="control-label col-sm-2" for="passwd"><?php echo smartyTranslate(array('s'=>'Password'),$_smarty_tpl);?>
 <sup>*</sup></label>
				<div class="col-sm-4">
					<input class="form-control" type="password" class="text" name="passwd" id="passwd" />
					<span class="form_info help-block"><?php echo smartyTranslate(array('s'=>'(Five characters minimum)'),$_smarty_tpl);?>
</span>
				</div>
			</div>
			<div  class="select form-group">
				<label class="control-label col-sm-2"><?php echo smartyTranslate(array('s'=>'Date of Birth'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-3 col-xs-3">
							<select id="days" name="days" class=" form-control">
								<option value="">-</option>
								<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_day']->value==$_smarty_tpl->tpl_vars['day']->value)){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
&nbsp;&nbsp;</option>
								<?php } ?>
							</select>
							
						</div>
						<div class="col-sm-4 col-xs-6">
							<select id="months" name="months" class="form-control">
								<option value="">-</option>
								<?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value){
$_smarty_tpl->tpl_vars['month']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['month']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_month']->value==$_smarty_tpl->tpl_vars['k']->value)){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['month']->value),$_smarty_tpl);?>
&nbsp;</option>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-3 col-xs-3">
							<select id="years" name="years" class="form-control">
								<option value="">-</option>
								<?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value){
$_smarty_tpl->tpl_vars['year']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_year']->value==$_smarty_tpl->tpl_vars['year']->value)){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
&nbsp;&nbsp;</option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['newsletter']->value){?>
			<div class="form-group">
				<div class="col-sm-8">
					<div class="checkbox">
						<label for="newsletter">
							<input type="checkbox" name="newsletter" id="newsletter" value="1" <?php if (!isset($_POST['newsletter'])||$_POST['newsletter']=='1'){?>checked="checked"<?php }?> autocomplete="off"/>
						<?php echo smartyTranslate(array('s'=>'Sign up for our newsletter!'),$_smarty_tpl);?>
</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-8">
					<div class="checkbox">
						<label for="optin">
							<input type="checkbox"name="optin" id="optin" value="1" <?php if (isset($_POST['optin'])&&$_POST['optin']==1){?> checked="checked"<?php }?> autocomplete="off"/>
								<?php echo smartyTranslate(array('s'=>'Receive special offers from our partners!'),$_smarty_tpl);?>

						</label>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['b2b_enable']->value){?>
	<div class="panel panel-default account_creation">
		<h3 class="panel-heading"><?php echo smartyTranslate(array('s'=>'Your company information'),$_smarty_tpl);?>
</h3>
		<div class="panel-body">
			<div class="form-group text">
				<label class="col-sm-2 control-label" for=""><?php echo smartyTranslate(array('s'=>'Company'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
				<div class="col-sm-4">
					<input type="text" class="form-control text" id="company" name="company" value="<?php if (isset($_POST['company'])){?><?php echo $_POST['company'];?>
<?php }?>" />
				</div>
			</div>
			<div class="form-group text">
				<label class="col-sm-2 control-label" for="siret"><?php echo smartyTranslate(array('s'=>'SIRET'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
				<div class="col-sm-4">
					<input type="text" class="form-control text" id="siret" name="siret" value="<?php if (isset($_POST['siret'])){?><?php echo $_POST['siret'];?>
<?php }?>" />
				</div>
			</div>
			<div class="form-group text">
				<label class="col-sm-2 control-label" for="ape"><?php echo smartyTranslate(array('s'=>'APE'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
				<div class="col-sm-4">
					<input type="text" class="form-control text" id="ape" name="ape" value="<?php if (isset($_POST['ape'])){?><?php echo $_POST['ape'];?>
<?php }?>" />
				</div>
			</div>
			<div class="form-group text">
				<label class="col-sm-2 control-label" for="website"><?php echo smartyTranslate(array('s'=>'Website'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
				<div class="col-sm-4">
					<input type="text" class="form-control text" id="website" name="website" value="<?php if (isset($_POST['website'])){?><?php echo $_POST['website'];?>
<?php }?>" />
				</div>
			</div>
		</div>
	</div>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['PS_REGISTRATION_PROCESS_TYPE']->value)&&$_smarty_tpl->tpl_vars['PS_REGISTRATION_PROCESS_TYPE']->value){?>
	<div class="panel panel-default account_creation">
		<h3 class="panel-heading"><?php echo smartyTranslate(array('s'=>'Your address'),$_smarty_tpl);?>
</h3>
		<div class="panel-body">
			<?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dlv_all_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value){
$_smarty_tpl->tpl_vars['field_name']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['field_name']->value=="company"){?>
					<?php if (!$_smarty_tpl->tpl_vars['b2b_enable']->value){?>
						<div class="form-group text">
							<label class="col-sm-4 control-label" for="company"><?php echo smartyTranslate(array('s'=>'Company'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control text" id="company" name="company" value="<?php if (isset($_POST['company'])){?><?php echo $_POST['company'];?>
<?php }?>" />
							</div>
						</div>
					<?php }?>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="vat_number"){?>
					<div id="vat_number" >
						<div class="form-group text">
							<label class="col-sm-2 control-label" for="vat_number"><?php echo smartyTranslate(array('s'=>'VAT number'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control text" name="vat_number" value="<?php if (isset($_POST['vat_number'])){?><?php echo $_POST['vat_number'];?>
<?php }?>" />
							</div>
						</div>
					</div>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="firstname"){?>
					<div class="form-group quired text">
						<label class="col-sm-2 control-label" for="firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-4">
							<input type="text" class="form-control text" id="firstname" name="firstname" value="<?php if (isset($_POST['firstname'])){?><?php echo $_POST['firstname'];?>
<?php }?>" />
						</div>
					</div>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="lastname"){?>
					<div class="form-group required text">
						<label class="col-sm-2 control-label" for="lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-4">
							<input type="text" class="form-control text" id="lastname" name="lastname" value="<?php if (isset($_POST['lastname'])){?><?php echo $_POST['lastname'];?>
<?php }?>" />
						</div>
					</div>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="address1"){?>
					<div class="form-group required text">
						<label class="col-sm-2 control-label" for="address1"><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-4">
							<input type="text" class="form-control text" name="address1" id="address1" value="<?php if (isset($_POST['address1'])){?><?php echo $_POST['address1'];?>
<?php }?>" />
							<span class="help-block inline-infos"><?php echo smartyTranslate(array('s'=>'Street address, P.O. Box, Company name, etc.'),$_smarty_tpl);?>
</span>
						</div>
					</div>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="address2"){?>
					<div class="form-group text">
						<label class="col-sm-2 control-label" for="address2"><?php echo smartyTranslate(array('s'=>'Address (Line 2)'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
						<div class="col-sm-4">
							<input type="text" class="form-control text" name="address2" id="address2" value="<?php if (isset($_POST['address2'])){?><?php echo $_POST['address2'];?>
<?php }?>" />
							<span class="help-block inline-infos"><?php echo smartyTranslate(array('s'=>'Apartment, suite, unit, building, floor, etc...'),$_smarty_tpl);?>
</span>
						</div>
					</div>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="city"){?>
					<div class="form-group required text">
						<label class="col-sm-2 control-label" for="city"><?php echo smartyTranslate(array('s'=>'City'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-4">
							<input type="text" class="form-control text" name="city" id="city" value="<?php if (isset($_POST['city'])){?><?php echo $_POST['city'];?>
<?php }?>" />
						</div>
					</div>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="postcode"){?>
				<?php $_smarty_tpl->tpl_vars['postCodeExist'] = new Smarty_variable(true, null, 0);?>
					<div class="form-group required postcode text">
						<label class="col-sm-2 control-label" for="postcode"><?php echo smartyTranslate(array('s'=>'Zip / Postal Code'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-3">
							<input type="text" class="form-control text" name="postcode" id="postcode" value="<?php if (isset($_POST['postcode'])){?><?php echo $_POST['postcode'];?>
<?php }?>" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
						</div>
					</div>
					<!--
						if customer hasn't update his layout address, country has to be verified
						but it's deprecated
					-->
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="Country:name"||$_smarty_tpl->tpl_vars['field_name']->value=="country"){?>
					<div class="form-group required select">
						<label class="col-sm-2 control-label" for="id_country"><?php echo smartyTranslate(array('s'=>'Country'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-4">
							<select name="id_country" id="id_country" class="form-control">
								<option value="">-</option>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
"<?php if ((isset($_POST['id_country'])&&$_POST['id_country']==$_smarty_tpl->tpl_vars['v']->value['id_country'])||(!isset($_POST['id_country'])&&$_smarty_tpl->tpl_vars['sl_country']->value==$_smarty_tpl->tpl_vars['v']->value['id_country'])){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="State:name"||$_smarty_tpl->tpl_vars['field_name']->value=='state'){?>
					<?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(true, null, 0);?>
					<div class="form-group required id_state select">
						<label class="col-sm-2 control-label" for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-sm-4">
							<select name="id_state" id="id_state" class="form-control">
								<option value="">-</option>
							</select>
						</div>
					</div>
				<?php }?>
			<?php } ?>
			<?php if ($_smarty_tpl->tpl_vars['postCodeExist']->value==false){?>
				<div class="form-group required postcode text hidden">
					<label class="col-sm-2 control-label" for="postcode"><?php echo smartyTranslate(array('s'=>'Zip / Postal Code'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<div class="col-sm-3">
						<input type="text" class="form-control text" name="postcode" id="postcode" value="<?php if (isset($_POST['postcode'])){?><?php echo $_POST['postcode'];?>
<?php }?>" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
					</div>
				</div>
			<?php }?>		
			<?php if ($_smarty_tpl->tpl_vars['stateExist']->value==false){?>
				<div class="form-group required id_state select hidden">
					<label class="col-sm-2 control-label" for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<div class="col-sm-4">
						<select name="id_state" id="id_state" class="form-control">
							<option value="">-</option>
						</select>
					</div>
				</div>
			<?php }?>
			<div class="form-group textarea">
				<label class="col-sm-2 control-label" for="other"><?php echo smartyTranslate(array('s'=>'Additional information'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
				<div class="col-sm-4">
					<textarea class="form-control" name="other" id="other" rows="3"><?php if (isset($_POST['other'])){?><?php echo $_POST['other'];?>
<?php }?></textarea>
				</div>
			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value){?>
				<p class="inline-infos required "><label class="col-sm-4"><?php echo smartyTranslate(array('s'=>'You must register at least one phone number.'),$_smarty_tpl);?>
</label></p>
			<?php }?>
			<div class="form-group text">
				<label class="col-sm-2 control-label" for="phone"><?php echo smartyTranslate(array('s'=>'Home phone'),$_smarty_tpl);?>
 <span class="misto-hvezdicka"></span></label>
				<div class="col-sm-4">
					<input type="text" class="form-control text" name="phone" id="phone" value="<?php if (isset($_POST['phone'])){?><?php echo $_POST['phone'];?>
<?php }?>" />
				</div>
			</div>
			<div class="form-group <?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value){?>required <?php }?> text">
				<label class="col-sm-2 control-label" for="phone_mobile"><?php echo smartyTranslate(array('s'=>'Mobile phone'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value){?> <sup>*</sup><?php }else{ ?><span class="misto-hvezdicka"></span><?php }?></label>
				<div class="col-sm-4">
					<input type="text" class="form-control text" name="phone_mobile" id="phone_mobile" value="<?php if (isset($_POST['phone_mobile'])){?><?php echo $_POST['phone_mobile'];?>
<?php }?>" />
				</div>
			</div>
			<div class="form-group required text" id="address_alias">
				<label class="col-sm-2 control-label" for="alias"><?php echo smartyTranslate(array('s'=>'Assign an address alias for future reference.'),$_smarty_tpl);?>
 <sup>*</sup></label>
				<div class="col-sm-4">
					<input type="text" class="form-control text" name="alias" id="alias" value="<?php if (isset($_POST['alias'])){?><?php echo $_POST['alias'];?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'My address'),$_smarty_tpl);?>
<?php }?>" />
				</div> <!-- prvni -->
			</div> <!-- druha -->
		</div> <!-- treti -->
	</div> <!-- ctvrta -->
	<div class="account_creation panel panel-heading dni">
		<h3 class="panel-heading"><?php echo smartyTranslate(array('s'=>'Tax identification'),$_smarty_tpl);?>
</h3>
		<div class="panel-body">
			<div class="form-group required text">
				<label class="control-label col-sm-2" for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <sup>*</sup></label>
				<div class="col-sm-4">
					<input type="text" class="form-control text" name="dni" id="dni" value="<?php if (isset($_POST['dni'])){?><?php echo $_POST['dni'];?>
<?php }?>" />
					
				</div> 
			</div>
		</div>
	</div>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_FORM']->value;?>

	<div class="form-group cart_navigation required submit">
		<input type="hidden" name="email_create" value="1" />
		<input type="hidden" name="is_new_customer" value="1" />
		<?php if (isset($_smarty_tpl->tpl_vars['back']->value)){?><input type="hidden" class="hidden" name="back" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['back']->value, 'htmlall', 'UTF-8');?>
" /><?php }?>
		
		<input type="submit" name="submitAccount" id="submitAccount" value="<?php echo smartyTranslate(array('s'=>'Pokračovat v objednávce'),$_smarty_tpl);?>
" class="button pull-right standard-checkout" />

		<a href="<?php if ((isset($_SERVER['HTTP_REFERER'])&&strstr($_SERVER['HTTP_REFERER'],'order.php'))||isset($_SERVER['HTTP_REFERER'])&&strstr($_SERVER['HTTP_REFERER'],'order-opc')||!isset($_SERVER['HTTP_REFERER'])){?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['secureReferrer'][0][0]->secureReferrer(smarty_modifier_escape($_SERVER['HTTP_REFERER'], 'htmlall', 'UTF-8'));?>
<?php }?>" class="zpet-do-obchodu" title="<?php echo smartyTranslate(array('s'=>'Zpět do obchodu'),$_smarty_tpl);?>
"><i class="fa fa-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Zpět do obchodu'),$_smarty_tpl);?>
</a>
		
	</div>
</form>
<div class="clearfix">	</div>
<?php }?>

<?php }} ?>