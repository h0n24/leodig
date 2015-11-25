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

{capture name=path}{l s='Suppliers:'}{/capture}


<h1>{l s='Suppliers'}
	<span class="nbrmanufacturer pull-right">
		{strip}
			{if $nbSuppliers == 0}{l s='There are no suppliers.'}
			{else}
				{if $nbSuppliers == 1}
					{l s='There is %d supplier.' sprintf=$nbSuppliers}
				{else}
					{l s='There are %d suppliers.' sprintf=$nbSuppliers}
				{/if}
			{/if}
		{/strip}
	</span>
</h1>
{if isset($errors) AND $errors}
	{include file="$tpl_dir./errors.tpl"}
{else}

	{if $nbSuppliers > 0}
		<div class="block">
			<div id="suppliers_list">
			{assign var="limitcolumn" value="3"}
			{foreach $suppliers_list as $supplier}
				{if $supplier@iteration%$limitcolumn==1}
					<div class="box-item clearfix">
				{/if}
					<div class="box col-sm-{12/$limitcolumn} col-xs-12">
						<div class="box-content">
							<div class="left_side">
								<!-- logo -->
								<div class="logo">
									{if $supplier.nb_products > 0}
									<a href="{$link->getsupplierLink($supplier.id_supplier, $supplier.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$supplier.name|escape:'htmlall':'UTF-8'}">
									{/if}
										<img class="img-responsive" src="{$img_sup_dir}{$supplier.image|escape:'htmlall':'UTF-8'}-large_default.jpg" alt=""  />
									{if $supplier.nb_products > 0}
									</a>
									{/if}
								</div>
							</div>

							<div class="right_side">
								<h3 class="name">
									{if $supplier.nb_products > 0}
									<a href="{$link->getsupplierLink($supplier.id_supplier, $supplier.link_rewrite)|escape:'htmlall':'UTF-8'}">
									{/if}
									{$supplier.name|truncate:60:'...'|escape:'htmlall':'UTF-8'}
									{if $supplier.nb_products > 0}
									</a>
									{/if}
								</h3>
								<div class="description clearfix">
									{$supplier.description|strip_tags|escape:'htmlall':'UTF-8'}
								</div>
								<p class="cleaffix">
									{if $supplier.nb_products > 0}
										<a href="{$link->getsupplierLink($supplier.id_supplier, $supplier.link_rewrite)|escape:'htmlall':'UTF-8'}">
									{/if}
										<span>{if $supplier.nb_products == 1}{l s='%d product' sprintf=$supplier.nb_products|intval}{else}{l s='%d products' sprintf=$supplier.nb_products|intval}{/if}</span>
									{if $supplier.nb_products > 0}
										</a>
									{/if}
								</p>
							{if $supplier.nb_products > 0}
								<a class="button" href="{$link->getsupplierLink($supplier.id_supplier, $supplier.link_rewrite)|escape:'htmlall':'UTF-8'}">{l s='View products'}</a>
							{/if}
							</div>
						</div>
					</div>
				{if $supplier@iteration%$limitcolumn==0||$supplier@last}
					</div>
				{/if}
			{/foreach}
			</div>
			{include file="$tpl_dir./pagination.tpl"}
		</div>
	{/if}
{/if}
