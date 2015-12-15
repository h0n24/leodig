<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:52:58
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/modules/leobootstrapmenu/themes/default/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1857504272566718fa12c709-65458084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53983bae7c6eeb470400d043316c9102819c3481' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/modules/leobootstrapmenu/themes/default/default.tpl',
      1 => 1410620140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1857504272566718fa12c709-65458084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leobootstrapmenu_menu_tree' => 0,
    'PS_CATALOG_MODE' => 0,
    'link' => 0,
    'cart_qties' => 0,
    'priceDisplay' => 0,
    'blockuser_cart_flag' => 0,
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718fa271133_64111595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718fa271133_64111595')) {function content_566718fa271133_64111595($_smarty_tpl) {?><div class="navbar-inverse">
	<nav id="cavas_menu" class="navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only"><?php echo smartyTranslate(array('s'=>'Toggle navigation','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div id="leo-top-menu" class="collapse navbar-collapse navbar-ex1-collapse">
			<?php echo $_smarty_tpl->tpl_vars['leobootstrapmenu_menu_tree']->value;?>

		</div>
	</nav>
</div>
<script type="text/javascript">
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
            text_warning_select: "<?php echo smartyTranslate(array('s'=>'Please select One to remove?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
",
            text_confirm_remove: "<?php echo smartyTranslate(array('s'=>'Are you sure to remove footer row?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
",
            JSON: null
        }, opts);
        // main function


        // initialize every element
        this.each(function() {
            var $btn = $('#cavas_menu .navbar-toggle');
            var $nav = null;


            if (!$btn.length)
                return;
            var $nav = $('<section id="off-canvas-nav"><nav class="offcanvas-mainnav" ><div id="off-canvas-button"><span class="off-canvas-nav"></span><?php echo smartyTranslate(array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</div></nav></sections>');
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
</script>

<!-- cart in module leobootstrapmenu -->

<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
        <ul id="header_nav_cart" class="links pull-right">
            <li id="shopping_cart">
                <a  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order.php',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my shopping cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow">
                    <span class="shopping-cart-ico">
                        <span class="ajax_cart_quantity<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0){?> hidden<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span>
                    </span>  
                    <div class="cart-header-popis">              
                        <span class="ajax_cart_total<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0){?> hidden<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0){?>
                                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1){?>
                                    <?php $_smarty_tpl->tpl_vars['blockuser_cart_flag'] = new Smarty_variable(constant('Cart::BOTH_WITHOUT_SHIPPING'), null, 0);?>
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,$_smarty_tpl->tpl_vars['blockuser_cart_flag']->value)),$_smarty_tpl);?>

                                <?php }else{ ?>
                                    <?php $_smarty_tpl->tpl_vars['blockuser_cart_flag'] = new Smarty_variable(constant('Cart::BOTH_WITHOUT_SHIPPING'), null, 0);?>
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,$_smarty_tpl->tpl_vars['blockuser_cart_flag']->value)),$_smarty_tpl);?>

                                <?php }?>
                            <?php }?>
                        </span>
                        <span class="ajax_cart_no_product<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0){?> hidden<?php }?>">
                                <?php echo smartyTranslate(array('s'=>'Prázdný košík','mod'=>'blockuserinfo'),$_smarty_tpl);?>

                        </span><br />
                        <?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0){?> <span class="cart-header-odkaz">Přejít do košíku</span> <?php }?>
                    </div>
                </a>
            </li>
        </ul>
    <?php }?>

<!-- end cart in module leobootstrapmenu -->
<?php }} ?>