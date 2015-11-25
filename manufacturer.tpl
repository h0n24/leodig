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

{include file="$tpl_dir./errors.tpl"}

{if !isset($errors) OR !sizeof($errors)}
	<h1>{l s='List of products by manufacturer'}&nbsp;{$manufacturer->name|escape:'htmlall':'UTF-8'}</h1>
	{if !empty($manufacturer->description) || !empty($manufacturer->short_description)}
		<div class="block">
			<div class="description_box">
				{if !empty($manufacturer->short_description)}
					<div>{$manufacturer->short_description|strip_tags|escape:'htmlall':'UTF-8'}</div>
					<div class="hide_desc hidden">{$manufacturer->description|strip_tags|escape:'htmlall':'UTF-8'}</div>
					<a href="#" class="lnk_more" onclick="$(this).prev().slideDown('slow'); $(this).hide(); return false;">{l s='More'}</a>
				{else}
					<div>{$manufacturer->description|strip_tags|escape:'htmlall':'UTF-8'}</div>
				{/if}
			</div>
		</div>
	{/if}

	{if $products}
		<div class="content_sortPagiBar">
			<div class="sortPagiBar row">
				<div class="col-sm-4 hidden-xs">
					<div class="inner">
					  <div class="btn-group" id="productsview">
						<span style="float: left;">{l s='Display:'}</span>
						<a class="btn-tooltip" title="{l s='Grid'}" href="#" rel="view-grid"><i class="fa fa-th {if Configuration::get('leoview')==1}active{/if}" ></i></a>
						<a class="btn-tooltip" title="{l s='List'}" href="#"  rel="view-list"><i class="fa fa-th-list {if Configuration::get('leoview')==0}active{/if}"></i></a>
					  </div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="inner pull-right">
						{include file="./product-compare.tpl"}
						{include file="./product-sort.tpl"}
					</div>
				</div>
			</div>
		</div>
		{include file="./product-list.tpl" products=$products}
		
		<div class="col-xs-12 sortPagiBar">
			<div class="row">
				<div class="col-sm-8 col-xs-12">
					<div class="inner">
						{include file="./pagination.tpl" paginationId='bottom'}
					</div>
				</div>						
				 <div class="col-sm-4 hidden-xs">
					<div class="inner">
						{include file="./product-compare.tpl" paginationId='bottom'}
					</div>
				</div>
			</div>
		</div>
	{else}
		<p class="warning">{l s='No products for this manufacturer.'}</p>
	{/if} 
{/if}
