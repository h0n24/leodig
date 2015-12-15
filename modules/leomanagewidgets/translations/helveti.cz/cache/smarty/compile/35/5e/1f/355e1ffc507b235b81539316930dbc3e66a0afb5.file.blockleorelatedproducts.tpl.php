<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:52:56
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/modules/blockleorelatedproducts/blockleorelatedproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1871533123566718f85c3370-65648907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '355e1ffc507b235b81539316930dbc3e66a0afb5' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/modules/blockleorelatedproducts/blockleorelatedproducts.tpl',
      1 => 1408657034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1871533123566718f85c3370-65648907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718f85dd277_84288345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718f85dd277_84288345')) {function content_566718f85dd277_84288345($_smarty_tpl) {?>

<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)){?>
<!-- MODULE Block specials -->
<div id="relatedproducts" class="products_block exclusive blockleorelatedproducts">
	<h3 class="title_block"><?php echo smartyTranslate(array('s'=>'Podobné hodinky','mod'=>'blockleorelatedproducts'),$_smarty_tpl);?>
</h3>
	<div class="block_content">	
			<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable("leorelatedcarousel", null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['product_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
	</div>
</div>
<!-- /MODULE Block specials -->
<script>
$(document).ready(function() {
    $('.blockleorelatedproducts .carousel').each(function(){
        $(this).carousel({
            pause: true,
            interval: false
        });
    });
	 
});
</script>
<?php }?>
 <?php }} ?>