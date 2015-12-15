<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:34:27
         compiled from "/srv/www/helveti/themes/leodig/modules/leomanagewidgets/themes/carousel_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51408316654610533deba70-82854419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16dfeafa1aecb84b34207568d0ac05e586103950' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/modules/leomanagewidgets/themes/carousel_products.tpl',
      1 => 1412088244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51408316654610533deba70-82854419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mproducts' => 0,
    'datas' => 0,
    'tabname' => 0,
    'products' => 0,
    'columnspage' => 0,
    'product' => 0,
    'link' => 0,
    'proReduce' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'i' => 0,
    'pocet_hvezd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5461053418e676_89430547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5461053418e676_89430547')) {function content_5461053418e676_89430547($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/tools/smarty/plugins/modifier.escape.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['mproducts']->value)){?>
<?php $_smarty_tpl->tpl_vars['itemsperpage'] = new Smarty_variable($_smarty_tpl->tpl_vars['datas']->value['configs']['itemspage'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['columnspage'] = new Smarty_variable($_smarty_tpl->tpl_vars['datas']->value['configs']['columns'], null, 0);?>
<div class="carousel slide" id="<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['datas']->value['id_leomanagewidgets'];?>
-carousel">
	 <?php if (count($_smarty_tpl->tpl_vars['mproducts']->value)>1){?>	
	<a class="carousel-control left" href="#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['datas']->value['id_leomanagewidgets'];?>
-carousel"   data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" href="#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['datas']->value['id_leomanagewidgets'];?>
-carousel"  data-slide="next">&rsaquo;</a>
	<?php }?>
	<div class="carousel-inner">
	<?php  $_smarty_tpl->tpl_vars['products'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['products']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['products']->key => $_smarty_tpl->tpl_vars['products']->value){
$_smarty_tpl->tpl_vars['products']->_loop = true;
 $_smarty_tpl->tpl_vars['products']->index++;
 $_smarty_tpl->tpl_vars['products']->first = $_smarty_tpl->tpl_vars['products']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mypLoop']['first'] = $_smarty_tpl->tpl_vars['products']->first;
?>
		<div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['first']){?>active<?php }?>">
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
				<?php if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==1&&$_smarty_tpl->tpl_vars['columnspage']->value>1){?>
				  <div class="row products-item ">
				<?php }?>
				<?php $_smarty_tpl->tpl_vars['proReduce'] = new Smarty_variable('', null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']){?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage'){?>
						<?php $_smarty_tpl->tpl_vars['proReduce'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100, null, 0);?>
					<?php }elseif($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='amount'){?>
						<?php $_smarty_tpl->tpl_vars['proReduce'] = new Smarty_variable(ceil($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']/$_smarty_tpl->tpl_vars['product']->value['price']*100), null, 0);?>
					<?php }?>
				<?php }?>
					<div class="<?php if ($_smarty_tpl->tpl_vars['datas']->value['ncolumn']==5){?>leo-md-5<?php }else{ ?>col-sm-<?php echo $_smarty_tpl->tpl_vars['datas']->value['scolumn'];?>
<?php }?> col-sm-4 col-xs-12 product_block ajax_block_product">
						<div class="product-container clearfix">
							<div class="center_block">								
								<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" class="product_image" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
">
									<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'htmlall', 'UTF-8');?>
" />
									
									<?php if ($_smarty_tpl->tpl_vars['proReduce']->value){?><span class="hot"><?php echo smartyTranslate(array('s'=>'Sleva'),$_smarty_tpl);?>
 -<?php echo $_smarty_tpl->tpl_vars['proReduce']->value;?>
%</span><?php }?>
									<?php ob_start();?><?php echo Product::skladovost($_smarty_tpl->tpl_vars['product']->value['id_product'],"skladem");?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?><span class="skladem"><?php echo smartyTranslate(array('s'=>'Skladem'),$_smarty_tpl);?>
</span><?php }?>
								</a>
								
							</div>
							<div class="right_block">
								<?php if (Product::jeNovinka($_smarty_tpl->tpl_vars['product']->value['id_product'])){?><span class="discount"><?php echo smartyTranslate(array('s'=>'New','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</span><?php }?>
								
								<h4 class="name"><?php if (isset($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['pack_quantity']){?><?php echo (intval($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])).(' x ');?>
<?php }?><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],35,'...'), 'htmlall', 'UTF-8');?>
</a></h4>
													
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
											</span>
										<?php }?>								
									</div>
														
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
', $('#idCombination').val(), 1 ); return false;" title="<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
"></a>
								
								
							</div>								
						</div>
					</div>
					
				<?php if (($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last'])&&$_smarty_tpl->tpl_vars['columnspage']->value>1){?>
					</div>
				<?php }?>
					
				<?php } ?>
		</div>		
	<?php } ?>
	</div>
</div>
<?php }?><?php }} ?>