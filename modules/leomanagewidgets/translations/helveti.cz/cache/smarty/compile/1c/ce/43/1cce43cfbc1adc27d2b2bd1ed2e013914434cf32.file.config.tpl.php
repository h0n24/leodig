<?php /* Smarty version Smarty-3.1.14, created on 2015-12-09 12:02:49
         compiled from "/srv/www/helveti/helveti.cz/modules/noxdodavatelesklad/views/templates/admin/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80016637856680a5985c110-30428918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cce43cfbc1adc27d2b2bd1ed2e013914434cf32' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/noxdodavatelesklad/views/templates/admin/config.tpl',
      1 => 1445880995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80016637856680a5985c110-30428918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logtime' => 0,
    'neexistujici' => 0,
    'n' => 0,
    'neUdodavatele' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56680a5995e503_08360274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56680a5995e503_08360274')) {function content_56680a5995e503_08360274($_smarty_tpl) {?>
<script type="text/javascript" src="../modules/noxdodavatelesklad/js/nds-admin.js"></script>
<style>
h3{
		text-align:center;
		font-size:24px;
		color:#888;
		margin:20px 0;
		padding-bottom:8px;
		border-bottom:2px solid #444;
	}
.nazev,textarea{
	width:100%;
	padding:3px 8px !important;
}

	.tlacitko{
		background:#444;
		color:white;
		padding:6px 8px;
		width:200px;
		text-align:center;
		cursor:pointer;
		
		border:0;
		float:right;
	}
	.tlacitko:hover{
		background:#111;
	}
	.ok{
		color:green;
		font-size:28px;
		display:none;
	}
	.loading,.aj-error{
		color:red;
		font-weight:bold;
		display:none;
	}
	.complete{
		width:80px;
	}
	.datum{
		text-align:center;
		width:130px;
	}
	.vypis-produktu td{
	    vertical-align:top;
	}
</style>

<div style="width:90%;margin:10px auto;background:#eee;border:1px solid #888;padding:20px;">
	<h3>Import skladových zásob</h3>
	<p style="text-align:center">Nahrajte XLS soubor od dodavatele</p>
	<table style="width:750px;margin:0 auto;">
		<form id="wenger">
		<tr >
			<td><strong>Wenger:</strong></td>
			<td class="datum"><span class="wenger-datum"><?php echo $_smarty_tpl->tpl_vars['logtime']->value['wenger'];?>
</span></td>
			<td><input type="file" name="xlsfile" class="xlsfile"/><input type="hidden" name="zdroj" value="wenger"></td>
			<td><div class="tlacitko" rel="wenger">nahrát WENGER</div></td>
			<td style='padding:0 8px'><div class="wenger-complete complete"><span class="loading">Načítam...</span><span class="ok">&#10004;</span><span class="aj-error">&#10008; Error!</span></div></td>
		</tr>
		</form>
		<form id="traser">
		<tr >
			<td><strong>Traser:</strong></td>
			<td class="datum"><span class="traser-datum"><?php echo $_smarty_tpl->tpl_vars['logtime']->value['traser'];?>
</span></td>
			<td><input type="file" name="xlsfile" class="xlsfile"/><input type="hidden" name="zdroj" value="traser"></td>
			<td><div class="tlacitko" rel="traser">nahrát TRASER</div></td>
			<td style='padding:0 8px'><div class="traser-complete complete"><span class="loading">Načítam...</span><span class="ok">&#10004;</span><span class="aj-error">&#10008; Error!</span></div></td>
		</tr>
		</form>
		
		<form id="boccia">
		<tr >
			<td><strong>Boccia:</strong></td>
			<td class="datum"><span class="boccia-datum"><?php echo $_smarty_tpl->tpl_vars['logtime']->value['boccia'];?>
</span></td>
			<td><input type="file" name="xlsfile" class="xlsfile"/><input type="hidden" name="zdroj" value="boccia"></td>
			<td><div class="tlacitko" rel="boccia">nahrát BOCCIA</div></td>
			<td style='padding:0 8px'><div class="boccia-complete complete"><span class="loading">Načítam...</span><span class="ok">&#10004;</span><span class="aj-error">&#10008; Error!</span></div></td>
		</tr>
		</form>
		
		
				<form id="alfex">
		<tr >
			<td><strong>Alfex:</strong></td>
			<td class="datum"><span class="alfex-datum"><?php echo $_smarty_tpl->tpl_vars['logtime']->value['alfex'];?>
</span></td>
			<td><input type="file" name="xlsfile" class="xlsfile"/><input type="hidden" name="zdroj" value="alfex"></td>
			<td><div class="tlacitko" rel="alfex">nahrát ALFEX</div></td>
			<td style='padding:0 8px'><div class="alfex-complete complete"><span class="loading">Načítam...</span><span class="ok">&#10004;</span><span class="aj-error">&#10008; Error!</span></div></td>
		</tr>
		</form>
		
		<form id="victorinox">
		<tr >
			<td><strong>Victorinox:</strong></td>
			<td class="datum"><span class="victorinox-datum"><?php echo $_smarty_tpl->tpl_vars['logtime']->value['victorinox'];?>
</span></td>
			<td><input type="file" name="xlsfile" class="xlsfile"/><input type="hidden" name="zdroj" value="victorinox"></td>
			<td><div class="tlacitko" rel="victorinox">nahrát VICTORINOX</div></td>
			<td style='padding:0 8px'><div class="victorinox-complete complete"><span class="loading">Načítam...</span><span class="ok">&#10004;</span><span class="aj-error">&#10008; Error!</span></div></td>
		</tr>
		</form>
		
		<form id="bering">
        <tr >
            <td><strong>Bering:</strong></td>
            <td class="datum"><span class="bering-datum"><?php echo $_smarty_tpl->tpl_vars['logtime']->value['bering'];?>
</span></td>
            <td><input type="file" name="xlsfile" class="xlsfile"/><input type="hidden" name="zdroj" value="bering"></td>
            <td><div class="tlacitko" rel="bering">nahrát BERING</div></td>
            <td style='padding:0 8px'><div class="bering-complete complete"><span class="loading">Načítam...</span><span class="ok">&#10004;</span><span class="aj-error">&#10008; Error!</span></div></td>
        </tr>
        </form>
        
        <form id="citizen">
        <tr >
            <td><strong>Citizen:</strong></td>
            <td class="datum"><span class="citizen-datum"><?php echo $_smarty_tpl->tpl_vars['logtime']->value['citizen'];?>
</span></td>
            <td><input type="file" name="xlsfile" class="xlsfile"/><input type="hidden" name="zdroj" value="citizen"></td>
            <td><div class="tlacitko" rel="citizen">nahrát CITIZEN</div></td>
            <td style='padding:0 8px'><div class="citizen-complete complete"><span class="loading">Načítam...</span><span class="ok">&#10004;</span><span class="aj-error">&#10008; Error!</span></div></td>
        </tr>
        </form>
        
        <form id="hanowa">
        <tr >
            <td><strong>Hanowa:</strong></td>
            <td class="datum"><span class="hanowa-datum"><?php echo $_smarty_tpl->tpl_vars['logtime']->value['hanowa'];?>
</span></td>
            <td><input type="file" name="xlsfile" class="xlsfile"/><input type="hidden" name="zdroj" value="hanowa"></td>
            <td><div class="tlacitko" rel="hanowa">nahrát HANOWA</div></td>
            <td style='padding:0 8px'><div class="hanowa-complete complete"><span class="loading">Načítam...</span><span class="ok">&#10004;</span><span class="aj-error">&#10008; Error!</span></div></td>
        </tr>
        </form>
        
        <form id="certina">
        <tr >
            <td><strong>Certina:</strong></td>
            <td class="datum"><span class="certina-datum"><?php echo $_smarty_tpl->tpl_vars['logtime']->value['certina'];?>
</span></td>
            <td><input type="file" name="xlsfile" class="xlsfile"/><input type="hidden" name="zdroj" value="certina"></td>
            <td><div class="tlacitko" rel="certina">nahrát CERTINA</div></td>
            <td style='padding:0 8px'><div class="certina-complete complete"><span class="loading">Načítam...</span><span class="ok">&#10004;</span><span class="aj-error">&#10008; Error!</span></div></td>
        </tr>
        </form>
        <form id="luminox">
        <tr >
            <td><strong>Luminox:</strong></td>
            <td class="datum"><span class="luminox-datum"><?php echo $_smarty_tpl->tpl_vars['logtime']->value['luminox'];?>
</span></td>
            <td><input type="file" name="xlsfile" class="xlsfile"/><input type="hidden" name="zdroj" value="luminox"></td>
            <td><div class="tlacitko" rel="luminox">nahrát LUMINOX</div></td>
            <td style='padding:0 8px'><div class="luminox-complete complete"><span class="loading">Načítam...</span><span class="ok">&#10004;</span><span class="aj-error">&#10008; Error!</span></div></td>
        </tr>
        </form>
        
	</table>
	<h3>V eshopu neexistující produkty</h3>
	<table style="width:85%;margin:0 auto;text-align:center;">
    <tr style="font-weight:bold;font-size:1.25em ;   "><td>Wenger</td><td>Traser</td><td>Boccia</td><td>Alfex</td><td>Victorinox</td><td>Bering </td><td>Citizen</td><td>Hanowa</td><td>Certina</td><td>Lumionox</td></tr>
    <tr class="vypis-produktu">
        <td>
            <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neexistujici']->value['wenger']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
                <?php } ?>
        </td>
        <td>
             <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neexistujici']->value['traser']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
              <?php } ?>
        </td>
        <td>
             <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neexistujici']->value['boccia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
                <?php } ?>
        </td>
        <td> <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neexistujici']->value['alfex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php } ?></td>
        <td> <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neexistujici']->value['victorinox']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php } ?></td>
        <td> <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neexistujici']->value['bering']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php } ?></td>
        <td> <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neexistujici']->value['citizen']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php } ?></td>
        <td> <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neexistujici']->value['hanowa']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php } ?></td>
    <td> <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neexistujici']->value['certina']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php } ?></td>
     <td> <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neexistujici']->value['luminox']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php } ?></td>
    </tr>    	    
    </table>
    
    <h3>V dodavatelských skladech neexistující produkty</h3>
    <table style="width:85%;margin:0 auto;text-align:center;">
    <tr style="font-weight:bold;font-size:1.25em ;   "><td>Wenger</td><td>Traser</td><td>Boccia</td><td>Alfex</td><td>Victorinox</td><td>Bering </td><td>Citizen</td><td>Hanowa</td><td>Certina</td><td>Lumionox</td></tr>
    <tr class="vypis-produktu">
        <td>
            <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neUdodavatele']->value['wenger']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
                <?php } ?>
        </td>
        <td>
             <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neUdodavatele']->value['traser']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
              <?php } ?>
        </td>
        <td>
             <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neUdodavatele']->value['boccia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
                <?php } ?>
        </td>
        <td> <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neUdodavatele']->value['alfex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php } ?></td>
        <td> <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neUdodavatele']->value['victorinox']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php } ?></td>
        <td> <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neUdodavatele']->value['bering']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php } ?></td>
        <td> <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neUdodavatele']->value['citizen']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php } ?></td>
        <td> <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neUdodavatele']->value['hanowa']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php } ?></td>
    <td> <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neUdodavatele']->value['certina']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php } ?></td>
     <td> <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['neUdodavatele']->value['luminox']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php } ?></td>
    </tr>           
    </table>
</div>

<div style="text-align:center">Created 2014 by Karel Nox</div><?php }} ?>