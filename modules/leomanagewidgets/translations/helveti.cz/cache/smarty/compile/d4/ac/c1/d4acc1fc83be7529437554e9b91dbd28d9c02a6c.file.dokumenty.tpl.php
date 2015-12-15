<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:53:06
         compiled from "/srv/www/helveti/helveti.cz/modules/noxdokumenty/views/templates/admin/dokumenty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97456413256671902931442-20335033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4acc1fc83be7529437554e9b91dbd28d9c02a6c' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/noxdokumenty/views/templates/admin/dokumenty.tpl',
      1 => 1414058095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97456413256671902931442-20335033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nazev' => 0,
    'id_objednavky' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56671902945843_01108800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56671902945843_01108800')) {function content_56671902945843_01108800($_smarty_tpl) {?><tr class="invoice_line">
	<?php if ($_smarty_tpl->tpl_vars['nazev']->value){?>
		<td class="document_date">
			-
		</td>
		<td class="document_type">
			<?php echo $_smarty_tpl->tpl_vars['nazev']->value;?>
	
		</td>
		<td class="document_number">
			-
		</td>
		<td class="document_amount">
			-
		</td>
		<td class="right document_action" id="generuj-dokument">
			<form target="_blank"  action="http://www.helveti.cz/modules/noxdokumenty/generujdokument.php" method="POST">
			<img style="cursor:pointer;" src="../img/admin/details.gif" alt="<?php echo smartyTranslate(array('s'=>'See the document'),$_smarty_tpl);?>
" onclick="$(this).closest('form').submit();"/>
			<input hidden name="obj" value="<?php echo $_smarty_tpl->tpl_vars['id_objednavky']->value;?>
">
			</form>
		</td>
	<?php }else{ ?>
	<td colspan="5" style="color:red; text-align:center;font-weight:bold">Žádné dokumenty!</td>
	<?php }?>
</tr><?php }} ?>