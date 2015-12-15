<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:52:54
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1451566122566718f6d371d6-52055156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44052ee1e982b2eb8ddeea712c19a2e35b4dd637' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/breadcrumb.tpl',
      1 => 1411207688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1451566122566718f6d371d6-52055156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'cms' => 0,
    'path' => 0,
    'category' => 0,
    'navigationPipe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718f6daa3a4_62151445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718f6daa3a4_62151445')) {function content_566718f6daa3a4_62151445($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
?>
<!-- Breadcrumb -->
<?php if (isset(Smarty::$_smarty_vars['capture']['path'])){?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>
<div class="breadcrumb">
	<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Return to Home'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a>
	<?php if (isset($_smarty_tpl->tpl_vars['cms']->value)){?>	<?php echo Tools::vytvorSpecialCmsbreadcrumb($_smarty_tpl->tpl_vars['cms']->value->id);?>

	<?php }else{ ?>
	<?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value){?>
		<span class="navigation-pipe" <?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1){?>style="display:none;"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['navigationPipe']->value, 'html', 'UTF-8');?>
</span>
		<?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'span')){?>
			<span class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span>
		<?php }else{ ?>
			<?php echo $_smarty_tpl->tpl_vars['path']->value;?>

		<?php }?>
	<?php }?>
	<?php }?>
</div>
<!-- /Breadcrumb --><?php }} ?>