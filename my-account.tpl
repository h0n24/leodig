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

{capture name=path}{l s='My account'}{/capture}

<h1>{l s='My account'}</h1>
{if isset($account_created)}
	<p class="success">
		{l s='Your account has been created.'}
	</p>
{/if}
<p class="title_block">{l s='Welcome to your account. Here you can manage al of your personal information and orders. '}</p>
<ul class="myaccount_lnk_list bolded">
	{if $has_customer_an_address}
	<li><a href="{$link->getPageLink('address', true)|escape:'html'}" title="{l s='Add my first address'}"><span class="fa fa-book"></span>{l s='Add my first address'}</a></li>
	{/if}
	<li><a href="{$link->getPageLink('history', true)|escape:'html'}" title="{l s='Orders'}"><span class="fa fa-shopping-cart"></span>{l s='Order history and details '}</a></li>
	{if $returnAllowed}
		<li><a href="{$link->getPageLink('order-follow', true)|escape:'html'}" title="{l s='Merchandise returns'}"><span class="fa fa-reply-all"></span>{l s='My merchandise returns'}</a></li>
	{/if}
	<li><a href="{$link->getPageLink('order-slip', true)|escape:'html'}" title="{l s='Credit slips'}"><span class="fa fa-file-text"></span> {l s='My credit slips'}</a></li>
	<li><a href="{$link->getPageLink('addresses', true)|escape:'html'}" title="{l s='Addresses'}"><span class="fa fa-book"></span>{l s='My addresses'}</a></li>
	<li><a href="{$link->getPageLink('identity', true)|escape:'html'}" title="{l s='Information'}"><span class="fa fa-pencil"></span>{l s='My personal information'}</a></li>
	{if $voucherAllowed}
		<li><a href="{$link->getPageLink('discount', true)|escape:'html'}" title="{l s='Vouchers'}"><span class="fa fa-tag"></span>{l s='My vouchers'}</a></li>
	{/if}
	{$HOOK_CUSTOMER_ACCOUNT}
</ul>
<p class="footer_links clearfix">

<a class="zpet-do-obchodu" href="http://www.helveti.cz/vse-o-nakupu" title="Zpět do obchodu"><i class="fa fa-chevron-left"></i>{l s='Zpět do obchodu'}</a>

</p>
