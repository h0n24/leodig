<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:39:37
         compiled from "/srv/www/helveti/themes/leodig/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20147035215461055a91ba53-44759309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b6d6420fd0ab8ef63ab40f782cf25162979f012' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/header.tpl',
      1 => 1415644762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20147035215461055a91ba53-44759309',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5461055d537d79_56404589',
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'LEO_RESPONSIVE' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'meta_language' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'content_dir' => 0,
    'base_uri' => 0,
    'static_token' => 0,
    'token' => 0,
    'priceDisplayPrecision' => 0,
    'currency' => 0,
    'priceDisplay' => 0,
    'roundMode' => 0,
    'BOOTSTRAP_CSS_URI' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'LEO_SKIN_DEFAULT' => 0,
    'LEO_THEMENAME' => 0,
    'js_files' => 0,
    'js_uri' => 0,
    'LEO_CUSTOMWIDTH' => 0,
    'cms' => 0,
    'hide_left_column' => 0,
    'page_name' => 0,
    'hide_right_column' => 0,
    'HOOK_HEADER' => 0,
    'LEO_BGPATTERN' => 0,
    'FONT_SIZE' => 0,
    'content_only' => 0,
    'as_seo_title' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'HOOK_TOP' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'HOOK_HEADERRIGHT' => 0,
    'HOOK_TOPNAVIGATION' => 0,
    'link' => 0,
    'img_dir' => 0,
    'HOOK_SLIDESHOW' => 0,
    'HOOK_PROMOTETOP' => 0,
    'LEO_LAYOUT_DIRECTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5461055d537d79_56404589')) {function content_5461055d537d79_56404589($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/tools/smarty/plugins/modifier.escape.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
	<head>
		<title><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8');?>
</title>
        <?php if ($_smarty_tpl->tpl_vars['LEO_RESPONSIVE']->value){?>
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
        <?php }?>    
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value){?>
		<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_description']->value, 'html', 'UTF-8');?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value){?>
		<meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_keywords']->value, 'html', 'UTF-8');?>
" />
<?php }?>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta http-equiv="content-language" content="<?php echo $_smarty_tpl->tpl_vars['meta_language']->value;?>
" />
		<meta name="google-site-verification" content="Pl6FMFqlU8tU-qcROHjWht59cHWY8QjgvOIDcJHN5Kw" />
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)){?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value){?>no<?php }?>follow" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<meta name="google-site-verification" content="Pl6FMFqlU8tU-qcROHjWht59cHWY8QjgvOIDcJHN5Kw" />

		<script type="text/javascript">
			var baseDir = '<?php echo addslashes($_smarty_tpl->tpl_vars['content_dir']->value);?>
';
			var baseUri = '<?php echo addslashes($_smarty_tpl->tpl_vars['base_uri']->value);?>
';
			var static_token = '<?php echo addslashes($_smarty_tpl->tpl_vars['static_token']->value);?>
';
			var token = '<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
';
			var priceDisplayPrecision = <?php echo $_smarty_tpl->tpl_vars['priceDisplayPrecision']->value*$_smarty_tpl->tpl_vars['currency']->value->decimals;?>
;
			var priceDisplayMethod = <?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
;
			var roundMode = <?php echo $_smarty_tpl->tpl_vars['roundMode']->value;?>
;
		</script>
                <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BOOTSTRAP_CSS_URI']->value;?>
"/> 
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
	<?php } ?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['LEO_SKIN_DEFAULT']->value&&$_smarty_tpl->tpl_vars['LEO_SKIN_DEFAULT']->value!="default"){?>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['LEO_SKIN_DEFAULT']->value;?>
/css/skin.css"/>
<?php }?>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/css/theme-responsive.css"/>


<?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
	<?php } ?>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['LEO_CUSTOMWIDTH']->value;?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/css/font-awesome.min.css"/>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/js/custom.js"></script>
<?php if ((isset($_smarty_tpl->tpl_vars['cms']->value)&&$_smarty_tpl->tpl_vars['cms']->value->id==8)||(isset($_smarty_tpl->tpl_vars['cms']->value)&&$_smarty_tpl->tpl_vars['cms']->value->id==24)){?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/js/kontakty.js"></script>
<?php }?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/js/jquery.cookie.js"></script>
<?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value||in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index','address','products-comparison','password','my-account','history','order-slip','addresses','identity','discount','pagenotfound'))){?><?php $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN'] = new Smarty_variable(null, null, 0);?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value||in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))){?><?php $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN'] = new Smarty_variable(null, null, 0);?><?php }?>
<?php $_smarty_tpl->tpl_vars['classfix'] = new Smarty_variable(0, null, 0);?>
<?php if (in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index','prices-drop','new-products','category','best-sales','manufacturer','search','supplier','product'))){?><?php $_smarty_tpl->tpl_vars['classfix'] = new Smarty_variable(1, null, 0);?><?php }?>

<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/css/ie.css" />
<![endif]-->


<!--[if lt IE 9]>
<script src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/js/html5.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LEO_THEMENAME']->value;?>
/js/respond.min.js"></script>
<![endif]-->
	<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>
	
	
	
		<!-- Seznam remarketing -->
		<script type="text/javascript">
		/* <![CDATA[ */
			var seznam_retargeting_id = 20375;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//c.imedia.cz/js/retargeting.js"></script>

		<!-- Kód Google značky pro remarketing -->
		<!--------------------------------------------------
		Značka pro remarketing nesmí být spojena s údaji umožňujícími identifikaci osob nebo umístěna na stránkách týkajících se citlivých kategorií. Další informace a postup nastavení značky naleznete na stránce: http://google.com/ads/remarketingsetup
		--------------------------------------------------->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 991679542;
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/991679542/?value=0&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>

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
		
	</head>

	<body <?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?>id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_name']->value, 'htmlall', 'UTF-8');?>
"<?php }?> class="<?php echo $_smarty_tpl->tpl_vars['LEO_BGPATTERN']->value;?>
 fs<?php echo $_smarty_tpl->tpl_vars['FONT_SIZE']->value;?>
 <?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_name']->value, 'htmlall', 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value){?> hide-left-column<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value){?> hide-right-column<?php }?><?php if ($_smarty_tpl->tpl_vars['content_only']->value){?> content_only<?php }?> keep-header <?php if (isset($_smarty_tpl->tpl_vars['as_seo_title']->value)){?>seostranka<?php }?> <?php if (strstr($_smarty_tpl->tpl_vars['page_name']->value,"module-blockwishlist-view")){?>wishlist_stranka<?php }?>">
		<div id="low_ie_popup" style="display: none;background: white;color: black;	width: 400px;min-height: 200px;position: fixed;	top: 15%;left: 0;right: 0;	margin-left: auto;	margin-right: auto;	padding: 3em;	z-index: 100001;	text-align:center;"><h3>Web Helveti.cz právě testujeme pro Internet Explorer ve verzi 8.0. Pokud máte možnost, použijte prosím alternativní prohlížeč (Chrome, Firefox, vyšší verzi IE, apod).</h3></div>
		<div id="low_ie_overlay" style='position: fixed;top: 0;	left: 0;background: black;	z-index: 100000;	width: 100%;height: 100%;	display: none;	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";	filter: alpha(opacity=50);	opacity: 0.5;'></div>
		
	<p style="display: block;" id="back-top"> <a href="#top"><span></span></a> </p>
	<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
		<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value){?>
		<div id="restricted-country">
			<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['geolocation_country']->value;?>
</span></p>
		</div>
		<?php }?>
		<section id="page" class="clearfix">
			
			<!-- Header -->
			<header id="header" class="navbar-fixed-top clearfix">
				<section id="topbar">

					<div class="container">
						<?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>
	
					</div>
				</section>
				<section id="header-main">
					<div class="container" >
						<div class="header-wrap">
							<div class="pull-left">
								<a id="header_logo" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
">
									<img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
" />
								</a>
							</div>
							<?php if (!empty($_smarty_tpl->tpl_vars['HOOK_HEADERRIGHT']->value)){?>
								<div id="header_right" class="col-sm-6 inner">
									<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADERRIGHT']->value;?>
	
								</div>
							<?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['HOOK_TOPNAVIGATION']->value)){?>
								<nav id="topnavigation" class="clearfix">
									<div class="container">
										<div class="row">
											 <?php echo $_smarty_tpl->tpl_vars['HOOK_TOPNAVIGATION']->value;?>

										</div>
									</div>
								</nav>
							<?php }?>
						</div>
					</div>
				</section>	
			</header>
			<div class="plovouci_blok">
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('8');?>
"><div class="jsem_zde">
				<div class="jsem_zde_levo">
					<div class="jsem_zde_txt">Jsem zde</div><div class="jsem_zde_img"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
helveti/r-robert.jpg" alt="Robert - Jsem zde pro vás" /></div>
				</div>
				<div class="jsem_zde_pravo">
					<div class="jsem_zde_nadpis">pro Vás</div>
					<div class="jsem_zde_jmeno">Robert Pospíšil</div>
					<div class="jsem_zde_kontakt">+420 774 744 763<br/>info@helveti.cz</div>
				</div>
				</div></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('9');?>
">
				<div class="proc_unas">
				<div class="proc_unas_levo">
					<div class="proc_unas_txt">Proč u nás?</div>
					<div class="proc_unas_ico"><i class="fa fa-check"></i></div>
				</div>
				<div class="proc_unas_pravo">
					<span class="proc_unas_link">Přečtěte si</span><br /><strong>10 důvodů</strong>, proč si hodinky koupit právě u nás.
				</div>
				</div></a>
				
			</div>
			<?php if ($_smarty_tpl->tpl_vars['HOOK_SLIDESHOW']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))){?>
			<section id="slideshow" class="clearfix hidden-xs hidden-sm">
				<div class="container">
					<div class="row">
						 <?php echo $_smarty_tpl->tpl_vars['HOOK_SLIDESHOW']->value;?>

					</div>
				</div>
			</section>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['HOOK_PROMOTETOP']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))){?>
			<section id="promotetop" class="clearfix">
				<div class="container">
					<div class="row">
						 <?php echo $_smarty_tpl->tpl_vars['HOOK_PROMOTETOP']->value;?>

					</div>
				</div>
			</section>
			<?php }?>
			<?php if (!in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))){?>					
				<section id="breadcrumb" class="clearfix">
					<div class="container">
						<div class="row">
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						</div>
					</div>
				</section>					
			<?php }?>
			<section id="columns" class="clearfix">
				<div class="container columns-container">
					<div class="row">
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/".((string)$_smarty_tpl->tpl_vars['LEO_LAYOUT_DIRECTION']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('hide_left_column'=>$_smarty_tpl->tpl_vars['hide_left_column']->value,'hide_right_column'=>$_smarty_tpl->tpl_vars['hide_right_column']->value), 0);?>

	<?php }?>
<?php }} ?>