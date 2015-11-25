{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{capture name=path}{l s='Order confirmation'}{/capture}

{assign var='current_step' value='payment'}
{include file="$tpl_dir./order-steps.tpl"}

<div class="success success-objednavka-kompletni"><h1>{l s='Vaše objednávka '}<span class="zdarma_barva">{l s='byla odeslána.'}</span>{l s=' Děkujeme!'}</h1> </div>

{include file="$tpl_dir./errors.tpl"}

{assign var='objednavka' value=OrderConfirmationController::detailyObjednavky()}

<div class="infobox-kosik-container">
		<div id="rekapitulace_box_kosik" class="box_kosik">
			<fieldset>
			<legend>Rekapitulace objednávky</legend>
			<div class="informace_o_objednavce">
				Číslo objednávky: <strong>{$objednavka->id}</strong>
			</div>
			{if $objednavka->module=="bankwire"}
				<div class="informace_o_objednavce">
				Číslo účtu: <strong>2500275421 / 2010</strong>
				</div>
				<div class="informace_o_objednavce">
				Variabilní symbol: <strong>{$objednavka->reference}</strong>
				</div>
			{/if}

			<table class="rekapitulace_zbozi">
		{foreach $objednavka->produkty as $product_cart}
			<tr>
			<td class="rekapitulace_pocet">
					<img src="{$link->getImageLink($product_cart.product_id, $product_cart.image->id_image, 'kosik_default')|escape:'html'}" alt="{$product_cart.product_name|escape:'htmlall':'UTF-8'}"  width="60"/> 
				</td>
				<td class="rekapitulace_produkt">
					<span class="rekapitulace_nazev">{$product_cart.product_name}</span>
				</td>
				<td class="rekapitulace_pocet">
					{$product_cart.product_quantity} ks 
				</td>
				<td class="rekapitulace_cena">
					{displayPrice price=$product_cart.total_price_tax_incl} 
				</td>
			</tr>
		{/foreach}
		{* NUZ JAKO DAREK
		{if $objednavka->total_paid>4000}
		<tr>
			<td class="rekapitulace_pocet">
					<img src="http://www.helveti.cz/themes/leodig/img/helveti/kosikdareknuz.png" title="Zavírací nůž - zdarma" alt="Zavírací nůž - zdarma" width="50"> 
				</td>
				<td class="rekapitulace_produkt">
					<span class="rekapitulace_nazev">Zavírací nůž - dárek</span>
				</td>
				<td class="rekapitulace_pocet">
					1 ks 
				</td>
				<td class="rekapitulace_cena">
					<span class="zdarma_barva">ZDARMA</span>
				</td>
			</tr>
			{/if}
			*}
			<tr>
			<td class="rekapitulace_pocet">
					<img src="http://www.helveti.cz/themes/leodig/img/helveti/pojisteni.png" title="Pojištění hodinek na 1 rok" alt="Pojištění hodinek na 1 rok" width="50"> 
				</td>
				<td class="rekapitulace_produkt">
					<span class="rekapitulace_nazev">Pojištění hodinek na 1 rok</span>
				</td>
				<td class="rekapitulace_pocet">
					1 ks 
				</td>
				<td class="rekapitulace_cena">
					<span class="zdarma_barva">ZDARMA</span>
				</td>
			</tr>
			<tr>
				<td class="rekapitulace_doprava" colspan="2">
					<span class="rekapitulace_doprava_nazev">Doprava: <strong>{$objednavka->doprava}</strong></span>
				</td>
				<td class="rekapitulace_pocet">
				</td>
				<td class="rekapitulace_doprava_cena">
					{if $objednavka->total_shipping_tax_incl>0}
						{displayPrice price=$objednavka->total_shipping_tax_incl} 
					{else}
						<span class="zdarma_barva">ZDARMA</span>
					{/if}
				</td>
			</tr>
			<tr>
				<td class="rekapitulace_platba" colspan="2">
					<span class="rekapitulace_platba_nazev">Platba: <strong>
						{if $objednavka->module=="bankwire"}
							Bankovním převodem
						{elseif $objednavka->module=="cashondelivery"}
							Hotově při převzetí
						{else}
							{$objednavka->payment}
						{/if}
						</strong></span>
				</td>
				<td class="rekapitulace_pocet">
				</td>
				<td class="rekapitulace_platba_cena">
					<span class="zdarma_barva">ZDARMA</span>
				</td>
			</tr>
			<table>
			<tr class="rekapitulace_celkem">
				<td class="rekapitulace_celkem_zbozi">Celkem za zboží</td>
				
				<td class="rekapitulace_cena">
					{displayPrice price=$objednavka->total_paid}
				</td>
			</tr>
			</table>			
			</fieldset>
		</div>

</div>









<div class="potvrzeni-objednavky-obsah">


{$HOOK_PAYMENT_RETURN}
{$HOOK_ORDER_CONFIRMATION}
</div>

<br />

<div class="potvrzeni-objednavky-linky">
{if $is_guest}
	{*<p>{l s='Your order ID is:'} <span class="bold">{$id_order_formatted}</span> . {l s='Your order ID has been sent via email.'}</p> *}
	<a href="{$link->getPageLink('history', true)|escape:'html'}" title="{l s='Back to orders'}"><span class="fa fa-shopping-cart" style="margin-right: 10px;"></span>{l s='Sledovat mou zásilku'}</a>
	{*<a href="{$link->getPageLink('guest-tracking', true, NULL, "id_order={$reference_order}&email={$email}")|escape:'html'}" title="{l s='Follow my order'}"><span class="fa fa-shopping-cart" style="margin-right: 10px;"></span>{l s='Follow my order'}</a>*}
{else}	
	<a href="{$link->getPageLink('history', true)|escape:'html'}" title="{l s='Back to orders'}"><span class="shrnuti-ico-kosik"></span>{l s='Sledovat mou zásilku'}</a>
	<a href="{$link->getPageLink('history', true)|escape:'html'}" title="{l s='Back to orders'}"><span class="shrnuti-ico-nakupy"></span>{l s='Moje nákupy'}</a>
	<a href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html'}" class="logout" rel="nofollow"><span class="shrnuti-ico-odhlasit"></span>{l s='Odhlásit se'}</a>
{/if}
</div>

<div class="potvrzeni-tlacitka">
<a href="{$base_dir}" class="zpet-do-eshopu button"><em class="fa fa-chevron-left"></em>{l s='Zpět do eshopu'}</a>

</div>

<!-- Google Code for Konverze Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 991679542;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "tWwhCLq2_QkQtqjv2AM";
var google_conversion_value = {$total_to_pay};
var google_conversion_currency = "CZK";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/991679542/?value={$total_to_pay}&amp;currency_code=CZK&amp;label=tWwhCLq2_QkQtqjv2AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Měřicí kód Sklik.cz -->
<iframe width="119" height="22" frameborder="0" scrolling="no" src="http://c.imedia.cz/checkConversion?c=100008015&color=ffffff&v={$total_to_pay}"></iframe>


<!-- Měřicí kód Zbozi.cz -->
<iframe src="http://www.zbozi.cz/action/109243/conversion?chsum=-X_jnU3sr0UddAqlX130zw==" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="position:absolute; top:-3000px; left:-3000px; width:1px; height:1px; overflow:hidden;"></iframe>

<!-- Měřicí kód Heureka.cz -->
{literal}
<script type="text/javascript">
var _hrq = _hrq || [];
    _hrq.push(['setKey', 'ABF4193AD90DA96C26E88D8E3E39A19A']);
    _hrq.push(['setOrderId', '{/literal}{$objednavka->id}{literal}']);
    {/literal}
    {foreach $objednavka->produkty as $product_cart}
    _hrq.push(['addProduct', '{$product_cart.product_name}', '{$product_cart.total_price_tax_incl}', '{$product_cart.product_quantity}']);
    {/foreach}
    {literal}
       
    _hrq.push(['trackOrder']);

(function() {
    var ho = document.createElement('script'); ho.type = 'text/javascript'; ho.async = true;
    ho.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.heureka.cz/direct/js/cache/1-roi-async.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ho, s);
})();
</script>
{/literal}

{literal}
<!-- Facebook Conversion Code for helveti.cz - nákup -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6019003112247', {'value':'{/literal}{$total_to_pay}{literal}','currency':'CZK'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6019003112247&amp;cd[value]={/literal}{$total_to_pay}{literal}&amp;cd[currency]=CZK&amp;noscript=1" /></noscript>
{/literal}