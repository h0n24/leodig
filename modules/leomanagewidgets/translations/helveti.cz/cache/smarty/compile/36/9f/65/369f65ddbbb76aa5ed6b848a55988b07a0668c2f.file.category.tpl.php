<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:53:44
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:760046023566719287c9407-97871713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '369f65ddbbb76aa5ed6b848a55988b07a0668c2f' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/category.tpl',
      1 => 1442608663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '760046023566719287c9407-97871713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'categoryNameComplement' => 0,
    'scenes' => 0,
    'link' => 0,
    'products' => 0,
    'nb_products' => 0,
    'products_per_page' => 0,
    'p' => 0,
    'as_searchs' => 0,
    'pages_nb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566719288a7b09_82365208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566719288a7b09_82365208')) {function content_566719288a7b09_82365208($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['category']->value)){?>
	<?php if ($_smarty_tpl->tpl_vars['category']->value->id&&$_smarty_tpl->tpl_vars['category']->value->active){?>
		<h1>
			<?php echo Category::PredNazvemModeloveRady($_smarty_tpl->tpl_vars['category']->value->id_parent);?>

			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['category']->value->name, 'htmlall', 'UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['categoryNameComplement']->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['categoryNameComplement']->value, 'htmlall', 'UTF-8');?>
<?php }?>
		</h1>
		
		
		<?php if ($_smarty_tpl->tpl_vars['scenes']->value||$_smarty_tpl->tpl_vars['category']->value->description||$_smarty_tpl->tpl_vars['category']->value->id_image){?>
		<div class="content_scene_cat">
			<?php if ($_smarty_tpl->tpl_vars['scenes']->value){?>
				<!-- Scenes -->
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./scenes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('scenes'=>$_smarty_tpl->tpl_vars['scenes']->value), 0);?>

			<?php }else{ ?>
				<!-- Category image -->
				<?php if ($_smarty_tpl->tpl_vars['category']->value->id_image){?>
				<div class="align_center">
					<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['category']->value->link_rewrite,$_smarty_tpl->tpl_vars['category']->value->id_image,'category_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['category']->value->name, 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['category']->value->name, 'htmlall', 'UTF-8');?>
" id="categoryImage"  />
				</div>
				<?php }?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['category']->value->description){?>
				<div class="cat_desc">
					<div><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</div>
				</div>
			<?php }?>
		</div>
		<?php }?>
	
		<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
			<div class="content_sortPagiBar">
				<div class="sortPagiBar row">

					<div>
						<div class="inner">
							<span class="resumecat category-product-count">
								<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-count.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

							</span>
							<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

							<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						</div>
					</div>
				</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

			
			
			<?php if ($_smarty_tpl->tpl_vars['nb_products']->value>$_smarty_tpl->tpl_vars['products_per_page']->value){?> 
			<div class="container category-bot-pag">
				<div class="col-xs-12 sortPagiBar">
					<div class="row">
						<div class="resumecat category-product-count col-lg-4 col-md-4">
							<?php echo ($_smarty_tpl->tpl_vars['p']->value)*$_smarty_tpl->tpl_vars['as_searchs']->value[0]['products_per_page']-$_smarty_tpl->tpl_vars['as_searchs']->value[0]['products_per_page']+1;?>
 -
						<?php if ($_smarty_tpl->tpl_vars['p']->value!=$_smarty_tpl->tpl_vars['pages_nb']->value){?><?php echo ($_smarty_tpl->tpl_vars['p']->value)*$_smarty_tpl->tpl_vars['as_searchs']->value[0]['products_per_page'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['nb_products']->value;?>
<?php }?> <span class="w-normal">z</span>
								<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-count.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						</div>
					 	<div class="col-lg-3 col-md-3 porovnat-pag-bot">
							<div class="inner">
								<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-8 col-xs-12 obal-pagination-bottom">
							<div class="inner">
								<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

							</div>
						</div>
						
					</div>
				</div>
			</div>
			<?php }?>

			</div></div></section>
		<?php }?>
	<?php }elseif($_smarty_tpl->tpl_vars['category']->value->id){?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'This category is currently unavailable.'),$_smarty_tpl);?>
</p>
	<?php }?>
<?php }?>
<?php }} ?>