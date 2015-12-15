<?php /*%%SmartyHeaderCode:946607852566718fc71e4e5-81832645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5ca90332af38c9bdb5694158d88118ff1728b50' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/modules/leomanagewidgets/themes/displaySlideshow/leomanagewidgets.tpl',
      1 => 1411561769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '946607852566718fc71e4e5-81832645',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566eecdb19d746_32966619',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566eecdb19d746_32966619')) {function content_566eecdb19d746_32966619($_smarty_tpl) {?><div class="col-md-3" id="homecontent-displaySlideshow"><div class="leo-customclearfix"><div class="hp-bannery"><div class="hp-banner-obal hp-banner1-obal"><a href="http://www.helveti.cz/panske-hodinky" title="Pánské hodinky"><img class="img-responsive-inline-hp hp-banner1" src="themes/leodig/img/helveti/banner-hp-1.png" alt="Pánské hodinky" /></a> <a href="http://www.helveti.cz/panske-hodinky" title="Pánské hodinky"><span class="hp-banner-txt hp-banner1-txt"><strong>Pánské</strong> hodinky</span> </a></div><div class="hp-banner-obal hp-banner2-obal"><a href="http://www.helveti.cz/damske-hodinky" title="Dámské hodinky"><img class="img-responsive-inline-hp hp-banner2" src="themes/leodig/img/helveti/banner-hp-2.png" alt="Dámské hodinky" /></a> <a href="http://www.helveti.cz/damske-hodinky" title="Dámské hodinky"><span class="hp-banner-txt hp-banner2-txt"><strong>Dámské</strong> hodinky</span> </a></div><div class="hp-banner-obal hp-banner3-obal"><a href="http://www.helveti.cz/vanoce-2015" title="Článek z našeho blogu"><img class="img-responsive-inline-hp hp-banner3" title="Kupujte dnes, můžete vyměnit v lednu! + nůž zdarma" src="http://www.helveti.cz/img/cms/banner-hp-4_1.png" alt="Článek z našeho blogu" width="374" height="300" /></a></div></div></div></div><script>$(document).ready(function() {
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