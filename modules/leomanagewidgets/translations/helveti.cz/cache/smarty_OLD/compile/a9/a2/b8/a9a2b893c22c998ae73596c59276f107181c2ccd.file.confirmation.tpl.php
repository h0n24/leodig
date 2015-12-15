<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:42:16
         compiled from "/srv/www/helveti/modules/cashondelivery/views/templates/hook/confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41814258754610708a83f92-15424564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9a2b893c22c998ae73596c59276f107181c2ccd' => 
    array (
      0 => '/srv/www/helveti/modules/cashondelivery/views/templates/hook/confirmation.tpl',
      1 => 1412933319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41814258754610708a83f92-15424564',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_objednavky_cod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54610708ac3be5_76296537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610708ac3be5_76296537')) {function content_54610708ac3be5_76296537($_smarty_tpl) {?>



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