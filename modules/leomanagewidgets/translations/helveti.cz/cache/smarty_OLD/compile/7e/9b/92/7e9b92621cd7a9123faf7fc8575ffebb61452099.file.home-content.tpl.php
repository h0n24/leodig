<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:34:27
         compiled from "/srv/www/helveti/modules/noxhome/views/templates/hook/home-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10463565654610533758af9-41432474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e9b92621cd7a9123faf7fc8575ffebb61452099' => 
    array (
      0 => '/srv/www/helveti/modules/noxhome/views/templates/hook/home-content.tpl',
      1 => 1415285559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10463565654610533758af9-41432474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ulozenky' => 0,
    'pocet_skladem' => 0,
    'pocet_spokojenych' => 0,
    'pocet_slev' => 0,
    'link' => 0,
    'pocet_znacek' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546105337936b1_02992779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546105337936b1_02992779')) {function content_546105337936b1_02992779($_smarty_tpl) {?><div id="ikony_homepage" class="block_content col-xs-12">
<div class="media-list">
	<div class="col-lg-3 col-md-3 hidden-sm hidden-xs ikona-hp-kraj ikona-hp ikona-hp-1">
		<div class="media red"><a title="" href="http://www.helveti.cz/pojisteni-hodinek" class="ikona-hp-odkaz"></a>
			<a class="pull-left" title="" href="http://www.helveti.cz/pojisteni-hodinek"><img class="media-object" src="themes/leodig/img/helveti/home-karta-pojisteni.png" alt="" /> </a>
			<div class="media-body">
				<h4 class="media-heading"><a title="" href="http://www.helveti.cz/pojisteni-hodinek">Pojištění<br>hodinek</a></h4>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 hidden-sm hidden-xs ikona-hp-stredlevo ikona-hp ikona-hp-2">
		<div class="media green"><a title="" href="http://www.helveti.cz/doprava" class="ikona-hp-odkaz"></a>
			<a class="pull-left" title="" href="http://www.helveti.cz/doprava"><img class="media-object" src="modules/leomanagewidgets/data/icon-free.png" alt="" /> </a>
			<div class="media-body">
				<h4 class="media-heading"><a title="" href="http://www.helveti.cz/doprava">Doprava<br/>zdarma</a></h4>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 hidden-sm hidden-xs ikona-hp-stredpravo ikona-hp ikona-hp-3">
		<div class="media blue"><a title="" href="http://www.helveti.cz/zaruka-3-roky" class="ikona-hp-odkaz"></a>
			<a class="pull-left" title="" href="http://www.helveti.cz/zaruka-3-roky"><img class="media-object" src="themes/leodig/img/helveti/home-karta-zaruka.png" alt="" /> </a>
			<div class="media-body">
				<h4 class="media-heading"><a title="" href="http://www.helveti.cz/zaruka-3-roky">3-letá<br>záruka</a></h4> 
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 hidden-sm hidden-xs ikona-hp-kraj ikona-hp ikona-hp-4">
		<div class="media dark"><a title="" href="http://www.helveti.cz/vydejni-mista" class="ikona-hp-odkaz"></a>
			<a class="pull-left" title="" href="http://www.helveti.cz/vydejni-mista"><img class="media-object" src="themes/leodig/img/helveti/home-3-karta.png" alt="" /> </a>
			<div class="media-body">
				<h4 class="media-heading"><a title="" href="http://www.helveti.cz/vydejni-mista">Kamenná<br/>prodejna</a></h4>
				<p class="ikona-hp-vydejny">
					+ <?php echo $_smarty_tpl->tpl_vars['ulozenky']->value;?>
 výdejen
				</p>
			</div>
		</div>
	</div>
</div>
</div>
<div id="lista_homepage" class="block_content col-xs-12">
	<div class="lista-homepage-in">
	<a href="http://www.helveti.cz/s/1/hodinky-skladem"><div class="bunka_v_liste bunka_v_liste-1"><span class="cislo_v_bunce"><?php echo $_smarty_tpl->tpl_vars['pocet_skladem']->value;?>
</span><br><span class="txt_v_bunce">Hodinek skladem</span></div></a>
	<a href="http://www.helveti.cz/zakaznicke-recenze"><div class="bunka_v_liste bunka_v_liste-2"><span class="cislo_v_bunce"><?php echo $_smarty_tpl->tpl_vars['pocet_spokojenych']->value;?>
 %</span><br><span class="txt_v_bunce">Spokojených zákazníků</span></div></a>
	<a href="http://www.helveti.cz/vydejni-mista"><div class="bunka_v_liste bunka_v_liste-3"><span class="cislo_v_bunce"><?php echo $_smarty_tpl->tpl_vars['ulozenky']->value;?>
</span><br><span class="txt_v_bunce">Výdejních míst</span></div></a>
	<a href="http://www.helveti.cz/s/3/hodinky-akce"><div class="bunka_v_liste bunka_v_liste-4"><span class="cislo_v_bunce"><?php echo $_smarty_tpl->tpl_vars['pocet_slev']->value;?>
</span><br><span class="txt_v_bunce">Hodinek v akci</span></div></a>
	<div class="heureka_v_liste"></div>
	<div class="text_v_liste">Úzce se <strong>specializujeme</strong> na <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('13');?>
"><u><?php echo $_smarty_tpl->tpl_vars['pocet_znacek']->value;?>
 značek</u></a>, díky čemuž dokážeme poskytnout ten nejlepší servis a informace.</div>
	
</div>
</div><?php }} ?>