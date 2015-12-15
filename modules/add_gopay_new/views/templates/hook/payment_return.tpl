 {* ########################################################################### */
/*                                                                             */
/*                      Copyright 2014     Miloslav Kubín                      */
/*                        http://presta-modul.shopmk.cz                        */
/*                                                                             */
/*             Please do not change this text, remove the link,                */
/*          or remove all or any part of the creator copyright notice          */
/*                                                                             */
/*    Please also note that although you are allowed to make modifications     */
/*     for your own personal use, you may not distribute the original or       */
/*                 the modified code without permission.                       */
/*                                                                             */
/*                    SELLING AND REDISTRIBUTION IS FORBIDDEN!                 */
/*             Download is allowed only from presta-modul.shopmk.cz            */
/*                                                                             */
/*       This software is provided as is, without warranty of any kind.        */
/*           The author shall not be liable for damages of any kind.           */
/*               Use of this software indicates that you agree.                */
/*                                                                             */
/*                                    ***                                      */
/*                                                                             */
/*              Prosím, neměňte tento text, nemazejte odkazy,                  */
/*      neodstraňujte části a nebo celé oznámení těchto autorských práv        */
/*                                                                             */
/*     Prosím vezměte také na vědomí, že i když máte možnost provádět změny    */
/*        pro vlastní osobní potřebu,nesmíte distribuovat původní nebo         */
/*                        upravený kód bez povolení.                           */
/*                                                                             */
/*                   PRODEJ A DISTRIBUCE JE ZAKÁZÁNA!                          */
/*          Download je povolen pouze z presta-modul.shopmk.cz                 */
/*                                                                             */
/*   Tento software je poskytován tak, jak je, bez záruky jakéhokoli druhu.    */
/*          Autor nenese odpovědnost za škody jakéhokoliv druhu.               */
/*                  Používáním tohoto softwaru znamená,                        */
/*           že souhlasíte s výše uvedenými autorskými právy .                 */
/*                                                                             */
/* ########################################################################### *}

<div id="add_gopay_new_return">

{if isset($paymentStatus->errors) && is_array($paymentStatus->errors)}
	<p class="warning alert alert-info">
		{foreach $paymentStatus->errors as $error}
			{l s='Error:' mod='add_gopay_new'} {$error->error_code}{if $error->error_name} - {$error->error_name}<br />{/if}
			{if $error->message}{$error->message}<br />{/if}
			{if $error->description}{$error->description}{/if}
		{/foreach}
	</p>
{else}
	{if isset($paymentStatus->confirms) && is_array($paymentStatus->confirms)}
		{foreach $paymentStatus->confirms as $confirm}
			{assign var='paymentMessage' value=$confirm->paymentMessage}
			{assign var='repeatPayment' value=$confirm->repeatPayment}
		{/foreach}
	{else}
	{/if}

		<!-- platba nebyla dokončena -->
		{if $repeatPayment}
			<div class="gopay_error"> {$paymentMessage} </div>
			<div id="add_gopay_new">
			{if !$BOOTSTRAP}
				<div id="add_gopay_block">
					<h1>xxx{l s='Fast on-line payment (internet banking)' mod='add_gopay_new'}</h1>
					<p class="go_platba">
						<strong>{l s='Pay for goods easily, quickly and safely especially' mod='add_gopay_new'}</strong>
						<br />
						{l s='Once redirected to your bank&rsquo;s internet banking only log in, check the pre-filled payment order and confirm it. Payment will take place within a few minutes and the goods are shipped flat.' mod='add_gopay_new'}
					</p>
					<div class="go_content">
			{/if}
			{if $PAYMENT_MODE}
				<form id="gopay-payment-form" action="{$link->getModuleLink('add_gopay_new', 'repeatPayment', ['orderId' => {$order->id}], true)}" method="post">
					{if $INLINE_MODE}<input type="hidden" name="inline" value="1">{/if}
					<p class="payment-row">
						<input id="pch-pc" type="radio" name="paymentChannel" value="PAYMENT_CARD" checked="checked">
						<label for="pch-pc" class="label_pay">
							{l s='GoPay - Credit card' mod='add_gopay_new'}<br>
							<span>{l s='(VISA/Mastercard)' mod='add_gopay_new'}</span>
						</label>
						<label for="pch-pc"><img src="{$gopay_images_dir}payKarty.png" alt="{l s='VISA/Mastercard' mod='add_gopay_new'}"></label>
					</p>
				{if !$PREAUTHORIZED && !$RECURRENT}
					<p class="payment-row">
						<input id="pch-bp" type="radio" name="paymentChannel" value="BANK_ACCOUNT">
						<label for="pch-bp" class="label_pay">
							{l s='GoPay - Bank transfer' mod='add_gopay_new'}<br>
							<span>{l s='(KB, FIO, GE Money  atd)' mod='add_gopay_new'}</span>
						</label>
						{*<label for="pch-bp"><img src="{$gopay_images_dir}payBanky.png" alt="{l s='KB, FIO, GE Money  atd' mod='add_gopay_new'}"></label>*}
					</p>
					<p class="payment-row">
						<input id="pch-all" type="radio" name="paymentChannel" value="ACCOUNT">
						<label for="pch-all" class="label_pay">
							{l s='GoPay - Other payment methods' mod='add_gopay_new'}<br>
							<span>{l s='(superCASH, PremiumSMS, mPlatba, GoPay peněženka)' mod='add_gopay_new'}</span>
						</label>
						{*<label for="pch-all"><img src="{$gopay_images_dir}payOstatni.png" alt="{l s='superCASH, PremiumSMS, mPlatba, GoPay peněženka' mod='add_gopay_new'}"></label>*}
					</p>
				{/if}
					<br>
					<div class="row">
						<div class="col-xs-12">
							<p class="payment_module">
								<a class="bankwire"
										href="#"
										title="{l s='Pay my order' mod='add_gopay_new'}"
										{if !$INLINE_MODE}onclick="document.getElementById('gopay-payment-form').submit(); return false;"{/if}
										id="submit_payment"
								>
									{l s='Pay through a payment gateway' mod='add_gopay_new'} 
									<span>{l s='(Fast and reliable payment method)' mod='add_gopay_new'}</span>
								</a>
							</p>
						</div>
					</div>
				</form>
			{else}
				{if isset($paymentMethods) && $paymentMethods|@count > 0}
					{foreach from=$paymentMethods item=item}
						<p class="payment_module gopay_button">
							<a href="{$link->getModuleLink('add_gopay_new', 'repeatPayment', ['orderId' => {$order->id}, 'paymentChannel' => {$item.code}], true)}" title="{l s='Pay with Gopay' mod='add_gopay_new'}" data-ajax="false">
								<img src="{$item.logo}" alt="{l s='Pay with Gopay' mod='add_gopay_new'}" />
								<span class="gopay_item">{$item.title}</span>
							</a>
						</p>
					{/foreach}
				{else}
					<p class="gopay_no_payment"> {l s='There is no authorized payment method' mod='add_gopay_new'} </p>
				{/if}
			{/if}
			{if !$BOOTSTRAP}
				</div>
				<div class="go_dole">
					{l s='Payments provides payment gateway' mod='add_gopay_new'}
					<img style="margin-left:15px" src="{$gopay_images_dir}logo_header.gif" width="50px" />
				</div>
			{/if}
			</div>
		{else} 

			<!-- když je vše OK -->
			{*<p class="confirmation_gopay_new">{$paymentMessage}</p>
			<div style="margin:40px 0;">
				<p class="info_gopay">{l s='Děkujeme Vám za Vaší objednávku.' mod='add_gopay_new'}</p>
				<p class="info_gopay bold">{l s='Objednané zboží bude odesláno během následujících 2-24 hodin (mimo víkendů a svátků) od přijetí platby. O odeslání i průběhu přepravy budete informováni e-mailem, SMS nebo telefonicky.' mod='add_gopay_new'}</p>
				<p class="info_gopay">{l s='Potvrzení objednávky s rekapitulací bylo odesláno na Váš e-mail. V případě, že jej neobdržíte během následujících 60 minut, prosíme, ' mod='add_gopay_new'}
					<a href="{$link->getPageLink('contact', true, NULL)}" title="{l s='kontaktujte nás' mod='add_gopay_new'}">
						{l s='kontaktujte nás' mod='add_gopay_new'}
					</a>.
				</p>
			</div>*}
			<div class="shrnuti-info">
		<p>Číslo vaší objednávky je <strong>{l s='%d' sprintf=$order->id mod='add_gopay_new'}</strong> a její shrnutí vám bylo <strong>odesláno emailem</strong>.</p>
		<p>{l s='O průběhu objednávky vás budeme informovat.'}</p>
		<p>{l s='V případě otázek nás neváhejte kontaktovat.'}</p>
		<p>{l s='Děkujeme za důvěru a přejeme hezký den.'}</p>
		<p>{l s='Váš tým Helveti.cz'}</p>
		</div>
		{/if}
	{/if}
</div>

{if $INLINE_MODE}
<script src="https://gate.gopay.cz/gp-gw/js/embed.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#submit_payment").click(function (event) {
            event.preventDefault();
			$(this).find('.hideOnSubmit').hide();

            $.ajax({
			url: "{$link->getModuleLink('add_gopay_new', 'repeatPayment', ['orderId' => {$order->id}], false)}",
                type: 'POST',
                dataType: 'json',
                data: $("#gopay-payment-form").serialize()
            }).done(function (data) {
                _gopay.checkout({
						gatewayUrl: data.url,
						inline: true
				});

            }).error(function (data) {
                alert('Nastala chyba [' + data.error + ']');
            });
        });
    });
</script>
{/if}