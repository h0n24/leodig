{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

		{if !$content_only}
		{include file="$tpl_dir./layout/{$LEO_LAYOUT_DIRECTION}/footer.tpl"  }
		{if $page_name!="category" && substr($page_name, 0, 18) != 'advancedsearch-seo'}

		</div></div></section>

		{/if}




<!-- Footer -->
			{if $HOOK_BOTTOM}
			<section id="bottom">
				<div class="container">
					<div class="row">
						 {$HOOK_BOTTOM}
					</div>
				</div>
			</section>
			{/if}
			<!-- napevno footer -->
			<section id="nad-patickou">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							{hook h='nadPatickou'}
						</div>
					</div>
				</div>
			</section>
			<section id="vyhody-hp">
				<div class="container">
					<div class="row">
						{if !(isset($inOrderProcess)|| isset($current_step)||$page_name == 'order' )}
						 <div id="vyhody-hp-vypis" class="col-md-12 ">
						<div class="block-vyhoda">
								<p class="hidden-xs"><a title="" href="{$link->getCMSLink('9')}"><img class="img-responsive br-ra-5" src="{$img_dir}helveti/banner/{1|rand:14}.png" alt=""></a></p>
						</div>
						</div>
						{/if}
					</div>
				</div>
			</section>
			<footer id="footer" class="clearfix">
				<section id="footer-top" class="footer">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								{$HOOK_FOOTER}
							</div>
						</div>
					</div>
				</section>	
				<section id="footer-bottom">
					<div class="container">
						<div class="container-inner">
							<div class="row">
								<div class="col-sm-{if $HOOK_FOOTNAV}6{else}12{/if}">
									<div class="copyright">
											© 2015 Helveti.cz - našim <a href="/znacky-hodinek">hodinkám</a> rozumíme.
																				</div>
								</div>
								{if $HOOK_FOOTNAV}
								<div class="col-sm-6 hidden-xs"><div class="footnav">{$HOOK_FOOTNAV}</div></div>		
								{/if}
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
	{/if}
	{if $LEO_PANELTOOL}
    	{include file="$tpl_dir./info/paneltool.tpl"}
    {/if}
		<script type="text/javascript">
			var classBody = "{$LEO_PATTERN}";
			$("body").addClass( classBody.replace(/\.\w+$/,"")  );
		</script>
	
	<!-- Kód Google značky pro remarketing -->
		<!--------------------------------------------------
		Značka pro remarketing nesmí být spojena s údaji umožňujícími identifikaci osob nebo umístěna na stránkách týkajících se citlivých kategorií. Další informace a postup nastavení značky naleznete na stránce: http://google.com/ads/remarketingsetup
		--------------------------------------------------->
		{literal}
		<script type="text/javascript">
        var google_tag_params = {
            ecomm_prodid: '{/literal}{if isset($page_name)}{if $page_name=="product"}{$product->id}{/if}{/if}{literal}',
            ecomm_pagetype: '{/literal}{if isset($page_name)}{if $page_name=="index"}home{elseif $page_name=="product"}product{elseif $page_name=="order"}cart{else}other{/if}{else}other{/if}{literal}',
            ecomm_totalvalue: '{/literal}{if isset($page_name)}{if $page_name=="product"}{$product->getPrice(true, $smarty.const.NULL, $priceDisplayPrecision)}{/if}{/if}{literal}',
        };
        </script>
        {/literal}
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
