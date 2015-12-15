$(document).ready( function(){
	if(	navigator.appVersion.indexOf("MSIE 7.")!=-1||
		navigator.appVersion.indexOf("MSIE 6.")!=-1){
			$("#low_ie_overlay").show();
			$("#low_ie_popup").show();
		}
//ulozenka
/*$("input.delivery_option_radio").change(function(){
	dopravce_raw=$("input.delivery_option_radio:checked").val();
	pole_dopravce=dopravce_raw.split(',');
	dopravce=pole_dopravce[0];
	ulozenka_id=$("#ulozenka_id_custom").val();
	if(dopravce!=ulozenka_id){
		$("#selulozenka").val("");
	}
})*/
$("input[name=processCarrier]").click(function(){
	dopravce_raw=$("input.delivery_option_radio:checked").val();
	pole_dopravce=dopravce_raw.split(',');
	dopravce=pole_dopravce[0];
	ulozenka_id=$("#ulozenka_id_custom").val();
	if(dopravce==ulozenka_id){//ID ULOZENKY pri zmene je potreba upravit
		el_ulozenka =document.getElementById('selulozenka');
   		sel_ulozenka=el_ulozenka.options[el_ulozenka.selectedIndex].value;
   		if(sel_ulozenka==""){
   			alert("Vyberte prosím dodací místo");
   			return false;
   		}
	}
})


	if( $.cookie('listing_products_mode') ){
            $("#product_list").removeClass('view-grid').removeClass('view-list').addClass( $.cookie('listing_products_mode') );
        }

	$("#productsview a").each( function() {
		if( $.cookie('listing_products_mode') && $(this).attr('rel') == $.cookie('listing_products_mode') ){
			$('#productsview a i').removeClass( 'active' );
			$( 'i', this).addClass('active'); 
		}
		$(this).click( function(){
			$('#productsview a i').removeClass( 'active' );
			$( 'i', this).addClass('active');
			$("#product_list").removeClass('view-grid').removeClass('view-list').addClass( $(this).attr('rel') );
			$.cookie( 'listing_products_mode', $(this).attr('rel') );
			return false;
		} ); 
	} );
	 
	 
	
	//userinfo	 
	 $("#header_user").each( function(){
		var content = $(".groupe-content");
		$(".groupe-btn", this ).click( function(){
			content.toggleClass("show");
		}) ;
	} );
	 
	//search 
		$("#search_block_top").each( function(){
		var content = $(".groupe");
		$(".groupe-btn", this ).click( function(){
				content.toggleClass("show");
			}) ;
		} );
	 
	// scroll top
	$('#nav_up').click(function () {
	   $('body,html').animate({
	    scrollTop: 0
	   }, 800);
	   return false;
	 });

	// canvas menu 	
	$(document.body).on('click', '[data-toggle="dropdown"]' ,function(){
	  if(!$(this).parent().hasClass('open') && this.href && this.href != '#'){
	   window.location.href = this.href;
	  }

	 });
 
	//tooltip
	$('.btn-tooltip').tooltip('show');
	$('.btn-tooltip').tooltip('hide');
	
	// gototop
	   // hide #back-top first
		 $("#back-top").hide(); 
		 // fade in #back-top
		 $(function () {
			  $(window).scroll(function () {
			   if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			   } else {
				$('#back-top').fadeOut();
			   }
			  });
			  // scroll body to 0px on click
			  $('#back-top a').click(function () {
			   $('body,html').animate({
				scrollTop: 0
			   }, 800);
			   return false;
		  });
		 });	
} );
$(window).ready( function(){
     /* automatic keep header always displaying on top */
    /* ZRUSENO vyjizdeni a zajizdeni menu 
    
    if( $("body").hasClass("keep-header") ){
         $("#header").addClass( "navbar-fixed-top" );
        var hideheight =  $("#header").height()+120; 
        $("#page").css( "padding-top", $("#header").height() );
        $(window).scroll(function() {
            var pos = $(window).scrollTop();
            if( pos >= hideheight ){
                $("#topbar").addClass('hide-bar');
    $(".hide-bar").css( "margin-top", - $("#topbar").height() );
            }else {
                $("#topbar").removeClass('hide-bar');
                $("#topbar").css( "margin-top", 0 );
            } 

        });
    }*/
 
 //ostatni
 //kupony
	$('#kupon_helper').change(function() {
		if($(this).is(':checked'))
			$("#voucher fieldset").show();
		else
			$("#voucher fieldset").hide();
 })

} );
// wishlihst
function LeoWishlistCart(id, action, id_product, id_product_attribute, quantity)
{ 
	$.ajax({
		type: 'GET',
		url:	baseDir + 'modules/blockwishlist/cart.php',
		async: true,
		cache: false,
		data: 'action=' + action + '&id_product=' + id_product + '&quantity=' + quantity + '&token=' + static_token + '&id_product_attribute=' + id_product_attribute,
		success: function(data)
		{ 
			if (action == 'add') {
				
				if( $("#wishlistwraning").length <= 0 ) {
				   var html = '';
				   html +=  '<div id="wishlistwraning"><div class="container">';
				   html +=  ' ';
				   html +=  '</div></div>';
				   $("body").append( html );	
				} 
				$("#wishlistwraning .container").html( ' <div class="alert-content"> <div class="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>' + data + '</div></div>' );		
				if( $("#wishlistwraning .cart_block_product_name").length > 0 ) {
					$("#wishlistwraning").html('<div class="container"><div class="alert">Produkt byl přidán na váš seznam přání</div></div>').show().delay(1000).fadeOut(300);
				}else {
					$("#wishlistwraning").show().delay(3000).fadeOut(600);
				}
				
   			}
		
			if($('#' + id).length != 0)
			{ 
				$('#' + id).slideUp('normal');
				document.getElementById(id).innerHTML = data;
				$('#' + id).slideDown('normal');
				
			}
		}
	});
}


// rozbalení dalších fotek v detailu produktu
$(window).ready( function(){
	$('#dalsi-fotografie').click(function(){
		$('#thumbs_list').toggleClass('open', 500);
		
		if($('#thumbs_list').hasClass('open')) {
			$( "#fotografie-zabaleno" ).hide();
			$( "#fotografie-rozbaleno" ).show();
		} 
		else{
			$( "#fotografie-zabaleno" ).show();
			$( "#fotografie-rozbaleno" ).hide();
		};
	});
});


