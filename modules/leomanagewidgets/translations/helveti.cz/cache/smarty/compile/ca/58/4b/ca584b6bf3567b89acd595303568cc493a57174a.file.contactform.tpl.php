<?php /* Smarty version Smarty-3.1.14, created on 2015-12-09 12:33:23
         compiled from "/srv/www/helveti/helveti.cz/modules/noxcontactform/views/templates/hook/contactform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16523976455667194361e7d9-17419001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca584b6bf3567b89acd595303568cc493a57174a' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/noxcontactform/views/templates/hook/contactform.tpl',
      1 => 1449660774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16523976455667194361e7d9-17419001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56671943667069_60178261',
  'variables' => 
  array (
    'cms' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56671943667069_60178261')) {function content_56671943667069_60178261($_smarty_tpl) {?><!-- 	Nox contact form     -->
<?php if ($_smarty_tpl->tpl_vars['cms']->value->id==9||$_smarty_tpl->tpl_vars['cms']->value->id==14||$_smarty_tpl->tpl_vars['cms']->value->id==7){?>
<hr />

<div class="cms-kontaktni-formular">

<?php }else{ ?>

<div class="cms-kontaktni-formular samotny">

<hr />

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cms']->value->id==25){?>
	<h4>Nahlásit chybu nebo zlepšení</h4>
<?php }else{ ?>
	<h4>Máte otázku či jiné přání? Napište nám</h4>
<?php }?>

	<div class="error hidden">Vyplňte prosím všechna povinná pole.</div>
	<div class="error0 hidden">Chyba! Velice se omlouváme, ale došlo k nečekané chybě. Kontaktujte nás prosím na emailu <strong>info@helveti.cz</strong></div>
	<div class="success hidden"><strong>Zpráva byla odeslána. Děkujeme!</strong><br />V nejbližší době Vás budeme kontaktovat.</div>
<form method="POST" class="formular_kontrola">
	<div class="cms-kontaktni-formular-jmeno">
	<label for="jmeno">Jméno <sup>*</sup></label><input type="text" name="jmeno" class="kontrola"/>
	</div>
	<div class="cms-kontaktni-formular-telefon">
	<label for="kontakt">Telefon / email <sup>*</sup></label><input type="text" name="kontakt" class="kontrola"/>
	</div>
	<div class="cms-kontaktni-formular-zprava">
	<label for="dotaz">Dotaz / zpráva</label><textarea name="dotaz" class="kontrola"></textarea>
	</div>
	<div class="clearfix"></div>
	<div class="cms-kontaktni-formular-tlacitko">
	<input type="submit" value="Odeslat">
	<span class="cms-kontaktni-formular-nebotel">Nebo na telefonu <strong>+420 774 272 737</strong></span>
	<div class="loading-kolo-obal">
	<div class="loading-kolo hidden">
		<div class="spinner">
		  <div class="bounce1"></div>
		  <div class="bounce2"></div>
		  <div class="bounce3"></div>
		</div>
	</div>
	</div>
	</div>
</form>
</div>

<script>
	$('.formular_kontrola').submit(function (e) {
		$(".error,.success,.error0,.loading-kolo").addClass("hidden");
	e.preventDefault();
	error=0;
	$('.kontrola').each(function(index, item) {
	    var hodnota = $(item).val();
	    if (hodnota  === '') {
	        error=error+1;
	    }
  })
	if(error>0){
  		$(".error").removeClass("hidden");
  	return false;
  }
    var formData = new FormData(this);
    $(".loading-kolo").removeClass("hidden");
	$.ajax({
        url: "../modules/noxcontactform/ajax-submit.php",
	    type: 'POST',
        data:  formData,
    	mimeType:"multipart/form-data",
    	contentType: false,
        cache: false,
        processData:false,
    	success: function(response){
			if(response=="ok"){
				$(".success").removeClass("hidden");
				$(".kontrola").val();
			}
			else if(response=="error0")$(".error0").removeClass("hidden");
			else $(".error").removeClass("hidden");
			$(".loading-kolo").addClass("hidden");
	    },

    });
});

</script>


<?php if ($_smarty_tpl->tpl_vars['cms']->value->id==9||$_smarty_tpl->tpl_vars['cms']->value->id==14||$_smarty_tpl->tpl_vars['cms']->value->id==7){?>

<div class="cms-badges">
	<a href="http://obchody.heureka.cz/helveti-cz/recenze/ "><img src="http://www.helveti.cz/themes/leodig/img/helveti/ccertifikat1.jpg" alt="Certifikáty a hodnocení" /></a><br/>
<a href="http://www.helveti.cz/specialiste "><img src="http://www.helveti.cz/themes/leodig/img/helveti/ccertifikat2.jpg" alt="Certifikáty a hodnocení" /></a><br/>
<a href="http://www.helveti.cz/autorizovany-prodejce-hodinek"><img src="http://www.helveti.cz/themes/leodig/img/helveti/ccertifikat3.jpg" alt="Certifikáty a hodnocení" /></a><br/>
<a href="http://www.helveti.cz/zakaznicke-recenze"><img src="http://www.helveti.cz/themes/leodig/img/helveti/ccertifikat4.jpg" alt="Certifikáty a hodnocení" /></a><br/>
<img src="http://www.helveti.cz/themes/leodig/img/helveti/ccertifikat5.jpg" alt="Certifikáty a hodnocení" />
</div>

<?php }?>

<!-- 	end Nox contact form     -->
<?php }} ?>