<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:39:45
         compiled from "/srv/www/helveti/modules/noxaltrolog/views/templates/admin/homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23001351154610671df35d3-44835723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b35a15b6ba3780e03cd5f4d47e86e9532330266' => 
    array (
      0 => '/srv/www/helveti/modules/noxaltrolog/views/templates/admin/homepage.tpl',
      1 => 1415229431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23001351154610671df35d3-44835723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'altrotoken' => 0,
    'logs' => 0,
    'logitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54610671e7a1e9_87377340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610671e7a1e9_87377340')) {function content_54610671e7a1e9_87377340($_smarty_tpl) {?>
<style>
#altroblok{
	width:583px;
	background:#F8F8F8;
	color: #333;
	border: 1px solid #ccc;
	padding: 5px;
	height: 95px;
	text-align: center;
	border-radius: 3px;
	margin-bottom:15px;
}
.bunka{
	width:25%;
}
.cislo{
	font-weight:bold;
	font-size:30px;
}
.zmena{
	color:red;
}
</style>

<a href="http://www.helveti.cz/admin6105/index.php?controller=AdminModules&token=<?php echo $_smarty_tpl->tpl_vars['altrotoken']->value;?>
&configure=noxaltrolog">
<div id="altroblok">
	<?php  $_smarty_tpl->tpl_vars['logitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['logitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['logitem']->key => $_smarty_tpl->tpl_vars['logitem']->value){
$_smarty_tpl->tpl_vars['logitem']->_loop = true;
?>
	<h2><strong>Altro Log</strong> <span style="font-size:12px">(poslední aktualizace: <strong><?php echo $_smarty_tpl->tpl_vars['logitem']->value['datum'];?>
</strong>)</span></h2>
	<table style="width:90%;margin:0 auto;">
		<tr>
			<td class="bunka">Změna ceny:<br/><span class="cislo <?php if (count($_smarty_tpl->tpl_vars['logitem']->value['log'][3])>0){?>zmena<?php }?>"><?php echo count($_smarty_tpl->tpl_vars['logitem']->value['log'][3]);?>
</span></td>
			<td class="bunka">Deaktivováno:<br/><span class="cislo <?php if (count($_smarty_tpl->tpl_vars['logitem']->value['log'][0])>0){?>zmena<?php }?>"><?php echo count($_smarty_tpl->tpl_vars['logitem']->value['log'][0]);?>
</span></td>
			<td class="bunka">Aktivováno:<br/><span class="cislo <?php if (count($_smarty_tpl->tpl_vars['logitem']->value['log'][1])>0){?>zmena<?php }?>"><?php echo count($_smarty_tpl->tpl_vars['logitem']->value['log'][1]);?>
</span></td>
			<td class="bunka">Přídáno:<br/><span class="cislo <?php if (count($_smarty_tpl->tpl_vars['logitem']->value['log'][2])>0){?>zmena<?php }?>"><?php echo count($_smarty_tpl->tpl_vars['logitem']->value['log'][2]);?>
</span></td>
		</tr>
	</table>
	<?php } ?>
</div>
</a><?php }} ?>