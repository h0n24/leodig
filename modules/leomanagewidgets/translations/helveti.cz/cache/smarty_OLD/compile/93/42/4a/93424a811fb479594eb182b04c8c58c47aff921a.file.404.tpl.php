<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:43:02
         compiled from "/srv/www/helveti/themes/leodig/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21099455215461073640f8d1-86334168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93424a811fb479594eb182b04c8c58c47aff921a' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/404.tpl',
      1 => 1412721990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21099455215461073640f8d1-86334168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5461073646b9a3_29235255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5461073646b9a3_29235255')) {function content_5461073646b9a3_29235255($_smarty_tpl) {?>
<div class="pagenotfound">
	<div class="noexist-levo">
	<h1><?php echo smartyTranslate(array('s'=>'Kolečko se porouchalo - chyba 404'),$_smarty_tpl);?>
</h1>

	<p class="info-txt">
		<?php echo smartyTranslate(array('s'=>'Moc se Vám omlouváme, ale tuto stránku na našich stránkách nejspíše nemáme. Pokud nám chybu '),$_smarty_tpl);?>
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('25');?>
"><?php echo smartyTranslate(array('s'=>'nahlásíte'),$_smarty_tpl);?>
</a><?php echo smartyTranslate(array('s'=>', tak nám tím velmi pomůžete.'),$_smarty_tpl);?>

	</p>
	<img src="http://www.helveti.cz/themes/leodig/img/helveti/404.png" alt="Chyba 404, stránka nenalezena">
	<div class="noexist-hledani">
	<p class="hledej-txt"><?php echo smartyTranslate(array('s'=>'Hledat v katalogu'),$_smarty_tpl);?>
</p>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std">
		<fieldset>
		
			<div class="input-group">
				<input id="search_query" class="form-control" name="search_query" type="text" />
				<span class="input-group-btn">                
					<input type="submit" name="Submit" value="Hledat" class="btn btn-search" />        
				</span>
			</div>

		</fieldset>
	</form>
	</div>
	<h3 class="nadrozcestnik">Kam dál</h3>
	<span class="noexist-kd noexist-kd-home"><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
"><em class="ico"></em> Úvodní stránka</a></span>
	<span class="noexist-kd noexist-kd-katalog"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink('2');?>
"><em class="ico"></em> Katalog hodinek</a></span>
	<span class="noexist-kd noexist-kd-kontakt"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('8');?>
"><em class="ico"></em> Kontakt</a></span>
	</div>

	<div class="noexist-pravo">
		<div class="noexist-rozcestnik"><fieldset><legend>Potřebujete poradit?</legend>
		<div class="noexist-tel">
		<h2>+420 774 744 763</h2>
		<h3>+420 777 056 319</h3>
		</div>
		<div class="noexist-mail">
		<h2>info@helveti.cz</h2>
		</div>
		<div class="clearfix">&nbsp;</div>
		</fieldset></div>
		<div class="noexist-rozcestnik noexist-rozcestnik-druhy"><fieldset><legend>Co je chyba 404</legend> Chyba 404 znamená, že požadovaná stránka (URL adresa) zadaná v prohlížeči neexistuje / není nalezena. Příčinou bývá buď překlep v zápisu URL, nebo neexistence (zánik) stránky.
		<div class="clearfix">&nbsp;</div>
		</fieldset></div>
	</div>
<div class="clearfix"></div>
</div><?php }} ?>