<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:35:10
         compiled from "/srv/www/helveti/themes/leodig/layout/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2258144675461055e43bb24-88495565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21c761a9b49377231cdf0d646c6ca21a2eabf3dd' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/layout/default/footer.tpl',
      1 => 1400606778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2258144675461055e43bb24-88495565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_CONTENTBOTTOM' => 0,
    'page_name' => 0,
    'LAYOUT_COLUMN_SPANS' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5461055e6d6383_04501756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5461055e6d6383_04501756')) {function content_5461055e6d6383_04501756($_smarty_tpl) {?>	</div>
<!-- end div block_home -->
	<?php if ($_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))){?>
		<div id="contentbottom" class="no-border clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value;?>

		</div>
	<?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[2])&&$_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[2]){?> 
<!-- Right -->
	<section id="right_column" class="column sidebar col-md-<?php echo $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[2];?>
">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

	</section>
<?php }?><?php }} ?>