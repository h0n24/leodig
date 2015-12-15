<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:52:56
         compiled from "/srv/www/helveti/helveti.cz/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_footer_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:808224386566718f818f3a3-69412752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c69db6d2c40f14239b4b82d47cf1da915a6f706c' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_footer_block.tpl',
      1 => 1413762222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '808224386566718f818f3a3-69412752',
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
  'unifunc' => 'content_566718f81b77f2_95064855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718f81b77f2_95064855')) {function content_566718f81b77f2_95064855($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['hookName']->value=='leftColumn'||$_smarty_tpl->tpl_vars['hookName']->value=='rightColumn'){?>
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