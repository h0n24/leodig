<?php /*%%SmartyHeaderCode:426819509566718fe75d152-43166555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f13f3a48bb6f87fa621426fd11a4840676c87fc' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/modules/leomanagewidgets/themes/leomanagewidgets.tpl',
      1 => 1411561272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '426819509566718fe75d152-43166555',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566eebba1e0068_04588622',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566eebba1e0068_04588622')) {function content_566eebba1e0068_04588622($_smarty_tpl) {?><div id="homecontent-displayFootNav"><div class="leo-custom"><p class="pull-right loga-paypal-paticka"><a href="/sleva-sphere-card"><img style="margin-right: 10px;" title="Sleva na hodinky se Sphere card" src="http://www.helveti.cz/img/cms/sphere-card.png" alt="Sleva na hodinky se Sphere card" width="42" height="18" /></a><a href="http://www.helveti.cz/platba"><img src="http://www.helveti.cz/modules/leomanagewidgets/data/paypal1.png" alt="platba kartou" /><img src="http://www.helveti.cz/modules/leomanagewidgets/data/paypal2.png" alt="platba kartou" /></a></p><p class="pull-right"><a href="http://www.helveti.cz/proc-u-nas"><img src="http://www.helveti.cz/themes/leodig/img/helveti/logo-paticka.png" alt="loga" /></a></p></div></div><script>$(document).ready(function() {
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