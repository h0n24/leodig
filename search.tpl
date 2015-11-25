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

{capture name=path}{l s='Search'}{/capture}

<h1 {if isset($instantSearch) && $instantSearch}id="instant_search_results"{/if}>
{l s='Search'}&nbsp;{if $nbProducts > 0}"{if isset($search_query) && $search_query}{$search_query|escape:'htmlall':'UTF-8'}{elseif $search_tag}{$search_tag|escape:'htmlall':'UTF-8'}{elseif $ref}{$ref|escape:'htmlall':'UTF-8'}{/if}"{/if}
{if isset($instantSearch) && $instantSearch}<a href="#" class="close">{l s='Return to the previous page'}</a>{/if}
</h1>

{include file="$tpl_dir./errors.tpl"}
{if !$nbProducts}
	<p class="warning">
		{if isset($search_query) && $search_query}
			{l s='No results were found for your search'}&nbsp;"{if isset($search_query)}{$search_query|escape:'htmlall':'UTF-8'}{/if}"
		{elseif isset($search_tag) && $search_tag}
			{l s='No results were found for your search'}&nbsp;"{$search_tag|escape:'htmlall':'UTF-8'}"
		{else}
			{l s='Please enter a search keyword'}
		{/if}
	</p>
{else}
	<h3 class="nbresult warning"><span class="big">{if $nbProducts == 1}{l s='%d result has been found.' sprintf=$nbProducts|intval}{else}{l s='%d results have been found.' sprintf=$nbProducts|intval}{/if}</span></h3>

	<div class="content_sortPagiBar">
		<div class="sortPagiBar row">
			<div>
				<div class="inner">
				 {*} <div class="btn-group" id="productsview">
					<span style="float: left;">{l s='Display:'}</span>
					<a class="btn-tooltip" title="{l s='Grid'}" href="#" rel="view-grid"><i class="fa fa-th {if Configuration::get('leoview')==1}active{/if}" ></i></a>
					<a class="btn-tooltip" title="{l s='List'}" href="#"  rel="view-list"><i class="fa fa-th-list {if Configuration::get('leoview')==0}active{/if}"></i></a>
				  </div> *}
				  <span class="resumecat category-product-count"> {l s='%d' sprintf=$nbProducts|intval}<span class="w-normal"> Produktů</span> </span>
					{include file="./product-compare.tpl"}
					{include file="./product-sort.tpl"}
				</div>
			</div>
		</div>
	</div>
	{include file="./product-list.tpl" products=$products}
	{if $nb_products > $products_per_page} 
	<div class="container category-bot-pag"> 	
	<div class="col-xs-12 sortPagiBar">
		<div class="row">
				<div class="resumecat category-product-count col-lg-4 col-md-4">
							{($p)*$as_searchs[0]['products_per_page']-$as_searchs[0]['products_per_page']+1} -
						{if $p!=$pages_nb}{($p)*$as_searchs[0]['products_per_page']}{else}{$nb_products}{/if} <span class="w-normal">z</span>
								{include file="$tpl_dir./category-count.tpl"}
						</div>
			<div class="col-lg-5 col-md-5 col-sm-8 col-xs-12 obal-pagination-bottom">
				<div class="inner">
					{include file="./pagination.tpl" paginationId='bottom'}
				</div>
			</div>						
			 <div class="col-lg-3 col-md-3 porovnat-pag-bot">
				<div class="inner">
					{include file="./product-compare.tpl" paginationId='bottom'}
				</div>
			</div>
		</div>
	</div>
	</div>{/if}
{/if}
