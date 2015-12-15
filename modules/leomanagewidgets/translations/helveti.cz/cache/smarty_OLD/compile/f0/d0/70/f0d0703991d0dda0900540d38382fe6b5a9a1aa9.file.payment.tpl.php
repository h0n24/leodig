<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:42:05
         compiled from "/srv/www/helveti/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1524334423546106fdbfbe85-97119712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0d0703991d0dda0900540d38382fe6b5a9a1aa9' => 
    array (
      0 => '/srv/www/helveti/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1411315081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1524334423546106fdbfbe85-97119712',
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
  'unifunc' => 'content_546106fdc3dd80_88606183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546106fdc3dd80_88606183')) {function content_546106fdc3dd80_88606183($_smarty_tpl) {?>


<div class="delivery_option item form-group clearfix" id="pay_div_bankwire">
	<input class="delivery_option_radio col-sm-1" type="radio" name="pay" id="pay_bankwire" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" >
	<label for="pay_bankwire">
		<table class="resume col-sm-12">
			<tbody>
				<tr>
					<td class="payment_option_logo">
						<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
helveti/pay-prevod.png" alt="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
" width="32" height="29"/>
					</td>
					<td class="payment_option_title">
						<strong><?php echo smartyTranslate(array('s'=>'Bankovní převod','mod'=>'bankwire'),$_smarty_tpl);?>
</strong>
					</td>
					<td class="payment_option_popis">
						<?php echo smartyTranslate(array('s'=>'Budete vyzváni k uhrazení částky na bankovní účet','mod'=>'bankwire'),$_smarty_tpl);?>

					</td>
					<td class="delivery_option_price">
						Zdarma
					</td>
				</tr>
			</tbody>
		</table>
	</label>
</div>
<?php }} ?>