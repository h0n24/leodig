<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:52:56
         compiled from "/srv/www/helveti/helveti.cz/modules/noxhtmlblock/views/templates/hook/leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:772461189566718f8368851-95877077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ba3ce6b2f6c4179dd1fedddee463c3b354c60e1' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/noxhtmlblock/views/templates/hook/leftcolumn.tpl',
      1 => 1426020942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '772461189566718f8368851-95877077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recenze' => 0,
    'klad' => 0,
    'zapor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718f83b5175_71881483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718f83b5175_71881483')) {function content_566718f83b5175_71881483($_smarty_tpl) {?>	<div id="blok_staticke_info">
<div id="nakupovat">
			<div class="nakupovat_obsah">
				<a href="http://www.helveti.cz/doprava"><span class="ikonka ikonka_doprava">Doprava zdarma</span></a><br/>
				<a href="http://www.helveti.cz/pojisteni-hodinek"><span class="ikonka ikonka_pojisteni">Pojištění hodinek</span></a><br/>
				<a href="http://www.helveti.cz/zaruka-3-roky"><span class="ikonka ikonka_zaruka">Záruka 3 roky</span></a><br/>
				<a href="http://www.helveti.cz/zitra-u-vas"><span class="ikonka ikonka_zitra">Zítra u Vás</span></a><br/>
				<a href="http://www.helveti.cz/kontakt"><span class="ikonka ikonka_prodejna">Kamenná prodejna</span></a><br/>
				<a href="http://www.helveti.cz/specialiste"><span class="ikonka ikonka_specialiste">Specialisté</span></a><br/>
				<a href="http://www.helveti.cz/podporujeme"><span class="ikonka ikonka_pomahame">Pomáháme</span></a><br/>
				<a href="http://www.helveti.cz/zakaznicke-recenze"><span class="ikonka ikonka_sz"><strong><?php echo NoxHome::pocetSpokojenych();?>
%</strong> spokojených zákazníků</span></a><br/>
				<a href="http://www.helveti.cz/s/1/hodinky-skladem"><span class="ikonka ikonka_skladem"><strong><?php echo NoxHome::pocetProduktuSkladem();?>
</strong> hodinek skladem</span></a><br/>
				<a href="http://www.helveti.cz/vydejni-mista"><span class="ikonka ikonka_vydejen"><strong><?php echo NoxHome::pocetVydejen();?>
</strong> výdejních míst</span></a><br/>
				<a href="http://www.helveti.cz/s/3/hodinky-akce"><span class="ikonka ikonka_akce"><strong><?php echo NoxHome::pocetSlev();?>
</strong> hodinek v akci</span></a><br/>
			</div>
		</div>
		<div id="heureka_last2">
			<h3>Zákaznící nás mají rádi:</h3>
			<?php  $_smarty_tpl->tpl_vars['recenze'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recenze']->_loop = false;
 $_from = Store::heurekaHodnoceni(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recenze']->key => $_smarty_tpl->tpl_vars['recenze']->value){
$_smarty_tpl->tpl_vars['recenze']->_loop = true;
?>
				<div class="heureka_hodnoceni">
					<div class="heureka_jmeno"><?php echo $_smarty_tpl->tpl_vars['recenze']->value['jmeno'];?>
</div>
					<div class="heureka_hvezdy"><?php echo $_smarty_tpl->tpl_vars['recenze']->value['procenta'];?>
% <span class="heureka_star heureka_star<?php echo $_smarty_tpl->tpl_vars['recenze']->value['hvezdy'];?>
"></span></div>
					<div class="heureka_datum"><?php echo $_smarty_tpl->tpl_vars['recenze']->value['datum'];?>
</div>
					<div class="heureka_klady">
						<?php  $_smarty_tpl->tpl_vars['klad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['klad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recenze']->value['klady']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['klad']->key => $_smarty_tpl->tpl_vars['klad']->value){
$_smarty_tpl->tpl_vars['klad']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['klad']->value){?>
								<span class="plus"><?php echo $_smarty_tpl->tpl_vars['klad']->value;?>
</span><br/>
							<?php }?>
						<?php } ?>
					</div>
					<div class="heureka_zapory">
						<?php  $_smarty_tpl->tpl_vars['zapor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zapor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recenze']->value['zapory']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zapor']->key => $_smarty_tpl->tpl_vars['zapor']->value){
$_smarty_tpl->tpl_vars['zapor']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['zapor']->value){?>
								<span class="minus"><?php echo $_smarty_tpl->tpl_vars['zapor']->value;?>
</span><br/>
							<?php }?>
						<?php } ?>
					</div>
					<div class="heureka_text"><?php echo $_smarty_tpl->tpl_vars['recenze']->value['text'];?>
</div>
				</div>
			<?php } ?>
		</div>
		<div id="heureka_badge_left">
			<div id="showHeurekaBadgeHere-12"></div><script type="text/javascript">
//<![CDATA[
var _hwq = _hwq || [];
    _hwq.push(['setKey', 'ABF4193AD90DA96C26E88D8E3E39A19A']);_hwq.push(['showWidget', '12', '44357', 'Helveti.cz', 'helveti-cz']);(function() {
    var ho = document.createElement('script'); ho.type = 'text/javascript'; ho.async = true;
    ho.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.heureka.cz/direct/i/gjs.php?n=wdgt&sak=ABF4193AD90DA96C26E88D8E3E39A19A';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ho, s);
})();
//]]>
</script>
		</div>
	</div><?php }} ?>