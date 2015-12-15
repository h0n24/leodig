<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:42:57
         compiled from "/srv/www/helveti/themes/leodig/product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9659625654610731711197-76689545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3804acb5c9d114b878d5adbc1c2f3cd5d32bb23e' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/product-compare.tpl',
      1 => 1412089536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9659625654610731711197-76689545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'paginationId' => 0,
    'link' => 0,
    'compareProducts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546107317c9e37_63012463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546107317c9e37_63012463')) {function content_546107317c9e37_63012463($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
<?php if (!isset($_smarty_tpl->tpl_vars['paginationId']->value)||$_smarty_tpl->tpl_vars['paginationId']->value==''){?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
';
	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
";
	var add_compare = '<?php echo smartyTranslate(array('s'=>'This product was added to comparison list','js'=>1),$_smarty_tpl);?>
';
	var remove_compare = '<?php echo smartyTranslate(array('s'=>'This product was removed from comparison list','js'=>1),$_smarty_tpl);?>
';
	var err_remove_compare = '<?php echo smartyTranslate(array('s'=>'Can not remove from comparison list','js'=>1),$_smarty_tpl);?>
';
//]]>
</script>
<?php }?>

	<form method="post" class="pull-right" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" onsubmit="true">
		<div class="bt_compare_obal"><input type="submit" id="bt_compare<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)){?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" class="button bt_compare" value="Porovnat vybrané" /><div class="bt_compare_number"><?php if (isset($_smarty_tpl->tpl_vars['compareProducts']->value)){?><?php echo count($_smarty_tpl->tpl_vars['compareProducts']->value);?>
<?php }else{ ?>0<?php }?></div></div>
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		<input type="hidden"class="pocet_porovnavanych" value="<?php if (isset($_smarty_tpl->tpl_vars['compareProducts']->value)){?><?php echo count($_smarty_tpl->tpl_vars['compareProducts']->value);?>
<?php }else{ ?>0<?php }?>" />
	</form>
<?php }?>

<?php }} ?>