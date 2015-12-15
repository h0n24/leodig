
{* ########################################################################### */
/*             */
/*      Copyright 2014     Miloslav Kubín      */
/*        http://presta-modul.shopmk.cz        */
/*             */
/*             Please do not change this text, remove the link,*/
/*          or remove all or any part of the creator copyright notice          */
/*             */
/*    Please also note that although you are allowed to make modifications     */
/*     for your own personal use, you may not distribute the original or       */
/* the modified code without permission.       */
/*             */
/*    SELLING AND REDISTRIBUTION IS FORBIDDEN! */
/*             Download is allowed only from presta-modul.shopmk.cz            */
/*             */
/*       This software is provided as is, without warranty of any kind.        */
/*           The author shall not be liable for damages of any kind.           */
/*               Use of this software indicates that you agree.*/
/*             */
/*    ***      */
/*             */
/*              Prosím, neměňte tento text, nemazejte odkazy,  */
/*      neodstraňujte části a nebo celé oznámení těchto autorských práv        */
/*             */
/*     Prosím vezměte také na vědomí, že i když máte možnost provádět změny    */
/*        pro vlastní osobní potřebu,nesmíte distribuovat původní nebo         */
/*        upravený kód bez povolení.           */
/*             */
/*   PRODEJ A DISTRIBUCE JE ZAKÁZÁNA!          */
/*          Download je povolen pouze z presta-modul.shopmk.cz */
/*             */
/*   Tento software je poskytován tak, jak je, bez záruky jakéhokoli druhu.    */
/*          Autor nenese odpovědnost za škody jakéhokoliv druhu.               */
/*  Používáním tohoto softwaru znamená,        */
/*           že souhlasíte s výše uvedenými autorskými právy . */
/*             */
/* ########################################################################### *}
{literal}
<style>
.module-add_gopay_new-validation .celkem_kosik{
    float: right;
    width: 304px;
    text-align: center;
    color: #636363;
    font-size: 24px;
    font-weight: 400;
    margin-top: 25px;
}
.module-add_gopay_new-validation .celkem_kosik .cena_celkem {
    color: #e97b74;
    font-size: 26px;
    font-weight: 700;
}
</style>
{/literal}
{capture name=path}{l s='Shipping' mod='add_gopay_new'}{/capture}

{include file="$tpl_dir./breadcrumb.tpl"}


{assign var='current_step' value='payment'}
{include file="$tpl_dir./order-steps.tpl"}

{if $nbProducts <= 0}
	<p class="warning">{l s='Your shopping cart is empty.' mod='add_gopay_new'}</p>
{else}
<form id="gopay-payment-button" action="{$link->getModuleLink('add_gopay_new', 'validation', [], true)}" method="post">
<input type="hidden" name="confirm_gopay" value="1" />
<input type="hidden" name="inline" value="{$INLINE_MODE}">
<input type="hidden" name="fee" value="{$fee}" />
<input type="hidden" name="feeWithTax" value="{$feeWithTax}" />
<input type="hidden" name="paymentChannel" value="{$paymentChannel}" />
<input type="hidden" name="paymentSwift" value="{$paymentSwift}" />

{if $cart->id && Cart::getTotalCart($cart->id)}
	<table id="cart_summary" class="std table-bordered">
		<tr>
			<th class="cart_product first_item">Produkt</th>
			<th class="cart_description item">Popis</th>
			<th class="cart_ref item">Dostupnost</th>
			<th class="cart_unit item">Cena za kus</th>
			<th class="cart_quantity item">Množství</th>
			<th class="cart_total item">Celkem</th>
		</tr>
	{assign var=cart_info value=$cart->getSummaryDetails()}
		<tr></tr>
	{foreach $cart_info.products as $product_cart}
		<tr>
			<td class="cart_product"><img src="{$link->getImageLink($product_cart.link_rewrite, $product_cart.id_image, 'kosik_default')|escape:'html'}" alt="{$product_cart.name|escape:'htmlall':'UTF-8'}"  /></td>
			<td class="cart_description"><p class="s_title_block">{$product_cart.name}</p></td>
			<td class="cart_ref">{if {Product::skladovost($product_cart.id_product,"skladem")}}Skladem{else}do 14 dní{/if}</td>
			<td class="cart_unit">
				<span class="price">{if isset($product_cart.is_discounted) && $product_cart.is_discounted}
					<span style="text-decoration:line-through;">{convertPrice price=$product_cart.price_without_specific_price}</span><br />
				{/if}
				{if !$priceDisplay}
					{convertPrice price=$product_cart.price_wt}
				{else}
					{convertPrice price=$product_cart.price}
				{/if}
				</span>
			</td>
			<td  class="cart_quantity cart_discount_delete">{$product_cart.quantity}</td>
			<td class="cart_total"><span class="price">{displayPrice price=$product_cart.total_wt}</span></td>
		</tr>
	{/foreach}
	{foreach $cart_info.discounts as $sleva_cart}
			<tr class="cart_voucher">
			<td class="cart_discount_img cart_product"><img src="/themes/leodig/img/helveti/iko-sleva.png" alt="Slevový kupon"></td>
			<td colspan="2" class="cart_discount_name cart_description">
				<p class="s_title_block">{$sleva_cart.name}</p>
			</td>
			<td class="cart_discount_price cart_unit"><span class="price-discount price"> -{displayPrice price=$sleva_cart.value_real} </span></td>
			<td class="cart_discount_delete cart_quantity">
			1
			</td>
			<td class="cart_discount_price cart_total"> <span class="price-discount price">
			-{displayPrice price=$sleva_cart.value_real} 
			</span></td>
		</tr>
	{/foreach}
		{******DAREK ZDARMA************}
		{*
		{if $cart_info.total_price>4000}
		<tr>
					<td class="cart_product"><a href="http://www.helveti.cz/vanoce-2014" target="_blank"><img src="http://www.helveti.cz/themes/leodig/img/helveti/kosikdareknuz.png" title="Zavírací nůž - zdarma" alt="Zavírací nůž - zdarma" width="81"></a></td>
					<td class="cart_description"><p class="s_title_block"><a href="http://www.helveti.cz/vanoce-2014" target="_blank">Zavírací nůž - dárek</a></p></td>
					<td class="cart_ref">skladem</td>
					<td class="cart_unit"><span class="price">ZDARMA</span></td>
					<td class="cart_quantity"></td>
					<td class="cart_total"><span class="price">ZDARMA</span></td>
		</tr>
		{/if}
		*}
			{******POJISTENI ZDARMA************}
		<tr>
					<td class="cart_product"><a href="http://www.helveti.cz/pojisteni-hodinek" target="_blank"><img src="http://www.helveti.cz/themes/leodig/img/helveti/pojisteni.png" title="Pojištění hodinek na 1 rok" alt="Pojištění hodinek na 1 rok" width="81"></a></td>
					<td class="cart_description"><p class="s_title_block"><a href="http://www.helveti.cz/pojisteni-hodinek" target="_blank">Pojištění hodinek na 1 rok</a></p></td>
					<td class="cart_ref">skladem</td>
					<td class="cart_unit"><span class="price">ZDARMA</span></td>
					<td class="cart_quantity"></td>
					<td class="cart_total"><span class="price">ZDARMA</span></td>
				</tr>
		<tr class="doprava_shrnuti">
			<td class="cart_product">
				<img src="{$img_dir}helveti/ico-validation-doprava.png" alt="Ikonka dopravy">
			</td>
			<td colspan="4" class="cart_description">
				Doprava:  <strong>{$cart_info.carrier->name} </strong>
			</td>
			<td class="cart_total">
			{if $cart_info.total_shipping>0}{displayPrice price=$cart_info.total_shipping}{else}ZDARMA{/if}
			</td>
		</tr>
		<tr class="platba_shrnuti">
			<td class="cart_product">
				<img src="{$img_dir}helveti/ico-validation-platba.png" alt="Ikonka platby">
			</td>
			<td colspan="4" class="cart_description">
				Způsob platby: <strong>Online platba</strong>
			</td>
			<td class="cart_total">
				ZDARMA
			</td>
		</tr>
</table>
<p class="celkem_kosik">celkem: <span class="cena_celkem">{displayPrice price=$cart_info.total_price}</span></p>
{/if}
<div class="clearfix">	</div> 

<div class="cart_navigation" id="cart_navigation">
<div class="row">
	<input type="submit" value="{l s='Odeslat objednávku' mod='add_gopay_new'}" class="standard-checkout pull-right" />
	</div>
	<div class="row">
	<div class="tlacitko-zpet">
	<a href="{$link->getPageLink('order', true, NULL, "step=3")|escape:'html'}" class="zpet-do-obchodu"><i class="fa fa-chevron-left"></i> {l s='Zpět na výběr platby' mod='add_gopay_new'}</a>
	</div>
	<div class="souhlas-obchodni-podminky">

	Kliknutím na tlačítko <strong>"Odeslat objednávku"</strong> souhlasím s <a href="{$base_dir}obchodni-podminky?content_only=1" class="iframe podminky">obchodními podmínkami</a>.
	<script type="text/javascript">
		$(document).ready(function() {
	        $("a.iframe").fancybox({
	            'type' : 'iframe',
	            'width':600,
	            'height':600
	        });
	    });
	</script>
	</div>
</div>
</div>
	
</form>
{/if}


{if $INLINE_MODE}
<script type="text/javascript">
    $(document).ready(function () {
        $("#submit_payment").click(function (e) {
            e.preventDefault();
		$('.hideOnSubmit').hide();

            $.ajax({
		url: "{$link->getModuleLink('add_gopay_new', 'validation', [], true)}",
type: 'POST',
dataType: 'json',
data: $("#gopay-payment-button").serialize()
            }).done(function (data) {
if(!data.errors)
{
	_gopay.checkout({
		gatewayUrl: data.url,
		inline: true
	});
} else {
	$('#inline_errors').html(data.errors.logs);
	$('#inline_errors').show();
	$('.hideOnSubmit').show();
}
		}).error(function(XMLHttpRequest, textStatus, errorThrown) {
 				alert('Chyba: ' + textStatus + " / " + XMLHttpRequest.responseText + " / " + errorThrown);
            });
        });
    });
</script>
<script src="https://gate.gopay.cz/gp-gw/js/embed.js"></script>
{else}
{if !$ORDER_MODE}
<script type="text/javascript">
	var text = "{l s='Your order is executed!' mod='add_gopay_new'}";
	var text1 = "{l s='Wait until the process is completed orders.' mod='add_gopay_new'}";
	$(document).on('click', '.hideOnSubmit', function(e){
		$.fancybox({
'content': '<div style=" border:#320809 2px solid; width:300px; height:100%;-webkit-border-radius: 5px 5px 5px 5px; border-radius: 5px 5px 5px 5px;"><center style="margin: 0px 0 0px; background-color:#161616; padding:10px;"><div class="circle_GP"></div><div class="circle1_GP"></div><b style="color:#FFFFFF; padding:10px;">'+ text + '</b></center><div style="text-align:center; padding:10px;">'+ text1 + '</div></div>',
'modal': true,
'autoDimensions': true,
'padding': 1,
'width':   1087,
'height':  610
		});
	});
</script>
{/if}
{/if}