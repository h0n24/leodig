<?php /*%%SmartyHeaderCode:191624725554610535146490-19046670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b86adb578be9f61374a47f6d858b9d1ae4616bce' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/modules/blocksearch/blocksearch-top.tpl',
      1 => 1400606804,
      2 => 'file',
    ),
    '8cfb78debf4e05a3a8ca0966a2581b38213e966a' => 
    array (
      0 => '/srv/www/helveti/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1400606547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191624725554610535146490-19046670',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54610538e81ac9_69684397',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610538e81ac9_69684397')) {function content_54610538e81ac9_69684397($_smarty_tpl) {?><div class="col-lg-2 col-xs-5 col-sm-3 col-md-2 pull-right" id="search_block_top"> <a class="groupe-btn dropdown hidden-md hidden-lg" href="#" title="Search"><span class="fa fa-search"></span></a><form action="http://www.helveti.cz/vyhledavani" class="row groupe" id="searchbox" method="get"> <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="orderway" value="desc" /> <input class="search_query form-control" type="text" id="search_query_top" name="search_query" value="" placeholder="Hledat" /> <input type="submit" name="submit_search" value="Hledat" class="button" /></form></div><script type="text/javascript">// 
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