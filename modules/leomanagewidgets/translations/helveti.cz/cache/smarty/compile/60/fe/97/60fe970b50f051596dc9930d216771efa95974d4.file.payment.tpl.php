<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 20:30:31
         compiled from "/srv/www/helveti/helveti.cz/modules/cashondelivery/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127363390356672fd70ed211-24764635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60fe970b50f051596dc9930d216771efa95974d4' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/cashondelivery/views/templates/hook/payment.tpl',
      1 => 1412868553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127363390356672fd70ed211-24764635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56672fd7130db9_06719313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56672fd7130db9_06719313')) {function content_56672fd7130db9_06719313($_smarty_tpl) {?>


<div class="delivery_option item form-group clearfix" id="pay_div_cod">
	<input class="delivery_option_radio col-sm-1" type="radio" name="pay" id="pay_cod" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cashondelivery','validation',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" >
	<label for="pay_cod">
		<table class="resume col-sm-12">
			<tbody>
				<tr>
					<td class="payment_option_logo">
						<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
helveti/pay-hotovost.png" alt="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
" width="32" height="29"/>
					</td>
					<td class="payment_option_title">
						<strong><?php echo smartyTranslate(array('s'=>'Hotově','mod'=>'cashondelivery'),$_smarty_tpl);?>
</strong> <?php echo smartyTranslate(array('s'=>'(při převzetí, dobírka)','mod'=>'cashondelivery'),$_smarty_tpl);?>

					</td>
					<td class="payment_option_popis">
						<?php echo smartyTranslate(array('s'=>'Zboží zaplatíte při převzetí','mod'=>'cashondelivery'),$_smarty_tpl);?>

					</td>
					<td  class="delivery_option_price">
						Zdarma
					</td>
				</tr>
			</tbody>
		</table>
	</label>
</div><?php }} ?>