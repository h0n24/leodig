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

<!-- Block Newsletter module-->

<div id="newsletter_block_left" class="block">
	<p class="title_block">{l s='Newsletter' mod='blocknewsletter'}</p>
	<div class="block_content">
	{if isset($msg) && $msg}
		<p class="{if $nw_error}warning{else}success{/if}">{l s="Newsletter:" js=1 mod="blocknewsletter"} {$msg}</p>
	{/if}
	<div class="description">
		<p>{l s='Přihlaste se do našeho newsletteru a budete o všem vědět první.'}</p>
	</div>
		<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//helveti.us1.list-manage.com/subscribe/post?u=a498c800c1b24be2fa8b07349&amp;id=a1a04e710a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
     
    <div id="mce-responses" class="clear">
        <div class="response warning" id="mce-error-response" style="display:none"></div>
        <div class="response success" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_a498c800c1b24be2fa8b07349_a1a04e710a" tabindex="-1" value=""></div>
    <div class="mc-field-group">
    <input type="email" value="" name="EMAIL" class="required email inputNew" id="mce-EMAIL" placeholder="Váš email">
</div>
     <input type="submit" value="ok" name="subscribe" id="mc-embedded-subscribe" class="button_mini btn btn-theme-primary"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
	</div>
</div>
<!-- /Block Newsletter module-->

<script type="text/javascript">
    var placeholder = "{l s='your e-mail' mod='blocknewsletter' js=1}";
        $(document).ready(function() {ldelim}
            $('#newsletter-input').on({ldelim}
                focus: function() {ldelim}
                    if ($(this).val() == placeholder) {ldelim}
                        $(this).val('');
                    {rdelim}
                {rdelim},
                blur: function() {ldelim}
                    if ($(this).val() == '') {ldelim}
                        $(this).val(placeholder);
                    {rdelim}
                {rdelim}
            {rdelim});

        });
</script>
