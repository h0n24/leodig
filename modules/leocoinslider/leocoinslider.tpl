<div class="col-md-9">
	<div class="leo-coinslider-basic{$leocoinslider.modclass} block" style="width: 100%">
		<div class="leo-wrapper">
			<!-- MAIN CONTENT -->
			<div id="leo-coinslider" class="nivoSlider clearfix" style="height:{$leocoinslider.imgheight}px;width:{$leocoinslider.imgwidth}px;position:relative">                                       
				{foreach from=$leocoinslider_slides item=row}                
					<a href="{$row.url}" target="{$leocoinslider.target}" style="height:{$leocoinslider.imgheight}px;width:{$leocoinslider.imgwidth}px;display:block">             
						<img src="{$row.mainimage}" title="#leo-container-{$row.id_slide}"/>                    
					</a>            
				{/foreach}
				
			</div>
			{foreach from=$leocoinslider_slides item=row}
				<div id="leo-container-{$row.id_slide}" style="display: none;">
					{if $leocoinslider.show_title }
						<p class="leo-title">
							<a target="{$leocoinslider.target}" href="{$row.url}" rel="{$row.url}" title="{$row.title}"><b>{$row.title}</b></a>
						</p>
					{/if}
					{if $leocoinslider.show_desc}
						<p class="leo-info">
							{$row.description}  
						</p>
					{/if}
					<!-- <a class="leo-readmore" href="{$row.url}">{l s='Read more' mod='lofcoinslide'}</a> -->
				</div>
			{/foreach}    
		</div>
	</div>
</div>
{$leocoin_initJS}