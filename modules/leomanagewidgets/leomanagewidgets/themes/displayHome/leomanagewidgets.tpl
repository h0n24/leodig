
<div id="homecontent-{$hook}">
	{foreach from=$leomanagewidgets_datas item=datas}
		{if $datas.task == 'custom'}
		<div class="block no-blockshadown">
			<div class="leo-{$datas.task} clearfix">
				{if $datas.configs.display_title}<h3>{$datas.title}</h3>{/if}
				{$datas.contents}
			</div>
		</div>
		{elseif $datas.task == 'carousel'}
		<div class="block no-blockshadown">
			<div class="leo-{$datas.task} clearfix">
				{foreach from=$datas.contents item=content}
					<div id="blockleohighlightcarousel-{$content.id}" class="products_block exclusive blockleohighlightcarousel">
					<div class="block_content ">	
						<div class="highlight-carousel block">
							<div class="highlight-image">
								{if $datas.configs.display_title}
									<h3 class="title_block">{$datas.title}</h3>
								{/if}
							</div>
							<div class="clearfix">
								{if !empty($content.products )}
									{$mproducts=$content.products}{$tabname = $content.id}
									{include file="{$carousel_product_tpl}"}
								{/if}
							</div>
						</div>
					</div>
					{if $datas.description}<div class="highlight-info">{$datas.description}</div>{/if}
					</div>
				{/foreach}
			</div>
		</div>
		{elseif $datas.task == 'tab'}
			<div class="leo-{$datas.task} products_block exclusive blockleoproducttabs clearfix">
				{if $datas.configs.display_title}
					<h3>{$datas.title}</h3>
				{/if}
				<div class="block_content block">	
					<ul id="productTabs-{$datas.id_leomanagewidgets}" class="nav nav-tabs">
					{foreach from=$datas.contents item=content}
						{if $content.products}
							<li><a href="#leotab-{$datas.id_leomanagewidgets}-{$content.id}" data-toggle="tab">{if $content.image}<img class="hidden-sm hidden-xs pull-left" src="{$content.image}" alt=""/>{/if}{$content.title}</a></li>
						{/if}
					{/foreach}
					</ul>
				</div>
				<div id="productTabsContent-{$datas.id_leomanagewidgets}" class="tab-content block">
					{foreach from=$datas.contents item=content}
						{if $content.products}
							<div class="tab-pane" id="leotab-{$datas.id_leomanagewidgets}-{$content.id}">
								{$mproducts=$content.products}{$tabname = $content.id}
								{include file="{$tab_product_tpl}"}
							</div>
						{/if}
					{/foreach}
				</div>
			</div>
		{/if}
	{/foreach}
</div>
<script>
$(document).ready(function() {
    $('.carousel').each(function(){
        $(this).carousel({
            pause: true,
            interval: false
        });
    });
	$(".blockleoproducttabs").each( function(){
		$(".nav-tabs li", this).first().addClass("active");
		$(".tab-content .tab-pane", this).first().addClass("active");
	} );
});
</script>