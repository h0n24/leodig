<?php /* Smarty version Smarty-3.1.14, created on 2015-12-10 23:29:21
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/order-steps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58678939056671b7f950b63-74480764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92fa9d3802692a73541086adad1d4bfd9cf96030' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/order-steps.tpl',
      1 => 1449786455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58678939056671b7f950b63-74480764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56671b7fb160f2_50000821',
  'variables' => 
  array (
    'back' => 0,
    'multi_shipping' => 0,
    'opc' => 0,
    'current_step' => 0,
    'link' => 0,
    'page_name' => 0,
    'img_dir' => 0,
    'cart' => 0,
    'cart_info' => 0,
    'product_cart' => 0,
    'sleva_cart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56671b7fb160f2_50000821')) {function content_56671b7fb160f2_50000821($_smarty_tpl) {?>


<?php $_smarty_tpl->_capture_stack[0][] = array("url_back", null, null); ob_start(); ?>
<?php if (isset($_smarty_tpl->tpl_vars['back']->value)&&$_smarty_tpl->tpl_vars['back']->value){?>back=<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!isset($_smarty_tpl->tpl_vars['multi_shipping']->value)){?>
	<?php $_smarty_tpl->tpl_vars['multi_shipping'] = new Smarty_variable('0', null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?>
<!-- Steps -->
<div class="podcara-steps"></div>
<ul class="step" id="order_step">
	<li class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='summary'){?>step_current<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'||$_smarty_tpl->tpl_vars['current_step']->value=='shipping'||$_smarty_tpl->tpl_vars['current_step']->value=='address'||$_smarty_tpl->tpl_vars['current_step']->value=='login'){?>step_done<?php }else{ ?>step_todo<?php }?><?php }?>">
		<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'||$_smarty_tpl->tpl_vars['current_step']->value=='shipping'||$_smarty_tpl->tpl_vars['current_step']->value=='address'||$_smarty_tpl->tpl_vars['current_step']->value=='login'){?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,((string)Smarty::$_smarty_vars['capture']['url_back'])."&multi-shipping=".((string)$_smarty_tpl->tpl_vars['multi_shipping']->value));?>
">
			<span class="step-pred"></span><span class="step-in"><span class="step-cislo">1.</span> <span class="step-nazev"><?php echo smartyTranslate(array('s'=>'Košík'),$_smarty_tpl);?>
</span></span><span class="step-po">
		</a>
		<?php }else{ ?>
			<span class="step-pred"></span><span class="step-in"><span class="step-cislo">1.</span> <span class="step-nazev"><?php echo smartyTranslate(array('s'=>'Košík'),$_smarty_tpl);?>
</span></span><span class="step-po">
		<?php }?>
	</li>

	<li class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='login'||$_smarty_tpl->tpl_vars['current_step']->value=='address'){?>step_current<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'||$_smarty_tpl->tpl_vars['current_step']->value=='shipping'){?>step_done<?php }else{ ?>step_todo<?php }?><?php }?> druhy_kosik">
		<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'||$_smarty_tpl->tpl_vars['current_step']->value=='shipping'){?> 
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,((string)Smarty::$_smarty_vars['capture']['url_back'])."&step=1&multi-shipping=".((string)$_smarty_tpl->tpl_vars['multi_shipping']->value));?>
">
			<span class="step-pred"></span><span class="step-in"><span class="step-cislo">2.</span> <span class="step-nazev"><?php echo smartyTranslate(array('s'=>'Dodací údaje'),$_smarty_tpl);?>
</span></span><span class="step-po"> 
		</a>
		<?php }else{ ?>
			<span class="step-pred"></span><span class="step-in"><span class="step-cislo">2.</span> <span class="step-nazev"><?php echo smartyTranslate(array('s'=>'Dodací údaje'),$_smarty_tpl);?>
</span></span><span class="step-po">
		<?php }?>
	</li>
	 
	<li class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='shipping'){?>step_current<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'){?>step_done<?php }else{ ?>step_todo<?php }?><?php }?> treti_kosik">
		<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'){?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,((string)Smarty::$_smarty_vars['capture']['url_back'])."&step=2&multi-shipping=".((string)$_smarty_tpl->tpl_vars['multi_shipping']->value));?>
">
			<span class="step-pred"></span><span class="step-in"><span class="step-cislo">3.</span> <span class="step-nazev"><?php echo smartyTranslate(array('s'=>'Doprava a platba'),$_smarty_tpl);?>
</span></span><span class="step-po">
		</a>
		<?php }else{ ?>
			<span class="step-pred"></span><span class="step-in"><span class="step-cislo">3.</span> <span class="step-nazev"><?php echo smartyTranslate(array('s'=>'Doprava a platba'),$_smarty_tpl);?>
</span></span><span class="step-po">
		<?php }?>
	</li>
	<li id="step_end" class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value=='payment'){?>step_current_end<?php }else{ ?>step_todo<?php }?> ctvrty_kosik">
		<span class="step-pred"></span><span class="step-in"><span class="step-cislo">4.</span> <span class="step-nazev"><?php echo smartyTranslate(array('s'=>'Shrnutí'),$_smarty_tpl);?>
</span></span><span class="step-po"></span>
	</li>
	
</ul>
<!-- /Steps -->
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['current_step']->value!='summary'&&$_smarty_tpl->tpl_vars['page_name']->value!='module-bankwire-payment'&&$_smarty_tpl->tpl_vars['page_name']->value!='module-cashondelivery-validation'&&$_smarty_tpl->tpl_vars['page_name']->value!='module-add_gopay_new-validation'&&$_smarty_tpl->tpl_vars['page_name']->value!='order-confirmation'){?>
<div class="infobox-kosik-container">
	<div id="info_box_kosik" class="box_kosik">
		<fieldset>
		<legend>Potřebujete poradit?</legend>
		<div id="kontaktni_boxik">
			<table>
				<tr>
					<td id="box_fotka"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/helveti/robert.jpg" alt="Fotografie Jiří Štencek"></td>
					<td id="box_popis">
						<span id="box_jmeno">Jiří Štencek</span><br/>
						<span id="box_email"><i class="fa fa-envelope"></i> <a href="mailto:info@helveti.cz"><span class="txt">info@helveti.cz</span></a></span><br/>
						<span id="box_tel"><i class="fa fa-phone"></i> <span class="txt">+420 774 744 763</span></span>
					</td>
				</tr>	
			</table>
		</div>
		</fieldset>
	</div>
	<?php $_smarty_tpl->tpl_vars['jeVN'] = new Smarty_variable(0, null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['cart']->value->id&&Cart::getTotalCart($_smarty_tpl->tpl_vars['cart']->value->id)){?>
		<div id="rekapitulace_box_kosik" class="box_kosik">
			<fieldset>
			<legend>Rekapitulace objednávky</legend>
			<table class="rekapitulace_zbozi">
		<?php $_smarty_tpl->tpl_vars['cart_info'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->getSummaryDetails(), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['product_cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_cart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_cart']->key => $_smarty_tpl->tpl_vars['product_cart']->value){
$_smarty_tpl->tpl_vars['product_cart']->_loop = true;
?>
			<tr>
				<td class="rekapitulace_produkt">
					<span class="rekapitulace_nazev"><?php echo $_smarty_tpl->tpl_vars['product_cart']->value['name'];?>
</span>
				</td>
				<td class="rekapitulace_pocet">
					<?php echo $_smarty_tpl->tpl_vars['product_cart']->value['cart_quantity'];?>
 ks 
				</td>
				<td class="rekapitulace_cena">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product_cart']->value['total_wt']),$_smarty_tpl);?>
 
				</td>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['product_cart']->value['id_manufacturer']==10){?><?php $_smarty_tpl->tpl_vars['jeVN'] = new Smarty_variable(1, null, 0);?><?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['sleva_cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sleva_cart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_info']->value['discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sleva_cart']->key => $_smarty_tpl->tpl_vars['sleva_cart']->value){
$_smarty_tpl->tpl_vars['sleva_cart']->_loop = true;
?>
				<tr>
				<td class="rekapitulace_produkt">
					<span class="rekapitulace_nazev"><?php echo $_smarty_tpl->tpl_vars['sleva_cart']->value['name'];?>
</span>
				</td>
				<td class="rekapitulace_pocet">
				1 ks 
				</td>
				<td class="rekapitulace_cena">
					-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['sleva_cart']->value['value_real']),$_smarty_tpl);?>
 
				</td>
			</tr>
		<?php } ?>
		
		
			<tr>
				<td class="rekapitulace_produkt">
					<span class="rekapitulace_nazev">Zavírací nůž - dárek</span>
				</td>
				<td class="rekapitulace_pocet">
				1 ks 
				</td>
				<td class="rekapitulace_cena">
					ZDARMA 
				</td>
			</tr>
			<tr>
				<td class="rekapitulace_produkt">
					<span class="rekapitulace_nazev">Pojištění hodinek na 1 rok</span>
				</td>
				<td class="rekapitulace_pocet">
				1 ks 
				</td>
				<td class="rekapitulace_cena">
					ZDARMA 
				</td>
			</tr>
		</table>
			<table>
			<tr class="rekapitulace_celkem">
				<td class="rekapitulace_celkem_zbozi">Celkem za zboží</td>
				<td class="rekapitulace_cena">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>Cart::getTotalCart($_smarty_tpl->tpl_vars['cart']->value->id)),$_smarty_tpl);?>

				</td>
			</tr>
			</table>			
			</fieldset>
		</div>
		<div id="spodek_box_kosik">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,((string)Smarty::$_smarty_vars['capture']['url_back']));?>
" class="uprava_kosiku">Upravit obsah košíku</a>
			<?php if ($_smarty_tpl->tpl_vars['cart_info']->value['total_shipping']>0){?>
			<div id="kosik_box_doprava_placena">
				Doprava: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['cart_info']->value['total_shipping']),$_smarty_tpl);?>

				</div>
			<?php }else{ ?>
				<div id="kosik_box_doprava_zdarma"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
helveti/cart-car.png" class="cart-car"> Doprava zdarma</div> 
			<?php }?>
		</div>
	<?php }?>
</div>
<?php }?><?php }} ?>