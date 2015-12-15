<?php /* Smarty version Smarty-3.1.14, created on 2015-12-10 23:31:42
         compiled from "/srv/www/helveti/helveti.cz/modules/add_gopay_new/views/templates/hook/payment_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15625610465669fd4eb955f8-77352693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7093e36fbacf81af891a5984416288bef1eab0c9' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/add_gopay_new/views/templates/hook/payment_return.tpl',
      1 => 1449270099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15625610465669fd4eb955f8-77352693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paymentStatus' => 0,
    'error' => 0,
    'confirm' => 0,
    'repeatPayment' => 0,
    'paymentMessage' => 0,
    'BOOTSTRAP' => 0,
    'PAYMENT_MODE' => 0,
    'order' => 0,
    'link' => 0,
    'INLINE_MODE' => 0,
    'gopay_images_dir' => 0,
    'PREAUTHORIZED' => 0,
    'RECURRENT' => 0,
    'paymentMethods' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5669fd4ecc9ed0_50478869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5669fd4ecc9ed0_50478869')) {function content_5669fd4ecc9ed0_50478869($_smarty_tpl) {?> 

<div id="add_gopay_new_return">

<?php if (isset($_smarty_tpl->tpl_vars['paymentStatus']->value->errors)&&is_array($_smarty_tpl->tpl_vars['paymentStatus']->value->errors)){?>
	<p class="warning alert alert-info">
		<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paymentStatus']->value->errors; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
			<?php echo smartyTranslate(array('s'=>'Error:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['error']->value->error_code;?>
<?php if ($_smarty_tpl->tpl_vars['error']->value->error_name){?> - <?php echo $_smarty_tpl->tpl_vars['error']->value->error_name;?>
<br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['error']->value->message){?><?php echo $_smarty_tpl->tpl_vars['error']->value->message;?>
<br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['error']->value->description){?><?php echo $_smarty_tpl->tpl_vars['error']->value->description;?>
<?php }?>
		<?php } ?>
	</p>
<?php }else{ ?>
	<?php if (isset($_smarty_tpl->tpl_vars['paymentStatus']->value->confirms)&&is_array($_smarty_tpl->tpl_vars['paymentStatus']->value->confirms)){?>
		<?php  $_smarty_tpl->tpl_vars['confirm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['confirm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paymentStatus']->value->confirms; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['confirm']->key => $_smarty_tpl->tpl_vars['confirm']->value){
$_smarty_tpl->tpl_vars['confirm']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['paymentMessage'] = new Smarty_variable($_smarty_tpl->tpl_vars['confirm']->value->paymentMessage, null, 0);?>
			<?php $_smarty_tpl->tpl_vars['repeatPayment'] = new Smarty_variable($_smarty_tpl->tpl_vars['confirm']->value->repeatPayment, null, 0);?>
		<?php } ?>
	<?php }else{ ?>
	<?php }?>

		<!-- platba nebyla dokončena -->
		<?php if ($_smarty_tpl->tpl_vars['repeatPayment']->value){?>
			<div class="gopay_error"> <?php echo $_smarty_tpl->tpl_vars['paymentMessage']->value;?>
 </div>
			<div id="add_gopay_new">
			<?php if (!$_smarty_tpl->tpl_vars['BOOTSTRAP']->value){?>
				<div id="add_gopay_block">
					<h1><?php echo smartyTranslate(array('s'=>'Fast on-line payment (internet banking)','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</h1>
					<p class="go_platba">
						<strong><?php echo smartyTranslate(array('s'=>'Pay for goods easily, quickly and safely especially','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</strong>
						<br />
						<?php echo smartyTranslate(array('s'=>'Once redirected to your bank&rsquo;s internet banking only log in, check the pre-filled payment order and confirm it. Payment will take place within a few minutes and the goods are shipped flat.','mod'=>'add_gopay_new'),$_smarty_tpl);?>

					</p>
					<div class="go_content">
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['PAYMENT_MODE']->value){?>
				<form id="gopay-payment-form" action="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('add_gopay_new','repeatPayment',array('orderId'=>$_tmp1),true);?>
" method="post">
					<?php if ($_smarty_tpl->tpl_vars['INLINE_MODE']->value){?><input type="hidden" name="inline" value="1"><?php }?>
					<p class="payment-row">
						<input id="pch-pc" type="radio" name="paymentChannel" value="PAYMENT_CARD" checked="checked">
						<label for="pch-pc" class="label_pay">
							<?php echo smartyTranslate(array('s'=>'GoPay - Credit card','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<br>
							<span><?php echo smartyTranslate(array('s'=>'(VISA/Mastercard)','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span>
						</label>
						<label for="pch-pc"><img src="<?php echo $_smarty_tpl->tpl_vars['gopay_images_dir']->value;?>
payKarty.png" alt="<?php echo smartyTranslate(array('s'=>'VISA/Mastercard','mod'=>'add_gopay_new'),$_smarty_tpl);?>
"></label>
					</p>
				<?php if (!$_smarty_tpl->tpl_vars['PREAUTHORIZED']->value&&!$_smarty_tpl->tpl_vars['RECURRENT']->value){?>
					<p class="payment-row">
						<input id="pch-bp" type="radio" name="paymentChannel" value="BANK_ACCOUNT">
						<label for="pch-bp" class="label_pay">
							<?php echo smartyTranslate(array('s'=>'GoPay - Bank transfer','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<br>
							<span><?php echo smartyTranslate(array('s'=>'(KB, FIO, GE Money  atd)','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span>
						</label>
						
					</p>
					<p class="payment-row">
						<input id="pch-all" type="radio" name="paymentChannel" value="ACCOUNT">
						<label for="pch-all" class="label_pay">
							<?php echo smartyTranslate(array('s'=>'GoPay - Other payment methods','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<br>
							<span><?php echo smartyTranslate(array('s'=>'(superCASH, PremiumSMS, mPlatba, GoPay peněženka)','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span>
						</label>
						
					</p>
				<?php }?>
					<br>
					<div class="row">
						<div class="col-xs-12">
							<p class="payment_module">
								<a class="bankwire"
										href="#"
										title="<?php echo smartyTranslate(array('s'=>'Pay my order','mod'=>'add_gopay_new'),$_smarty_tpl);?>
"
										<?php if (!$_smarty_tpl->tpl_vars['INLINE_MODE']->value){?>onclick="document.getElementById('gopay-payment-form').submit(); return false;"<?php }?>
										id="submit_payment"
								>
									<?php echo smartyTranslate(array('s'=>'Pay through a payment gateway','mod'=>'add_gopay_new'),$_smarty_tpl);?>
 
									<span><?php echo smartyTranslate(array('s'=>'(Fast and reliable payment method)','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span>
								</a>
							</p>
						</div>
					</div>
				</form>
			<?php }else{ ?>
				<?php if (isset($_smarty_tpl->tpl_vars['paymentMethods']->value)&&count($_smarty_tpl->tpl_vars['paymentMethods']->value)>0){?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paymentMethods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<p class="payment_module gopay_button">
							<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('add_gopay_new','repeatPayment',array('orderId'=>$_tmp2,'paymentChannel'=>$_tmp3),true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay with Gopay','mod'=>'add_gopay_new'),$_smarty_tpl);?>
" data-ajax="false">
								<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" alt="<?php echo smartyTranslate(array('s'=>'Pay with Gopay','mod'=>'add_gopay_new'),$_smarty_tpl);?>
" />
								<span class="gopay_item"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
							</a>
						</p>
					<?php } ?>
				<?php }else{ ?>
					<p class="gopay_no_payment"> <?php echo smartyTranslate(array('s'=>'There is no authorized payment method','mod'=>'add_gopay_new'),$_smarty_tpl);?>
 </p>
				<?php }?>
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['BOOTSTRAP']->value){?>
				</div>
				<div class="go_dole">
					<?php echo smartyTranslate(array('s'=>'Payments provides payment gateway','mod'=>'add_gopay_new'),$_smarty_tpl);?>

					<img style="margin-left:15px" src="<?php echo $_smarty_tpl->tpl_vars['gopay_images_dir']->value;?>
logo_header.gif" width="50px" />
				</div>
			<?php }?>
			</div>
		<?php }else{ ?> 

			<!-- když je vše OK -->
			<p class="confirmation_gopay_new"><?php echo $_smarty_tpl->tpl_vars['paymentMessage']->value;?>
</p>
			<div style="margin:40px 0;">
				<p class="info_gopay"><?php echo smartyTranslate(array('s'=>'Děkujeme Vám za Vaší objednávku.','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</p>
				<p class="info_gopay bold"><?php echo smartyTranslate(array('s'=>'Objednané zboží bude odesláno během následujících 2-24 hodin (mimo víkendů a svátků) od přijetí platby. O odeslání i průběhu přepravy budete informováni e-mailem, SMS nebo telefonicky.','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</p>
				<p class="info_gopay"><?php echo smartyTranslate(array('s'=>'Potvrzení objednávky s rekapitulací bylo odesláno na Váš e-mail. V případě, že jej neobdržíte během následujících 60 minut, prosíme, ','mod'=>'add_gopay_new'),$_smarty_tpl);?>

					<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true,null);?>
" title="<?php echo smartyTranslate(array('s'=>'kontaktujte nás','mod'=>'add_gopay_new'),$_smarty_tpl);?>
">
						<?php echo smartyTranslate(array('s'=>'kontaktujte nás','mod'=>'add_gopay_new'),$_smarty_tpl);?>

					</a>.
				</p>
			</div>
		<?php }?>
	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['INLINE_MODE']->value){?>
<script src="https://gate.gopay.cz/gp-gw/js/embed.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#submit_payment").click(function (event) {
            event.preventDefault();
			$(this).find('.hideOnSubmit').hide();

            $.ajax({
			url: "<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('add_gopay_new','repeatPayment',array('orderId'=>$_tmp4),false);?>
",
                type: 'POST',
                dataType: 'json',
                data: $("#gopay-payment-form").serialize()
            }).done(function (data) {
                _gopay.checkout({
						gatewayUrl: data.url,
						inline: true
				});

            }).error(function (data) {
                alert('Nastala chyba [' + data.error + ']');
            });
        });
    });
</script>
<?php }?><?php }} ?>