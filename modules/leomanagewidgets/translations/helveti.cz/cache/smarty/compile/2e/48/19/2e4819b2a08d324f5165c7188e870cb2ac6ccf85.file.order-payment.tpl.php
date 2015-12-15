<?php /* Smarty version Smarty-3.1.14, created on 2015-12-10 23:29:27
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/order-payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202122301956672fd71e9395-08132556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e4819b2a08d324f5165c7188e870cb2ac6ccf85' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/order-payment.tpl',
      1 => 1449786551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202122301956672fd71e9395-08132556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56672fd7271503_77176065',
  'variables' => 
  array (
    'opc' => 0,
    'currencySign' => 0,
    'currencyRate' => 0,
    'currencyFormat' => 0,
    'currencyBlank' => 0,
    'HOOK_TOP_PAYMENT' => 0,
    'HOOK_PAYMENT' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56672fd7271503_77176065')) {function content_56672fd7271503_77176065($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?>
	<script type="text/javascript">
	// <![CDATA[
	var currencySign = '<?php echo html_entity_decode($_smarty_tpl->tpl_vars['currencySign']->value,2,"UTF-8");?>
';
	var currencyRate = '<?php echo floatval($_smarty_tpl->tpl_vars['currencyRate']->value);?>
';
	var currencyFormat = '<?php echo intval($_smarty_tpl->tpl_vars['currencyFormat']->value);?>
';
	var currencyBlank = '<?php echo intval($_smarty_tpl->tpl_vars['currencyBlank']->value);?>
';
	var txtProduct = "<?php echo smartyTranslate(array('s'=>'product','js'=>1),$_smarty_tpl);?>
";
	var txtProducts = "<?php echo smartyTranslate(array('s'=>'products','js'=>1),$_smarty_tpl);?>
";
	// ]]>
	</script>

	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Your payment method'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?>
	<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('shipping', null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
	<div id="opc_payment_methods" class="opc-main-block">
		<div id="opc_payment_methods-overlay" class="opc-overlay" style="display: none;"></div>
<?php }?>

<div class="kosik-container kosik-container-payment">

<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?><h1><?php echo smartyTranslate(array('s'=>'Vyberte způsob platby'),$_smarty_tpl);?>
</h1><?php }else{ ?><h2><span>3</span> <?php echo smartyTranslate(array('s'=>'Please choose your payment method'),$_smarty_tpl);?>
</h2><?php }?>
<div class="clearfix"></div>
<div class="paiement_block">

<div id="HOOK_TOP_PAYMENT"><?php echo $_smarty_tpl->tpl_vars['HOOK_TOP_PAYMENT']->value;?>
</div>

<?php if ($_smarty_tpl->tpl_vars['HOOK_PAYMENT']->value){?>
	<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?>
<div id="order-detail-content" class="table_block ">
	
</div>
<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['opc']->value){?><div id="opc_payment_methods-content"><?php }?>
		<div id="HOOK_PAYMENT"><?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT']->value;?>
</div>
	<?php if ($_smarty_tpl->tpl_vars['opc']->value){?></div><?php }?>
<?php }else{ ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'No payment modules have been installed.'),$_smarty_tpl);?>
</p>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?>
	<p class="cart_navigation">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=2"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
" class="zpet-do-obchodu"><i class="fa fa-chevron-left"></i> <?php echo smartyTranslate(array('s'=>'Zpět na způsob dopravy'),$_smarty_tpl);?>
</a>
		<a href=""  class="button standard-checkout pull-right" id="test"/>Pokračovat v objednávce <i class="fa fa-chevron-right"></i></a>
		</p>
	
	<script>
		$("#test").click(function(){
			url=$("input[name=pay]:checked").attr("rel");
			if(url&&url!=="gopay")
				window.location.replace(url);
			else if(url=="gopay"){
				document.getElementById('gopay-payment-form-new').submit(); 
				return false;
			}
			else
				alert("Vyberte prosím způsob platby.");
			return false;
		});
		//gopay
		$(".delivery_option label").click(function(){
			var what_payment=$(this).attr("for");
			//$(".go_content").slideToggle();
			if(what_payment=="pay_badd_gopay_new")$("#pay_div_add_gopay_new .go_content").show();
			else $("#pay_div_add_gopay_new .go_content").hide();
		});
	</script>
			
<?php }else{ ?>
	</div>
<?php }?>
</div>

</div>
<?php }} ?>