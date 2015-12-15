<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 19:14:27
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145517546656671e038b7920-52506067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efdd22a528a3b9961cf33dd1dcf6670c341cb0fa' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/search.tpl',
      1 => 1445247034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145517546656671e038b7920-52506067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'instantSearch' => 0,
    'nbProducts' => 0,
    'search_query' => 0,
    'search_tag' => 0,
    'ref' => 0,
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
  'unifunc' => 'content_56671e03a517d4_37958587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56671e03a517d4_37958587')) {function content_56671e03a517d4_37958587($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 <?php if (isset($_smarty_tpl->tpl_vars['instantSearch']->value)&&$_smarty_tpl->tpl_vars['instantSearch']->value){?>id="instant_search_results"<?php }?>>
<?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['nbProducts']->value>0){?>"<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)&&$_smarty_tpl->tpl_vars['search_query']->value){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['search_query']->value, 'htmlall', 'UTF-8');?>
<?php }elseif($_smarty_tpl->tpl_vars['search_tag']->value){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['search_tag']->value, 'htmlall', 'UTF-8');?>
<?php }elseif($_smarty_tpl->tpl_vars['ref']->value){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ref']->value, 'htmlall', 'UTF-8');?>
<?php }?>"<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['instantSearch']->value)&&$_smarty_tpl->tpl_vars['instantSearch']->value){?><a href="#" class="close"><?php echo smartyTranslate(array('s'=>'Return to the previous page'),$_smarty_tpl);?>
</a><?php }?>
</h1>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if (!$_smarty_tpl->tpl_vars['nbProducts']->value){?>
	<h3 class="nbresult warning">
		<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)&&$_smarty_tpl->tpl_vars['search_query']->value){?>
			<?php echo smartyTranslate(array('s'=>'No results were found for your search'),$_smarty_tpl);?>
&nbsp;"<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['search_query']->value, 'htmlall', 'UTF-8');?>
<?php }?>"
		<?php }elseif(isset($_smarty_tpl->tpl_vars['search_tag']->value)&&$_smarty_tpl->tpl_vars['search_tag']->value){?>
			<?php echo smartyTranslate(array('s'=>'No results were found for your search'),$_smarty_tpl);?>
&nbsp;"<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['search_tag']->value, 'htmlall', 'UTF-8');?>
"
		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'Please enter a search keyword'),$_smarty_tpl);?>

		<?php }?>
	</h3>
    <div class="noexist-hledani">
    <p class="hledej-txt"><?php echo smartyTranslate(array('s'=>'Hledat v katalogu'),$_smarty_tpl);?>
</p>
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std">
        <fieldset>
            <div class="input-group">
                <input id="search_query" class="form-control" name="search_query" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)&&$_smarty_tpl->tpl_vars['search_query']->value){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['search_query']->value, 'htmlall', 'UTF-8');?>
<?php }?>"/>
                <span class="input-group-btn">                
                    <input type="submit" name="Submit" value="Hledat" class="btn btn-search"/>        
                </span>
            </div>

        </fieldset>
    </form>
    </div>
<?php }else{ ?>
	<h3 class="nbresult success"><span class="big"><?php if ($_smarty_tpl->tpl_vars['nbProducts']->value==1){?><?php echo smartyTranslate(array('s'=>'%d result has been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'%d results have been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl);?>
<?php }?></span></h3>

	<div class="content_sortPagiBar">
		<div class="sortPagiBar row">
			<div>
				<div class="inner">
				 
				  <span class="resumecat category-product-count"> <?php echo smartyTranslate(array('s'=>'%d','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl);?>
<span class="w-normal"> Produktů</span> </span>
					<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
			<div class="col-lg-5 col-md-5 col-sm-8 col-xs-12 obal-pagination-bottom">
				<div class="inner">
					<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

				</div>
			</div>						
			 <div class="col-lg-3 col-md-3 porovnat-pag-bot">
				<div class="inner">
					<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

				</div>
			</div>
		</div>
	</div>
	</div><?php }?>
<?php }?>
<?php }} ?>