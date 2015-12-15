<?php /* Smarty version Smarty-3.1.14, created on 2015-12-09 14:33:48
         compiled from "/srv/www/helveti/helveti.cz/admin6105/themes/default/template/controllers/orders/_documents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157202750556682dbc428394-05621458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67bc6ac0c052e1a563ccc301c5d0bd8e3ff2ed8d' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/admin6105/themes/default/template/controllers/orders/_documents.tpl',
      1 => 1408554684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157202750556682dbc428394-05621458',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56682dbc476580_32075932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56682dbc476580_32075932')) {function content_56682dbc476580_32075932($_smarty_tpl) {?>
<table class="table" width="100%;" cellspacing="0" cellpadding="0" id="documents_table">
	<thead>
	<tr>
		<th style="width:10%"><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</th>
		<th style=""><?php echo smartyTranslate(array('s'=>'Document'),$_smarty_tpl);?>
</th>
		<th style="width:20%"><?php echo smartyTranslate(array('s'=>'Number'),$_smarty_tpl);?>
</th>
		<th style="width:10%"><?php echo smartyTranslate(array('s'=>'Amount'),$_smarty_tpl);?>
</th>
		<th style="width:1%"></th>
	</tr>
	</thead>
	<tbody>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'dalsiDokumenty'),$_smarty_tpl);?>

	
	</tbody>
</table>
<?php }} ?>