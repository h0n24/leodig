<?php /*%%SmartyHeaderCode:18668009215461054b3b7eb8-37844444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e18d3059038152e0d6ecad831c77d201af6c829' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/modules/leomanagewidgets/themes/displaySlideshow/leomanagewidgets.tpl',
      1 => 1411561769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18668009215461054b3b7eb8-37844444',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54610737921b03_60897209',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610737921b03_60897209')) {function content_54610737921b03_60897209($_smarty_tpl) {?><div class="col-md-3" id="homecontent-displaySlideshow"><div class="leo-customclearfix"><div class="hp-bannery"><div class="hp-banner-obal hp-banner1-obal"><a href="http://www.helveti.cz/panske-hodinky" title="Pánské hodinky"><img class="img-responsive-inline-hp hp-banner1" src="themes/leodig/img/helveti/banner-hp-1.png" alt="Pánské hodinky" /></a> <a href="http://www.helveti.cz/panske-hodinky" title="Pánské hodinky"><span class="hp-banner-txt hp-banner1-txt"><strong>Pánské</strong> hodinky</span> </a></div><div class="hp-banner-obal hp-banner2-obal"><a href="http://www.helveti.cz/damske-hodinky" title="Dámské hodinky"><img class="img-responsive-inline-hp hp-banner2" src="themes/leodig/img/helveti/banner-hp-2.png" alt="Dámské hodinky" /></a> <a href="http://www.helveti.cz/damske-hodinky" title="Dámské hodinky"><span class="hp-banner-txt hp-banner2-txt"><strong>Dámské</strong> hodinky</span> </a></div><div class="hp-banner-obal hp-banner3-obal"><a href="http://www.helveti.cz/s/3/hodinky-akce" title="Sleva až 50%"><img class="img-responsive-inline-hp hp-banner3" src="themes/leodig/img/helveti/banner-hp-3.png" alt="Sleva až 50%" /></a></div></div></div></div><script>$(document).ready(function() {
    $('.carousel').each(function(){
        $(this).carousel({
            pause: true,
            interval: false
        });
    });
	$(".blockleoproducttabs").each( function(){
		$(".nav-tabs li", this).first().addClass("active");
		$(".tab-content .tab-pane", this).first().addClass("active");
	} );
});</script><?php }} ?>