<?php /*%%SmartyHeaderCode:1610130452566718febd60f6-40953035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ca0840667314dbadf3a78d7d5c232fdcd269052' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/modules/blocksearch/blocksearch-top.tpl',
      1 => 1400606804,
      2 => 'file',
    ),
    '548e2c413178a0ec5c78e88067f9ac6c84d118c8' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1400606547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1610130452566718febd60f6-40953035',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566719a7bdd199_48828098',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566719a7bdd199_48828098')) {function content_566719a7bdd199_48828098($_smarty_tpl) {?><div class="col-lg-2 col-xs-5 col-sm-3 col-md-2 pull-right" id="search_block_top"> <a class="groupe-btn dropdown hidden-md hidden-lg" href="#" title="Search"><span class="fa fa-search"></span></a><form action="http://www.helveti.cz/vyhledavani" class="row groupe" id="searchbox" method="get"> <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="orderway" value="desc" /> <input class="search_query form-control" type="text" id="search_query_top" name="search_query" value="" placeholder="Hledat" /> <input type="submit" name="submit_search" value="Hledat" class="button" /></form></div><script type="text/javascript">// 
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://www.helveti.cz/vyhledavani', {
						minChars: 3,
						max: 10,
						width: 500,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 2
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	//</script><?php }} ?>