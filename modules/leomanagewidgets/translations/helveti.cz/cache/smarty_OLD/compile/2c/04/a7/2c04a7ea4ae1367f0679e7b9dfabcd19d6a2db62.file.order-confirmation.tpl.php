<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:42:16
         compiled from "/srv/www/helveti/themes/leodig/order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120496817454610708b1af87-75450668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c04a7ea4ae1367f0679e7b9dfabcd19d6a2db62' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/order-confirmation.tpl',
      1 => 1415644636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120496817454610708b1af87-75450668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'objednavka' => 0,
    'product_cart' => 0,
    'link' => 0,
    'HOOK_PAYMENT_RETURN' => 0,
    'HOOK_ORDER_CONFIRMATION' => 0,
    'is_guest' => 0,
    'base_dir' => 0,
    'total_to_pay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54610708da40f9_03677998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610708da40f9_03677998')) {function content_54610708da40f9_03677998($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/tools/smarty/plugins/modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Order confirmation'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="success success-objednavka-kompletni"><h1><?php echo smartyTranslate(array('s'=>'Vaše objednávka '),$_smarty_tpl);?>
<span class="zdarma_barva"><?php echo smartyTranslate(array('s'=>'byla odeslána.'),$_smarty_tpl);?>
</span><?php echo smartyTranslate(array('s'=>' Děkujeme!'),$_smarty_tpl);?>
</h1> </div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php $_smarty_tpl->tpl_vars['objednavka'] = new Smarty_variable(OrderConfirmationController::detailyObjednavky(), null, 0);?>

<div class="infobox-kosik-container">
		<div id="rekapitulace_box_kosik" class="box_kosik">
			<fieldset>
			<legend>Rekapitulace objednávky</legend>
			<div class="informace_o_objednavce">
				Číslo objednávky: <strong><?php echo $_smarty_tpl->tpl_vars['objednavka']->value->id;?>
</strong>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['objednavka']->value->module=="bankwire"){?>
				<div class="informace_o_objednavce">
				Číslo účtu: <strong>2500275421 / 2010</strong>
				</div>
				<div class="informace_o_objednavce">
				Variabilní symbol: <strong><?php echo $_smarty_tpl->tpl_vars['objednavka']->value->reference;?>
</strong>
				</div>
			<?php }?>

			<table class="rekapitulace_zbozi">
		<?php  $_smarty_tpl->tpl_vars['product_cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_cart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['objednavka']->value->produkty; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_cart']->key => $_smarty_tpl->tpl_vars['product_cart']->value){
$_smarty_tpl->tpl_vars['product_cart']->_loop = true;
?>
			<tr>
			<td class="rekapitulace_pocet">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product_cart']->value['product_id'],$_smarty_tpl->tpl_vars['product_cart']->value['image']->id_image,'kosik_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product_cart']->value['product_name'], 'htmlall', 'UTF-8');?>
"  width="60"/> 
				</td>
				<td class="rekapitulace_produkt">
					<span class="rekapitulace_nazev"><?php echo $_smarty_tpl->tpl_vars['product_cart']->value['product_name'];?>
</span>
				</td>
				<td class="rekapitulace_pocet">
					<?php echo $_smarty_tpl->tpl_vars['product_cart']->value['product_quantity'];?>
 ks 
				</td>
				<td class="rekapitulace_cena">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product_cart']->value['total_price_tax_incl']),$_smarty_tpl);?>
 
				</td>
			</tr>
		<?php } ?>
			<tr>
			<td class="rekapitulace_pocet">
					<img src="http://www.helveti.cz/themes/leodig/img/helveti/pojisteni.png" title="Pojištění hodinek na 1 rok" alt="Pojištění hodinek na 1 rok" width="50"> 
				</td>
				<td class="rekapitulace_produkt">
					<span class="rekapitulace_nazev">Pojištění hodinek na 1 rok</span>
				</td>
				<td class="rekapitulace_pocet">
					1 ks 
				</td>
				<td class="rekapitulace_cena">
					<span class="zdarma_barva">ZDARMA</span>
				</td>
			</tr>
			<tr>
				<td class="rekapitulace_doprava" colspan="2">
					<span class="rekapitulace_doprava_nazev">Doprava: <strong><?php echo $_smarty_tpl->tpl_vars['objednavka']->value->doprava;?>
</strong></span>
				</td>
				<td class="rekapitulace_pocet">
				</td>
				<td class="rekapitulace_doprava_cena">
					<?php if ($_smarty_tpl->tpl_vars['objednavka']->value->total_shipping_tax_incl>0){?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['objednavka']->value->total_shipping_tax_incl),$_smarty_tpl);?>
 
					<?php }else{ ?>
						<span class="zdarma_barva">ZDARMA</span>
					<?php }?>
				</td>
			</tr>
			<tr>
				<td class="rekapitulace_platba" colspan="2">
					<span class="rekapitulace_platba_nazev">Platba: <strong>
						<?php if ($_smarty_tpl->tpl_vars['objednavka']->value->module=="bankwire"){?>
							Bankovním převodem
						<?php }elseif($_smarty_tpl->tpl_vars['objednavka']->value->module=="cashondelivery"){?>
							Hotově při převzetí
						<?php }else{ ?>
							<?php echo $_smarty_tpl->tpl_vars['objednavka']->value->payment;?>

						<?php }?>
						</strong></span>
				</td>
				<td class="rekapitulace_pocet">
				</td>
				<td class="rekapitulace_platba_cena">
					<span class="zdarma_barva">ZDARMA</span>
				</td>
			</tr>
			<table>
			<tr class="rekapitulace_celkem">
				<td class="rekapitulace_celkem_zbozi">Celkem za zboží</td>
				
				<td class="rekapitulace_cena">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['objednavka']->value->total_paid),$_smarty_tpl);?>

				</td>
			</tr>
			</table>			
			</fieldset>
		</div>

</div>









<div class="potvrzeni-objednavky-obsah">


<?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

</div>

<br />

<div class="potvrzeni-objednavky-linky">
<?php if ($_smarty_tpl->tpl_vars['is_guest']->value){?>
	
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Back to orders'),$_smarty_tpl);?>
"><span class="fa fa-shopping-cart" style="margin-right: 10px;"></span><?php echo smartyTranslate(array('s'=>'Sledovat mou zásilku'),$_smarty_tpl);?>
</a>
	
<?php }else{ ?>	
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Back to orders'),$_smarty_tpl);?>
"><span class="shrnuti-ico-kosik"></span><?php echo smartyTranslate(array('s'=>'Sledovat mou zásilku'),$_smarty_tpl);?>
</a>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Back to orders'),$_smarty_tpl);?>
"><span class="shrnuti-ico-nakupy"></span><?php echo smartyTranslate(array('s'=>'Moje nákupy'),$_smarty_tpl);?>
</a>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" class="logout" rel="nofollow"><span class="shrnuti-ico-odhlasit"></span><?php echo smartyTranslate(array('s'=>'Odhlásit se'),$_smarty_tpl);?>
</a>
<?php }?>
</div>

<div class="potvrzeni-tlacitka">
<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" class="zpet-do-eshopu button"><em class="fa fa-chevron-left"></em><?php echo smartyTranslate(array('s'=>'Zpět do eshopu'),$_smarty_tpl);?>
</a>

</div>

<!-- Google Code for Konverze Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 991679542;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "tWwhCLq2_QkQtqjv2AM";
var google_conversion_value = <?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
;
var google_conversion_currency = "CZK";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/991679542/?value=<?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
&amp;currency_code=CZK&amp;label=tWwhCLq2_QkQtqjv2AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Měřicí kód Sklik.cz -->
<iframe width="119" height="22" frameborder="0" scrolling="no" src="http://c.imedia.cz/checkConversion?c=100008015&color=ffffff&v=<?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
"></iframe>


<!-- Měřicí kód Zbozi.cz -->
<iframe src="http://www.zbozi.cz/action/109243/conversion?chsum=-X_jnU3sr0UddAqlX130zw==" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="position:absolute; top:-3000px; left:-3000px; width:1px; height:1px; overflow:hidden;"></iframe>

<!-- Měřicí kód Heureka.cz -->

<script type="text/javascript">
var _hrq = _hrq || [];
    _hrq.push(['setKey', 'ABF4193AD90DA96C26E88D8E3E39A19A']);
    _hrq.push(['setOrderId', '<?php echo $_smarty_tpl->tpl_vars['objednavka']->value->id;?>
']);
    
    <?php  $_smarty_tpl->tpl_vars['product_cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_cart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['objednavka']->value->produkty; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_cart']->key => $_smarty_tpl->tpl_vars['product_cart']->value){
$_smarty_tpl->tpl_vars['product_cart']->_loop = true;
?>
    _hrq.push(['addProduct', '<?php echo $_smarty_tpl->tpl_vars['product_cart']->value['product_name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product_cart']->value['total_price_tax_incl'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product_cart']->value['product_quantity'];?>
']);
    <?php } ?>
    
       
    _hrq.push(['trackOrder']);

(function() {
    var ho = document.createElement('script'); ho.type = 'text/javascript'; ho.async = true;
    ho.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.heureka.cz/direct/js/cache/1-roi-async.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ho, s);
})();
</script>



<!-- Facebook Conversion Code for helveti.cz - nákup -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6019003112247', {'value':'<?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
','currency':'CZK'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6019003112247&amp;cd[value]=<?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
&amp;cd[currency]=CZK&amp;noscript=1" /></noscript>
<?php }} ?>