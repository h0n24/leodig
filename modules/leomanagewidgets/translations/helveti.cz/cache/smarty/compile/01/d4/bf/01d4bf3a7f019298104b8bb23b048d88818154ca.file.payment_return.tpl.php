<?php /* Smarty version Smarty-3.1.14, created on 2015-12-09 17:13:04
         compiled from "/srv/www/helveti/helveti.cz/modules/bankwire/views/templates/hook/payment_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160874970656685310bd49b2-98671272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01d4bf3a7f019298104b8bb23b048d88818154ca' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/bankwire/views/templates/hook/payment_return.tpl',
      1 => 1412930020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160874970656685310bd49b2-98671272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'total_to_pay' => 0,
    'reference' => 0,
    'id_order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56685310c71a99_96454248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56685310c71a99_96454248')) {function content_56685310c71a99_96454248($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['status']->value=='ok'){?>

		<p>	
		<?php echo smartyTranslate(array('s'=>'Please send us a bank wire with','mod'=>'bankwire'),$_smarty_tpl);?>
:
		</p>
		<div class="shrnuti-platebni-udaje">	
		<p><?php echo smartyTranslate(array('s'=>'Amount','mod'=>'bankwire'),$_smarty_tpl);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
</strong></p>
		<p><?php echo smartyTranslate(array('s'=>'Číslo účtu','mod'=>'bankwire'),$_smarty_tpl);?>
: <strong>2500275421 / 2010</strong></p>
		<p><?php echo smartyTranslate(array('s'=>'Variabilní symbol','mod'=>'bankwire'),$_smarty_tpl);?>
: <strong><?php echo smartyTranslate(array('s'=>'%s','sprintf'=>$_smarty_tpl->tpl_vars['reference']->value,'mod'=>'bankwire'),$_smarty_tpl);?>
</strong></p>
		</div> 
		<div class="shrnuti-info">
		<p>Číslo vaší objednávky je <strong><?php echo smartyTranslate(array('s'=>'%d','sprintf'=>$_smarty_tpl->tpl_vars['id_order']->value,'mod'=>'bankwire'),$_smarty_tpl);?>
</strong> a její shrnutí vám bylo <strong>odesláno emailem</strong>.</p>
		<p><?php echo smartyTranslate(array('s'=>'Máme-li zboží skladem - odešleme zásilku v den obdržení Vaší platby na náš účet.','mod'=>'bankwire'),$_smarty_tpl);?>
</p>
		<p><?php echo smartyTranslate(array('s'=>'V případě otázek nás neváhejte kontaktovat.'),$_smarty_tpl);?>
</p>
		<p><?php echo smartyTranslate(array('s'=>'Děkujeme za důvěru a přejeme hezký den.'),$_smarty_tpl);?>
</p>
		<p><?php echo smartyTranslate(array('s'=>'Váš tým Helveti.cz'),$_smarty_tpl);?>
</p>
		</div>
<?php }else{ ?>
	<p class="warning">
		<?php echo smartyTranslate(array('s'=>'We noticed a problem with your order. If you think this is an error, feel free to contact our','mod'=>'bankwire'),$_smarty_tpl);?>
 
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'expert customer support team. ','mod'=>'bankwire'),$_smarty_tpl);?>
</a>.
	</p>
<?php }?>
<?php }} ?>