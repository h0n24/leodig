<?php /* Smarty version Smarty-3.1.14, created on 2015-12-12 20:00:21
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/prices-drop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1009624262566c6ec53b9762-92331685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b5961ce687055705dee12511707f749322fb28a' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/prices-drop.tpl',
      1 => 1400606746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1009624262566c6ec53b9762-92331685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566c6ec54a5db9_90232764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566c6ec54a5db9_90232764')) {function content_566c6ec54a5db9_90232764($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Price drop'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1><?php echo smartyTranslate(array('s'=>'Price drop'),$_smarty_tpl);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
	<div class="content_sortPagiBar">
		<div class="sortPagiBar row">
			<div class="col-sm-4 hidden-xs">
				<div class="inner">
				  <div class="btn-group" id="productsview">
					<span style="float: left;"><?php echo smartyTranslate(array('s'=>'Display:'),$_smarty_tpl);?>
</span>
					<a class="btn-tooltip" title="<?php echo smartyTranslate(array('s'=>'Grid'),$_smarty_tpl);?>
" href="#" rel="view-grid"><i class="fa fa-th <?php if (Configuration::get('leoview')==1){?>active<?php }?>" ></i></a>
					<a class="btn-tooltip" title="<?php echo smartyTranslate(array('s'=>'List'),$_smarty_tpl);?>
" href="#"  rel="view-list"><i class="fa fa-th-list <?php if (Configuration::get('leoview')==0){?>active<?php }?>"></i></a>
				  </div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="inner pull-right">
					<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
			</div>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

	
	<div class="col-xs-12 sortPagiBar">
		<div class="row">
			<div class="col-sm-8 col-xs-12">
				<div class="inner">
					<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

				</div>
			</div>						
			 <div class="col-sm-4 hidden-xs">
				<div class="inner">
					<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

				</div>
			</div>
		</div>
	</div>
<?php }else{ ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'No price drop'),$_smarty_tpl);?>
</p>
<?php }?>
<?php }} ?>