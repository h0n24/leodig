
{* ########################################################################### */
/*                                                                             */
/*                      Copyright 2014     Miloslav Kubín                      */
/*                        http://presta-modul.shopmk.cz                        */
/*                                                                             */
/*             Please do not change this text, remove the link,                */
/*          or remove all or any part of the creator copyright notice          */
/*                                                                             */
/*    Please also note that although you are allowed to make modifications     */
/*     for your own personal use, you may not distribute the original or       */
/*                 the modified code without permission.                       */
/*                                                                             */
/*                    SELLING AND REDISTRIBUTION IS FORBIDDEN!                 */
/*             Download is allowed only from presta-modul.shopmk.cz            */
/*                                                                             */
/*       This software is provided as is, without warranty of any kind.        */
/*           The author shall not be liable for damages of any kind.           */
/*               Use of this software indicates that you agree.                */
/*                                                                             */
/*                                    ***                                      */
/*                                                                             */
/*              Prosím, neměňte tento text, nemazejte odkazy,                  */
/*      neodstraňujte části a nebo celé oznámení těchto autorských práv        */
/*                                                                             */
/*     Prosím vezměte také na vědomí, že i když máte možnost provádět změny    */
/*        pro vlastní osobní potřebu,nesmíte distribuovat původní nebo         */
/*                        upravený kód bez povolení.                           */
/*                                                                             */
/*                   PRODEJ A DISTRIBUCE JE ZAKÁZÁNA!                          */
/*          Download je povolen pouze z presta-modul.shopmk.cz                 */
/*                                                                             */
/*   Tento software je poskytován tak, jak je, bez záruky jakéhokoli druhu.    */
/*          Autor nenese odpovědnost za škody jakéhokoliv druhu.               */
/*                  Používáním tohoto softwaru znamená,                        */
/*           že souhlasíte s výše uvedenými autorskými právy .                 */
/*                                                                             */
/* ########################################################################### *}
 
{literal}
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
{/literal}
<div class="delivery_option item form-group clearfix" id="pay_div_add_gopay_new">
	<input class="delivery_option_radio col-sm-1" type="radio" name="pay" id="pay_badd_gopay_new" rel="gopay" >
	<label for="pay_badd_gopay_new">
		<table class="resume col-sm-12">
			<tbody>
				<tr>
					<td class="payment_option_logo">
						<img src="{$img_dir}helveti/pay-prevod.png" alt="{l s='Pay by bank wire' mod='add_gopay_new'}" width="32" height="29"/>
					</td>
					<td class="payment_option_title">
						<strong>{l s='Online platba' mod='add_gopay_new'}</strong> ({l s='kartou, rychlý převod, atd..' mod='add_gopay_new'})
					</td>
					<td class="payment_option_popis">
						
					</td>
					<td class="delivery_option_price">
						
					</td>
				</tr>
			</tbody>
		</table>
	
	
	{*************OBSAH MODULU**************}
	<div class="go_content">
		{if $cart_currency->iso_code == 'EUR' || $cart_currency->iso_code == 'CZK'}
			{if $OPC_module}
				OPC obsah
			{else}
				<form id="gopay-payment-form-new" action="{$link->getModuleLink('add_gopay_new', 'validation')|escape:'html'}" method="post">
				<table id="vypis_moznosti">					
				<tr>
					<td class="radio_td">
						<input id="pch-pc" type="radio" name="paymentChannel" value="PAYMENT_CARD" checked="checked">
					</td>
					<td>
					<label for="pch-pc" class="label_pay">
						{l s='GoPay - Credit card' mod='add_gopay_new'}<br>
						<span>{l s='(VISA/Mastercard)' mod='add_gopay_new'}</span>						
					</label>
					</td>
					<td>
						<div class="loga_add_gopay_new"><img src="{$gopay_images_dir}/payKarty.png" alt="{l s='VISA/Mastercard' mod='add_gopay_new'}"></div>
					</td>						
				</tr>
			{if !$PREAUTHORIZED && !$RECURRENT}
				<tr>
					<td class="radio_td">
						<input id="pch-bp" type="radio" name="paymentChannel" value="BANK_ACCOUNT">
					</td>
					<td>						
						<label for="pch-bp" class="label_pay">
							{l s='GoPay - Bank transfer' mod='add_gopay_new'}<br>
							<span>{l s='(KB, FIO, GE Money  atd)' mod='add_gopay_new'}</span>
						</label>
					</td>
					<td>
						<div class="loga_add_gopay_new"><img src="{$gopay_images_dir}/payBanky.png" alt="{l s='KB, FIO, GE Money  atd' mod='add_gopay_new'}"></div>
					</td>
					</tr>
				<tr>
					<td class="radio_td">
						<input id="pch-all" type="radio" name="paymentChannel" value="ACCOUNT">
					</td>
					<td>
					<label for="pch-all" class="label_pay">
						{l s='GoPay - Other payment methods' mod='add_gopay_new'}<br>
						<span>{l s='(superCASH, PremiumSMS, mPlatba, GoPay peněženka)' mod='add_gopay_new'}</span>
					</label>
					<td>
						<div class="loga_add_gopay_new"><img src="{$gopay_images_dir}/payOstatni.png" alt="{l s='superCASH, PremiumSMS, mPlatba, GoPay peněženka' mod='add_gopay_new'}"></div>
					</td>
				</tr>
			{/if}
				</table>
				</form>
	{/if}
	{else} 
		ERROR EUR a CZK ONLY
	{/if}
	</div>
	</label>
</div>
	{*************!OBSAH MODULU**************}

