$(document).ready( function(){
 //prihlaseni v kosiku (zobrazeni)
	$("#zobraz_login").click(
		function(){
			$("#prihlaseni").removeClass("hidden");
			$(".cart_navigation").addClass("hidden");
			$("#bez_registrace").addClass("hidden");
			$("#prihlaseni_v_kosiku").addClass("hidden");
			$("h1").text("Přihlášení:");
			return false;
		});
	$(".zpet_na_registraci").click(function(){
			$("#prihlaseni").addClass("hidden");
			$(".cart_navigation").removeClass("hidden");
			$("#bez_registrace").removeClass("hidden");
			$("#prihlaseni_v_kosiku").removeClass("hidden");
				$("h1").text("Objednávka bez registrace:");
			return false;
		}
		);
//ajax kontrola formulare predeslanim
$( "#new_account_form" ).submit(function( event ) {
	var err=0;
	$(".error_formular").remove();
	$(".icko_formular").hide();
	$(".form-group.required input[type!='hidden']").removeClass("spatne-vyplneno");
	druha_adresa=$("#opc_invoice_address").is(":visible");
	$("#opc_account_form .form-group.required input[type!='hidden']").each(function(){
		if(!$(this).val()){
			$(this).addClass("spatne-vyplneno");
			$(this).not(".hidden").closest("div").after('<div class="error_formular"><span class="error_ikonka"><i class="fa fa-times"></i></span>Tento údaj je povinný</div>');
			err=err+1;
		}
	});
	if(druha_adresa){
		$("#opc_invoice_address .form-group.required input[type!='hidden']").each(function(){
			if(!$(this).val()){
				$(this).addClass("spatne-vyplneno");
				$(this).not(".hidden").closest("div").after('<div class="error_formular"><span class="error_ikonka"><i class="fa fa-times"></i></span>Tento údaj je povinný</div>');
				err=err+1;
			}
		});
	}
	if ($("#guest_email").val()!="" && IsEmail($("#guest_email").val()) == false) {
  		$("#guest_email").addClass("spatne-vyplneno");
  		$("#guest_email_div").after('<div class="error_formular error_formular_s_popiskem"><span class="error_ikonka"><i class="fa fa-times"></i></span>Email není ve správném tvaru<br><span class="vzor">vzor: email@email.cz</span></div>');
  		err=err+1;	
	}
	if(err>0)event.preventDefault();
});

//login form
$( "#login_form" ).submit(function( event ) {
		var err=0;
		$(".error_formular").remove();
	if (IsEmail($("#email").val()) == false) {
  		$("#email").addClass("spatne-vyplneno");
  		$("#email_div").after('<div class="error_formular error_formular_s_popiskem"><span class="error_ikonka"><i class="fa fa-times"></i></span>Email není ve správném tvaru<br><span class="vzor">vzor: email@email.cz</span></div>');
  		err=err+1;	
	}
	if(err>0)event.preventDefault();
});


$('#nakup_na_firmu').click(function() {
		if ($('#nakup_na_firmu:checked').length > 0)
			$('#firemni_udaje').slideDown('slow');
		else {
			$('#firemni_udaje').slideUp('slow');
			$('#firemni_udaje input').val("");
		}
		});
})


function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

