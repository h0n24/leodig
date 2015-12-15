<?php /* Smarty version Smarty-3.1.14, created on 2015-12-10 23:30:41
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/modules/add_gopay_new/views/templates/hook/shortened.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12784849755669fd1148ff62-28438024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1a6ff67c2fd6434d024623d0496c278f8769509' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/modules/add_gopay_new/views/templates/hook/shortened.tpl',
      1 => 1449786301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12784849755669fd1148ff62-28438024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_dir' => 0,
    'cart_currency' => 0,
    'OPC_module' => 0,
    'link' => 0,
    'gopay_images_dir' => 0,
    'PREAUTHORIZED' => 0,
    'RECURRENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5669fd1150e439_56654445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5669fd1150e439_56654445')) {function content_5669fd1150e439_56654445($_smarty_tpl) {?>

 

<script>
		
</script>
<style>
#pay_div_add_gopay_new .go_content{
	display:none;
}
#vypis_moznosti{
	margin-top:70px;
	margin-left:12px;
}
#pay_div_add_gopay_new td{
	padding:8px;
	white-space: nowrap;
}
#pay_div_add_gopay_new .radio_td{
	padding:0 8px;
	text-align:center;
}
#pay_div_add_gopay_new .label_pay span{
	font-size:0.83em;
}
.loga_add_gopay_new{
	padding:8px 12px;
	background:#ddd;
}
</style>

<div class="delivery_option item form-group clearfix" id="pay_div_add_gopay_new">
	<input class="delivery_option_radio col-sm-1" type="radio" name="pay" id="pay_badd_gopay_new" rel="gopay" >
	<label for="pay_badd_gopay_new">
		<table class="resume col-sm-12">
			<tbody>
				<tr>
					<td class="payment_option_logo">
						<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
helveti/pay-prevod.png" alt="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'add_gopay_new'),$_smarty_tpl);?>
" width="32" height="29"/>
					</td>
					<td class="payment_option_title">
						<strong><?php echo smartyTranslate(array('s'=>'Online platba','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</strong> (<?php echo smartyTranslate(array('s'=>'kartou, rychlý převod, atd..','mod'=>'add_gopay_new'),$_smarty_tpl);?>
)
					</td>
					<td class="payment_option_popis">
						
					</td>
					<td class="delivery_option_price">
						
					</td>
				</tr>
			</tbody>
		</table>
	
	
	
	<div class="go_content">
		<?php if ($_smarty_tpl->tpl_vars['cart_currency']->value->iso_code=='EUR'||$_smarty_tpl->tpl_vars['cart_currency']->value->iso_code=='CZK'){?>
			<?php if ($_smarty_tpl->tpl_vars['OPC_module']->value){?>
				OPC obsah
			<?php }else{ ?>
				<form id="gopay-payment-form-new" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('add_gopay_new','validation'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
				<table id="vypis_moznosti">					
				<tr>
					<td class="radio_td">
						<input id="pch-pc" type="radio" name="paymentChannel" value="PAYMENT_CARD" checked="checked">
					</td>
					<td>
					<label for="pch-pc" class="label_pay">
						<?php echo smartyTranslate(array('s'=>'GoPay - Credit card','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<br>
						<span><?php echo smartyTranslate(array('s'=>'(VISA/Mastercard)','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span>						
					</label>
					</td>
					<td>
						<div class="loga_add_gopay_new"><img src="<?php echo $_smarty_tpl->tpl_vars['gopay_images_dir']->value;?>
/payKarty.png" alt="<?php echo smartyTranslate(array('s'=>'VISA/Mastercard','mod'=>'add_gopay_new'),$_smarty_tpl);?>
"></div>
					</td>						
				</tr>
			<?php if (!$_smarty_tpl->tpl_vars['PREAUTHORIZED']->value&&!$_smarty_tpl->tpl_vars['RECURRENT']->value){?>
				<tr>
					<td class="radio_td">
						<input id="pch-bp" type="radio" name="paymentChannel" value="BANK_ACCOUNT">
					</td>
					<td>						
						<label for="pch-bp" class="label_pay">
							<?php echo smartyTranslate(array('s'=>'GoPay - Bank transfer','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<br>
							<span><?php echo smartyTranslate(array('s'=>'(KB, FIO, GE Money  atd)','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span>
						</label>
					</td>
					<td>
						<div class="loga_add_gopay_new"><img src="<?php echo $_smarty_tpl->tpl_vars['gopay_images_dir']->value;?>
/payBanky.png" alt="<?php echo smartyTranslate(array('s'=>'KB, FIO, GE Money  atd','mod'=>'add_gopay_new'),$_smarty_tpl);?>
"></div>
					</td>
					</tr>
				<tr>
					<td class="radio_td">
						<input id="pch-all" type="radio" name="paymentChannel" value="ACCOUNT">
					</td>
					<td>
					<label for="pch-all" class="label_pay">
						<?php echo smartyTranslate(array('s'=>'GoPay - Other payment methods','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<br>
						<span><?php echo smartyTranslate(array('s'=>'(superCASH, PremiumSMS, mPlatba, GoPay peněženka)','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span>
					</label>
					<td>
						<div class="loga_add_gopay_new"><img src="<?php echo $_smarty_tpl->tpl_vars['gopay_images_dir']->value;?>
/payOstatni.png" alt="<?php echo smartyTranslate(array('s'=>'superCASH, PremiumSMS, mPlatba, GoPay peněženka','mod'=>'add_gopay_new'),$_smarty_tpl);?>
"></div>
					</td>
				</tr>
			<?php }?>
				</table>
				</form>
	<?php }?>
	<?php }else{ ?> 
		ERROR EUR a CZK ONLY
	<?php }?>
	</div>
	</label>
</div>
	

<?php }} ?>