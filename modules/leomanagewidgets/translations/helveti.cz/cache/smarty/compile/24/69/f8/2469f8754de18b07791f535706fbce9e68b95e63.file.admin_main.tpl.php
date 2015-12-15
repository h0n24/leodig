<?php /* Smarty version Smarty-3.1.14, created on 2015-12-10 23:29:54
         compiled from "/srv/www/helveti/helveti.cz/modules/add_gopay_new/views/templates/back/admin_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19683287695669fce2f11885-76976498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2469f8754de18b07791f535706fbce9e68b95e63' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/add_gopay_new/views/templates/back/admin_main.tpl',
      1 => 1449270100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19683287695669fce2f11885-76976498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GOID' => 0,
    'CLIENT_ID' => 0,
    'CLIENT_SECRET' => 0,
    'GOID_TEST' => 0,
    'CLIENT_ID_TEST' => 0,
    'CLIENT_SECRET_TEST' => 0,
    'PRICE_DIFFERENT' => 0,
    'RECURRENT' => 0,
    'RECURRENCE_TYPE' => 0,
    'RECURRENCE_CYCLE' => 0,
    'period_days' => 0,
    'period_weeks' => 0,
    'period_months' => 0,
    'admin_modules_link' => 0,
    'name' => 0,
    'version' => 0,
    'missing_settings' => 0,
    '_postErrors' => 0,
    'error' => 0,
    'idTab' => 0,
    'form' => 0,
    'default_currency' => 0,
    'ALL_PAYMENT_INSTRUMENTS' => 0,
    'payment' => 0,
    'PREAUTHORIZED' => 0,
    'code' => 0,
    'supCurr' => 0,
    'ACTIVE_PAYMENTS' => 0,
    'ALL_SWIFTS' => 0,
    'swift' => 0,
    'ACTIVE_SWIFTS' => 0,
    'module_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5669fce32123c5_90699472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5669fce32123c5_90699472')) {function content_5669fce32123c5_90699472($_smarty_tpl) {?>

	<script type="text/javascript">
		var goid = '<?php echo $_smarty_tpl->tpl_vars['GOID']->value;?>
';
		var clientId = '<?php echo $_smarty_tpl->tpl_vars['CLIENT_ID']->value;?>
';
		var clientSecret = '<?php echo $_smarty_tpl->tpl_vars['CLIENT_SECRET']->value;?>
';
		var goid_test = '<?php echo $_smarty_tpl->tpl_vars['GOID_TEST']->value;?>
';
		var clientId_test = '<?php echo $_smarty_tpl->tpl_vars['CLIENT_ID_TEST']->value;?>
';
		var clientSecret_test = '<?php echo $_smarty_tpl->tpl_vars['CLIENT_SECRET_TEST']->value;?>
';
		var PRICE_DIFFERENT = '<?php echo $_smarty_tpl->tpl_vars['PRICE_DIFFERENT']->value;?>
';
		var RECURRENT = '<?php echo $_smarty_tpl->tpl_vars['RECURRENT']->value;?>
';
		var RECURRENCE_TYPE = '<?php echo $_smarty_tpl->tpl_vars['RECURRENCE_TYPE']->value;?>
';
		var RECURRENCE_CYCLE = '<?php echo $_smarty_tpl->tpl_vars['RECURRENCE_CYCLE']->value;?>
';
		var period_days = '<?php echo $_smarty_tpl->tpl_vars['period_days']->value;?>
';
		var period_weeks = '<?php echo $_smarty_tpl->tpl_vars['period_weeks']->value;?>
';
		var period_months = '<?php echo $_smarty_tpl->tpl_vars['period_months']->value;?>
';
		var admin_modules_link = '<?php echo addslashes($_smarty_tpl->tpl_vars['admin_modules_link']->value);?>
';
	</script>

<h2><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 - <span style="color: #FF0000;"><?php echo smartyTranslate(array('s'=>'Ver.','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</span></h2>

<div class="bootstrap">
<?php if ($_smarty_tpl->tpl_vars['missing_settings']->value){?>
	<div class="alert error alert-danger">
		<strong><?php echo $_smarty_tpl->tpl_vars['missing_settings']->value;?>
</strong>
	</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['_postErrors']->value){?>
	<div class="alert error alert-danger">
		<ol>
		<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_postErrors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
		<?php } ?>
		</ol>
	</div>
<?php }?>
</div>

<div id="test_configuration-overlay" class="progressIcon" style="display: none;"></div>

<div id="add_gopay_new_admin">
	<ul id="more_info_tabs" class="idTabs">
		<li><a href="#idTab1" class="<?php if ($_smarty_tpl->tpl_vars['idTab']->value==1){?>selected<?php }?>"><?php echo smartyTranslate(array('s'=>'Common Settings','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</a></li>
		<li><a href="#idTab2" class="<?php if ($_smarty_tpl->tpl_vars['idTab']->value==2){?>selected<?php }?>"><?php echo smartyTranslate(array('s'=>'Payment methods','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</a></li>
		<li><a href="#idTab5"><?php echo smartyTranslate(array('s'=>'GoPay Information','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</a></li>
		<li><a href="#idTab6"><?php echo smartyTranslate(array('s'=>'License and Installation','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</a></li>
	</ul>
	<div id="more_info_shadow">
		<div id="more_info_sheets">
			<div id="idTab1" class="rte">
				<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

			</div>

			<div id="idTab2" class="rte">
				<form action="<?php echo $_smarty_tpl->tpl_vars['admin_modules_link']->value;?>
&configure=add_gopay_new" method="post" enctype="multipart/form-data">
                	<input type="hidden" value="2" name="idTab">
					<fieldset>
						<legend><img src="../img/admin/contact.gif" /><?php echo smartyTranslate(array('s'=>'Setting up payment buttons','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</legend>
						<div class="div1">
							<div class="div2">
								<b><?php echo smartyTranslate(array('s'=>'Payment methods','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</b><br>
								<?php echo smartyTranslate(array('s'=>'Enable the required payment methods','mod'=>'add_gopay_new'),$_smarty_tpl);?>

								<div class="div4">
									<input type="checkbox"
										id="all_active" 
										name="checkme"
										onclick="checkDelBoxes(this.form, 'active_payments_[]', this.checked);
													checkDelBoxes(this.form, 'active_swifts_[]', this.checked);"
									/>
									<label for="all_active" style="margin-left:10px;"><?php echo smartyTranslate(array('s'=>'All','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</label>
								</div>
							</div>

						<?php if ($_smarty_tpl->tpl_vars['PRICE_DIFFERENT']->value){?>
							<div class="div3">
								<?php echo smartyTranslate(array('s'=>'Default currency in shop:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<br>
								<b><?php echo $_smarty_tpl->tpl_vars['default_currency']->value->iso_code;?>
</b>
							</div>
						<?php }?>
						</div>

					<?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ALL_PAYMENT_INSTRUMENTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value){
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['payment']->value['code'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['code'] = new Smarty_variable($_tmp1, null, 0);?>
						<div class="div1" 
									<?php if (($_smarty_tpl->tpl_vars['PREAUTHORIZED']->value&&!$_smarty_tpl->tpl_vars['payment']->value['supportPreauthorization'])||($_smarty_tpl->tpl_vars['RECURRENT']->value&&!$_smarty_tpl->tpl_vars['payment']->value['supportRecurrent'])){?>style="color:#C3BFBF"<?php }?>>
							<div class="div2">
								<div id="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
_settings" class="logo_settings" style="display:none">
									<input class="button" type="file" name="logo_<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
									<span class="spanLoad"><?php echo smartyTranslate(array('s'=>'Upload your own logo payment button. Allowed only pictures *.gif','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span>
								</div>
								<span class="span1">
									<?php echo substr($_smarty_tpl->tpl_vars['code']->value,0,2);?>
 - <?php echo $_smarty_tpl->tpl_vars['payment']->value['title'];?>

									<?php if ($_smarty_tpl->tpl_vars['PREAUTHORIZED']->value&&!$_smarty_tpl->tpl_vars['payment']->value['supportPreauthorization']){?>
										<br /><i style="font-size:0.6em"><?php echo smartyTranslate(array('s'=>'Payment of not supporting pre-authorization','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</i>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['RECURRENT']->value&&!$_smarty_tpl->tpl_vars['payment']->value['supportRecurrent']){?>
										<br /><i style="font-size:0.6em"><?php echo smartyTranslate(array('s'=>'Payment of not supporting recurrent payment','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</i>
									<?php }?>
									<br /><br />
									<?php  $_smarty_tpl->tpl_vars['supCurr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supCurr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment']->value['supportedCurrency']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supCurr']->key => $_smarty_tpl->tpl_vars['supCurr']->value){
$_smarty_tpl->tpl_vars['supCurr']->_loop = true;
?>
										<?php echo $_smarty_tpl->tpl_vars['supCurr']->value;?>

									<?php } ?>
								</span>
								<img src="<?php echo $_smarty_tpl->tpl_vars['payment']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['payment']->value['title'];?>
">
								<div class="div4">
								<?php if (!$_smarty_tpl->tpl_vars['PREAUTHORIZED']->value||$_smarty_tpl->tpl_vars['payment']->value['supportPreauthorization']){?>
									<a id="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
_settings_anchor_GP" title="<?php echo smartyTranslate(array('s'=>'Upload logo','mod'=>'add_gopay_new'),$_smarty_tpl);?>
" class="aLogo">
										<?php echo smartyTranslate(array('s'=>'Upload logo','mod'=>'add_gopay_new'),$_smarty_tpl);?>

									</a>
								<?php }?>
									<div class="div7">
										<input type="checkbox"
											id="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
_active" 
											name="active_payments_[]" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"
											<?php if ($_smarty_tpl->tpl_vars['PREAUTHORIZED']->value&&!$_smarty_tpl->tpl_vars['payment']->value['supportPreauthorization']){?>disabled<?php }?>
											<?php if (is_array($_smarty_tpl->tpl_vars['ACTIVE_PAYMENTS']->value)){?>
												<?php if (in_array($_smarty_tpl->tpl_vars['code']->value,$_smarty_tpl->tpl_vars['ACTIVE_PAYMENTS']->value)){?>
													checked="checked"
												<?php }?>
											<?php }?>
										/>
										<label for="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
_active" style="margin-left:10px;"><?php echo smartyTranslate(array('s'=>'Activate','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</label>
									</div>
								</div>
							</div>

						<?php if ($_smarty_tpl->tpl_vars['PRICE_DIFFERENT']->value){?>
							<div class="div5">
								<input type="text"
									name="fee_value_<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"
									value="<?php echo Configuration::get("GPY_PRICE_FEE_VALUE".((string)$_smarty_tpl->tpl_vars['code']->value));?>
"
									<?php if ($_smarty_tpl->tpl_vars['PREAUTHORIZED']->value&&!$_smarty_tpl->tpl_vars['payment']->value['supportPreauthorization']){?>disabled<?php }?>
								/>
								<select name="fee_type_<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['PREAUTHORIZED']->value&&!$_smarty_tpl->tpl_vars['payment']->value['supportPreauthorization']){?>disabled<?php }?>>
									<option value="1" <?php if (Configuration::get("GPY_PRICE_FEE_TYPE".((string)$_smarty_tpl->tpl_vars['code']->value))=='1'){?>selected="selected"<?php }?>>
										<?php echo smartyTranslate(array('s'=>'Percent','mod'=>'add_gopay_new'),$_smarty_tpl);?>

									</option>
										<option value="0" <?php if (Configuration::get("GPY_PRICE_FEE_TYPE".((string)$_smarty_tpl->tpl_vars['code']->value))=='0'){?>selected="selected"<?php }?>>
										<?php echo smartyTranslate(array('s'=>'Amount','mod'=>'add_gopay_new'),$_smarty_tpl);?>

									</option>
								</select>
							</div>
						<?php }?>
						</div>
					<?php } ?>

					<h3 style="margin-top:30px;"><?php echo smartyTranslate(array('s'=>'Allowed Payments for bank transfers','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</h3>

					<?php  $_smarty_tpl->tpl_vars['swift'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['swift']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ALL_SWIFTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['swift']->key => $_smarty_tpl->tpl_vars['swift']->value){
$_smarty_tpl->tpl_vars['swift']->_loop = true;
?>
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['swift']->value['code'];?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['code'] = new Smarty_variable($_tmp2, null, 0);?>
						<div class="div1 swifts">
							<div class="div2">
								<div id="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
_settings" class="logo_settings" style="display:none">
									<input class="button" type="file" name="logo_<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
									<span class="spanLoad"><?php echo smartyTranslate(array('s'=>'Upload your own logo payment button. Allowed only pictures *.gif','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span>
								</div>
								<span class="span1">
									<?php echo substr($_smarty_tpl->tpl_vars['code']->value,0,2);?>
 - <?php echo $_smarty_tpl->tpl_vars['swift']->value['title'];?>

									<br /><br />
									<?php  $_smarty_tpl->tpl_vars['supCurr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supCurr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['swift']->value['supportedCurrency']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supCurr']->key => $_smarty_tpl->tpl_vars['supCurr']->value){
$_smarty_tpl->tpl_vars['supCurr']->_loop = true;
?>
										<?php echo $_smarty_tpl->tpl_vars['supCurr']->value;?>

									<?php } ?>
								</span>
								<img src="<?php echo $_smarty_tpl->tpl_vars['swift']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['swift']->value['title'];?>
">
								<div class="div4">
									<a id="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
_settings_anchor_GP"
										title="<?php echo smartyTranslate(array('s'=>'Upload logo','mod'=>'add_gopay_new'),$_smarty_tpl);?>
"
										class="aLogo"
									>
										<?php echo smartyTranslate(array('s'=>'Upload logo','mod'=>'add_gopay_new'),$_smarty_tpl);?>

									</a>
									<div class="div7">
										<input type="checkbox"
											id="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
_active" 
											name="active_swifts_[]" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"
											<?php if (is_array($_smarty_tpl->tpl_vars['ACTIVE_SWIFTS']->value)){?><?php if (in_array($_smarty_tpl->tpl_vars['code']->value,$_smarty_tpl->tpl_vars['ACTIVE_SWIFTS']->value)){?>checked="checked"<?php }?><?php }?>
										/>
										<label for="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
_active" style="margin-left:10px;"><?php echo smartyTranslate(array('s'=>'Activate','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</label>
									</div>
								</div>
							</div>

						<?php if ($_smarty_tpl->tpl_vars['PRICE_DIFFERENT']->value){?>
							<div class="div5">
								<input type="text"
									name="fee_value_<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"
									value="<?php echo Configuration::get("GPY_PRICE_FEE_VALUE".((string)$_smarty_tpl->tpl_vars['code']->value));?>
"
								/>
								<select name="fee_type_<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
									<option value="1" <?php if (Configuration::get("GPY_PRICE_FEE_TYPE".((string)$_smarty_tpl->tpl_vars['code']->value))=='1'){?>selected="selected"<?php }?>>
										<?php echo smartyTranslate(array('s'=>'Percent','mod'=>'add_gopay_new'),$_smarty_tpl);?>

									</option>
										<option value="0" <?php if (Configuration::get("GPY_PRICE_FEE_TYPE".((string)$_smarty_tpl->tpl_vars['code']->value))=='0'){?>selected="selected"<?php }?>>
										<?php echo smartyTranslate(array('s'=>'Amount','mod'=>'add_gopay_new'),$_smarty_tpl);?>

									</option>
								</select>
							</div>
						<?php }?>
						</div>
					<?php } ?>

						<div class="warning">
							<?php echo smartyTranslate(array('s'=>'Warning!! . . For payments in euro is necessary to have a contract with GoPay for this currency!','mod'=>'add_gopay_new'),$_smarty_tpl);?>

						</center>
					</fieldset>
					<center><input type="submit" name="submitPaymentButtons" value="<?php echo smartyTranslate(array('s'=>'Save Settings','mod'=>'add_gopay_new'),$_smarty_tpl);?>
" class="btn btn-default button_main" /></center>
				</form>
			</div>

			<div id="idTab3" class="rte">
			</div>

			<div id="idTab4" class="rte">
			</div>

			<div id="idTab5" class="rte">
				<fieldset>
					<legend class="legend1">
						<a href="https://www.gopay.cz/partnerstvi" target="_blank"><img src="../modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/logo_header.gif" alt="Gopay" /></a>
					</legend>
					<p><b><?php echo smartyTranslate(array('s'=>'GoPay','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</b><?php echo smartyTranslate(array('s'=>' is a payment system for online, discreet and secure payments. GoPay provides users the convenience of small payments on the Internet and traders certainty immediate payment for goods and services in electronic commerce. The key advantage is ','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<b><?php echo smartyTranslate(array('s'=>'universal payment gateway','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</b><?php echo smartyTranslate(array('s'=>' portfolio with other payment methods','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</p>
					<br /><p><b><?php echo smartyTranslate(array('s'=>'Contact Information','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</b></p>
					<p><?php echo smartyTranslate(array('s'=>'Technical information integration ','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<a href="mailto:integrace@gopay.cz">integrace@gopay.cz</a></p>
					<p><?php echo smartyTranslate(array('s'=>'Support operational issues ','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<a href="mailto:uzivej@gopay.cz">uzivej@gopay.cz</a></p>
					<p><?php echo smartyTranslate(array('s'=>'Terms support ','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<a href="mailto:podnikej@gopay.cz">podnikej@gopay.cz</a></p>
					<p><a href="https://www.gopay.cz" target="_blank" class="a1">https://www.gopay.cz</a></p>
				</fieldset>
			</div>

			<div id="idTab6" class="rte">
				<fieldset id="dopravci">
					<legend>
						<img src="../modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/licence.jpg" width="30px" height="30px"/>
						<?php echo smartyTranslate(array('s'=>'Licence Module','mod'=>'add_gopay_new'),$_smarty_tpl);?>

					</legend>
					<div class="div_licence">
                        <p>
							<?php echo smartyTranslate(array('s'=>'1. Purchase of one licence for a Supplier’s product authorizes the Purchaser to use the module at one website / e-shop in the production regime. The Purchaser is obliged to inform the Supplier of the domain and website for which the licence will be used.','mod'=>'add_gopay_new'),$_smarty_tpl);?>


						</p>
 <p>
							<?php echo smartyTranslate(array('s'=>'2. In the event of purchase of 2-5 licences for one product, the Purchaser is granted a 10 Percent (%) discount off the total price for this product. The Purchaser may use the purchased licences in the corresponding number of websites / e-shops in the production regime; the number of websites / e-shops must not exceed the number of purchased licences. The Purchaser is obliged to inform the Supplier of the domains and websites for which the licences will be used. ','mod'=>'add_gopay_new'),$_smarty_tpl);?>

						</p>
                        
                         <p>
							<?php echo smartyTranslate(array('s'=>'3. In the event of purchase of 6-10 licences for one product, the Purchaser is granted a 20 Percent (%) discount off the total price for this product. The Purchaser may use the purchased licences in the corresponding number of websites / e-shops in the production regime; the number of websites / e-shops must not exceed the number of purchased licences. The Purchaser is obliged to inform the Supplier of the domains and websites for which the licences will be used. ','mod'=>'add_gopay_new'),$_smarty_tpl);?>

						</p>
                        <p>
							<?php echo smartyTranslate(array('s'=>'4. In the event of purchase of a Multilicence, the price of such licence equals to the tenfold price of one licence for the purchased product. The purchase of a Multilicence authorizes the Purchaser to use an unlimited number of copies of the purchased product in all its websites / e-shops in the production regime. ','mod'=>'add_gopay_new'),$_smarty_tpl);?>

						</p>
                        <p>
							<?php echo smartyTranslate(array('s'=>'5. An unlimited number of copies of all the products purchased under items 1 through 4 may be used by the Purchaser in its testing websites / e-shops; the Purchaser may modify all the products and adjust the functions of the products to satisfy its needs.','mod'=>'add_gopay_new'),$_smarty_tpl);?>

						</p>
                        <p>
							<?php echo smartyTranslate(array('s'=>'6. The prices of licences for modules supplied by the Supplier do not include: ','mod'=>'add_gopay_new'),$_smarty_tpl);?>

							<li><?php echo smartyTranslate(array('s'=>'Any additional individual adjustments;','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</li>
							<li><?php echo smartyTranslate(array('s'=>'Any additional services (implementation, testing, etc.);','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</li>
							<li><?php echo smartyTranslate(array('s'=>'Any updates to the modules if the reason for their non-functioning is a change in the version of the platform for which the modules have been purchased. ','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</li>
						</p>
                        <p>
							<?php echo smartyTranslate(array('s'=>'7. The Purchaser acknowledges that it is not authorized to:','mod'=>'add_gopay_new'),$_smarty_tpl);?>

							<li><?php echo smartyTranslate(array('s'=>'Procure, offer and sell the purchased products in public or individually to any third parties;','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</li>
							<li><?php echo smartyTranslate(array('s'=>'Copy the purchased products.','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</li>
						</p>
                        <p>
							<?php echo smartyTranslate(array('s'=>'8. The Supplier is not responsible for the functionality, compatibility and use of modules offered free of charge. Any damage incurred or any possible loss and damage to data will be borne exclusively by the Purchaser. The Supplier does not provide any free-of-charge counselling or individual modifications for modules offered free of charge. The Purchaser may:','mod'=>'add_gopay_new'),$_smarty_tpl);?>

							<li><?php echo smartyTranslate(array('s'=>'Use the free-of-charge modules in any way at any place whatsoever.','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</li>
							<li><?php echo smartyTranslate(array('s'=>'Modify the functionality and appearance of the free-of-charge modules.','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'Offer the free-of-charge modules to third parties.','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</li>
						</p>
                        <p>
							<?php echo smartyTranslate(array('s'=>'9. The Purchaser is not authorized to sell to any third parties any services, modules or websites subject to payment to the Supplier. Upon payment for the services, products and websites, the ownership rights pass from the Supplier to the Purchaser. The Supplier reserves a copyright for the performed graphic and programming work and the individual designs, modules and adjustments.','mod'=>'add_gopay_new'),$_smarty_tpl);?>

						</p>
                        
                        <p>
							<?php echo smartyTranslate(array('s'=>'10. The Purchaser acknowledges that the offered products subject to payment are protected by the Copyright Act and secured against copying and disseminating; the Purchaser undertakes not to copy or abuse the products, provide them to any third parties, disseminate them or take any steps aiming at the interference with the protection of the products provided. The Purchaser is responsible for any damage incurred by such conduct.','mod'=>'add_gopay_new'),$_smarty_tpl);?>

						</p>
                        
                        <p>
							<?php echo smartyTranslate(array('s'=>'11. The Purchaser undertakes not to endeavour to break the copyright protection and breach other regulations governing the protection of intellectual property.','mod'=>'add_gopay_new'),$_smarty_tpl);?>

						</p>
                        
                        <p>
							<?php echo smartyTranslate(array('s'=>'12. Software downloads are permitted only from presta-modul.shopmk.cz or from the file sent by the Supplier to the Purchaser’s e-mail address. Using this software means that the Purchaser agrees with the above-mentioned copyright. ','mod'=>'add_gopay_new'),$_smarty_tpl);?>

						</p>
                        
                        <p>
							<?php echo smartyTranslate(array('s'=>'13. The Purchaser represents that the Supplier has no legal liability for any damage incurred by the Client or any third persons in relation to the use of the module and that any damage incurred or possible loss and damage to data caused by incorrect setting and use of the product or possible modifications to the product by the Purchaser will be borne exclusively by the Purchaser.','mod'=>'add_gopay_new'),$_smarty_tpl);?>

						</p>
                        
                      
						</div>
						<center>
\|/<span class="licence">~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</span>\|/<br>
 | <span class="licence"></span> | <br>
 | <span class="licence"><?php echo smartyTranslate(array('s'=>'RESALE AND DISTRIBUTION ARE PROHIBITED!','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span> | <br>
 | <span class="licence"></span> | <br>
 | <span class="licence"><?php echo smartyTranslate(array('s'=>'Software downloads are permitted only from','mod'=>'add_gopay_new'),$_smarty_tpl);?>
 <a href="http://presta-modul.shopmk.cz">presta-modul.shopmk.cz</a></span> | <br>
 | <span class="licence"><?php echo smartyTranslate(array('s'=>'or from the file sent by the Supplier to the Purchaser’s e-mail address.','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span> | <br>
 | <span class="licence"><?php echo smartyTranslate(array('s'=>'Using this software means that the Purchaser agrees with the above-mentioned copyright.','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span> | <br>
 | <span class="licence"></span> | <br>
/|\<span class="licence"><?php echo smartyTranslate(array('s'=>'The Purchaser represents that the Supplier has no legal liability for any damage','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span>/|\<br>
\|/<span class="licence"><?php echo smartyTranslate(array('s'=>'incurred by the Client or any third persons in relation to the use of the module','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span>\|/<br>
 | <span class="licence"><?php echo smartyTranslate(array('s'=>'and that any damage incurred or possible loss and damage to data caused by incorrect setting','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span> | <br>
 | <span class="licence"><?php echo smartyTranslate(array('s'=>'and use of the product or possible modifications to the product by the Purchaser','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span> | <br>
 
  | <span class="licence"><?php echo smartyTranslate(array('s'=>'will be borne exclusively by the Purchaser.','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span> | <br>
 | <span class="licence">***</span> | <br>
 | <span class="licence"></span> | <br>
/|\<span class="licence">~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</span>/|\<br>
						</center>
					</fieldset>
			</div>
		</div>
	</div>
</div><?php }} ?>