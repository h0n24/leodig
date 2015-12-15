<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:52:54
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1610284839566718f6ddae34-34290090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a8f1899918abb135fb408272052af22d63d79da' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/footer.tpl',
      1 => 1449393402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1610284839566718f6ddae34-34290090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'LEO_LAYOUT_DIRECTION' => 0,
    'page_name' => 0,
    'HOOK_BOTTOM' => 0,
    'inOrderProcess' => 0,
    'current_step' => 0,
    'link' => 0,
    'img_dir' => 0,
    'HOOK_FOOTER' => 0,
    'HOOK_FOOTNAV' => 0,
    'LEO_PANELTOOL' => 0,
    'LEO_PATTERN' => 0,
    'product' => 0,
    'priceDisplayPrecision' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718f6ef62d4_91805802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718f6ef62d4_91805802')) {function content_566718f6ef62d4_91805802($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/".((string)$_smarty_tpl->tpl_vars['LEO_LAYOUT_DIRECTION']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php if ($_smarty_tpl->tpl_vars['page_name']->value!="category"&&substr($_smarty_tpl->tpl_vars['page_name']->value,0,18)!='advancedsearch-seo'){?>

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
						<?php if (!(isset($_smarty_tpl->tpl_vars['inOrderProcess']->value)||isset($_smarty_tpl->tpl_vars['current_step']->value)||$_smarty_tpl->tpl_vars['page_name']->value=='order')){?>
						 <div id="vyhody-hp-vypis" class="col-md-12 ">
						<div class="block-vyhoda">
								<p class="hidden-xs"><a title="" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('9');?>
"><img class="img-responsive" style="border-radius: 5px;" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
helveti/banner/<?php echo rand(1,14);?>
.png" alt=""></a></p>
						</div>
						</div>
						<?php }?>
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
											© 2015 Helveti.cz - našim <a href="/znacky-hodinek">hodinkám</a> rozumíme.
																				</div>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value){?>
								<div class="col-sm-6 hidden-xs"><div class="footnav"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value;?>
</div></div>		
								<?php }?>
							</div>
						</div>

						<div class="footer-pod-odkazy">
							<span class="hidden-md hidden-lg" id="spanDesktopVersion"> <strong><a href="#" id="desktopVersion">přepnout na desktop verzi</a></strong><br/> </span>
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
	
	<!-- Kód Google značky pro remarketing -->
		<!--------------------------------------------------
		Značka pro remarketing nesmí být spojena s údaji umožňujícími identifikaci osob nebo umístěna na stránkách týkajících se citlivých kategorií. Další informace a postup nastavení značky naleznete na stránce: http://google.com/ads/remarketingsetup
		--------------------------------------------------->
		
		<script type="text/javascript">
        var google_tag_params = {
            ecomm_prodid: '<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=="product"){?><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
<?php }?><?php }?>',
            ecomm_pagetype: '<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=="index"){?>home<?php }elseif($_smarty_tpl->tpl_vars['page_name']->value=="product"){?>product<?php }elseif($_smarty_tpl->tpl_vars['page_name']->value=="order"){?>cart<?php }else{ ?>other<?php }?><?php }else{ ?>other<?php }?>',
            ecomm_totalvalue: '<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=="product"){?><?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice(true,@constant('NULL'),$_smarty_tpl->tpl_vars['priceDisplayPrecision']->value);?>
<?php }?><?php }?>',
        };
        </script>
        
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 991679542;
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/991679542/?value=0&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>
 <script>
	var switchToDesktop = false;

   $(document).ready(function(){
	switchToDesktop = $.cookie("switchToDesktop");

	if (switchToDesktop) {
		funcSwitchToDesktop();
	}

        $('#desktopVersion').on('click',function(){
    	    if (switchToDesktop) {
    		$.removeCookie('switchToDesktop');
    		location.reload(true);
    	    } else {
		funcSwitchToDesktop();
            }
        });

	
      });
	function funcSwitchToDesktop() {
		$('head').find('meta').each(function(index, element) {
			if(this.name == "viewport")
                        {
                            $(this).removeAttr('content');
                            $(this).attr('content','initial-scale=0');
			    $.cookie("switchToDesktop", 1);
			    switchToDesktop = 1;
                        }
                });
		$('#desktopVersion').text("Přepnout na mobilní verzi");
                $('#spanDesktopVersion').removeAttr("class");
	}
    </script>

	</body>
</html>
<?php }} ?>