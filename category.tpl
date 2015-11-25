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

{if isset($category)}
	{if $category->id AND $category->active}
		<h1>
			{Category::PredNazvemModeloveRady($category->id_parent)}
			{strip}
				{$category->name|escape:'htmlall':'UTF-8'}
				{if isset($categoryNameComplement)}
					{$categoryNameComplement|escape:'htmlall':'UTF-8'}
				{/if}
			{/strip}
		</h1>
		
		
		{if $scenes || $category->description || $category->id_image}
		<div class="content_scene_cat">
			{if $scenes}
				<!-- Scenes -->
				{include file="$tpl_dir./scenes.tpl" scenes=$scenes}
			{else}
				<!-- Category image -->
				{if $category->id_image}
				<div class="align_center">
					<img class="img-responsive" src="{$link->getCatImageLink($category->link_rewrite, $category->id_image, 'category_default')|escape:'html'}" alt="{$category->name|escape:'htmlall':'UTF-8'}" title="{$category->name|escape:'htmlall':'UTF-8'}" id="categoryImage"  />
				</div>
				{/if}
			{/if}

			{if $category->description}
				<div class="cat_desc">
					<div>{$category->description}</div>
				</div>
			{/if}
		</div>
		{/if}
	{*
		{if isset($subcategories)}
		<!-- Subcategories -->
		<div id="subcategories">
			<h3>{l s='Subcategories'}</h3>
			<div class="inline_list block clearfix">
			{foreach from=$subcategories item=subcategory}
				<div class="category-container col-md-4 col-sm-4 col-xs-12">
					<a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$subcategory.name|escape:'htmlall':'UTF-8'}" class="img ">
						{if $subcategory.id_image}
							<img class="img-responsive" src="{$link->getCatImageLink($subcategory.link_rewrite, $subcategory.id_image, 'subcat_default')|escape:'html'}" alt=""  />
						{else}
							<img class="img-responsive" src="{$img_cat_dir}default-subcat_default.jpg" alt=""  />
						{/if}
					</a>
					<h3 class="s_title_block"><a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}" class="cat_name ">{$subcategory.name|escape:'htmlall':'UTF-8'}</a></h3>
					{if $subcategory.description}
						<div class="cat_desc">{$subcategory.description|strip_tags:'UTF-8'|truncate:60:'...':true}</div>
					{/if}
				</div>
			{/foreach}
			</div>
		</div>
		{/if}
	*}
		{if $products}
			<div class="content_sortPagiBar">
				<div class="sortPagiBar row">

					<div>
						<div class="inner">
							<span class="resumecat category-product-count">
								{include file="$tpl_dir./category-count.tpl"}
							</span>
							{include file="./product-sort.tpl"}
							{include file="./product-compare.tpl"}
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
						 <div class="col-lg-3 col-md-3 porovnat-pag-bot">
							<div class="inner">
								{include file="./product-compare.tpl" paginationId='bottom'}
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-8 col-xs-12 obal-pagination-bottom">
							<div class="inner">
								{include file="./pagination.tpl" paginationId='bottom'}
							</div>
						</div>						
						
					</div>
				</div>
			</div>
			{/if}
			</div></div></section>


		{/if}
	{elseif $category->id}
		<p class="warning">{l s='This category is currently unavailable.'}</p>
	{/if}
{/if}
