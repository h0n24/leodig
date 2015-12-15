<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 20:34:59
         compiled from "/srv/www/helveti/helveti.cz/modules/cashondelivery/views/templates/hook/confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:475919005566730e3ed9208-24381907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf29266e01aef0d5f84c49c63269be81a37b39d' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/cashondelivery/views/templates/hook/confirmation.tpl',
      1 => 1412933319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '475919005566730e3ed9208-24381907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_objednavky_cod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566730e3f257a7_29115402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566730e3f257a7_29115402')) {function content_566730e3f257a7_29115402($_smarty_tpl) {?>



		<div class="shrnuti-info">
		<p>Číslo vaší objednávky je <strong><?php echo smartyTranslate(array('s'=>'%d','sprintf'=>$_smarty_tpl->tpl_vars['id_objednavky_cod']->value,'mod'=>'cashondelivery'),$_smarty_tpl);?>
</strong> a její shrnutí vám bylo <strong>odesláno emailem</strong>.</p>
		<p><?php echo smartyTranslate(array('s'=>'O průběhu objednávky vás budeme informovat.'),$_smarty_tpl);?>
</p>
		<p><?php echo smartyTranslate(array('s'=>'V případě otázek nás neváhejte kontaktovat.'),$_smarty_tpl);?>
</p>
		<p><?php echo smartyTranslate(array('s'=>'Děkujeme za důvěru a přejeme hezký den.'),$_smarty_tpl);?>
</p>
		<p><?php echo smartyTranslate(array('s'=>'Váš tým Helveti.cz'),$_smarty_tpl);?>
</p>
		</div>
		<?php }} ?>