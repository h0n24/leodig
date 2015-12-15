<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:42:05
         compiled from "/srv/www/helveti/modules/cashondelivery/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1601001412546106fdc4f9b9-99208022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cba7f1e8ac18404b56c709d2aaab7e0415b0fcd' => 
    array (
      0 => '/srv/www/helveti/modules/cashondelivery/views/templates/hook/payment.tpl',
      1 => 1412868553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1601001412546106fdc4f9b9-99208022',
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
  'unifunc' => 'content_546106fdcb2bb4_38654590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546106fdcb2bb4_38654590')) {function content_546106fdcb2bb4_38654590($_smarty_tpl) {?>


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