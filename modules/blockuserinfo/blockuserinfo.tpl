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

<!-- Block user information module HEADER -->
<ul id="header_user_info" class="links hidden-xs hidden-sm pull-left header_user_info-left">
	<li>	
		<a href="tel:774774763" title="phone" class="phone-link-up"><i class="fa fa-phone"></i>{l s='774 744 763' mod='blockuserinfo'}</a> |
		<a href="http://www.helveti.cz/blog/" title="Blog" class="cerveny-link-up">{l s='Blog' mod='blockuserinfo'}</a>
		<a href="{$link->getCMSLink('7')}" title="Vše o nákupu" class="cerveny-link-up">{l s='Vše o nákupu' mod='blockuserinfo'}</a>
		<a href="{$link->getCMSLink('8')}" title="Kontakt" class="cerveny-link-up">{l s='Kontakt' mod='blockuserinfo'}</a>
		
	</li>
</ul>
	
<div id="header_user" class="{if $PS_CATALOG_MODE}header_user_catalog {/if}pull-right">
	<a data-toggle="dropdown" class="groupe-btn dropdown hidden-md hidden-lg" title="{l s='Quick link' mod='blockuserinfo'}" href="#"><span class="fa fa-user"></span></a>
	<ul id="header_nav" class="links groupe-content">
		<li>{l s='Welcome' mod='blockuserinfo'},</li>
		{if $logged}
			<li><a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a></li>
			<li><a href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html'}" title="{l s='Log me out' mod='blockuserinfo'}" class="logout" rel="nofollow">{l s='Log out' mod='blockuserinfo'}</a></li>
			<li ><a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='My Account' mod='blockuserinfo'}" ><span class="fa fa-user"></span>{l s='My Account' mod='blockuserinfo'}</a></li>
		{else}
			<li><a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='Login to your customer account' mod='blockuserinfo'}" class="login" rel="nofollow"><span class="fa fa-lock"></span>{l s='Login' mod='blockuserinfo'}</a></li>					
			<li><a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='Login to your customer account' mod='blockuserinfo'}" class="login" rel="nofollow"><span class="fa fa-user"></span>{l s='Register' mod='blockuserinfo'}</a></li>			
		{/if}
		<li ><a href="{$link->getModuleLink('blockwishlist', 'mywishlist')}" title="{l s='My wishlist' mod='blockuserinfo'}"><span class="fa fa-heart"></span>{l s='My wishlist' mod='blockuserinfo'}</a></li>
	</ul>
			
</div>

<!-- /Block user information module HEADER -->