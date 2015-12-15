<?php /* Smarty version Smarty-3.1.14, created on 2015-12-10 23:31:12
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/modules/add_gopay_new/views/templates/front/validation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20193541285669fd309b8d61-81352466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7494e1a050c1b84d35ffdfb03bbcc05352084870' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/modules/add_gopay_new/views/templates/front/validation.tpl',
      1 => 1449786667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20193541285669fd309b8d61-81352466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbProducts' => 0,
    'link' => 0,
    'INLINE_MODE' => 0,
    'fee' => 0,
    'feeWithTax' => 0,
    'paymentChannel' => 0,
    'paymentSwift' => 0,
    'cart' => 0,
    'cart_info' => 0,
    'product_cart' => 0,
    'priceDisplay' => 0,
    'sleva_cart' => 0,
    'img_dir' => 0,
    'base_dir' => 0,
    'ORDER_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5669fd30b3cda5_34839293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5669fd30b3cda5_34839293')) {function content_5669fd30b3cda5_34839293($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
?>


<style>
.module-add_gopay_new-validation .celkem_kosik{
    float: right;
    width: 304px;
    text-align: center;
    color: #636363;
    font-size: 24px;
    font-weight: 400;
    margin-top: 25px;
}
.module-add_gopay_new-validation .celkem_kosik .cena_celkem {
    color: #e97b74;
    font-size: 26px;
    font-weight: 700;
}
</style>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Shipping','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['nbProducts']->value<=0){?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</p>
<?php }else{ ?>
<form id="gopay-payment-button" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('add_gopay_new','validation',array(),true);?>
" method="post">
<input type="hidden" name="confirm_gopay" value="1" />
<input type="hidden" name="inline" value="<?php echo $_smarty_tpl->tpl_vars['INLINE_MODE']->value;?>
">
<input type="hidden" name="fee" value="<?php echo $_smarty_tpl->tpl_vars['fee']->value;?>
" />
<input type="hidden" name="feeWithTax" value="<?php echo $_smarty_tpl->tpl_vars['feeWithTax']->value;?>
" />
<input type="hidden" name="paymentChannel" value="<?php echo $_smarty_tpl->tpl_vars['paymentChannel']->value;?>
" />
<input type="hidden" name="paymentSwift" value="<?php echo $_smarty_tpl->tpl_vars['paymentSwift']->value;?>
" />

<?php if ($_smarty_tpl->tpl_vars['cart']->value->id&&Cart::getTotalCart($_smarty_tpl->tpl_vars['cart']->value->id)){?>
	<table id="cart_summary" class="std table-bordered">
		<tr>
			<th class="cart_product first_item">Produkt</th>
			<th class="cart_description item">Popis</th>
			<th class="cart_ref item">Dostupnost</th>
			<th class="cart_unit item">Cena za kus</th>
			<th class="cart_quantity item">Množství</th>
			<th class="cart_total item">Celkem</th>
		</tr>
	<?php $_smarty_tpl->tpl_vars['cart_info'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getSummaryDetails(), null, 0);?>
		<tr></tr>
	<?php  $_smarty_tpl->tpl_vars['product_cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_cart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_cart']->key => $_smarty_tpl->tpl_vars['product_cart']->value){
$_smarty_tpl->tpl_vars['product_cart']->_loop = true;
?>
		<tr>
			<td class="cart_product"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product_cart']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product_cart']->value['id_image'],'kosik_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product_cart']->value['name'], 'htmlall', 'UTF-8');?>
"  /></td>
			<td class="cart_description"><p class="s_title_block"><?php echo $_smarty_tpl->tpl_vars['product_cart']->value['name'];?>
</p></td>
			<td class="cart_ref"><?php ob_start();?><?php echo Product::skladovost($_smarty_tpl->tpl_vars['product_cart']->value['id_product'],"skladem");?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>Skladem<?php }else{ ?>do 14 dní<?php }?></td>
			<td class="cart_unit">
				<span class="price"><?php if (isset($_smarty_tpl->tpl_vars['product_cart']->value['is_discounted'])&&$_smarty_tpl->tpl_vars['product_cart']->value['is_discounted']){?>
					<span style="text-decoration:line-through;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product_cart']->value['price_without_specific_price']),$_smarty_tpl);?>
</span><br />
				<?php }?>
				<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product_cart']->value['price_wt']),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product_cart']->value['price']),$_smarty_tpl);?>

				<?php }?>
				</span>
			</td>
			<td  class="cart_quantity cart_discount_delete"><?php echo $_smarty_tpl->tpl_vars['product_cart']->value['quantity'];?>
</td>
			<td class="cart_total"><span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product_cart']->value['total_wt']),$_smarty_tpl);?>
</span></td>
		</tr>
	<?php } ?>
	<?php  $_smarty_tpl->tpl_vars['sleva_cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sleva_cart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_info']->value['discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sleva_cart']->key => $_smarty_tpl->tpl_vars['sleva_cart']->value){
$_smarty_tpl->tpl_vars['sleva_cart']->_loop = true;
?>
			<tr class="cart_voucher">
			<td class="cart_discount_img cart_product"><img src="/themes/leodig/img/helveti/iko-sleva.png" alt="Slevový kupon"></td>
			<td colspan="2" class="cart_discount_name cart_description">
				<p class="s_title_block"><?php echo $_smarty_tpl->tpl_vars['sleva_cart']->value['name'];?>
</p>
			</td>
			<td class="cart_discount_price cart_unit"><span class="price-discount price"> -<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['sleva_cart']->value['value_real']),$_smarty_tpl);?>
 </span></td>
			<td class="cart_discount_delete cart_quantity">
			1
			</td>
			<td class="cart_discount_price cart_total"> <span class="price-discount price">
			-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['sleva_cart']->value['value_real']),$_smarty_tpl);?>
 
			</span></td>
		</tr>
	<?php } ?>
		
		
			
		<tr>
					<td class="cart_product"><a href="http://www.helveti.cz/pojisteni-hodinek" target="_blank"><img src="http://www.helveti.cz/themes/leodig/img/helveti/pojisteni.png" title="Pojištění hodinek na 1 rok" alt="Pojištění hodinek na 1 rok" width="81"></a></td>
					<td class="cart_description"><p class="s_title_block"><a href="http://www.helveti.cz/pojisteni-hodinek" target="_blank">Pojištění hodinek na 1 rok</a></p></td>
					<td class="cart_ref">skladem</td>
					<td class="cart_unit"><span class="price">ZDARMA</span></td>
					<td class="cart_quantity"></td>
					<td class="cart_total"><span class="price">ZDARMA</span></td>
				</tr>
		<tr class="doprava_shrnuti">
			<td class="cart_product">
				<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
helveti/ico-validation-doprava.png" alt="Ikonka dopravy">
			</td>
			<td colspan="4" class="cart_description">
				Doprava:  <strong><?php echo $_smarty_tpl->tpl_vars['cart_info']->value['carrier']->name;?>
 </strong>
			</td>
			<td class="cart_total">
			<?php if ($_smarty_tpl->tpl_vars['cart_info']->value['total_shipping']>0){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['cart_info']->value['total_shipping']),$_smarty_tpl);?>
<?php }else{ ?>ZDARMA<?php }?>
			</td>
		</tr>
		<tr class="platba_shrnuti">
			<td class="cart_product">
				<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
helveti/ico-validation-platba.png" alt="Ikonka platby">
			</td>
			<td colspan="4" class="cart_description">
				Způsob platby: <strong>Online platba</strong>
			</td>
			<td class="cart_total">
				ZDARMA
			</td>
		</tr>
</table>
<p class="celkem_kosik">celkem: <span class="cena_celkem"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['cart_info']->value['total_price']),$_smarty_tpl);?>
</span></p>
<?php }?>
<div class="clearfix">	</div> 

<div class="cart_navigation" id="cart_navigation">
<div class="row">
	<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Odeslat objednávku','mod'=>'add_gopay_new'),$_smarty_tpl);?>
" class="standard-checkout pull-right" />
	</div>
	<div class="row">
	<div class="tlacitko-zpet">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=3"), ENT_QUOTES, 'UTF-8', true);?>
" class="zpet-do-obchodu"><i class="fa fa-chevron-left"></i> <?php echo smartyTranslate(array('s'=>'Zpět na výběr platby','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</a>
	</div>
	<div class="souhlas-obchodni-podminky">

	Kliknutím na tlačítko <strong>"Odeslat objednávku"</strong> souhlasím s <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
obchodni-podminky?content_only=1" class="iframe podminky">obchodními podmínkami</a>.
	<script type="text/javascript">
		$(document).ready(function() {
	        $("a.iframe").fancybox({
	            'type' : 'iframe',
	            'width':600,
	            'height':600
	        });
	    });
	</script>
	</div>
</div>
</div>
	
</form>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['INLINE_MODE']->value){?>
<script type="text/javascript">
    $(document).ready(function () {
        $("#submit_payment").click(function (e) {
            e.preventDefault();
		$('.hideOnSubmit').hide();

            $.ajax({
		url: "<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('add_gopay_new','validation',array(),true);?>
",
type: 'POST',
dataType: 'json',
data: $("#gopay-payment-button").serialize()
            }).done(function (data) {
if(!data.errors)
{
	_gopay.checkout({
		gatewayUrl: data.url,
		inline: true
	});
} else {
	$('#inline_errors').html(data.errors.logs);
	$('#inline_errors').show();
	$('.hideOnSubmit').show();
}
		}).error(function(XMLHttpRequest, textStatus, errorThrown) {
 				alert('Chyba: ' + textStatus + " / " + XMLHttpRequest.responseText + " / " + errorThrown);
            });
        });
    });
</script>
<script src="https://gate.gopay.cz/gp-gw/js/embed.js"></script>
<?php }else{ ?>
<?php if (!$_smarty_tpl->tpl_vars['ORDER_MODE']->value){?>
<script type="text/javascript">
	var text = "<?php echo smartyTranslate(array('s'=>'Your order is executed!','mod'=>'add_gopay_new'),$_smarty_tpl);?>
";
	var text1 = "<?php echo smartyTranslate(array('s'=>'Wait until the process is completed orders.','mod'=>'add_gopay_new'),$_smarty_tpl);?>
";
	$(document).on('click', '.hideOnSubmit', function(e){
		$.fancybox({
'content': '<div style=" border:#320809 2px solid; width:300px; height:100%;-webkit-border-radius: 5px 5px 5px 5px; border-radius: 5px 5px 5px 5px;"><center style="margin: 0px 0 0px; background-color:#161616; padding:10px;"><div class="circle_GP"></div><div class="circle1_GP"></div><b style="color:#FFFFFF; padding:10px;">'+ text + '</b></center><div style="text-align:center; padding:10px;">'+ text1 + '</div></div>',
'modal': true,
'autoDimensions': true,
'padding': 1,
'width':   1087,
'height':  610
		});
	});
</script>
<?php }?>
<?php }?><?php }} ?>