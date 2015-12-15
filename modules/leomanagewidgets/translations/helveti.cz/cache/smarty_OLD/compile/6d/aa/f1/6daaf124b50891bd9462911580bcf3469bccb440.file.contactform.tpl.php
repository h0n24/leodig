<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:35:05
         compiled from "/srv/www/helveti/modules/noxcontactform/views/templates/hook/contactform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57365488554610559b0e798-24498841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6daaf124b50891bd9462911580bcf3469bccb440' => 
    array (
      0 => '/srv/www/helveti/modules/noxcontactform/views/templates/hook/contactform.tpl',
      1 => 1412725267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57365488554610559b0e798-24498841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54610559f31333_83309458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610559f31333_83309458')) {function content_54610559f31333_83309458($_smarty_tpl) {?><!-- 	Nox contact form     -->
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
	<span class="cms-kontaktni-formular-nebotel">Nebo na telefonu <strong>+420 774 744 763</strong></span>
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
	<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
helveti/badges.jpg" alt="Garance kvality, Ověřeno zákazníky, Český prodejce" width="88" height="383">
</div>

<?php }?>

<!-- 	end Nox contact form     -->
<?php }} ?>