<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:53:02
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/modules/leomanagewidgets/themes/leomanagewidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:426819509566718fe75d152-43166555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f13f3a48bb6f87fa621426fd11a4840676c87fc' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/modules/leomanagewidgets/themes/leomanagewidgets.tpl',
      1 => 1411561272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '426819509566718fe75d152-43166555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook' => 0,
    'leomanagewidgets_datas' => 0,
    'datas' => 0,
    'content' => 0,
    'carousel_product_tpl' => 0,
    'tab_product_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718fe879e64_14216752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718fe879e64_14216752')) {function content_566718fe879e64_14216752($_smarty_tpl) {?>
<div id="homecontent-<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
">
	<?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datas']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leomanagewidgets_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
$_smarty_tpl->tpl_vars['datas']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['datas']->value['task']=='custom'){?>
			<div class="leo-<?php echo $_smarty_tpl->tpl_vars['datas']->value['task'];?>
">
				<?php if ($_smarty_tpl->tpl_vars['datas']->value['configs']['display_title']){?><h3><?php echo $_smarty_tpl->tpl_vars['datas']->value['title'];?>
</h3><?php }?>
				<?php echo $_smarty_tpl->tpl_vars['datas']->value['contents'];?>

			</div>
		<?php }elseif($_smarty_tpl->tpl_vars['datas']->value['task']=='carousel'){?>
			<div class="leo-<?php echo $_smarty_tpl->tpl_vars['datas']->value['task'];?>
 clearfix">
				<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value['contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
					<div id="blockleohighlightcarousel-<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
" class="products_block exclusive blockleohighlightcarousel">
					<div class="block_content ">	
						<div class="highlight-carousel block">
							<div class="highlight-image">
								<?php if ($_smarty_tpl->tpl_vars['datas']->value['configs']['display_title']){?>
									<h3 class="title_block"><?php echo $_smarty_tpl->tpl_vars['datas']->value['title'];?>
</h3>
								<?php }?>
							</div>
							<div class="clearfix">
								<?php if (!empty($_smarty_tpl->tpl_vars['content']->value['products'])){?>
									<?php $_smarty_tpl->tpl_vars['mproducts'] = new Smarty_variable($_smarty_tpl->tpl_vars['content']->value['products'], null, 0);?><?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable($_smarty_tpl->tpl_vars['content']->value['id'], null, 0);?>
									<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['carousel_product_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

								<?php }?>
							</div>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['datas']->value['description']){?><div class="highlight-info"><?php echo $_smarty_tpl->tpl_vars['datas']->value['description'];?>
</div><?php }?>
					</div>
				<?php } ?>
			</div>
		<?php }elseif($_smarty_tpl->tpl_vars['datas']->value['task']=='tab'){?>
			<div class="leo-<?php echo $_smarty_tpl->tpl_vars['datas']->value['task'];?>
 block products_block exclusive blockleoproducttabs clearfix">
				<?php if ($_smarty_tpl->tpl_vars['datas']->value['configs']['display_title']){?>
					<h3><?php echo $_smarty_tpl->tpl_vars['datas']->value['title'];?>
</h3>
				<?php }?>
				<div class="block_content">	
					<ul id="productTabs-<?php echo $_smarty_tpl->tpl_vars['datas']->value['id_leomanagewidgets'];?>
" class="nav nav-tabs">
					<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value['contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['content']->value['products']){?>
							<li><a href="#leotab-<?php echo $_smarty_tpl->tpl_vars['datas']->value['id_leomanagewidgets'];?>
-<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
" data-toggle="tab"><?php if ($_smarty_tpl->tpl_vars['content']->value['image']){?><img src="<?php echo $_smarty_tpl->tpl_vars['content']->value['image'];?>
" alt=""/><?php }?><?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
</a></li>
						<?php }?>
					<?php } ?>
					</ul>
				</div>
				<div id="productTabsContent-<?php echo $_smarty_tpl->tpl_vars['datas']->value['id_leomanagewidgets'];?>
" class="tab-content">
					<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value['contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['content']->value['products']){?>
							<div class="tab-pane" id="leotab-<?php echo $_smarty_tpl->tpl_vars['datas']->value['id_leomanagewidgets'];?>
-<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
">
								<?php $_smarty_tpl->tpl_vars['mproducts'] = new Smarty_variable($_smarty_tpl->tpl_vars['content']->value['products'], null, 0);?><?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable($_smarty_tpl->tpl_vars['content']->value['id'], null, 0);?>
								<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tab_product_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

							</div>
						<?php }?>
					<?php } ?>
				</div>
			</div>
		<?php }?>
	<?php } ?>
</div>
<script>
$(document).ready(function() {
    $('.carousel').each(function(){
        $(this).carousel({
            pause: true,
            interval: false
        });
    });
	$(".blockleoproducttabs").each( function(){
		$(".nav-tabs li", this).first().addClass("active");
		$(".tab-content .tab-pane", this).first().addClass("active");
	} );
});
</script><?php }} ?>