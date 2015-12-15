<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:35:10
         compiled from "/srv/www/helveti/themes/leodig/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17235667195461055e090b24-94552138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c6e1e8d60c3ed5cbb4dac21786bd60d85c2cd73' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/footer.tpl',
      1 => 1415643858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17235667195461055e090b24-94552138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'LEO_LAYOUT_DIRECTION' => 0,
    'page_name' => 0,
    'HOOK_BOTTOM' => 0,
    'link' => 0,
    'img_dir' => 0,
    'HOOK_FOOTER' => 0,
    'HOOK_FOOTNAV' => 0,
    'LEO_COPYRIGHT' => 0,
    'LEO_PANELTOOL' => 0,
    'LEO_PATTERN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5461055e7e4141_47423997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5461055e7e4141_47423997')) {function content_5461055e7e4141_47423997($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/".((string)$_smarty_tpl->tpl_vars['LEO_LAYOUT_DIRECTION']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
		<?php if ($_smarty_tpl->tpl_vars['page_name']->value!="category"){?>

		</div></div></section>

		<?php }?>




<!-- Footer -->
			<?php if ($_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value){?>
			<section id="bottom">
				<div class="container">
					<div class="row">
						 <?php echo $_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value;?>

					</div>
				</div>
			</section>
			<?php }?>
			<!-- napevno footer -->
			<section id="nad-patickou">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'nadPatickou'),$_smarty_tpl);?>

						</div>
					</div>
				</div>
			</section>
			<section id="vyhody-hp">
				<div class="container">
					<div class="row">
						 <div id="vyhody-hp-vypis" class="col-md-12 ">
						<div class="block-vyhoda">
								<p class="hidden-xs"><a title="" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('9');?>
"><img class="img-responsive" style="border-radius: 5px;" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
helveti/banner/<?php echo rand(1,14);?>
<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='order'){?>g<?php }?>.png" alt=""></a></p>
						</div>
						</div>
					</div>
				</div>
			</section>
			<footer id="footer" class="clearfix">
				<section id="footer-top" class="footer">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

							</div>
						</div>
					</div>
				</section>	
				<section id="footer-bottom">
					<div class="container">
						<div class="container-inner">
							<div class="row">
								<div class="col-sm-<?php if ($_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value){?>6<?php }else{ ?>12<?php }?>">
									<div class="copyright">
											<?php echo $_smarty_tpl->tpl_vars['LEO_COPYRIGHT']->value;?>
. 
											Vytvořilo <a href="http://www.c3studio.cz" title="C3studio.cz" target="_blank">C3studio.cz</a>
									</div>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value){?>
								<div class="col-sm-6 hidden-xs"><div class="footnav"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value;?>
</div></div>		
								<?php }?>
							</div>
						</div>

						<div class="footer-pod-odkazy">
							Naše specializované eshopy: <a href="http://www.hodinkywenger.cz/" target="_blank">HodinkyWenger.cz</a>, <a href="http://www.hodinkytraser.cz/" target="_blank">HodinkyTraser.cz</a>, <a href="http://www.hodinkyboccia.cz/" target="_blank">HodinkyBoccia.cz</a> a <a href="http://www.hodinkyalfex.cz/" target="_blank">HodinkyAlfex.cz</a>
						</div>
					</div>	
				</section>
				
			</footer>
		</section>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value){?>
    	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
		<script type="text/javascript">
			var classBody = "<?php echo $_smarty_tpl->tpl_vars['LEO_PATTERN']->value;?>
";
			$("body").addClass( classBody.replace(/\.\w+$/,"")  );
		</script>
	

	</body>
</html>
<?php }} ?>