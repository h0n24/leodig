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

{assign var=nox_pruchod value=0}
{assign var=nox_zobrazeno_dlazdic value=0}
{if isset($products)}
	<!-- Products list -->
<div id="product_list" class="products_block  block {if Configuration::get('leoview')==0}view-list{/if}">
	<div class="products-item clearfix">
	{foreach from=$products item=product name=products}
		{if ($product@iteration+$nox_zobrazeno_dlazdic)%Configuration::get('productlistcols')==1 || Configuration::get('productlistcols')==1}
			
        {/if}
		{assign var='proReduce' value=""}
		{if isset($product.specific_prices.reduction)}
			{if $product.specific_prices.reduction_type == 'percentage'}
				{assign var='proReduce' value=$product.specific_prices.reduction*100}
			{elseif $product.specific_prices.reduction_type == 'amount'}
				{assign var='proReduce' value=round((1-($product.price/($product.price+$product.specific_prices.reduction)))*100)}
			{/if}
		{/if}
		{*nox*}
		{assign var=nox_pruchod value=$nox_pruchod+1}
		{if $nox_pruchod%30==6}
		<div class="col-xs-12 col-sm-{(12/Configuration::get('productlistcols'))} product_block ajax_block_product block-vyhoda-productlist-container">		
			<div class="product-container clearfix">
				<div class="center_block">				
					<div class="block-vyhoda-productlist">
						{assign var=zobrazena_dlazdice value=-1}
						{assign var=nova_zobrazena_dlazdice value=1|rand:14}
						{while $nova_zobrazena_dlazdice == $zobrazena_dlazdice}
  								{assign var=nova_zobrazena_dlazdice value=1|rand:14}	
						{/while}
						{assign var=zobrazena_dlazdice value=$nova_zobrazena_dlazdice}
						<p class="hidden-xs"><a title="" href="{$link->getCMSLink('9')}"><img class="img-responsive" style="border-radius: 5px;" src="{$img_dir}helveti/banner2/{$zobrazena_dlazdice}.jpg" alt=""></a></p>
					</div>		
				</div>
			</div>	
		</div>
		{assign var=nox_zobrazeno_dlazdic value=$nox_zobrazeno_dlazdic+1}
		{/if}

			<div class="col-xs-12 col-sm-{(12/Configuration::get('productlistcols'))} product_block ajax_block_product ">		
				<div class="product-container clearfix">
					<div class="center_block">								
						<a href="{$product.link|escape:'htmlall':'UTF-8'}" class="product_image" title="{$product.name|escape:'htmlall':'UTF-8'}">
							<img class="img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" alt="{if !empty($product.legend)}{$product.legend|escape:'htmlall':'UTF-8'}{else}{$product.name|escape:'htmlall':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'htmlall':'UTF-8'}{else}{$product.name|escape:'htmlall':'UTF-8'}{/if}" />
							{*nox*}
								{if $nox_pruchod<11 && Product::getTop200st($product.id_product)}<span class="top">TOP {$nox_pruchod}</span>{/if}
							{*!nox*}
							{* {if isset($product.new) && $product.new == 1}<span class="new">{l s='New'}</span>{/if} *}
							{if $proReduce}<span class="hot">{l s='Sleva'} -{$proReduce}%</span>{/if}
							{if {Product::skladovost($product.id_product,"skladem")}} <span class="skladem">{l s='Skladem'}</span>{/if}
							{if $product.condition=="used"} <span class="bazar">{l s='Bazar'}</span>{/if}
						</a>
					</div>
					<div class="right_block">
						{if Product::jeNovinka($product.id_product)}<span class="discount">{l s='New'}</span>{/if}
						{* {if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}<span class="on_sale">{l s='On sale!'}</span>{elseif isset($product.reduction) && $product.reduction && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}<span class="discount">{l s='Reduced price!'}</span>
						{/if} *}
						<h4 class="name">{if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}<a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.name|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a>
						</h4>
					
						<a class="button ajax_add_to_cart_button exclusive pull-left" href="{$product.link|escape:'htmlall':'UTF-8'}" title="{l s='Detail'}"><span>{l s='Detail'}</span></a>
						
						{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
							<div class="content_price price_container">
								{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
								<span class="price {if $product.reduction}zlevneno{/if}">
									{if !$priceDisplay}
										{if $product.reduction}<span class="cena_pred" style="text-decoration:line-through">{convertPrice price=$product.price_without_reduction}</span>{/if}
										{convertPrice price=$product.price}
									{else}
										{convertPrice price=$product.price_tax_exc}
									{/if}
								</span><br />{/if}
								{if isset($product.available_for_order) && $product.available_for_order && !isset($restricted_country_mode)}<span class="availability">{if ($product.allow_oosp || $product.quantity > 0)}{l s='Available'}{elseif (isset($product.quantity_all_versions) && $product.quantity_all_versions > 0)}{l s='Product available with different options'}{else}<span class="warning_inline">{l s='Out of stock'}</span>{/if}</span>{/if}
							</div>
					
								{if isset($product.online_only) && $product.online_only}<span class="online_only">{l s='Online only'}</span>{/if}
						{/if}
						{*
						{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
							{if ($product.allow_oosp || $product.quantity > 0)}
								{if isset($static_token)}
									<a class="button ajax_add_to_cart_button exclusive pull-left" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html'}" title="{l s='Add to cart'}"><span>{l s='Add to cart'}</span></a>
								{else}
									<a class="button ajax_add_to_cart_button exclusive pull-left" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}", false)|escape:'html'}" title="{l s='Add to cart'} ">{l s='Add to cart'}</a>
								{/if}						
							{else}
								<span class="exclusive button pull-left">{l s='Add to cart'}</span>
							{/if}
						{/if}
						*}
						
						  
						{assign var=pocet_hvezd value=Product::pocetHeurekaHvezd($product.id_product,'hvezdy')} 	
						<div class="rating_box heureka-ratign">
						{for $i=1 to 5}
							<i class="fa fa-star{if $i>$pocet_hvezd}-o{/if}"></i>
						{/for}
						</div>
						{*
						<a class="rating_box leo-rating-{$product.id_product}" href="#" rel="{$product.id_product}" style="display:none">
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>      
						</a>
						*}
						<a  href="#" id="wishlist_button{$product.id_product}" class="btn-tooltip fa fa-heart" onclick="LeoWishlistCart('wishlist_block_list', 'add', '{$product.id_product}', $('#idCombination').val(), 1 ); return false;" title="{l s='Add to wishlist'}"></a>
						
												  {if isset($comparator_max_item) && $comparator_max_item}
							<p class="compare">
								<input type="checkbox" class="comparator" id="comparator_item_{$product.id_product}" value="comparator_item_{$product.id_product}" {if isset($compareProducts) && in_array($product.id_product, $compareProducts)}checked="checked"{/if} autocomplete="off"/> 
								<label for="comparator_item_{$product.id_product}">{l s='Porovnat'}</label>
								<div class="spinner-product-list spinner loading-comparator_item_{$product.id_product}" style="display:none;"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>
							</p>
						{/if}
					</div>								
				</div>
			</div>
		{if ($product@iteration+$nox_zobrazeno_dlazdic)%Configuration::get('productlistcols')==0||$smarty.foreach.products.last}
		{/if}
	{/foreach}
	</div>
	</div>
	<!-- /Products list -->
{/if}
{literal}
<script>
// přilepení odesílacího tlačítka filtrace při scrollu	

	$(window).scroll(function () {
		slajdujTlacitko();
	});
	
	function slajdujTlacitko(){
				var position = $('#PM_ASSubmitSearch_obal').offset().top + 72;
		var viewportHeight = $(window).height();
		var windowPosition = $(window).scrollTop();

	    if ((windowPosition + viewportHeight) < position) {
  			$('#PM_ASSubmitSearch_obal').addClass('fixed');
	    } else {
	    	$('#PM_ASSubmitSearch_obal').removeClass('fixed');
	    }
	}
</script>
{/literal}