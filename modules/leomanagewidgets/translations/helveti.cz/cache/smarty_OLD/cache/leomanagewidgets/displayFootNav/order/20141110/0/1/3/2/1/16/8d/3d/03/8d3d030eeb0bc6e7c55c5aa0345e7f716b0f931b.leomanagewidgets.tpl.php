<?php /*%%SmartyHeaderCode:14666950445461053432f547-41900732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d3d030eeb0bc6e7c55c5aa0345e7f716b0f931b' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/modules/leomanagewidgets/themes/leomanagewidgets.tpl',
      1 => 1411561272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14666950445461053432f547-41900732',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54610689a4f142_72150123',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610689a4f142_72150123')) {function content_54610689a4f142_72150123($_smarty_tpl) {?><div id="homecontent-displayFootNav"><div class="leo-custom"><p class="pull-right loga-paypal-paticka"><a href="http://www.helveti.cz/platba"><img src="http://www.helveti.cz/modules/leomanagewidgets/data/paypal1.png" alt="paypal1" /><img src="http://www.helveti.cz/modules/leomanagewidgets/data/paypal2.png" alt="paypal2" /><img src="http://www.helveti.cz/modules/leomanagewidgets/data/paypal3.png" alt="paypal3" /><img src="http://www.helveti.cz/modules/leomanagewidgets/data/paypal4.png" alt="paypal4" /></a></p><p class="pull-right"><a href="http://www.helveti.cz/proc-u-nas"><img src="http://www.helveti.cz/themes/leodig/img/helveti/logo-paticka.png" alt="loga" /></a></p></div></div><script>$(document).ready(function() {
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