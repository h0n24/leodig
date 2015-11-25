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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="{$lang_iso}"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="{$lang_iso}"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="{$lang_iso}"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="{$lang_iso}"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang_iso}">
	<head>
		<title>{$meta_title|escape:'htmlall':'UTF-8'}</title>
        {if $LEO_RESPONSIVE}
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
        {/if}
{if isset($meta_description) AND $meta_description}
		<meta name="description" content="{$meta_description|escape:html:'UTF-8'}" />
{/if}
{if isset($meta_keywords) AND $meta_keywords}
		<meta name="keywords" content="{$meta_keywords|escape:html:'UTF-8'}" />
{/if}
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta http-equiv="content-language" content="{$meta_language}" />
		<meta name="google-site-verification" content="Pl6FMFqlU8tU-qcROHjWht59cHWY8QjgvOIDcJHN5Kw" />
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
		<link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<meta name="google-site-verification" content="Pl6FMFqlU8tU-qcROHjWht59cHWY8QjgvOIDcJHN5Kw" />

		<script type="text/javascript">
			var baseDir = '{$content_dir|addslashes}';
			var baseUri = '{$base_uri|addslashes}';
			var static_token = '{$static_token|addslashes}';
			var token = '{$token|addslashes}';
			var priceDisplayPrecision = {$priceDisplayPrecision*$currency->decimals};
			var priceDisplayMethod = {$priceDisplay};
			var roundMode = {$roundMode};
		</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
{if isset($css_files)}
	{foreach from=$css_files key=css_uri item=media}
	<link href="{$css_uri}" rel="stylesheet" type="text/css" media="{$media}" />
	{/foreach}
{/if}


{if isset($js_files)}
	{foreach from=$js_files item=js_uri}
	<script type="text/javascript" src="{$js_uri}"></script>
	{/foreach}
{/if}
{$LEO_CUSTOMWIDTH}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script type="text/javascript" src="{$content_dir}themes/{$LEO_THEMENAME}/js/custom.js"></script>
{if (isset($cms) && $cms->id == 8) || (isset($cms) && $cms->id == 24) }
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCF2ukOab0QMc_YIXs1gVz09vLdbHk4I7E&sensor=false"></script>
<script type="text/javascript" src="{$content_dir}themes/{$LEO_THEMENAME}/js/kontakty.js"></script>
{/if}
<script type="text/javascript" src="{$content_dir}themes/{$LEO_THEMENAME}/js/jquery.cookie.js"></script>
{if $hide_left_column||in_array($page_name,array(index,'address','products-comparison','password','my-account','history','order-slip','addresses','identity','discount','pagenotfound'))}{$HOOK_LEFT_COLUMN=null}{/if}
{if $hide_right_column|| in_array($page_name,array(index))}{$HOOK_RIGHT_COLUMN=null}{/if}
{assign var='classfix' value=0}
{if in_array($page_name,array(index,'prices-drop','new-products','category','best-sales','manufacturer','search','supplier','product'))}{$classfix=1}{/if}


	{$HOOK_HEADER}
	{**KONVERZNI KODY**}
	{literal}
		<!-- Seznam remarketing -->
		<script type="text/javascript">
		/* <![CDATA[ */
			var seznam_retargeting_id = 20375;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//c.imedia.cz/js/retargeting.js"></script>


		<!-- FACEBOOK remarketing -->
		<script>(function() {
			  var _fbq = window._fbq || (window._fbq = []);
			  if (!_fbq.loaded) {
			    var fbds = document.createElement('script');
			    fbds.async = true;
			    fbds.src = '//connect.facebook.net/en_US/fbds.js';
			    var s = document.getElementsByTagName('script')[0];
			    s.parentNode.insertBefore(fbds, s);
			    _fbq.loaded = true;
			  }
			  _fbq.push(['addPixelId', '294562820691824']);
			})();
			window._fbq = window._fbq || [];
			window._fbq.push(['track', 'PixelInitialized', {}]);
			</script>
			<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=294562820691824&amp;ev=PixelInitialized" /></noscript>
		{/literal}
	</head>

	<body {if isset($page_name)}id="{$page_name|escape:'htmlall':'UTF-8'}"{/if} class="{$LEO_BGPATTERN} fs{$FONT_SIZE} {if isset($page_name)}{$page_name|escape:'htmlall':'UTF-8'}{/if}{if $hide_left_column} hide-left-column{/if}{if $hide_right_column} hide-right-column{/if}{if $content_only} content_only{/if} keep-header {if isset($as_seo_title)}seostranka{/if} {if $page_name|strstr:"module-blockwishlist-view"}wishlist_stranka{/if}">

	<p style="display: block;" id="back-top"> <a href="#top"><span></span></a> </p>
	{if !$content_only}
		{if isset($restricted_country_mode) && $restricted_country_mode}
		<div id="restricted-country">
			<p>{l s='You cannot place a new order from your country.'} <span class="bold">{$geolocation_country}</span></p>
		</div>
		{/if}
		<section id="page" class="clearfix">

			<!-- Header -->
			<header id="header" class="navbar-fixed-top clearfix">
				<section id="topbar">

					<div class="container">
						{$HOOK_TOP}
					</div>
				</section>
				<section id="header-main">
					<div class="container" >
						<div class="header-wrap">
							<div class="pull-left">
								<a id="header_logo" href="{$base_dir}" title="{$shop_name|escape:'htmlall':'UTF-8'}">
									<img class="logo" src="{$logo_url}" alt="{$shop_name|escape:'htmlall':'UTF-8'}" />
								</a>
							</div>
							{if !empty($HOOK_HEADERRIGHT)}
								<div id="header_right" class="col-sm-6 inner">
									{$HOOK_HEADERRIGHT}
								</div>
							{/if}
							{if !empty($HOOK_TOPNAVIGATION) }
								<nav id="topnavigation" class="clearfix">
									<div class="container">
										<div class="row">
											 {$HOOK_TOPNAVIGATION}
										</div>
									</div>
								</nav>
							{/if}
						</div>
					</div>
				</section>
			</header>
			{if !(isset($inOrderProcess)|| isset($current_step)||$page_name == 'order' )}
			<div class="plovouci_blok">
				<a href="{$link->getCMSLink('8')}"><div class="jsem_zde">
				<div class="jsem_zde_levo">
					<div class="jsem_zde_txt">Jsem zde</div><div class="jsem_zde_img"><img src="{$img_dir}helveti/r-robert.jpg" alt="Jiří - Jsem zde pro vás" /></div>
				</div>
				<div class="jsem_zde_pravo">
					<div class="jsem_zde_nadpis">pro Vás</div>
					<div class="jsem_zde_jmeno">Jiří Štencek</div>
					<div class="jsem_zde_kontakt">+420 774 744 763<br/>info@helveti.cz</div>
				</div>
				</div></a>
				<a href="{$link->getCMSLink('9')}">
				<div class="proc_unas">
				<div class="proc_unas_levo">
					<div class="proc_unas_txt">Proč u nás?</div>
					<div class="proc_unas_ico"><i class="fa fa-check"></i></div>
				</div>
				<div class="proc_unas_pravo">
					<span class="proc_unas_link">Přečtěte si</span><br /><strong>10 důvodů</strong>, proč si hodinky koupit právě u nás.
				</div>
				</div></a>
				{* <a href="{$link->getCMSLink('43')}">
				<div class="vanocni_akce">
				<div class="vanocni_akce_levo">
					<div class="vanocni_akce_img"></div>
				</div>
				<div class="vanocni_akce_pravo">
					Vánoční dárek k hodinkám <strong>zdarma</strong>.<br />
					<span class="vanocni_akce_link">Zobrazit akci</span>
				</div>
				</div></a> *}
				<div class="heureka_widget" ><script type="text/javascript">
//<![CDATA[
var _hwq = _hwq || [];
    _hwq.push(['setKey', 'ABF4193AD90DA96C26E88D8E3E39A19A']);_hwq.push(['setTopPos', '60']);_hwq.push(['showWidget', '21']);(function() {
    var ho = document.createElement('script'); ho.type = 'text/javascript'; ho.async = true;
    ho.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.heureka.cz/direct/i/gjs.php?n=wdgt&sak=ABF4193AD90DA96C26E88D8E3E39A19A';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ho, s);
})();
//]]>
</script></div>
			</div>
			{/if}
			{if $HOOK_SLIDESHOW &&  in_array($page_name,array('index'))}
			<section id="slideshow" class="clearfix hidden-xs hidden-sm">
				<div class="container">
					<div class="row">
						 {$HOOK_SLIDESHOW}
					</div>
				</div>
			</section>
			{/if}
			{if $HOOK_PROMOTETOP &&  in_array($page_name,array('index'))}
			<section id="promotetop" class="clearfix">
				<div class="container">
					<div class="row">
						 {$HOOK_PROMOTETOP}
					</div>
				</div>
			</section>
			{/if}
			{if !in_array($page_name,array('index'))}
				<section id="breadcrumb" class="clearfix">
					<div class="container">
						<div class="row">
							{include file="$tpl_dir./breadcrumb.tpl"}
						</div>
					</div>
				</section>
			{/if}
			<section id="columns" class="clearfix">
				<div class="container columns-container">
					<div class="row">
						{include file="$tpl_dir./layout/{$LEO_LAYOUT_DIRECTION}/header.tpl" hide_left_column=$hide_left_column hide_right_column=$hide_right_column }
	{/if}
