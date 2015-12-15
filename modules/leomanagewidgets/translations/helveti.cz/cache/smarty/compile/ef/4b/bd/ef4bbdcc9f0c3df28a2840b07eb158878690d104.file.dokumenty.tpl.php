<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:53:06
         compiled from "/srv/www/helveti/helveti.cz/modules/noxidoklad/views/templates/admin/dokumenty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1914142280566719028fb584-41846001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef4bbdcc9f0c3df28a2840b07eb158878690d104' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/noxidoklad/views/templates/admin/dokumenty.tpl',
      1 => 1408920723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1914142280566719028fb584-41846001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'faktura' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566719029202b4_15780505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566719029202b4_15780505')) {function content_566719029202b4_15780505($_smarty_tpl) {?><tr class="invoice_line">
	<?php if ($_smarty_tpl->tpl_vars['faktura']->value){?>
		<td class="document_date">
			<?php echo $_smarty_tpl->tpl_vars['faktura']->value['cas'];?>

		</td>
		<td class="document_type">
		iDoklad faktura	
		</td>
		<td class="document_number">
			<?php echo $_smarty_tpl->tpl_vars['faktura']->value['cislo_faktury'];?>

		</td>
		<td class="document_amount">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['faktura']->value['cena']),$_smarty_tpl);?>

		</td>
		<td class="right document_action">
			<a href="<?php echo $_smarty_tpl->tpl_vars['faktura']->value['faktura_pdf'];?>
" target="_blank"><img src="../img/admin/details.gif" alt="<?php echo smartyTranslate(array('s'=>'See the document'),$_smarty_tpl);?>
" /></a>
		</td>
	<?php }else{ ?>
	<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">
	<td colspan="5" style="color:red; text-align:center;font-weight:bold">iDoklad faktura ještě nebyla vygenerována! <input type="submit" name="generujFakturu" value="Vygenerovat iDoklad fakturu" style="margin-left:8px;padding:2px;cursor:pointer;font-size:11px;"></td>
	</form>
	<?php }?>
</tr><?php }} ?>