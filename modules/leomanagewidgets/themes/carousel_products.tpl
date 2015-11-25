{if !empty($mproducts)}
{$itemsperpage=$datas.configs.itemspage}
{$columnspage=$datas.configs.columns}
<div class="carousel slide" id="{$tabname}-{$datas.id_leomanagewidgets}-carousel">
	 {if count($mproducts)>1}	
	<a class="carousel-control left" href="#{$tabname}-{$datas.id_leomanagewidgets}-carousel"   data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" href="#{$tabname}-{$datas.id_leomanagewidgets}-carousel"  data-slide="next">&rsaquo;</a>
	{/if}
	<div class="carousel-inner">
	{foreach from=$mproducts item=products name=mypLoop}
		<div class="item {if $smarty.foreach.mypLoop.first}active{/if}">
				{foreach from=$products item=product name=products}
				{if $product@iteration%$columnspage==1&&$columnspage>1}
				  <div class="row products-item ">
				{/if}
				{assign var='proReduce' value=""}
				{if $product.specific_prices.reduction}
					{if $product.specific_prices.reduction_type == 'percentage'}
						{assign var='proReduce' value=$product.specific_prices.reduction*100}
					{elseif $product.specific_prices.reduction_type == 'amount'}
						{assign var='proReduce' value=ceil($product.specific_prices.reduction/$product.price*100)}
					{/if}
				{/if}
					<div class="{if $datas.ncolumn == 5}leo-md-5{else}col-sm-{$datas.scolumn}{/if} col-sm-4 col-xs-12 product_block ajax_block_product">
						<div class="product-container clearfix">
							<div class="center_block">								
								<a href="{$product.link|escape:'htmlall':'UTF-8'}" class="product_image" title="{$product.name|escape:'htmlall':'UTF-8'}">
									<img class="img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" alt="{$product.legend|escape:'htmlall':'UTF-8'}" />
									{* {if isset($product.new) && $product.new == 1}<span class="new">{l s='New' mod='leomanagewidgets'}</span>{/if} *}
									{if $proReduce}<span class="hot">{l s='Sleva'} -{$proReduce}%</span>{/if}
									{if {Product::skladovost($product.id_product,"skladem")}}<span class="skladem">{l s='Skladem'}</span>{/if}
								</a>
								
							</div>
							<div class="right_block">
								{if Product::jeNovinka($product.id_product)}<span class="discount">{l s='New' mod='leomanagewidgets'}</span>{/if}
								{* {if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}<span class="on_sale">{l s='On sale!' mod='leomanagewidgets'}</span>{elseif isset($product.reduction) && $product.reduction && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}<span class="discount">{l s='Reduced price!' mod='leomanagewidgets'}</span>
								{/if} *}
								<h4 class="name">{if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}<a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.name|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h4>
													
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
											</span>
										{/if}								
									</div>
														
								{/if}
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
								<a  href="#" id="wishlist_button{$product.id_product}" class="btn-tooltip fa fa-heart" onclick="LeoWishlistCart('wishlist_block_list', 'add', '{$product.id_product}', $('#idCombination').val(), 1 ); return false;" title="{l s='Add to wishlist' mod='leomanagewidgets'}"></a>
								{*
								{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
									{if ($product.allow_oosp || $product.quantity > 0)}
										{if isset($static_token)}
											<a class="button ajax_add_to_cart_button exclusive pull-left" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html'}" title="{l s='Add to cart' mod='leomanagewidgets'}"><span>{l s='Add to cart' mod='leomanagewidgets'}</span></a>
										{else}
											<a class="button ajax_add_to_cart_button exclusive pull-left" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}", false)|escape:'html'}" title="{l s='Add to cart' mod='leomanagewidgets'} ">{l s='Add to cart' mod='leomanagewidgets'}</a>
										{/if}						
									{else}
										<span class="exclusive button pull-left">{l s='Add to cart' mod='leomanagewidgets'}</span>
									{/if}
								{/if}
								*}
								
							</div>								
						</div>
					</div>
					
				{if ($product@iteration%$columnspage==0||$smarty.foreach.products.last)&&$columnspage>1}
					</div>
				{/if}
					
				{/foreach}
		</div>		
	{/foreach}
	</div>
</div>
{/if}