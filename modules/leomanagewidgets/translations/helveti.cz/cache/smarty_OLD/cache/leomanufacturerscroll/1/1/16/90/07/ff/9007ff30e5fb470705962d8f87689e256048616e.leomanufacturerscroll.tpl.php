<?php /*%%SmartyHeaderCode:13135642205461054d7a0729-22788092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9007ff30e5fb470705962d8f87689e256048616e' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/modules/leomanufacturerscroll/leomanufacturerscroll.tpl',
      1 => 1400606833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13135642205461054d7a0729-22788092',
  'variables' => 
  array (
    'show_title' => 0,
    'module_title' => 0,
    'leomanufacturers' => 0,
    'manufacturer' => 0,
    'leoManufactureConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5461054da54966_58726009',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5461054da54966_58726009')) {function content_5461054da54966_58726009($_smarty_tpl) {?><div align="center" class="col-md-12" id="mycarouselHolder"><div class="block"><ul class="jcarousel-skin-tango" id="lofjcarousel"><li class="lof-item"> <a href="http://www.helveti.cz/alfex"> <img src="/img/m/7-m_scene_default.jpg" alt="Alfex" vspace="0" border="0" /> </a></li><li class="lof-item"> <a href="http://www.helveti.cz/boccia-titanium"> <img src="/img/m/6-m_scene_default.jpg" alt="Boccia Titanium" vspace="0" border="0" /> </a></li><li class="lof-item"> <a href="http://www.helveti.cz/lorus"> <img src="/img/m/8-m_scene_default.jpg" alt="Lorus" vspace="0" border="0" /> </a></li><li class="lof-item"> <a href="http://www.helveti.cz/pulsar"> <img src="/img/m/9-m_scene_default.jpg" alt="Pulsar" vspace="0" border="0" /> </a></li><li class="lof-item"> <a href="http://www.helveti.cz/seiko"> <img src="/img/m/3-m_scene_default.jpg" alt="Seiko" vspace="0" border="0" /> </a></li><li class="lof-item"> <a href="http://www.helveti.cz/traser"> <img src="/img/m/5-m_scene_default.jpg" alt="Traser" vspace="0" border="0" /> </a></li><li class="lof-item"> <a href="http://www.helveti.cz/victorinox"> <img src="/img/m/10-m_scene_default.jpg" alt="Victorinox" vspace="0" border="0" /> </a></li><li class="lof-item"> <a href="http://www.helveti.cz/wenger"> <img src="/img/m/4-m_scene_default.jpg" alt="Wenger" vspace="0" border="0" /> </a></li></ul></div></div><script type="text/javascript">jQuery(document).ready(function() {
		jQuery("#lofjcarousel").flexisel({
			visibleItems: 6,
			animationSpeed: 1000,
			autoPlay: 1,
			autoPlaySpeed: 3000,
			pauseOnHover: 1,
			enableResponsiveBreakpoints: 1,
	    	responsiveBreakpoints: { 
	    		portrait: { 
	    			changePoint:480,
	    			visibleItems: 1
	    		},
	    		landscape: { 
	    			changePoint:640,
	    			visibleItems: 2
	    		},
	    		tablet: {
	    			changePoint:768,
	    			visibleItems: 6
	    		}
	    	}
	    });
	});</script><?php }} ?>