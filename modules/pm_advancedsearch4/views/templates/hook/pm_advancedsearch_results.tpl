<div id="PM_ASearchResults">
<div id="PM_ASearchResultsInner" class="PM_ASearchResultsInner_{$as_searchs.0.id_search}">

{if isset($css_files_result_search)}
	{foreach from=$css_files_result_search key=css_uri item=media}
	<link href="{$css_uri}" rel="stylesheet" type="text/css" media="{$media}" />
	{/foreach}
{/if}
{if isset($js_files_result_search)}
	{foreach from=$js_files_result_search item=js_uri}
	<script type="text/javascript" src="{$js_uri}"></script>
	{/foreach}
{/if}
{if !isset($smarty.request.keep_category_information) || !$smarty.request.keep_category_information}
	{if isset($as_seo_title)}
		{capture name=path}{$as_seo_title|escape:'htmlall':'UTF-8'}{/capture}
	{else}
		{capture name=path}{$as_searchs.0.title|escape:'htmlall':'UTF-8'}{/capture}
	{/if}
	{if version_compare($smarty.const._PS_VERSION_, '1.6.0.0', '<')}
		{include file="$tpl_dir./breadcrumb.tpl"}
	{/if}
{/if}
{include file="$tpl_dir./errors.tpl"}

{if isset($as_searchs[0])}
	{if $as_searchs.0.id_search AND $as_searchs.0.active}

	

		{if isset($as_seo_title)}
			{if version_compare($smarty.const._PS_VERSION_, '1.6.0.0', '>=')}
				<h1 id="PM_ASearchResultsTitle" class="page-heading product-listing">
					<span class="cat-name">{strip}{$as_seo_title|escape:'htmlall':'UTF-8'}{/strip}</span>
					{strip}
					<span class="heading-counter">
					{if $as_searchs.0.total_products == 0}
						{l s='There are no products in  this category'}
					{else}
						{if $as_searchs.0.total_products == 1}
							{l s='There is %d product.' sprintf=$as_searchs.0.total_products}
						{else}
							{l s='There are %d products.' sprintf=$as_searchs.0.total_products}
						{/if}
					{/if}
					</span>
					{/strip}
				</h1>
				<div class="content_sortPagiBar">
				<div class="sortPagiBar row"> 
			{else}
				<h1 id="PM_ASearchResultsTitle">{strip}{$as_seo_title|escape:'htmlall':'UTF-8'}{/strip}</h1>
			{/if}
			{if $as_seo_description}
				<div class="cat_desc">{$as_seo_description}</div>
			{/if}
		{else}

			{if !isset($smarty.request.keep_category_information) || !$smarty.get.keep_category_information}
				{strip}
				<h1 id="PM_ASearchResultsTitle">{$as_searchs.0.title|escape:'htmlall':'UTF-8'}</h1>
				{if $as_searchs.0.description}
					<div class="cat_desc">{$as_searchs.0.description}</div>
				{/if}
				{* <div class="content_sortPagiBar">
				<div class="sortPagiBar row">
				<div class="nb_results">
					<strong>
					{if $as_searchs.0.total_products == 0}{l s='There is no product.' mod='pm_advancedsearch4'}
					{else}
						{if $as_searchs.0.total_products == 1}{l s='There is' mod='pm_advancedsearch4'}{else}{l s='There are' mod='pm_advancedsearch4'}{/if}&#160;
						{$as_searchs.0.total_products|intval}&#160;
						{if $as_searchs.0.total_products == 1}{l s='product.' mod='pm_advancedsearch4'}{else}{l s='products.' mod='pm_advancedsearch4'}{/if}
					{/if}
					</strong>
				</div> *}
				{/strip}
			{/if}
		{/if}
		{include file="$tpl_dir./errors.tpl"}
		{if $as_searchs.0.remind_selection == 3 OR $as_searchs.0.remind_selection == 1}
			{include file=$as_obj->_getTplPath("pm_advancedsearch_selection_results.tpl")}
		{/if}
		{if $as_searchs.0.products}
			{if version_compare($smarty.const._PS_VERSION_, '1.6.0.0', '>=')}
				


				<div class="content_sortPagiBar clearfix">
					<div class="sortPagiBar clearfix">
						{include file="$tpl_dir./product-sort.tpl"}
						{include file="$tpl_dir./nbr-product-page.tpl"}
					</div>
					<div class="top-pagination-content clearfix">
							{include file="$tpl_dir./product-compare.tpl"}
							{include file="$tpl_dir./pagination.tpl"}
					</div>
				</div>
				
			{else}
				<div class="content_sortPagiBar">	
				<div class="sortPagiBar row">
				<div>
				<div class="inner">	
				<span class="resumecat category-product-count"> {include file="$tpl_dir./category-count.tpl"} </span>
					
					{assign var='tplCompareExists' value="$tpl_dir./product-compare.tpl"|file_exists}
					{include file="$tpl_dir./product-sort.tpl"}
					{if $tplCompareExists}
						{include file="$tpl_dir./product-compare.tpl"}
					{/if}
					<div class="clearfix"></div>
				</div>
				</div>
				</div>
				</div>
			{/if}
			{* </div></div> *} <!-- end content_sortPagiBar -->
			{include file="$tpl_dir./product-list.tpl" products=$as_searchs.0.products}
			
			{if version_compare($smarty.const._PS_VERSION_, '1.6.0.0', '>=')}
				<div class="content_sortPagiBar">
					<div class="bottom-pagination-content clearfix">
						{* {include file="$tpl_dir./product-compare.tpl" paginationId='bottom'} *}
						{include file="$tpl_dir./pagination.tpl" paginationId='bottom'}
					</div>
				</div>
			{else}
				{if $tplCompareExists}
					{* {include file="$tpl_dir./product-compare.tpl"} *}
				{/if}

			{if $nb_products > $products_per_page} 	

	
			<div class="container category-bot-pag" style="margin-top:30px">
				<div class="col-xs-12 sortPagiBar">
					<div class="row">
						<div class="resumecat category-product-count col-lg-4 col-md-4">
							{($p)*$as_searchs[0]['products_per_page']-$as_searchs[0]['products_per_page']+1} -
						{if $p!=$pages_nb}{($p)*$as_searchs[0]['products_per_page']}{else}{$nb_products}{/if} <span class="w-normal">z</span>
								{include file="$tpl_dir./category-count.tpl"}
						</div>			
						 <div class="col-lg-3 col-md-3 porovnat-pag-bot">
							<div class="inner">
								{include file="$tpl_dir./product-compare.tpl" paginationId='bottom'}
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-8 col-xs-12 obal-pagination-bottom">
                            <div class="inner">
                                {include file="$tpl_dir./pagination.tpl" paginationId='bottom'}
                            </div>
                        </div>          
					</div>
				</div>
			</div>
			{/if}

				
			{* </div></div></section></div></div>*}
			</section>
			
			
			{/if}
		{else}
			<p class="{if version_compare($smarty.const._PS_VERSION_, '1.6.0.0', '>=')}alert alert-warning{else}warning{/if}">{l s='There are no result.' mod='pm_advancedsearch4'}</p>
		{/if}
		{if isset($as_cross_links) && $as_cross_links && sizeof($as_cross_links)}
			<br />
			<br />
			<div id="PM_ASearchSeoCrossLinks" class="block">
				<h4>{l s='See also' mod='pm_advancedsearch4'}</h4>
				<div class="block_content">
					<ul class="bullet">
					{foreach from=$as_cross_links item=as_cross_link}
						<li><a href="{$base_dir}{$lang_iso}/s/{$as_cross_link.id_seo|intval}/{$as_cross_link.seo_url|escape:'htmlall':'UTF-8'}">{$as_cross_link.title|escape:'htmlall':'UTF-8'}</a></li>
					{/foreach}
					</ul>
				</div>
			</div>
		{/if}
	{/if}
	{if $as_searchs.0.share}
	<div class="clear"></div>
	<a href="javascript:void(0);" class="{if version_compare($smarty.const._PS_VERSION_, '1.6.0.0', '>=')}btn btn-default exclusive-medium{else}button_large{/if}" id="pm_share_link"><b>{l s='Share this results' mod='pm_advancedsearch4'}</b></a><br />
	<input type="hidden" name="ASSearchUrl" id="ASSearchUrl" value="{$ASSearchUrl}" />
	<input type="hidden" name="ASSearchTitle" id="ASSearchTitle" value="{$as_searchs.0.title|escape:'htmlall':'UTF-8'}" />
	<div class="asShareBlock" id="asShareBlock">

	</div>
	{/if}
	<script type="text/javascript">
	if(typeof(ASParams[{$as_searchs.0.id_search|intval}]) == 'undefined') {ldelim}
		ASParams[{$as_searchs.0.id_search|intval}] = {ldelim}
			'keep_category_information' 	: 0,
			'search_results_selector'		: '{$as_searchs.0.search_results_selector}',
			'insert_in_center_column'		: '{$as_searchs.0.insert_in_center_column}',
			'seo_criterion_groups'			: '{if isset($as_searchs.0.seo_criterion_groups) && is_array($as_searchs.0.seo_criterion_groups)}{","|implode:$as_searchs.0.seo_criterion_groups}{/if}',
			'as4_productFilterListData'		: '{if isset($as4_productFilterListData) && !empty($as4_productFilterListData)}{$as4_productFilterListData}{/if}',
			'as4_productFilterListSource'	: '{if isset($as4_productFilterListSource) && !empty($as4_productFilterListSource)}{$as4_productFilterListSource}{/if}',
			'scrollTopActive'				: {if isset($as_searchs.0.scrolltop_active) && $as_searchs.0.scrolltop_active}true{else}false{/if}
		{rdelim};
	{rdelim}
		$jqPm('#asShareUrl').unbind('click').click(function() {ldelim}$jqPm(this).select();{rdelim});
		initSearch({$as_searchs.0.id_search|intval},{$as_searchs.0.search_method|intval},{$as_searchs.0.step_search|intval},{$as_searchs.0.dynamic_criterion|intval});
	</script>
{/if}

</div>
</div>
