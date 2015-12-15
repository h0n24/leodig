<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:42:56
         compiled from "/srv/www/helveti/themes/leodig/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121740876554610730e87d98-64674090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a61edf5f8fc80a1455eef8411974626a4b53e15b' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_results.tpl',
      1 => 1412512614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121740876554610730e87d98-64674090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'as_searchs' => 0,
    'css_files_result_search' => 0,
    'css_uri' => 0,
    'media' => 0,
    'js_files_result_search' => 0,
    'js_uri' => 0,
    'as_seo_title' => 0,
    'as_seo_description' => 0,
    'as_obj' => 0,
    'tplCompareExists' => 0,
    'nb_products' => 0,
    'products_per_page' => 0,
    'p' => 0,
    'pages_nb' => 0,
    'as_cross_links' => 0,
    'base_dir' => 0,
    'lang_iso' => 0,
    'as_cross_link' => 0,
    'ASSearchUrl' => 0,
    'as4_productFilterListData' => 0,
    'as4_productFilterListSource' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5461073148f0d0_25911420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5461073148f0d0_25911420')) {function content_5461073148f0d0_25911420($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/tools/smarty/plugins/modifier.escape.php';
?><div id="PM_ASearchResults">
<div id="PM_ASearchResultsInner" class="PM_ASearchResultsInner_<?php echo $_smarty_tpl->tpl_vars['as_searchs']->value[0]['id_search'];?>
">

<?php if (isset($_smarty_tpl->tpl_vars['css_files_result_search']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files_result_search']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
	<?php } ?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['js_files_result_search']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files_result_search']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
	<?php } ?>
<?php }?>
<?php if (!isset($_REQUEST['keep_category_information'])||!$_REQUEST['keep_category_information']){?>
	<?php if (isset($_smarty_tpl->tpl_vars['as_seo_title']->value)){?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['as_seo_title']->value, 'htmlall', 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php }else{ ?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['as_searchs']->value[0]['title'], 'htmlall', 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php }?>
	<?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','<')){?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['as_searchs']->value[0])){?>
	<?php if ($_smarty_tpl->tpl_vars['as_searchs']->value[0]['id_search']&&$_smarty_tpl->tpl_vars['as_searchs']->value[0]['active']){?>

	

		<?php if (isset($_smarty_tpl->tpl_vars['as_seo_title']->value)){?>
			<?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','>=')){?>
				<h1 id="PM_ASearchResultsTitle" class="page-heading product-listing">
					<span class="cat-name"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['as_seo_title']->value, 'htmlall', 'UTF-8');?>
</span>
					<span class="heading-counter"><?php if ($_smarty_tpl->tpl_vars['as_searchs']->value[0]['total_products']==0){?><?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['as_searchs']->value[0]['total_products']==1){?><?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['as_searchs']->value[0]['total_products']),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['as_searchs']->value[0]['total_products']),$_smarty_tpl);?>
<?php }?><?php }?></span>
				</h1>
				<div class="content_sortPagiBar">
				<div class="sortPagiBar row"> 
			<?php }else{ ?>
				<h1 id="PM_ASearchResultsTitle"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['as_seo_title']->value, 'htmlall', 'UTF-8');?>
</h1>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['as_seo_description']->value){?>
				<div class="cat_desc"><?php echo $_smarty_tpl->tpl_vars['as_seo_description']->value;?>
</div>
			<?php }?>
		<?php }else{ ?>

			<?php if (!isset($_REQUEST['keep_category_information'])||!$_GET['keep_category_information']){?>
				<h1 id="PM_ASearchResultsTitle"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['as_searchs']->value[0]['title'], 'htmlall', 'UTF-8');?>
</h1><?php if ($_smarty_tpl->tpl_vars['as_searchs']->value[0]['description']){?><div class="cat_desc"><?php echo $_smarty_tpl->tpl_vars['as_searchs']->value[0]['description'];?>
</div><?php }?>
			<?php }?>
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php if ($_smarty_tpl->tpl_vars['as_searchs']->value[0]['remind_selection']==3||$_smarty_tpl->tpl_vars['as_searchs']->value[0]['remind_selection']==1){?>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['as_obj']->value->_getTplPath("pm_advancedsearch_selection_results.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['as_searchs']->value[0]['products']){?>
			<?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','>=')){?>
				


				<div class="content_sortPagiBar clearfix">
					<div class="sortPagiBar clearfix">
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>
					<div class="top-pagination-content clearfix">
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>
				</div>
				
			<?php }else{ ?>
				<div class="content_sortPagiBar">	
				<div class="sortPagiBar row">
				<div>
				<div class="inner">	
				<span class="resumecat category-product-count"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-count.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 </span>
					
					<?php $_smarty_tpl->tpl_vars['tplCompareExists'] = new Smarty_variable(file_exists(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-compare.tpl"), null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					<?php if ($_smarty_tpl->tpl_vars['tplCompareExists']->value){?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					<?php }?>
					<div class="clearfix"></div>
				</div>
				</div>
				</div>
				</div>
			<?php }?>
			 <!-- end content_sortPagiBar -->
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['as_searchs']->value[0]['products']), 0);?>

			
			<?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','>=')){?>
				<div class="content_sortPagiBar">
					<div class="bottom-pagination-content clearfix">
						
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

					</div>
				</div>
			<?php }else{ ?>
				<?php if ($_smarty_tpl->tpl_vars['tplCompareExists']->value){?>
					
				<?php }?>
				
			<?php if ($_smarty_tpl->tpl_vars['nb_products']->value>$_smarty_tpl->tpl_vars['products_per_page']->value){?> 		
			<div class="container category-bot-pag" >
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
						<div class="col-lg-5 col-md-5 col-sm-8 col-xs-12 obal-pagination-bottom">
							<div class="inner">
								<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

							</div>
						</div>						
						 <div class="col-lg-3 col-md-3 porovnat-pag-bot">
							<div class="inner">
								<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

							</div>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
			
			
			<?php }?>
		<?php }else{ ?>
			<p class="<?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','>=')){?>alert alert-warning<?php }else{ ?>warning<?php }?>"><?php echo smartyTranslate(array('s'=>'There are no result.','mod'=>'pm_advancedsearch4'),$_smarty_tpl);?>
</p>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['as_cross_links']->value)&&$_smarty_tpl->tpl_vars['as_cross_links']->value&&sizeof($_smarty_tpl->tpl_vars['as_cross_links']->value)){?>
			<br />
			<br />
			<div id="PM_ASearchSeoCrossLinks" class="block">
				<h4><?php echo smartyTranslate(array('s'=>'See also','mod'=>'pm_advancedsearch4'),$_smarty_tpl);?>
</h4>
				<div class="block_content">
					<ul class="bullet">
					<?php  $_smarty_tpl->tpl_vars['as_cross_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['as_cross_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['as_cross_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['as_cross_link']->key => $_smarty_tpl->tpl_vars['as_cross_link']->value){
$_smarty_tpl->tpl_vars['as_cross_link']->_loop = true;
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
/s/<?php echo intval($_smarty_tpl->tpl_vars['as_cross_link']->value['id_seo']);?>
/<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['as_cross_link']->value['seo_url'], 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['as_cross_link']->value['title'], 'htmlall', 'UTF-8');?>
</a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['as_searchs']->value[0]['share']){?>
	<div class="clear"></div>
	<a href="javascript:void(0);" class="<?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','>=')){?>btn btn-default exclusive-medium<?php }else{ ?>button_large<?php }?>" id="pm_share_link"><b><?php echo smartyTranslate(array('s'=>'Share this results','mod'=>'pm_advancedsearch4'),$_smarty_tpl);?>
</b></a><br />
	<input type="hidden" name="ASSearchUrl" id="ASSearchUrl" value="<?php echo $_smarty_tpl->tpl_vars['ASSearchUrl']->value;?>
" />
	<input type="hidden" name="ASSearchTitle" id="ASSearchTitle" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['as_searchs']->value[0]['title'], 'htmlall', 'UTF-8');?>
" />
	<div class="asShareBlock" id="asShareBlock">

	</div>
	<?php }?>
	<script type="text/javascript">
	if(typeof(ASParams[<?php echo intval($_smarty_tpl->tpl_vars['as_searchs']->value[0]['id_search']);?>
]) == 'undefined') {
		ASParams[<?php echo intval($_smarty_tpl->tpl_vars['as_searchs']->value[0]['id_search']);?>
] = {
			'keep_category_information' 	: 0,
			'search_results_selector'		: '<?php echo $_smarty_tpl->tpl_vars['as_searchs']->value[0]['search_results_selector'];?>
',
			'insert_in_center_column'		: '<?php echo $_smarty_tpl->tpl_vars['as_searchs']->value[0]['insert_in_center_column'];?>
',
			'seo_criterion_groups'			: '<?php if (isset($_smarty_tpl->tpl_vars['as_searchs']->value[0]['seo_criterion_groups'])&&is_array($_smarty_tpl->tpl_vars['as_searchs']->value[0]['seo_criterion_groups'])){?><?php echo implode(",",$_smarty_tpl->tpl_vars['as_searchs']->value[0]['seo_criterion_groups']);?>
<?php }?>',
			'as4_productFilterListData'		: '<?php if (isset($_smarty_tpl->tpl_vars['as4_productFilterListData']->value)&&!empty($_smarty_tpl->tpl_vars['as4_productFilterListData']->value)){?><?php echo $_smarty_tpl->tpl_vars['as4_productFilterListData']->value;?>
<?php }?>',
			'as4_productFilterListSource'	: '<?php if (isset($_smarty_tpl->tpl_vars['as4_productFilterListSource']->value)&&!empty($_smarty_tpl->tpl_vars['as4_productFilterListSource']->value)){?><?php echo $_smarty_tpl->tpl_vars['as4_productFilterListSource']->value;?>
<?php }?>',
			'scrollTopActive'				: <?php if (isset($_smarty_tpl->tpl_vars['as_searchs']->value[0]['scrolltop_active'])&&$_smarty_tpl->tpl_vars['as_searchs']->value[0]['scrolltop_active']){?>true<?php }else{ ?>false<?php }?>
		};
	}
		$jqPm('#asShareUrl').unbind('click').click(function() {$jqPm(this).select();});
		initSearch(<?php echo intval($_smarty_tpl->tpl_vars['as_searchs']->value[0]['id_search']);?>
,<?php echo intval($_smarty_tpl->tpl_vars['as_searchs']->value[0]['search_method']);?>
,<?php echo intval($_smarty_tpl->tpl_vars['as_searchs']->value[0]['step_search']);?>
,<?php echo intval($_smarty_tpl->tpl_vars['as_searchs']->value[0]['dynamic_criterion']);?>
);
	</script>
<?php }?>

</div>
</div>
<?php }} ?>