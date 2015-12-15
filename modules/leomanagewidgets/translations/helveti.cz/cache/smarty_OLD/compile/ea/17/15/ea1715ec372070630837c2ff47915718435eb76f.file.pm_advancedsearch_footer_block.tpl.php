<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:34:31
         compiled from "/srv/www/helveti/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_footer_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38191327354610537700729-05392561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea1715ec372070630837c2ff47915718435eb76f' => 
    array (
      0 => '/srv/www/helveti/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_footer_block.tpl',
      1 => 1413762222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38191327354610537700729-05392561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hookName' => 0,
    'ajaxMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5461053784b5a6_24757912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5461053784b5a6_24757912')) {function content_5461053784b5a6_24757912($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['hookName']->value=='leftColumn'||$_smarty_tpl->tpl_vars['hookName']->value=='rightColumn'){?>
		</div>
	</div>
<?php if (!isset($_REQUEST['ajaxMode'])){?>
</div>
<?php }?>
<?php }else{ ?>
		</div>
	</div>
<?php if (!isset($_REQUEST['ajaxMode'])){?>
</div>
<?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['ajaxMode']->value)&&$_smarty_tpl->tpl_vars['hookName']->value=='top'){?>
	<div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['hookName']->value=='home'&&!isset($_REQUEST['ajaxMode'])){?>
	<div class="clear"></div>
	<div id="as_home_content_results">
	</div>
<?php }?>
<?php }?><?php }} ?>