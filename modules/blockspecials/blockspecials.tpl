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

<!-- MODULE Block specials -->
<div id="special_block_right" class="block products_block exclusive blockspecials">
	<h4 class="title_block">{l s='Specials' mod='blockspecials'}</h4>
	<div class="block_content">
	{if $special}
			<div class="products clearfix media">
				<a class="product_image pull-left" href="{$special.link|escape:'html'}"><img class="media-object" src="{$link->getImageLink($special.link_rewrite, $special.id_image, 'medium_default')|escape:'html'}" alt="{$special.legend|escape:html:'UTF-8'}" title="{$special.name|escape:html:'UTF-8'}" /></a>
				<div class="media-body">
					{if !$PS_CATALOG_MODE}
						{if $special.specific_prices}
							{assign var='specific_prices' value=$special.specific_prices}
							{if $specific_prices.reduction_type == 'percentage' && ($specific_prices.from == $specific_prices.to OR ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= $specific_prices.to && $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' >= $specific_prices.from))}
								<span class="reduction"><span>-{$specific_prices.reduction*100|floatval}%</span></span>
							{/if}
						{/if}
					{/if}

						<h4 class="s_title_block"><a href="{$special.link|escape:'html'}" title="{$special.name|escape:html:'UTF-8'}">{$special.name|escape:html:'UTF-8'}</a></h4>
					{if !$PS_CATALOG_MODE}
						<span class="price-discount price">{if !$priceDisplay}{displayWtPrice p=$special.price_without_reduction}{else}{displayWtPrice p=$priceWithoutReduction_tax_excl}{/if}</span>
						<span class="price">{if !$priceDisplay}{displayWtPrice p=$special.price}{else}{displayWtPrice p=$special.price_tax_exc}{/if}</span>
					{/if}
				</div>
			</div>
			<p>
			<a href="{$link->getPageLink('prices-drop')|escape:'html'}" title="{l s='All specials' mod='blockspecials'}">&raquo; {l s='All specials' mod='blockspecials'}</a>
			</p>
	{else}
			<p>{l s='No specials at this time' mod='blockspecials'}</p>
	{/if}
	</div>
</div>
<!-- /MODULE Block specials -->