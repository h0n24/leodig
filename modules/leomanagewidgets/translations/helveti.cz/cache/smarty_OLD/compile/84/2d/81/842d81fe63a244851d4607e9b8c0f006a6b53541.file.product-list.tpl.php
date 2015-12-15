<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:42:57
         compiled from "/srv/www/helveti/themes/leodig/product-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:953035707546107317d5427-81062455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '842d81fe63a244851d4607e9b8c0f006a6b53541' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/product-list.tpl',
      1 => 1412772714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '953035707546107317d5427-81062455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'nox_zobrazeno_dlazdic' => 0,
    'product' => 0,
    'nox_pruchod' => 0,
    'nova_zobrazena_dlazdice' => 0,
    'zobrazena_dlazdice' => 0,
    'link' => 0,
    'img_dir' => 0,
    'proReduce' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'i' => 0,
    'pocet_hvezd' => 0,
    'comparator_max_item' => 0,
    'compareProducts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54610731d0b074_07608695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610731d0b074_07608695')) {function content_54610731d0b074_07608695($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/tools/smarty/plugins/modifier.escape.php';
?>

<?php $_smarty_tpl->tpl_vars['nox_pruchod'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['nox_zobrazeno_dlazdic'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)){?>
	<!-- Products list -->
<div id="product_list" class="products_block  block <?php if (Configuration::get('leoview')==0){?>view-list<?php }?>">
	<div class="products-item clearfix">
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
		<?php if (($_smarty_tpl->tpl_vars['product']->iteration+$_smarty_tpl->tpl_vars['nox_zobrazeno_dlazdic']->value)%Configuration::get('productlistcols')==1||Configuration::get('productlistcols')==1){?>
			
        <?php }?>
		<?php $_smarty_tpl->tpl_vars['proReduce'] = new Smarty_variable('', null, 0);?>
		<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])){?>
			<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage'){?>
				<?php $_smarty_tpl->tpl_vars['proReduce'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100, null, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='amount'){?>
				<?php $_smarty_tpl->tpl_vars['proReduce'] = new Smarty_variable(ceil($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']/$_smarty_tpl->tpl_vars['product']->value['price']*100), null, 0);?>
			<?php }?>
		<?php }?>
		
		<?php $_smarty_tpl->tpl_vars['nox_pruchod'] = new Smarty_variable($_smarty_tpl->tpl_vars['nox_pruchod']->value+1, null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['nox_pruchod']->value%30==6){?>
		<div class="col-xs-12 col-sm-<?php echo (12/Configuration::get('productlistcols'));?>
 product_block ajax_block_product block-vyhoda-productlist-container">		
			<div class="product-container clearfix">
				<div class="center_block">				
					<div class="block-vyhoda-productlist">
						<?php $_smarty_tpl->tpl_vars['zobrazena_dlazdice'] = new Smarty_variable(-1, null, 0);?>
						<?php $_smarty_tpl->tpl_vars['nova_zobrazena_dlazdice'] = new Smarty_variable(rand(1,10), null, 0);?>
						<?php while ($_smarty_tpl->tpl_vars['nova_zobrazena_dlazdice']->value==$_smarty_tpl->tpl_vars['zobrazena_dlazdice']->value){?>
  								<?php $_smarty_tpl->tpl_vars['nova_zobrazena_dlazdice'] = new Smarty_variable(rand(1,10), null, 0);?>	
						<?php }?>
						<?php $_smarty_tpl->tpl_vars['zobrazena_dlazdice'] = new Smarty_variable($_smarty_tpl->tpl_vars['nova_zobrazena_dlazdice']->value, null, 0);?>
						<p class="hidden-xs"><a title="" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('9');?>
"><img class="img-responsive" style="border-radius: 5px;" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
helveti/banner2/<?php echo $_smarty_tpl->tpl_vars['zobrazena_dlazdice']->value;?>
.jpg" alt=""></a></p>
					</div>		
				</div>
			</div>	
		</div>
		<?php $_smarty_tpl->tpl_vars['nox_zobrazeno_dlazdic'] = new Smarty_variable($_smarty_tpl->tpl_vars['nox_zobrazeno_dlazdic']->value+1, null, 0);?>
		<?php }?>

			<div class="col-xs-12 col-sm-<?php echo (12/Configuration::get('productlistcols'));?>
 product_block ajax_block_product ">		
				<div class="product-container clearfix">
					<div class="center_block">								
						<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" class="product_image" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
">
							<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'htmlall', 'UTF-8');?>
<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'htmlall', 'UTF-8');?>
<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
<?php }?>" />
							
								<?php if ($_smarty_tpl->tpl_vars['nox_pruchod']->value<11&&Product::getTop200st($_smarty_tpl->tpl_vars['product']->value['id_product'])){?><span class="top">TOP <?php echo $_smarty_tpl->tpl_vars['nox_pruchod']->value;?>
</span><?php }?>
							
							
							<?php if ($_smarty_tpl->tpl_vars['proReduce']->value){?><span class="hot"><?php echo smartyTranslate(array('s'=>'Sleva'),$_smarty_tpl);?>
 -<?php echo $_smarty_tpl->tpl_vars['proReduce']->value;?>
%</span><?php }?>
							<?php ob_start();?><?php echo Product::skladovost($_smarty_tpl->tpl_vars['product']->value['id_product'],"skladem");?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> <span class="skladem"><?php echo smartyTranslate(array('s'=>'Skladem'),$_smarty_tpl);?>
</span><?php }?>
						</a>
					</div>
					<div class="right_block">
						<?php if (Product::jeNovinka($_smarty_tpl->tpl_vars['product']->value['id_product'])){?><span class="discount"><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span><?php }?>
						
						<h4 class="name"><?php if (isset($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['pack_quantity']){?><?php echo (intval($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])).(' x ');?>
<?php }?><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],35,'...'), 'htmlall', 'UTF-8');?>
</a>
						</h4>
					
						<a class="button ajax_add_to_cart_button exclusive pull-left" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Detail'),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'Detail'),$_smarty_tpl);?>
</span></a>
						
						<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))){?>
							<div class="content_price price_container">
								<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)){?>
								<span class="price <?php if ($_smarty_tpl->tpl_vars['product']->value['reduction']){?>zlevneno<?php }?>">
									<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?>
										<?php if ($_smarty_tpl->tpl_vars['product']->value['reduction']){?><span class="cena_pred" style="text-decoration:line-through"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>
</span><?php }?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>

									<?php }else{ ?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>

									<?php }?>
								</span><br /><?php }?>
								<?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)){?><span class="availability"><?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)){?><?php echo smartyTranslate(array('s'=>'Available'),$_smarty_tpl);?>
<?php }elseif((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']>0)){?><?php echo smartyTranslate(array('s'=>'Product available with different options'),$_smarty_tpl);?>
<?php }else{ ?><span class="warning_inline"><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
</span><?php }?></span><?php }?>
							</div>
					
								<?php if (isset($_smarty_tpl->tpl_vars['product']->value['online_only'])&&$_smarty_tpl->tpl_vars['product']->value['online_only']){?><span class="online_only"><?php echo smartyTranslate(array('s'=>'Online only'),$_smarty_tpl);?>
</span><?php }?>
						<?php }?>
						
						
						  
						<?php $_smarty_tpl->tpl_vars['pocet_hvezd'] = new Smarty_variable(Product::pocetHeurekaHvezd($_smarty_tpl->tpl_vars['product']->value['id_product'],'hvezdy'), null, 0);?> 	
						<div class="rating_box heureka-ratign">
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
							<i class="fa fa-star<?php if ($_smarty_tpl->tpl_vars['i']->value>$_smarty_tpl->tpl_vars['pocet_hvezd']->value){?>-o<?php }?>"></i>
						<?php }} ?>
						</div>
						
						<a  href="#" id="wishlist_button<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" class="btn-tooltip fa fa-heart" onclick="LeoWishlistCart('wishlist_block_list', 'add', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', $('#idCombination').val(), 1 ); return false;" title="<?php echo smartyTranslate(array('s'=>'Add to wishlist'),$_smarty_tpl);?>
"></a>
						
												  <?php if (isset($_smarty_tpl->tpl_vars['comparator_max_item']->value)&&$_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
							<p class="compare">
								<input type="checkbox" class="comparator" id="comparator_item_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" value="comparator_item_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['compareProducts']->value)&&in_array($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['compareProducts']->value)){?>checked="checked"<?php }?> autocomplete="off"/> 
								<label for="comparator_item_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"><?php echo smartyTranslate(array('s'=>'Porovnat'),$_smarty_tpl);?>
</label>
								<div class="spinner-product-list spinner loading-comparator_item_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" style="display:none;"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>
							</p>
						<?php }?>
					</div>								
				</div>
			</div>
		<?php if (($_smarty_tpl->tpl_vars['product']->iteration+$_smarty_tpl->tpl_vars['nox_zobrazeno_dlazdic']->value)%Configuration::get('productlistcols')==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last']){?>
		<?php }?>
	<?php } ?>
	</div>
	</div>
	<!-- /Products list -->
<?php }?>

<script>
// přilepení odesílacího tlačítka filtrace při scrollu	

	$(window).scroll(function () {
		slajdujTlacitko();
	});
	
	function slajdujTlacitko(){
				var position = $('#PM_ASSubmitSearch_obal').offset().top + 72;
		var viewportHeight = $(window).height();
		var windowPosition = $(window).scrollTop();

	    if ((windowPosition + viewportHeight) < position) {
  			$('#PM_ASSubmitSearch_obal').addClass('fixed');
	    } else {
	    	$('#PM_ASSubmitSearch_obal').removeClass('fixed');
	    }
	}
</script>
<?php }} ?>