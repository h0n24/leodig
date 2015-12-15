<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:52:54
         compiled from "/srv/www/helveti/helveti.cz/modules/noxulozenky/views/templates/hook/ulozenky.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184046352566718f68e4216-11610581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05d2ac80706f8e1ab6ff94530ac87b3c48c7a211' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/noxulozenky/views/templates/hook/ulozenky.tpl',
      1 => 1430388142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184046352566718f68e4216-11610581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pocet_ulozenek' => 0,
    'noxulozenka' => 0,
    'noxpobocka' => 0,
    'mapa_mesta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718f6965c45_45597355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718f6965c45_45597355')) {function content_566718f6965c45_45597355($_smarty_tpl) {?>
<h4 class="cms-vydejni-ulozenky">Uloženka - <?php echo $_smarty_tpl->tpl_vars['pocet_ulozenek']->value;?>
 výdejních míst</h4>
<div id="nu_mapa" class="cms-vydejni-ulozenka-mapapobocek"></div>
<select id="vyber_pobocku" class="cms-vydejni-ulozenka-vyber">
	<option value="0">- vybrat výdejní místo - </option>
	<?php  $_smarty_tpl->tpl_vars['noxpobocka'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['noxpobocka']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noxulozenka']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['noxpobocka']->key => $_smarty_tpl->tpl_vars['noxpobocka']->value){
$_smarty_tpl->tpl_vars['noxpobocka']->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['noxpobocka']->value['shortcut'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['noxpobocka']->value['gps']['latitude'];?>
,<?php echo $_smarty_tpl->tpl_vars['noxpobocka']->value['gps']['longitude'];?>
"><?php echo $_smarty_tpl->tpl_vars['noxpobocka']->value['town'];?>
 - <?php echo $_smarty_tpl->tpl_vars['noxpobocka']->value['street'];?>
 <?php echo $_smarty_tpl->tpl_vars['noxpobocka']->value['houseNumber'];?>
</option>
	<?php } ?>
</select>
<div class="clearfix">	</div>
<div id="zvolena_pobocka_ulozenky" class="cms-vydejni-ulozenka">
	<h4 id="nu_nazev" class="cms-vydejni-ulozenka-nazev"></h4>
	<div id="nu_obrazek" class="cms-vydejni-ulozenka-obrazek"><img class='no_ulozenka_obrazek ulozenka_obrazek' src='http://www.helveti.cz/themes/leodig/img/helveti/blank-pobocka.jpg'></div>
	
	<div class="cms-vydejni-ulozenka-adresa">
	<div class="cms-vydejni-ulozenka-radek"><span class="cms-vydejni-ulozenka-vlastnost">Adresa:</span> <span id="nu_adresa" class="cms-vydejni-ulozenka-udaj"></span></div>
	<div class="cms-vydejni-ulozenka-radek"><span class="cms-vydejni-ulozenka-vlastnost">Telefon:</span> <span id="nu_telefon" class="cms-vydejni-ulozenka-udaj"></span></div>
	<div class="cms-vydejni-ulozenka-radek"><span class="cms-vydejni-ulozenka-vlastnost">Email:</span> <span id="nu_email" class="cms-vydejni-ulozenka-udaj"></span></div>
	<div class="cms-vydejni-ulozenka-radek"><span class="cms-vydejni-ulozenka-vlastnost">Otevřeno:</span> <div id="nu_otevreno" class="cms-vydejni-ulozenka-udaj"></div></div>
	<div class="cms-vydejni-ulozenka-radek"><span class="cms-vydejni-ulozenka-vlastnost">GPS:</span> <span id="nu_gps" class="cms-vydejni-ulozenka-udaj"></span></div>
	</div>
</div>
<hr />
<h3 class="nadrozcestnik">Kam dál</h3>
<span class="cms-vydejni-kd cms-vydejni-kd-home"><a href="http://www.helveti.cz/"><em class="ico"></em> Úvodní stránka</a></span>
<span class="cms-vydejni-kd cms-vydejni-kd-katalog"><a href="http://www.helveti.cz/hodinky"><em class="ico"></em> Katalog hodinek</a></span>
<span class="cms-vydejni-kd cms-vydejni-kd-kontakt"><a href="http://www.helveti.cz/kontakt"><em class="ico"></em> Kontakt</a></span>



    <style>
    .gm-style img{
  max-width: none!important;
}
    </style>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCF2ukOab0QMc_YIXs1gVz09vLdbHk4I7E&sensor=false"></script>
<script type="text/javascript" src="http://data.bastard.cz/scripts/fluster.js"></script>
<script>
	var map;
	var locations = <?php echo $_smarty_tpl->tpl_vars['mapa_mesta']->value;?>
;
	function init() {
		var myLatlng = new google.maps.LatLng(49.783333,17.466667);
		var mapOptions = {
		zoom: 6,
		center: myLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var mapElement = document.getElementById('nu_mapa');
		map = new google.maps.Map(mapElement, mapOptions);
		var fluster = new Fluster2(map);
		var infowindow = new google.maps.InfoWindow({
     		content: 'loading...'
  	  	});
		for(i=0;i<locations.length;i++){
			marker= new google.maps.Marker({
				position:new google.maps.LatLng(locations[i][1], locations[i][2]),
				map: map,
				title: locations[i][0],
				nazev:locations[i][3],
				icon: 'http://www.helveti.cz/themes/leodig/img/helveti/marker-uloz.png'
			});
			fluster.addMarker(marker);
			google.maps.event.addListener(marker, 'click', function() {
	  		var ulozenka = this.title;
	  		var center =this.position;
	  		var content='<h3 style="color: #e76d66; margin:12px 0 12px 10px;text-align:center;">'+this.nazev+'</h3>';
	  		map.panTo(center);
    		map.setZoom(14);
       infowindow.setContent(content);
       infowindow.open(map, this);//otevreni popupu
       $('#vyber_pobocku').val(ulozenka).change();//odfiltrovani da v selectu
    });
		}
	fluster.styles = {
		0: {
			image: 'http://www.helveti.cz/themes/leodig/img/helveti/marker-number.png',
			textColor: '#FFFFFF',
			width: 40,
			height: 61
		},
		10: {
			image: 'http://www.helveti.cz/themes/leodig/img/helveti/marker-number.png',
			textColor: '#FFFFFF',
			width: 40,
			height: 61
		},
		20: {
			image: 'http://www.helveti.cz/themes/leodig/img/helveti/marker-number.png',
			textColor: '#FFFFFF',
			width: 40,
			height: 61
		}
	};
	fluster.initialize();     	
 }


function moveToLocation(lat, lng){
    var center = new google.maps.LatLng(lat, lng);
    map.panTo(center);
    map.setZoom(15);
}
google.maps.event.addDomListener(window, 'load', init);


	$('#vyber_pobocku').change(function () {
		p=$(this).val();
		gps=$("#vyber_pobocku option[value="+p+"	]").attr("rel");
		pole=gps.split(',');
		moveToLocation(pole[0],pole[1]);
		$.ajax({
        url: "../modules/noxulozenky/ajax-submit.php",
		type: "POST",
		data: {pobocka:p},
        cache: false,
    	success: function(response){
			data=response.split("@@@");
			$("#nu_nazev").text(data[0]);
			$("#nu_obrazek").html(data[1]);
			$("#nu_adresa").text(data[2]);
			$("#nu_telefon").text(data[3]);
			$("#nu_email").text(data[4]);
			$("#nu_otevreno").html(data[5]);
			$("#nu_gps").text(data[6]);
	    },
    });
    
	});


	

</script>
<?php }} ?>