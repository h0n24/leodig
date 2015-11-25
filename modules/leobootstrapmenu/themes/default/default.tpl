<div class="navbar-inverse">
	<nav id="cavas_menu" class="navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">{l s='Toggle navigation' mod='leobootstrapmenu'}</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div id="leo-top-menu" class="collapse navbar-collapse navbar-ex1-collapse">
			{$leobootstrapmenu_menu_tree}
		</div>
	</nav>
</div>
<script type="text/javascript">{literal}
// <![CDATA[
(function($) {
$(document).click(function(event) { 
    if(!$(event.target).closest('#leo-top-menu .nav li').length) {
        if($('#leo-top-menu .nav li').is(":visible")) {
            $("#leo-top-menu .nav li").removeClass("hovered");
        }
    }        
})
	$(".prvni_polozka_menu").click(function(){
		nejblizsi_li=$(this).closest("li");
		nezobrazovat=0;
		if(nejblizsi_li.hasClass("hovered"))nezobrazovat=1;
		$("#leo-top-menu .nav li").removeClass("hovered");
		if(nezobrazovat==0)nejblizsi_li.addClass("hovered");
		return false;
	})
    $.fn.OffCavasmenu = function(opts) {
        // default configuration
        var config = $.extend({}, {
            opt1: null,
            text_warning_select: "{/literal}{l s='Please select One to remove?' mod='leobootstrapmenu'}",{literal}
            text_confirm_remove: "{/literal}{l s='Are you sure to remove footer row?' mod='leobootstrapmenu'}",{literal}
            JSON: null
        }, opts);
        // main function


        // initialize every element
        this.each(function() {
            var $btn = $('#cavas_menu .navbar-toggle');
            var $nav = null;


            if (!$btn.length)
                return;
            var $nav = $('<section id="off-canvas-nav"><nav class="offcanvas-mainnav" ><div id="off-canvas-button"><span class="off-canvas-nav"></span>{/literal}{l s='Close' mod='leobootstrapmenu'}{literal}</div></nav></sections>');
            var $menucontent = $($btn.data('target')).find('.megamenu').clone();
            $("body").append($nav);
            $("#off-canvas-nav .offcanvas-mainnav").append($menucontent);


            $("html").addClass ("off-canvas");
            $("#off-canvas-button").click( function(){
                    $btn.click();	
            } );
            $btn.toggle(function() {
                $("body").removeClass("off-canvas-inactive").addClass("off-canvas-active");
            }, function() {
                $("body").removeClass("off-canvas-active").addClass("off-canvas-inactive");

            });

        });
        return this;
    }

})(jQuery);
$(document).ready(function() {
    jQuery("#cavas_menu").OffCavasmenu();
    $('#cavas_menu .navbar-toggle').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 0);
        return false;
    });



    var currentURL = window.location;
    currentURL = String(currentURL);
    currentURL = currentURL.replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
    baseURL = baseUri.replace("https://","").replace("http://","").replace("www.","");
    isHomeMenu = 0;
    if($("body").attr("id")=="index") isHomeMenu = 1;
    $(".megamenu > li > a").each(function() {
        menuURL = $(this).attr("href").replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
        if( isHomeMenu && (baseURL == menuURL || baseURL == menuURL.substring(0,menuURL.length-3) || baseURL.replace("index.php","")==menuURL)){
            $(this).parent().addClass("active");
            return false;
        }
        if(currentURL == menuURL){
            $(this).parent().addClass("active");
            return false;
        }
    });
});
// ]]>
{/literal}</script>

<!-- cart in module leobootstrapmenu -->

{if !$PS_CATALOG_MODE}
        <ul id="header_nav_cart" class="links pull-right">
            <li id="shopping_cart">
                <a  href="{$link->getPageLink('order.php', true)|escape:'html'}" title="{l s='View my shopping cart' mod='blockuserinfo'}" rel="nofollow">
                    <span class="shopping-cart-ico">
                        <span class="ajax_cart_quantity{if $cart_qties == 0} hidden{/if}">{$cart_qties}</span>
                    </span>  
                    <div class="cart-header-popis">              
                        <span class="ajax_cart_total{if $cart_qties == 0} hidden{/if}">
                            {if $cart_qties > 0}
                                {if $priceDisplay == 1}
                                    {assign var='blockuser_cart_flag' value='Cart::BOTH_WITHOUT_SHIPPING'|constant}
                                    {convertPrice price=$cart->getOrderTotal(false, $blockuser_cart_flag)}
                                {else}
                                    {assign var='blockuser_cart_flag' value='Cart::BOTH_WITHOUT_SHIPPING'|constant}
                                    {convertPrice price=$cart->getOrderTotal(true, $blockuser_cart_flag)}
                                {/if}
                            {/if}
                        </span>
                        <span class="ajax_cart_no_product{if $cart_qties > 0} hidden{/if}">
                                {l s='Prázdný košík' mod='blockuserinfo'}{* 
                                {convertPrice price=0} *}
                        </span><br />
                        {if $cart_qties > 0} <span class="cart-header-odkaz">Přejít do košíku</span> {/if}
                    </div>
                </a>
            </li>
        </ul>
    {/if}

<!-- end cart in module leobootstrapmenu -->
