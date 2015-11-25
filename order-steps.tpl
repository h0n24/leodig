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

{* Assign a value to 'current_step' to display current style *}
{capture name="url_back"}
{if isset($back) && $back}back={$back}{/if}
{/capture}

{if !isset($multi_shipping)}
	{assign var='multi_shipping' value='0'}
{/if}

{if !$opc}
<!-- Steps -->
<div class="podcara-steps"></div>
<ul class="step" id="order_step">
	<li class="{if $current_step=='summary'}step_current{else}{if $current_step=='payment' || $current_step=='shipping' || $current_step=='address' || $current_step=='login'}step_done{else}step_todo{/if}{/if}">
		{if $current_step=='payment' || $current_step=='shipping' || $current_step=='address' || $current_step=='login'}
		<a href="{$link->getPageLink('order', true, NULL, "{$smarty.capture.url_back}&multi-shipping={$multi_shipping}")}">
			<span class="step-pred"></span><span class="step-in"><span class="step-cislo">1.</span> <span class="step-nazev">{l s='Košík'}</span></span><span class="step-po">
		</a>
		{else}
			<span class="step-pred"></span><span class="step-in"><span class="step-cislo">1.</span> <span class="step-nazev">{l s='Košík'}</span></span><span class="step-po">
		{/if}
	</li>
{*	<li class="{if $current_step=='login'}step_current{else}{if $current_step=='payment' || $current_step=='shipping' || $current_step=='address'}step_done{else}step_todo{/if}{/if}">
*		{if $current_step=='payment' || $current_step=='shipping' || $current_step=='address'}
*		<a href="{$link->getPageLink('order', true, NULL, "{$smarty.capture.url_back}&step=1&multi-shipping={$multi_shipping}")}">
*			2. {l s='Login'}
*		</a>
*		{else}
*			<span>2. {l s='Login'}</span>
*		{/if}
*	</li>*}
	<li class="{if $current_step=='login'||$current_step=='address'}step_current{else}{if $current_step=='payment' || $current_step=='shipping'}step_done{else}step_todo{/if}{/if} druhy_kosik">
		{if $current_step=='payment' || $current_step=='shipping'} 
		<a href="{$link->getPageLink('order', true, NULL, "{$smarty.capture.url_back}&step=1&multi-shipping={$multi_shipping}")}">
			<span class="step-pred"></span><span class="step-in"><span class="step-cislo">2.</span> <span class="step-nazev">{l s='Dodací údaje'}</span></span><span class="step-po"> 
		</a>
		{else}
			<span class="step-pred"></span><span class="step-in"><span class="step-cislo">2.</span> <span class="step-nazev">{l s='Dodací údaje'}</span></span><span class="step-po">
		{/if}
	</li>
	 
	<li class="{if $current_step=='shipping'}step_current{else}{if $current_step=='payment'}step_done{else}step_todo{/if}{/if} treti_kosik">
		{if $current_step=='payment'}
		<a href="{$link->getPageLink('order', true, NULL, "{$smarty.capture.url_back}&step=2&multi-shipping={$multi_shipping}")}">
			<span class="step-pred"></span><span class="step-in"><span class="step-cislo">3.</span> <span class="step-nazev">{l s='Doprava a platba'}</span></span><span class="step-po">
		</a>
		{else}
			<span class="step-pred"></span><span class="step-in"><span class="step-cislo">3.</span> <span class="step-nazev">{l s='Doprava a platba'}</span></span><span class="step-po">
		{/if}
	</li>
	<li id="step_end" class="{if $current_step=='payment'}step_current_end{else}step_todo{/if} ctvrty_kosik">
		<span class="step-pred"></span><span class="step-in"><span class="step-cislo">4.</span> <span class="step-nazev">{l s='Shrnutí'}</span></span><span class="step-po"></span>
	</li>
	
</ul>
<!-- /Steps -->
{/if}
{if $current_step != 'summary' && $page_name != 'module-bankwire-payment' && $page_name != 'module-cashondelivery-validation' && $page_name != 'order-confirmation'}
<div class="infobox-kosik-container">
	<div id="info_box_kosik" class="box_kosik">
		<fieldset>
		<legend>Potřebujete poradit?</legend>
		<div id="kontaktni_boxik">
			<table>
				<tr>
					<td id="box_fotka"><img src="{$img_dir}/helveti/robert.jpg" alt="Fotografie Jiří Štencek"></td>
					<td id="box_popis">
						<span id="box_jmeno">Jiří Štencek</span><br/>
						<span id="box_email"><i class="fa fa-envelope"></i> <a href="mailto:info@helveti.cz"><span class="txt">info@helveti.cz</span></a></span><br/>
						<span id="box_tel"><i class="fa fa-phone"></i> <span class="txt">+420 774 744 763</span></span>
					</td>
				</tr>	
			</table>
		</div>
		</fieldset>
	</div>
	{if $cart->id && Cart::getTotalCart($cart->id)}
		<div id="rekapitulace_box_kosik" class="box_kosik">
			<fieldset>
			<legend>Rekapitulace objednávky</legend>
			<table class="rekapitulace_zbozi">
		{assign var=cart_info value=$cart->getSummaryDetails()}
		{foreach $cart_info.products as $product_cart}
			<tr>
				<td class="rekapitulace_produkt">
					<span class="rekapitulace_nazev">{$product_cart.name}</span>
				</td>
				<td class="rekapitulace_pocet">
					{$product_cart.cart_quantity} ks 
				</td>
				<td class="rekapitulace_cena">
					{displayPrice price=$product_cart.total_wt} 
				</td>
			</tr>
		{/foreach}
		{foreach $cart_info.discounts as $sleva_cart}
				<tr>
				<td class="rekapitulace_produkt">
					<span class="rekapitulace_nazev">{$sleva_cart.name}</span>
				</td>
				<td class="rekapitulace_pocet">
				1 ks 
				</td>
				<td class="rekapitulace_cena">
					-{displayPrice price=$sleva_cart.value_real} 
				</td>
			</tr>
		{/foreach}
		{* NUZ JAKO DAREK
		{if $cart_info.total_price>4000}
			<tr>
				<td class="rekapitulace_produkt">
					<span class="rekapitulace_nazev">Zavírací nůž - dárek</span>
				</td>
				<td class="rekapitulace_pocet">
				1 ks 
				</td>
				<td class="rekapitulace_cena">
					ZDARMA 
				</td>
			</tr>
			{/if}
			*}
			<tr>
				<td class="rekapitulace_produkt">
					<span class="rekapitulace_nazev">Pojištění hodinek na 1 rok</span>
				</td>
				<td class="rekapitulace_pocet">
				1 ks 
				</td>
				<td class="rekapitulace_cena">
					ZDARMA 
				</td>
			</tr>
		</table>
			<table>
			<tr class="rekapitulace_celkem">
				<td class="rekapitulace_celkem_zbozi">Celkem za zboží</td>
				<td class="rekapitulace_cena">
					{displayPrice price=Cart::getTotalCart($cart->id)}
				</td>
			</tr>
			</table>			
			</fieldset>
		</div>
		<div id="spodek_box_kosik">
		<a href="{$link->getPageLink('order', true, NULL, "{$smarty.capture.url_back}")}" class="uprava_kosiku">Upravit obsah košíku</a>
			{if $cart_info.total_shipping>0}
			<div id="kosik_box_doprava_placena">
				Doprava: {displayPrice price=$cart_info.total_shipping}
				</div>
			{else}
				<div id="kosik_box_doprava_zdarma"><img src="{$img_dir}helveti/cart-car.png" class="cart-car"> Doprava zdarma</div> 
			{/if}
		</div>
	{/if}
</div>
{/if}