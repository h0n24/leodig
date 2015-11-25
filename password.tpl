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

<div class="kosik-container kosik-container-password">

{capture name=path}<a href="{$link->getPageLink('authentication', true)|escape:'html'}" title="{l s='Authentication'}" rel="nofollow">{l s='Authentication'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Forgot your password'}{/capture}
<h1>{l s='Forgot your password?'}</h1>
<div class="clearfix">	</div>
{include file="$tpl_dir./errors.tpl"}

{if isset($confirmation) && $confirmation == 1}
<p class="success">{l s='Your password has been successfully reset and a confirmation has been sent to your email address:'} {if isset($customer_email)}{$customer_email|escape:'htmlall':'UTF-8'|stripslashes}{/if}</p>
{elseif isset($confirmation) && $confirmation == 2}
<p class="success">{l s='A confirmation email has been sent to your address:'} {if isset($customer_email)}{$customer_email|escape:'htmlall':'UTF-8'|stripslashes}{/if}</p>
{else}
<p>{l s='Please enter the email address you used to register. We will then send you a new password. '}</p>
<form action="{$request_uri|escape:'htmlall':'UTF-8'}" method="post" class="std form-horizontal" id="form_forgotpassword">
	<fieldset>
		<div class="text form-group">
			<label class="control-label col-sm-4" for="email">{l s='Email'}</label>
			<div class="col-sm-6">
				<input class="form-control" type="text" id="email" name="email" value="{if isset($smarty.post.email)}{$smarty.post.email|escape:'htmlall':'UTF-8'|stripslashes}{/if}" />
			</div>
		</div>
	</fieldset>
	<div class="text form-group">
			<a href="{$link->getPageLink('authentication')|escape:'html'}" title="{l s='Back to Login'}" rel="nofollow" class="zpet_na_login"><i class="fa fa-chevron-left"></i>{l s='Back to Login'}</a>

			<div class="submit">
				<input type="submit" class="button submit-password" value="{l s='Retrieve Password'}" />
			</div>
		</div>
</form>
{/if}
<div class="clear footer_links">
	
</div>

</div>
