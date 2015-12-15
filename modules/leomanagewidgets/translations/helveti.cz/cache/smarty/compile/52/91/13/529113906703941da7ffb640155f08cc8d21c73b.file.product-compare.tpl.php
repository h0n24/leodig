<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:53:11
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50188741256671907bccca4-98928783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '529113906703941da7ffb640155f08cc8d21c73b' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/product-compare.tpl',
      1 => 1412089536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50188741256671907bccca4-98928783',
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
  'unifunc' => 'content_56671907c212f7_22094502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56671907c212f7_22094502')) {function content_56671907c212f7_22094502($_smarty_tpl) {?>

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