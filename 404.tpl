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
<div class="pagenotfound">
	<div class="noexist-levo">
	<h1>{l s='Kolečko se porouchalo - chyba 404'}</h1>

	<p class="info-txt">
		{l s='Moc se Vám omlouváme, ale tuto stránku na našich stránkách nejspíše nemáme. Pokud nám chybu '}<a href="{$link->getCMSLink('25')}">{l s='nahlásíte'}</a>{l s=', tak nám tím velmi pomůžete.'}
	</p>
	<img src="http://www.helveti.cz/themes/leodig/img/helveti/404.png" alt="Chyba 404, stránka nenalezena">
	<div class="noexist-hledani">
	<p class="hledej-txt">{l s='Hledat v katalogu'}</p>
	<form action="{$link->getPageLink('search')|escape:'html'}" method="post" class="std">
		<fieldset>
		
			<div class="input-group">
				<input id="search_query" class="form-control" name="search_query" type="text" />
				<span class="input-group-btn">                
					<input type="submit" name="Submit" value="Hledat" class="btn btn-search" />        
				</span>
			</div>

		</fieldset>
	</form>
	</div>
	<h3 class="nadrozcestnik">Kam dál</h3>
	<span class="noexist-kd noexist-kd-home"><a href="{$base_dir}"><em class="ico"></em> Úvodní stránka</a></span>
	<span class="noexist-kd noexist-kd-katalog"><a href="{$link->getCategoryLink('2')}"><em class="ico"></em> Katalog hodinek</a></span>
	<span class="noexist-kd noexist-kd-kontakt"><a href="{$link->getCMSLink('8')}"><em class="ico"></em> Kontakt</a></span>
	</div>

	<div class="noexist-pravo">
		<div class="noexist-rozcestnik"><fieldset><legend>Potřebujete poradit?</legend>
		<div class="noexist-tel">
		<h2>+420 774 744 763</h2>
		<h3>+420 777 056 319</h3>
		</div>
		<div class="noexist-mail">
		<h2>info@helveti.cz</h2>
		</div>
		<div class="clearfix">&nbsp;</div>
		</fieldset></div>
		<div class="noexist-rozcestnik noexist-rozcestnik-druhy"><fieldset><legend>Co je chyba 404</legend> Chyba 404 znamená, že požadovaná stránka (URL adresa) zadaná v prohlížeči neexistuje / není nalezena. Příčinou bývá buď překlep v zápisu URL, nebo neexistence (zánik) stránky.
		<div class="clearfix">&nbsp;</div>
		</fieldset></div>
	</div>
<div class="clearfix"></div>
</div>