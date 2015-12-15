
<div id="homecontent-{$hook}" class="col-md-12 ">
	{foreach from=$leomanagewidgets_datas item=datas}
		{if $datas.task == 'custom'}
			<div class="leo-{$datas.task} block">
				{if $datas.configs.display_title}<h3>{$datas.title}</h3>{/if}
				{$datas.contents}
			</div>
		{elseif $datas.task == 'carousel'}
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
		{elseif $datas.task == 'tab'}
			<div class="leo-{$datas.task} block products_block exclusive blockleoproducttabs clearfix">
				{if $datas.configs.display_title}
					<h3>{$datas.title}</h3>
				{/if}
				<div class="block_content">	
					<ul id="productTabs-{$datas.id_leomanagewidgets}" class="nav na