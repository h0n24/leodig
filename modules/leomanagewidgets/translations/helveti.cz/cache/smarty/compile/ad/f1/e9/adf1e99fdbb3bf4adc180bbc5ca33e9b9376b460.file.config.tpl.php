<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 12:25:16
         compiled from "/srv/www/helveti/helveti.cz/modules/noxlogsklad/views/templates/admin/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:448243405566ab29c760836-14404773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adf1e99fdbb3bf4adc180bbc5ca33e9b9376b460' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/noxlogsklad/views/templates/admin/config.tpl',
      1 => 1408560917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '448243405566ab29c760836-14404773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'neexistujici' => 0,
    'neep' => 0,
    'produkt' => 0,
    'action' => 0,
    'zvoleno' => 0,
    'logy' => 0,
    'log' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566ab29c80da80_06386270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566ab29c80da80_06386270')) {function content_566ab29c80da80_06386270($_smarty_tpl) {?><style>
h3{
		text-align:center;
		font-size:24px;
		color:#888;
		margin:20px 0;
		padding-bottom:8px;
		border-bottom:2px solid #444;
	}
	.vypis{
		width:750px;
		margin:0 auto;
		border-collapse:collapse;
		font-size:12px;
	}
	.vypis tr:hover{
		background:#ccc;
	}
	.vypis td,{
		padding:2px 12px 2px 12px;
		vertical-align:middle;
	}
	.tlacitko{
		background:#444;
		color:white;
		padding:2px 8px;
		width:80px;
		text-align:center;
		cursor:pointer;
		margin:10px 0;
		border:0;
	}
	.tlacitko:hover{
		background:#111;
	}
</style>
<div style="width:90%;margin:10px auto;background:#eee;border:1px solid #888;padding:20px;">
	<p style="text-align:center;margin:12px 0;">Link pro regeneraci skladových zásob: <a href="../custom/skladovost/index.php" target="_blank"style="color:red;font-weight:bold">ZKONTROLOVAT</a></p>
	<h3>Neexistující produkty v eshopu (v GD jsou)</h3>
	<h4 style="text-align:center;font-size:21px;">čas posledního logu: <?php echo $_smarty_tpl->tpl_vars['neexistujici']->value[0]['datum_l'];?>
<br/>celkem: <?php echo count($_smarty_tpl->tpl_vars['neexistujici']->value[0]['produkty'])-1;?>
 produktů</h4>
	<table class="vypis">
	<?php  $_smarty_tpl->tpl_vars['neep'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['neep']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neexistujici']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['neep']->key => $_smarty_tpl->tpl_vars['neep']->value){
$_smarty_tpl->tpl_vars['neep']->_loop = true;
?>
		<?php  $_smarty_tpl->tpl_vars['produkt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produkt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neep']->value['produkty']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['produkt']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['produkt']->key => $_smarty_tpl->tpl_vars['produkt']->value){
$_smarty_tpl->tpl_vars['produkt']->_loop = true;
 $_smarty_tpl->tpl_vars['produkt']->iteration++;
?>
			<?php if ($_smarty_tpl->tpl_vars['produkt']->value){?>
				<?php if ($_smarty_tpl->tpl_vars['produkt']->iteration%3==1){?><tr><?php }?>
				<td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['produkt']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['produkt']->iteration%3;?>
</td>
				<?php if ($_smarty_tpl->tpl_vars['produkt']->iteration%2==2){?></tr><?php }?>
			<?php }?>
		<?php } ?>
	<?php } ?>
	</table>
</div>
<div style="width:90%;margin:10px auto;background:#eee;border:1px solid #888;padding:20px;">
	<h3>Výpis logu skladu</h3>
	<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"method="post">
		<p style="text-align:center;margin-bottom:15px"><strong>zobrazit:</strong>
	<select name="zobrazit">
		<option value="1" <?php if ($_smarty_tpl->tpl_vars['zvoleno']->value==1){?>selected<?php }?>>posledních 14 dní</option>
		<option value="2" <?php if ($_smarty_tpl->tpl_vars['zvoleno']->value==2){?>selected<?php }?>>posledních 30 dní</option>
		<option value="0" <?php if ($_smarty_tpl->tpl_vars['zvoleno']->value==0){?>selected<?php }?>>všechno</option>	
	</select>
	<input type="submit" name="submit_order" class="tlacitko" value="Potvrdit">
	</p>
	</form>
	<table class="vypis">
		<tr style="background:#aaa;">
			<th>Datum logu</th>
			<th style="text-align:center;">ID produktu</th>
			<th style="text-align:center;">Kód produktu</th>
			<th style="text-align:center;">Změna</th>
		</tr>
<?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logy']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value){
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['log']->value['datum_l'];?>
</td>
			<td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['log']->value['id_product'];?>
</td>
			<td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['log']->value['reference'];?>
</td>
			<td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['log']->value['zmena'];?>
</td>
		</tr>
<?php } ?>
</table>
</div>
<div style="text-align:center">Created 2014 by Karel Nox</div><?php }} ?>