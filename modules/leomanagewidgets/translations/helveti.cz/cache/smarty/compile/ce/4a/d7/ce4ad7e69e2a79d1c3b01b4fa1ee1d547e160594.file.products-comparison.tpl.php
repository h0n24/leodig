<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 21:40:17
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/products-comparison.tpl" */ ?>
<?php /*%%SmartyHeaderCode:725002019566740312344c7-59356527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce4ad7e69e2a79d1c3b01b4fa1ee1d547e160594' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/products-comparison.tpl',
      1 => 1412510885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '725002019566740312344c7-59356527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasProduct' => 0,
    'use_taxes' => 0,
    'priceDisplay' => 0,
    'products' => 0,
    'product' => 0,
    'width' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'taxes_behavior' => 0,
    'unit_price' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
    'ordered_features' => 0,
    'feature' => 0,
    'classname' => 0,
    'product_id' => 0,
    'product_features' => 0,
    'feature_id' => 0,
    'tab' => 0,
    'HOOK_EXTRA_PRODUCT_COMPARISON' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5667403141dbb9_92473402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5667403141dbb9_92473402')) {function content_5667403141dbb9_92473402($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_function_math')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_cycle')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/function.cycle.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Product Comparison'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<h1><?php echo smartyTranslate(array('s'=>'Product Comparison'),$_smarty_tpl);?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['hasProduct']->value){?>
<div class="products_block">
	<table id="product_comparison" class="std">
			<td width="20%" class="td_empty"></td>
			<?php $_smarty_tpl->tpl_vars['taxes_behavior'] = new Smarty_variable(false, null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&(!$_smarty_tpl->tpl_vars['priceDisplay']->value||$_smarty_tpl->tpl_vars['priceDisplay']->value==2)){?>
				<?php $_smarty_tpl->tpl_vars['taxes_behavior'] = new Smarty_variable(true, null, 0);?>
			<?php }?>
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['replace_id'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value->id).('|'), null, 0);?>

			<td width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
%" class="ajax_block_product product-block comparison_infos">
				<div class="product_block">
					<div class="product-container">
						<div class="center_block">
							<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getLink();?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'html', 'UTF-8');?>
" class="product_image" >
								<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->id_image,'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'html', 'UTF-8');?>
"  />

						<?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale){?>
									<span class="on_sale"><?php echo smartyTranslate(array('s'=>'On sale!'),$_smarty_tpl);?>
</span>
								<?php }elseif($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']){?>
									<span class="hot"><?php echo smartyTranslate(array('s'=>'Reduced price!'),$_smarty_tpl);?>
</span>
								<?php }?>
								<?php if (!(($_smarty_tpl->tpl_vars['product']->value->quantity<=0&&!$_smarty_tpl->tpl_vars['product']->value->available_later)||($_smarty_tpl->tpl_vars['product']->value->quantity!=0&&!$_smarty_tpl->tpl_vars['product']->value->available_now)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value)){?>
									<div class="srovnani_skladovost skladem"><?php ob_start();?><?php echo Product::skladovost($_smarty_tpl->tpl_vars['product']->value->id,"skladem");?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>Skladem<?php }else{ ?>do 14 dní<?php }?></div>
								<?php }?>
						</a>

						</div>
						<div class="right_block">
							
							<h3 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getLink();?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value->name,32,'...'), 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value->name,35,'...'), 'htmlall', 'UTF-8');?>
</a></h3>
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value->show_price)&&$_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
								<div class="content_price price_container text-center col-md-12"><span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->getPrice($_smarty_tpl->tpl_vars['taxes_behavior']->value)),$_smarty_tpl);?>
</span></div>				
								<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->unity)&&$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio>0.000000){?>
										<?php echo smarty_function_math(array('equation'=>"pprice / punit_price",'pprice'=>$_smarty_tpl->tpl_vars['product']->value->getPrice($_smarty_tpl->tpl_vars['taxes_behavior']->value),'punit_price'=>$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio,'assign'=>'unit_price'),$_smarty_tpl);?>

									<div class="comparison_unit_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['unit_price']->value),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'per %s','sprintf'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->unity, 'htmlall', 'UTF-8')),$_smarty_tpl);?>
</div>
								<?php }else{ ?>
								&nbsp;
								<?php }?>
							<?php }?>
						
						</div>
						<!-- availability -->
						<div class="buttons-action product_bottom">
						<div class="srovnani_tlacitko srovnani_tlacitko_odebrat"><a class="cmp_remove clearfix button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"><?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>
</a></div>
							<div class="srovnani_tlacitko srovnani_tlacitko_zobrazit"><a class="lnk_more clearfix button" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getLink();?>
" title="<?php echo smartyTranslate(array('s'=>'View'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'View'),$_smarty_tpl);?>
</a></div>
							
							<?php if ((!$_smarty_tpl->tpl_vars['product']->value->hasAttributes()||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value->minimal_quantity==1&&$_smarty_tpl->tpl_vars['product']->value->customizable!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
								<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity>0||$_smarty_tpl->tpl_vars['product']->value->allow_oosp)){?>
									<div class="srovnani_tlacitko srovnani_tlacitko_kosik"><a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"qty=1&amp;id_product=".((string)$_smarty_tpl->tpl_vars['product']->value->id)."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
"><span></span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</a></div>
								<?php }else{ ?>
									<span class="exclusive"><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
								<?php }?>
							<?php }?>

							
						</div>
					</div>
				</div>
			</td>
		<?php } ?>
		</tr>

		<tr class="comparison_header">
			<td>
				<?php echo smartyTranslate(array('s'=>'Features:'),$_smarty_tpl);?>

			</td>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['td'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['td']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop'] = is_array($_loop=count($_smarty_tpl->tpl_vars['products']->value)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['name'] = 'td';
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total']);
?>
			<td></td>
			<?php endfor; endif; ?>
		</tr>

		<?php if ($_smarty_tpl->tpl_vars['ordered_features']->value){?>
		<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordered_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
		<?php if (!strstr($_smarty_tpl->tpl_vars['feature']->value['name'],"FILTRACE")){?>
		<tr>
			<?php echo smarty_function_cycle(array('values'=>'comparison_feature_odd,comparison_feature_even','assign'=>'classname'),$_smarty_tpl);?>

			<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" >
				<strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['feature']->value['name'], 'htmlall', 'UTF-8');?>
</strong>
			</td>

			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->id, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['feature_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['id_feature'], null, 0);?>
				<?php if (isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value])){?>
					<?php $_smarty_tpl->tpl_vars['tab'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value], null, 0);?>
					<td  width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
%" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos"><?php if ((isset($_smarty_tpl->tpl_vars['tab']->value[$_smarty_tpl->tpl_vars['feature_id']->value]))){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tab']->value[$_smarty_tpl->tpl_vars['feature_id']->value], 'htmlall', 'UTF-8');?>
<?php }?></td>
				<?php }else{ ?>
					<td  width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
%" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos"></td>
				<?php }?>
			<?php } ?>
		</tr>
		<?php }?>
		<?php } ?>
		<?php }else{ ?>
			<tr>
				<td></td>
				<td colspan="<?php echo count($_smarty_tpl->tpl_vars['products']->value)+1;?>
"><?php echo smartyTranslate(array('s'=>'No features to compare'),$_smarty_tpl);?>
</td>
			</tr>
		<?php }?>

		<?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_PRODUCT_COMPARISON']->value;?>

	</table>
</div>
<?php }else{ ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'There are no products selected for comparison.'),$_smarty_tpl);?>
</p>
<?php }?>

<a href="javascript:history.back()" class="zpet-do-obchodu"><i class="fa fa-chevron-left "></i> Zpět na výběr</a>

<?php }} ?>