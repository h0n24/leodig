<?php /* Smarty version Smarty-3.1.14, created on 2015-12-09 17:12:28
         compiled from "/srv/www/helveti/helveti.cz/modules/bankwire/views/templates/front/payment_execution.tpl" */ ?>
<?php /*%%SmartyHeaderCode:804405647566852ec187a91-25968255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db4e837cc3d8a681b95da3828fbd42948ac144fe' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/bankwire/views/templates/front/payment_execution.tpl',
      1 => 1447285889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '804405647566852ec187a91-25968255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbProducts' => 0,
    'cart' => 0,
    'cart_info' => 0,
    'product_cart' => 0,
    'link' => 0,
    'priceDisplay' => 0,
    'sleva_cart' => 0,
    'img_dir' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566852ec2a27e8_16495607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566852ec2a27e8_16495607')) {function content_566852ec2a27e8_16495607($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Bank-wire payment.','mod'=>'bankwire'),$_smarty_tpl);?>
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
	<p class="warning"><?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.','mod'=>'bankwire'),$_smarty_tpl);?>
</p>
<?php }else{ ?>
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
	<?php $_smarty_tpl->tpl_vars['jeVN'] = new Smarty_variable(0, null, 0);?>
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
    <?php if ($_smarty_tpl->tpl_vars['product_cart']->value['id_manufacturer']==10){?><?php $_smarty_tpl->tpl_vars['jeVN'] = new Smarty_variable(1, null, 0);?><?php }?>
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
                    <td class="cart_product"><a href="http://www.helveti.cz/vanoce-2015" target="_blank"><img src="http://www.helveti.cz/themes/leodig/img/helveti/kosikdareknuz.png" title="Zavírací nůž - zdarma" alt="Zavírací nůž - zdarma" width="81"></a></td>
                    <td class="cart_description"><p class="s_title_block"><a href="http://www.helveti.cz/vanoce-2015" target="_blank">Zavírací nůž - zdarma</a></p></td>
                    <td class="cart_ref">skladem</td>
                    <td class="cart_unit"><span class="price">ZDARMA</span></td>
                    <td class="cart_quantity"></td>
                    <td class="cart_total"><span class="price">ZDARMA</span></td>
        </tr>
			
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
				Způsob platby: <strong>Bankovním převodem</strong>
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

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','validation',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">

<div class="cart_navigation" id="cart_navigation">
<div class="row">
	<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Odeslat objednávku','mod'=>'bankwire'),$_smarty_tpl);?>
" class="standard-checkout pull-right" />
	</div>
	<div class="row">
	<div class="tlacitko-zpet">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=3"), ENT_QUOTES, 'UTF-8', true);?>
" class="zpet-do-obchodu"><i class="fa fa-chevron-left"></i> <?php echo smartyTranslate(array('s'=>'Zpět na výběr platby','mod'=>'bankwire'),$_smarty_tpl);?>
</a>
	</div>
	<div class="souhlas-obchodni-podminky">
	<p>
	<?php echo smartyTranslate(array('s'=>'Bank wire account information will be displayed on the next page.','mod'=>'bankwire'),$_smarty_tpl);?>

	</p>
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
<?php }} ?>