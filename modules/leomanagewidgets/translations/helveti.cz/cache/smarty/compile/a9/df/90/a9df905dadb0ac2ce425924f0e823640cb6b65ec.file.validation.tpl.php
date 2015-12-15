<?php /* Smarty version Smarty-3.1.14, created on 2015-12-10 23:30:50
         compiled from "/srv/www/helveti/helveti.cz/modules/add_gopay_new/views/templates/front/validation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13216197285669fd1a8ca3d6-86726723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9df905dadb0ac2ce425924f0e823640cb6b65ec' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/add_gopay_new/views/templates/front/validation.tpl',
      1 => 1449270100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13216197285669fd1a8ca3d6-86726723',
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
    'cms' => 0,
    'currencies' => 0,
    'currency' => 0,
    'curr' => 0,
    'cart' => 0,
    'PAYMENT_MODE' => 0,
    'this_path' => 0,
    'selectedPayment' => 0,
    'doprava' => 0,
    'address_delivery' => 0,
    'address_invoice' => 0,
    'products' => 0,
    'product' => 0,
    'use_taxes' => 0,
    'priceDisplay' => 0,
    'display_tax_label' => 0,
    'cart_sumary' => 0,
    'total_discounts_negative' => 0,
    'BOOTSTRAP' => 0,
    'ORDER_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5669fd1aceab69_48199605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5669fd1aceab69_48199605')) {function content_5669fd1aceab69_48199605($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
?>


<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Shipping','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h2><?php echo smartyTranslate(array('s'=>'Order summation','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</h2>

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
        
    <div class="tipForm">
		<div id="middlepart">
			<div class="texts">
				<h2><?php echo smartyTranslate(array('s'=>'Check your order before shipment','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</h2>

				<p>
                <?php echo smartyTranslate(array('s'=>'The order is ready for delivery. Please check your product items and quantities, prices, billing and shipping information are correctly entered.','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</p>
				<p>
					<?php echo smartyTranslate(array('s'=>'For your order please click on the button ','mod'=>'add_gopay_new'),$_smarty_tpl);?>
 <strong><?php echo smartyTranslate(array('s'=>'I confirm my order','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</strong>. 
				<?php if (isset($_smarty_tpl->tpl_vars['cms']->value)){?>
					<?php echo smartyTranslate(array('s'=>'After sending the order becomes binding and any changes must be reported immediately by telephone or e-mail listed in ','mod'=>'add_gopay_new'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cms.php',false);?>
?id_cms=<?php echo $_smarty_tpl->tpl_vars['cms']->value;?>
&content_only=1" id="contact" class="color iframe"><?php echo smartyTranslate(array('s'=>'contacts','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</a> <?php echo smartyTranslate(array('s'=>' the shop.','mod'=>'add_gopay_new'),$_smarty_tpl);?>

<script type="text/javascript">
		$(document).ready(function() {
	        $("a.iframe").fancybox({
	            'type' : 'iframe',
	            'width':900,
	            'height':600
	        });
	    });
</script>
				<?php }?>
				</p>

			<?php if (isset($_smarty_tpl->tpl_vars['currencies']->value)&&count($_smarty_tpl->tpl_vars['currencies']->value)>1&&$_smarty_tpl->tpl_vars['currency']->value->iso_code!='EUR'&&$_smarty_tpl->tpl_vars['currency']->value->iso_code!='CZK'){?>
				<p class="gopayCur">
					<b><?php echo smartyTranslate(array('s'=>'Payment gateway GoPay does not support payments in the selected currency " %s ".','sprintf'=>array($_smarty_tpl->tpl_vars['currency']->value->iso_code),'mod'=>'add_gopay_new'),$_smarty_tpl);?>
</b>
					<br /><br />
					<?php echo smartyTranslate(array('s'=>'Before finalizing select one from the list:','mod'=>'add_gopay_new'),$_smarty_tpl);?>

					<select id="currency_payement" name="currency_payement" onChange="setCurrency($('#currency_payement').val());">
                    <option value="" ><?php echo smartyTranslate(array('s'=>'-- select --','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</option>
						<?php  $_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->key => $_smarty_tpl->tpl_vars['curr']->value){
$_smarty_tpl->tpl_vars['curr']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['curr']->value['iso_code']=='EUR'||$_smarty_tpl->tpl_vars['curr']->value['iso_code']=='CZK'){?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['curr']->value['id_currency'];?>
" <?php if ($_smarty_tpl->tpl_vars['curr']->value['id_currency']==$_smarty_tpl->tpl_vars['currency']->value->id){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['curr']->value['name'];?>
</option>
							<?php }?>
						<?php } ?>
					</select>
				</p>
			<?php }?>

				<h2><?php echo smartyTranslate(array('s'=>'Review your order before shipment','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</h2>
				<h5><?php echo smartyTranslate(array('s'=>'Ordering Information','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</h5>
                
                <table cellspacing="0" class="oinfo">
					<tr>
                    	<td class="tdname"><?php echo smartyTranslate(array('s'=>'Date of Order:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</td>
                    	<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['cart']->value->date_upd,"%d.%m.%Y _ %H:%I:%S");?>
</td>
                    	<td rowspan="3" style="text-align:right;">
							<?php if ($_smarty_tpl->tpl_vars['PAYMENT_MODE']->value){?>
                            	<img src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
images/Shortened.png" alt="<?php echo smartyTranslate(array('s'=>'Payment by Gopay','mod'=>'add_gopay_new'),$_smarty_tpl);?>
" />
                            <?php }else{ ?>
                            	<img src="<?php echo $_smarty_tpl->tpl_vars['selectedPayment']->value['logo'];?>
" alt="<?php echo smartyTranslate(array('s'=>'Payment by Gopay','mod'=>'add_gopay_new'),$_smarty_tpl);?>
" />
                            <?php }?>
                        </td>
                    </tr>
					<tr>
                    	<td class="tdname"><?php echo smartyTranslate(array('s'=>'Shipping Option:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</td>
                    	<td><?php echo $_smarty_tpl->tpl_vars['doprava']->value;?>
</td>
                    </tr>
					<tr>
                    	<td class="tdname"><?php echo smartyTranslate(array('s'=>'Payment Method:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</td>
                    	<td>
							<?php if ($_smarty_tpl->tpl_vars['PAYMENT_MODE']->value){?>
                            	<?php echo smartyTranslate(array('s'=>'Payment gateway Gopay','mod'=>'add_gopay_new'),$_smarty_tpl);?>

                            <?php }else{ ?>
								<?php echo $_smarty_tpl->tpl_vars['selectedPayment']->value['title'];?>
<br /><br />
                            <?php }?>
                        </td>
                    </tr>
					<tr>
                    	<td colspan="2" class="tdname">
                        	<?php echo smartyTranslate(array('s'=>'Delivery Address:','mod'=>'add_gopay_new'),$_smarty_tpl);?>

                        </td>
                    </tr>
					<tr>
						<td colspan="2" style="padding-left:120px">
							<b><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_delivery']->value->firstname, 'htmlall', 'UTF-8');?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_delivery']->value->lastname, 'htmlall', 'UTF-8');?>
</b>
                            <br />
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_delivery']->value->address1, 'htmlall', 'UTF-8');?>
, 
                            <?php if ($_smarty_tpl->tpl_vars['address_delivery']->value->address2){?>
                            	<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_delivery']->value->address2, 'htmlall', 'UTF-8');?>
, 
                            <?php }?>
                            <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_delivery']->value->postcode, 'htmlall', 'UTF-8');?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_delivery']->value->city, 'htmlall', 'UTF-8');?>
, <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_delivery']->value->country, 'htmlall', 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['address_delivery']->value->phone_mobile){?>
                            	<br /><?php echo smartyTranslate(array('s'=>'Phone','mod'=>'add_gopay_new'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_delivery']->value->phone_mobile, 'htmlall', 'UTF-8');?>

                            <?php }?><br /><br />
                        </td>
                    </tr>
					<?php if ($_smarty_tpl->tpl_vars['address_delivery']->value->id!=$_smarty_tpl->tpl_vars['address_invoice']->value->id){?>
					<tr>
                    	<td colspan="2" class="tdname"><?php echo smartyTranslate(array('s'=>'Billing Address:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</td>
                    </tr>
					<tr>
						<td colspan="2" style="padding-left:120px">
                        	<?php if ($_smarty_tpl->tpl_vars['address_invoice']->value->company){?>
                            	<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->company, 'htmlall', 'UTF-8');?>
<br />
                            <?php }?>
                        	<?php if ($_smarty_tpl->tpl_vars['address_invoice']->value->dni){?>
                                <?php echo smartyTranslate(array('s'=>'DNI:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->dni, 'htmlall', 'UTF-8');?>

                            <?php }?>
                        	<?php if ($_smarty_tpl->tpl_vars['address_invoice']->value->vat_number){?>
                                <span style="margin-left:20px">
                                	<?php echo smartyTranslate(array('s'=>'VAT:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->vat_number, 'htmlall', 'UTF-8');?>

                                </span><br /><br />
                            <?php }?>
							<b><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->firstname, 'htmlall', 'UTF-8');?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->lastname, 'htmlall', 'UTF-8');?>
</b><br />
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->address1, 'htmlall', 'UTF-8');?>
, 
                            <?php if ($_smarty_tpl->tpl_vars['address_invoice']->value->address2){?>
                            	<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->address2, 'htmlall', 'UTF-8');?>
, 
                            <?php }?>
                            <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->postcode, 'htmlall', 'UTF-8');?>
 
                            <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->city, 'htmlall', 'UTF-8');?>
, 
                            <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->country, 'htmlall', 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile){?>
                            	<br /><?php echo smartyTranslate(array('s'=>'telefon','mod'=>'add_gopay_new'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile, 'htmlall', 'UTF-8');?>

                            <?php }?>
                        </td>
                    </tr>
					<?php }?>
				</table>

				<h5><?php echo smartyTranslate(array('s'=>'Order','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</h5>
				<table cellspacing="0" class="oitems">
					<tr>
						<th class="tdcode"><?php echo smartyTranslate(array('s'=>'Ref.','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</th>
						<th><?php echo smartyTranslate(array('s'=>'Description','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</th>
						<th class="tdqty"><?php echo smartyTranslate(array('s'=>'Qty','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</th>
						<th class="tdprice"><?php echo smartyTranslate(array('s'=>'Price','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</th>
					</tr>
    
					<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable(0, null, 0);?>
					    
					<tr>
						<td class="tdcode"><?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>
</td>
						<td>
                        	<a style="color:#36C; text-decoration:none" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category']), 'htmlall', 'UTF-8');?>
">
                        	<h4><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
</h4>
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['attributes'], 'htmlall', 'UTF-8');?>
<?php }?></a>
                        </td>
						<td class="tdqty"><?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity'];?>
</td>
						<td class="tdprice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_wt']),$_smarty_tpl);?>
</td>
					</tr>
					<?php } ?>


		<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value){?>
			<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value){?>
				<tr class="cart_total_price">
					<td colspan="2" style="text-align:right;"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value){?><?php echo smartyTranslate(array('s'=>'Total products (tax excl.):','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Total products:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php }?></td>
					<td colspan="2" class="tdprice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['cart_sumary']->value['total_products']),$_smarty_tpl);?>
</td>
				</tr>
			<?php }else{ ?>
				<tr class="cart_total_price">
					<td colspan="2" style="text-align:right;"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value){?><?php echo smartyTranslate(array('s'=>'Total products (tax incl.):','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Total products:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php }?></td>
					<td colspan="2" class="tdprice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['cart_sumary']->value['total_products_wt']),$_smarty_tpl);?>
</td>
				</tr>
			<?php }?>
		<?php }else{ ?>
			<tr class="cart_total_price">
				<td colspan="2" style="text-align:right;"><?php echo smartyTranslate(array('s'=>'Total products:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</td>
				<td colspan="2" class="tdprice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['cart_sumary']->value['total_products']),$_smarty_tpl);?>
</td>
			</tr>
		<?php }?>


			<tr class="cart_total_voucher" <?php if ($_smarty_tpl->tpl_vars['cart_sumary']->value['total_discounts']==0){?>style="display:none"<?php }?>>
				<td colspan="2" style="text-align:right;">
				<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value){?>
					<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['priceDisplay']->value==0){?>
						<?php echo smartyTranslate(array('s'=>'Total vouchers (tax incl.):','mod'=>'add_gopay_new'),$_smarty_tpl);?>

					<?php }else{ ?>
						<?php echo smartyTranslate(array('s'=>'Total vouchers (tax excl.):','mod'=>'add_gopay_new'),$_smarty_tpl);?>

					<?php }?>
				<?php }else{ ?>
					<?php echo smartyTranslate(array('s'=>'Total vouchers:','mod'=>'add_gopay_new'),$_smarty_tpl);?>

				<?php }?>
				</td>
				<td colspan="2" class="tdprice">
				<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['priceDisplay']->value==0){?>
					<?php $_smarty_tpl->tpl_vars['total_discounts_negative'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart_sumary']->value['total_discounts']*-1, null, 0);?>
				<?php }else{ ?>
					<?php $_smarty_tpl->tpl_vars['total_discounts_negative'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart_sumary']->value['total_discounts_tax_exc']*-1, null, 0);?>
				<?php }?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_discounts_negative']->value),$_smarty_tpl);?>

				</td>
			</tr>


			<tr<?php if ($_smarty_tpl->tpl_vars['cart_sumary']->value['total_wrapping']==0){?> style="display: none;"<?php }?>>
				<td colspan="2" style="text-align:right;">
				<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value){?>
					<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value){?><?php echo smartyTranslate(array('s'=>'Total gift wrapping (tax incl.):','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Total gift-wrapping cost:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php }?>
				<?php }else{ ?>
					<?php echo smartyTranslate(array('s'=>'Total gift-wrapping cost:','mod'=>'add_gopay_new'),$_smarty_tpl);?>

				<?php }?>
				</td>
				<td colspan="2" class="tdprice">
				<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value){?>
					<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value){?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['cart_sumary']->value['total_wrapping_tax_exc']),$_smarty_tpl);?>

					<?php }else{ ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['cart_sumary']->value['total_wrapping']),$_smarty_tpl);?>

					<?php }?>
				<?php }else{ ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['cart_sumary']->value['total_wrapping_tax_exc']),$_smarty_tpl);?>

				<?php }?>
				</td>
			</tr>


			<tr <?php if (!$_smarty_tpl->tpl_vars['feeWithTax']->value){?>style="display: none;"<?php }?>>
				<td colspan="2" style="text-align:right;"><?php echo smartyTranslate(array('s'=>'The amount of payment for GoPay:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</td>
				<td colspan="2" class="tdprice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['feeWithTax']->value),$_smarty_tpl);?>
</td>
			</tr>


			<?php if ($_smarty_tpl->tpl_vars['cart_sumary']->value['total_shipping_tax_exc']<=0){?>
				<tr>
					<td colspan="2" style="text-align:right;"><?php echo smartyTranslate(array('s'=>'Shipping:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</td>
					<td colspan="2" class="tdprice"><?php echo smartyTranslate(array('s'=>'Free Shipping!','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</td>
				</tr>
			<?php }else{ ?>
				<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['cart_sumary']->value['total_shipping_tax_exc']!=$_smarty_tpl->tpl_vars['cart_sumary']->value['total_shipping']){?>
					<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value){?>
						<tr <?php if ($_smarty_tpl->tpl_vars['cart_sumary']->value['total_shipping_tax_exc']<=0){?> style="display:none;"<?php }?>>
							<td colspan="2" style="text-align:right;"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value){?><?php echo smartyTranslate(array('s'=>'Total shipping (tax excl.):','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Total shipping:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php }?></td>
							<td colspan="2" class="tdprice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['cart_sumary']->value['total_shipping_tax_exc']),$_smarty_tpl);?>
</td>
						</tr>
					<?php }else{ ?>
						<tr <?php if ($_smarty_tpl->tpl_vars['cart_sumary']->value['total_shipping']<=0){?> style="display:none;"<?php }?>>
							<td colspan="2" style="text-align:right;"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value){?><?php echo smartyTranslate(array('s'=>'Total shipping (tax incl.):','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Total shipping:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<?php }?></td>
							<td colspan="2" class="tdprice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['cart_sumary']->value['total_shipping']),$_smarty_tpl);?>
</td>
						</tr>
					<?php }?>
				<?php }else{ ?>
					<tr <?php if ($_smarty_tpl->tpl_vars['cart_sumary']->value['total_shipping_tax_exc']<=0){?> style="display:none;"<?php }?>>
						<td colspan="2" style="text-align:right;"><?php echo smartyTranslate(array('s'=>'Total shipping:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</td>
						<td colspan="2" class="tdprice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['cart_sumary']->value['total_shipping_tax_exc']),$_smarty_tpl);?>
</td>
					</tr>
				<?php }?>
			<?php }?>


					<tr style="height:30px; font-size:1.4em">
        				<td colspan="2" style="text-align:right"><b><?php echo smartyTranslate(array('s'=>'Total price:','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</b></td>
						<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value){?>
							<td colspan="2" class="tdprice"><b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['cart_sumary']->value['total_price']+$_smarty_tpl->tpl_vars['feeWithTax']->value),$_smarty_tpl);?>
</b></td>
						<?php }else{ ?>
							<td colspan="2" class="tdprice"><b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['cart_sumary']->value['total_price_without_tax']+$_smarty_tpl->tpl_vars['fee']->value),$_smarty_tpl);?>
</b></td>
						<?php }?>
    				</tr>
				</table>
			</div>
			<p class="pozor_gopay">
				<?php if ($_smarty_tpl->tpl_vars['PAYMENT_MODE']->value){?>					
					<?php echo smartyTranslate(array('s'=>'Click on "','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<span style="font-weight:bold"><?php echo smartyTranslate(array('s'=>'I confirm my order','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span><?php echo smartyTranslate(array('s'=>'" and you would be redirected to the payment gateway GoPay where you can select the method of payment for your order','mod'=>'add_gopay_new'),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo smartyTranslate(array('s'=>'Click on "','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<span style="font-weight:bold"><?php echo smartyTranslate(array('s'=>'I confirm my order','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span><?php echo smartyTranslate(array('s'=>'" and you would be redirected to the payment gateway GoPay for express payment for your order','mod'=>'add_gopay_new'),$_smarty_tpl);?>

				<?php }?>
            </p>
		</div>
	</div>

<p class="gopay_error" id="inline_errors" style="display:none"></p>

	<?php if ($_smarty_tpl->tpl_vars['BOOTSTRAP']->value){?>
        <p class="cart_navigation clearfix" id="cart_navigation">
        	<a 
				class="button-exclusive btn btn-default" data-ajax="false"
				href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=3"), 'html', 'UTF-8');?>
"
			>
                <i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Other payment methods','mod'=>'add_gopay_new'),$_smarty_tpl);?>

            </a>
			<?php if ($_smarty_tpl->tpl_vars['currency']->value->iso_code=='EUR'||$_smarty_tpl->tpl_vars['currency']->value->iso_code=='CZK'){?>
            	<a 
					class="button btn btn-default button-medium hideOnSubmit" 
					href="#"
					title="<?php echo smartyTranslate(array('s'=>'Pay my order','mod'=>'add_gopay_new'),$_smarty_tpl);?>
"
					<?php if (!$_smarty_tpl->tpl_vars['INLINE_MODE']->value){?>onclick="document.getElementById('gopay-payment-button').submit(); return false;"<?php }?>
					id="submit_payment"
				>
					<span><?php echo smartyTranslate(array('s'=>'I confirm my order','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
				</a>
			<?php }?>
        </p>
	<?php }else{ ?>
		<p class="cart_navigation">
			<a
			class="button_large" data-ajax="false"
			href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order.php',true);?>
?step=3">
				<?php echo smartyTranslate(array('s'=>'Other payment methods','mod'=>'add_gopay_new'),$_smarty_tpl);?>

			</a>
			<?php if ($_smarty_tpl->tpl_vars['currency']->value->iso_code=='EUR'||$_smarty_tpl->tpl_vars['currency']->value->iso_code=='CZK'){?>
            	<a 
					class="exclusive_large hideOnSubmit" 
					href="#"
					title="<?php echo smartyTranslate(array('s'=>'Pay my order','mod'=>'add_gopay_new'),$_smarty_tpl);?>
"
					<?php if (!$_smarty_tpl->tpl_vars['INLINE_MODE']->value){?>onclick="document.getElementById('gopay-payment-button').submit(); return false;"<?php }?>
					id="submit_payment"
				>
					<span><?php echo smartyTranslate(array('s'=>'I confirm my order','mod'=>'add_gopay_new'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
				</a>
			<?php }?>
		</p>
	<?php }?>
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