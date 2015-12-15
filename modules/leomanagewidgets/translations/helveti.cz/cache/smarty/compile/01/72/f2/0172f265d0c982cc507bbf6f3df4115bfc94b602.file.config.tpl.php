<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 01:21:15
         compiled from "/srv/www/helveti/helveti.cz/modules/noxaltrolog/views/templates/admin/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:488071387566a16fbb282f9-21765001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0172f265d0c982cc507bbf6f3df4115bfc94b602' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/noxaltrolog/views/templates/admin/config.tpl',
      1 => 1423666126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '488071387566a16fbb282f9-21765001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logs' => 0,
    'logitem' => 0,
    'turns' => 0,
    'ceny' => 0,
    'pruchod_ceny' => 0,
    'cena' => 0,
    'altrotokenprodukt' => 0,
    'druhacena' => 0,
    'prvnicena' => 0,
    'deaktivovane' => 0,
    'aktivovane' => 0,
    'pridane' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566a16fbc3ac63_83541770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a16fbc3ac63_83541770')) {function content_566a16fbc3ac63_83541770($_smarty_tpl) {?>
<script type="text/javascript" src="../modules/noxaltrolog/js/noxaltrolog-admin.js"></script>
<script>


</script>
<style>
h3{
		text-align:center;
		font-size:24px;
		color:#888;
		margin:20px 0;
		padding-bottom:8px;
		border-bottom:2px solid #444;
	}
h4{
	margin: 5px 0;
	cursor:pointer;
}
.nazev,textarea{
	width:100%;
	padding:3px 8px !important;
}
h4{
	margin: 5px ;
	cursor:pointer;
}
	.tlacitko{
		background:#444;
		color:white;
		margin:30px 0;
		padding:12px 20px;
		width:100%;
		text-align:center;
		cursor:pointer;
			 
		border:0;
	}
	.tlacitko:hover{
		background:#111;
	}
	.tooglovac{
		font-weight:400;
		float:right;
		cursor:pointer;
	}
	.zmencenovac{
		font-weight:400;
		float:right;
		cursor:pointer;
		margin-right:10px;
		font-weight:bold;
		color:red;
	}
	.zabalovac{
		display:none;
	}
		.boxik{
		width:92%;
		margin:3px auto;
		padding:6px 12px;
		border:1px solid #444;
		background:#ddd;
		
	}
	.bunka{
		width:25%;
		vertical-align:top;
	}
	.pocty{
		font-weight:400;
		margin-left:10px;
	}
	.zmena{
		color:red;font-weight:700
	}
	.mini_nadpis{
		margin:8px 0;
	}
</style>

<div style="width:90%;margin:10px auto;background:#eee;border:1px solid #888;padding:20px;">
	<h3>Altro Log</h3>
	 <?php $_smarty_tpl->tpl_vars['turns'] = new Smarty_variable(1, null, 0);?> 
	<?php  $_smarty_tpl->tpl_vars['logitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['logitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['logitem']->key => $_smarty_tpl->tpl_vars['logitem']->value){
$_smarty_tpl->tpl_vars['logitem']->_loop = true;
?>
	<div class="boxik">
	<h4 rel="<?php echo $_smarty_tpl->tpl_vars['logitem']->value['id_al'];?>
"><?php echo $_smarty_tpl->tpl_vars['logitem']->value['datum'];?>
 <span class="pocty">(Deaktivováno: <span <?php if (count($_smarty_tpl->tpl_vars['logitem']->value['log'][0])>0){?>class="zmena"<?php }?>><?php echo count($_smarty_tpl->tpl_vars['logitem']->value['log'][0]);?>
</span> - Aktivováno: <span <?php if (count($_smarty_tpl->tpl_vars['logitem']->value['log'][1])>0){?>class="zmena"<?php }?>><?php echo count($_smarty_tpl->tpl_vars['logitem']->value['log'][1]);?>
</span> - Přidáno: <span <?php if (count($_smarty_tpl->tpl_vars['logitem']->value['log'][2])>0){?>class="zmena"<?php }?>><?php echo count($_smarty_tpl->tpl_vars['logitem']->value['log'][2]);?>
</span> - Ceny: <span <?php if (count($_smarty_tpl->tpl_vars['logitem']->value['log'][3])>0){?>class="zmena"<?php }?>><?php echo count($_smarty_tpl->tpl_vars['logitem']->value['log'][3]);?>
</span>)</span><span class="tooglovac">zobrazit</span></h4>
	<div id="<?php echo $_smarty_tpl->tpl_vars['logitem']->value['id_al'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['turns']->value!=1){?>zabalovac<?php }?>">
	<table style="width:100%;border-top:1px solid #aaa">
		<tr>
			<td class="bunka" style="border-right:1px solid #aaa">
			<?php if (count($_smarty_tpl->tpl_vars['logitem']->value['log'][3])>0){?>
				<p  class="mini_nadpis"><strong>Rozdílné ceny:</strong> <?php if ($_smarty_tpl->tpl_vars['turns']->value==1){?><span class="zmencenovac" rel="<?php echo $_smarty_tpl->tpl_vars['logitem']->value['id_al'];?>
">Upravit ceny</span><?php }?></p>
				<table  style="width:100%;">
					<tr>
						<th style="width:40%">Produkt</th>
						<th style="width:20%;text-align:center;">Feed</th>
						<th style="width:20%;text-align:center;">E-shop</th>
						<th style="width:20%;text-align:center;">Rozdíl</th>
					</tr>
				<?php  $_smarty_tpl->tpl_vars['ceny'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ceny']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logitem']->value['log'][3]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ceny']->key => $_smarty_tpl->tpl_vars['ceny']->value){
$_smarty_tpl->tpl_vars['ceny']->_loop = true;
?>
					<tr>
						<?php $_smarty_tpl->tpl_vars['pruchod_ceny'] = new Smarty_variable(0, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['cena'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cena']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ceny']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cena']->key => $_smarty_tpl->tpl_vars['cena']->value){
$_smarty_tpl->tpl_vars['cena']->_loop = true;
?>
						<td <?php if ($_smarty_tpl->tpl_vars['pruchod_ceny']->value!=0){?>style="text-align:center;"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['pruchod_ceny']->value==0){?><a href="http://www.helveti.cz/admin6105/index.php?controller=AdminProducts&id_product=<?php echo NoxAltroLog::altroZKoduId($_smarty_tpl->tpl_vars['cena']->value);?>
&updateproduct&token=<?php echo $_smarty_tpl->tpl_vars['altrotokenprodukt']->value;?>
" target="_blank"><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['cena']->value;?>

							<?php if ($_smarty_tpl->tpl_vars['pruchod_ceny']->value==0){?></a><?php }?>
						</td> 
						<?php if ($_smarty_tpl->tpl_vars['pruchod_ceny']->value==1){?><?php $_smarty_tpl->tpl_vars['prvnicena'] = new Smarty_variable($_smarty_tpl->tpl_vars['cena']->value, null, 0);?><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['pruchod_ceny']->value==2){?><?php $_smarty_tpl->tpl_vars['druhacena'] = new Smarty_variable($_smarty_tpl->tpl_vars['cena']->value, null, 0);?><?php }?>
						<?php $_smarty_tpl->tpl_vars['pruchod_ceny'] = new Smarty_variable($_smarty_tpl->tpl_vars['pruchod_ceny']->value+1, null, 0);?>
					<?php } ?>
					<td style="text-align:center;<?php if ($_smarty_tpl->tpl_vars['druhacena']->value-$_smarty_tpl->tpl_vars['prvnicena']->value<0){?>color:red;<?php }elseif($_smarty_tpl->tpl_vars['druhacena']->value-$_smarty_tpl->tpl_vars['prvnicena']->value>0){?>color:green<?php }?>"><?php echo round(($_smarty_tpl->tpl_vars['druhacena']->value-$_smarty_tpl->tpl_vars['prvnicena']->value),2);?>
</td> 
					</tr>
				<?php } ?>
				</table>
			<?php }?>
			</td>
			<td class="bunka" style="padding-left:10px;">
			<?php if (count($_smarty_tpl->tpl_vars['logitem']->value['log'][0])>0){?>
				<p  class="mini_nadpis"><strong>Deaktivované:</strong></p>
				<?php  $_smarty_tpl->tpl_vars['deaktivovane'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['deaktivovane']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logitem']->value['log'][0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['deaktivovane']->key => $_smarty_tpl->tpl_vars['deaktivovane']->value){
$_smarty_tpl->tpl_vars['deaktivovane']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['deaktivovane']->value;?>
<br/>
				<?php } ?>
			<?php }?>
			</td>
			<td class="bunka">
			<?php if (count($_smarty_tpl->tpl_vars['logitem']->value['log'][1])>0){?>
				<p  class="mini_nadpis"><strong>Aktivované:</strong></p>
				<?php  $_smarty_tpl->tpl_vars['aktivovane'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aktivovane']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logitem']->value['log'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aktivovane']->key => $_smarty_tpl->tpl_vars['aktivovane']->value){
$_smarty_tpl->tpl_vars['aktivovane']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['aktivovane']->value;?>
<br/>
				<?php } ?>
			<?php }?>
			</td>
			<td class="bunka">
			<?php if (count($_smarty_tpl->tpl_vars['logitem']->value['log'][2])>0){?>
				<p  class="mini_nadpis"><strong>Přidané:</strong></p>
				<?php  $_smarty_tpl->tpl_vars['pridane'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pridane']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logitem']->value['log'][2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pridane']->key => $_smarty_tpl->tpl_vars['pridane']->value){
$_smarty_tpl->tpl_vars['pridane']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['pridane']->value;?>
<br/>
				<?php } ?>
			<?php }?>
			</td>
		</tr>
	</table>
	</div>
	</div>
	<?php $_smarty_tpl->tpl_vars['turns'] = new Smarty_variable($_smarty_tpl->tpl_vars['turns']->value+1, null, 0);?> 
	<?php } ?>
</div>

<div class="clear"></div><br/><br/>
<div style="text-align:center">Created 2014 by Karel Nox</div><?php }} ?>