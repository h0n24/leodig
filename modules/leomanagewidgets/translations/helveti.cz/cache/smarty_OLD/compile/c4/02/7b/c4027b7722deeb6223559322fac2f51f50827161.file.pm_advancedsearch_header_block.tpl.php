<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:34:30
         compiled from "/srv/www/helveti/themes/leodig/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_header_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202091861354610536227bb2-10352496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4027b7722deeb6223559322fac2f51f50827161' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_header_block.tpl',
      1 => 1411238704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202091861354610536227bb2-10352496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hookName' => 0,
    'as_search' => 0,
    'ajaxMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546105364c2a90_34628228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546105364c2a90_34628228')) {function content_546105364c2a90_34628228($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/tools/smarty/plugins/modifier.escape.php';
?><script>

$(document).ready(function() {
slajdujTlacitko();
})

</script>
<?php if ($_smarty_tpl->tpl_vars['hookName']->value=='leftColumn'||$_smarty_tpl->tpl_vars['hookName']->value=='rightColumn'){?>
<?php if (!isset($_REQUEST['ajaxMode'])){?>
<div id="PM_ASBlockOutput_<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
" class="PM_ASBlockOutput PM_ASBlockOutputVertical<?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','>=')){?> block<?php }?>">
<?php }?>
	<div id="PM_ASBlock_<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
"<?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','<')){?> class="block"<?php }?>>
		<?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','>=')){?>
			<?php if ($_smarty_tpl->tpl_vars['as_search']->value['title']){?><p class="title_block"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['as_search']->value['title'], 'htmlall', 'UTF-8');?>
</p><?php }?>
		<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['as_search']->value['title']){?><h4><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['as_search']->value['title'], 'htmlall', 'UTF-8');?>
</h4><?php }?>
		<?php }?>
		<div class="block_content">
		
<?php }else{ ?>
<?php if (!isset($_smarty_tpl->tpl_vars['ajaxMode']->value)&&$_smarty_tpl->tpl_vars['hookName']->value=='top'){?>
</div>
<div class="clear"></div>
<?php }?>
<?php if (!isset($_REQUEST['ajaxMode'])){?>
<div id="PM_ASBlockOutput_<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
" class="PM_ASBlockOutput PM_ASBlockOutputHorizontal">
<?php }?>
	<div id="PM_ASBlock_<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
">
		<?php if ($_smarty_tpl->tpl_vars['as_search']->value['title']){?><h4 class="PM_ASearchTitle"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['as_search']->value['title'], 'htmlall', 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['as_search']->value['display_nb_result_on_blc']){?> <small class="PM_ASBlockNbProductValue">(<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['total_products']);?>
 <?php if ($_smarty_tpl->tpl_vars['as_search']->value['total_products']>1){?><?php echo smartyTranslate(array('s'=>'products','mod'=>'pm_advancedsearch4'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'product','mod'=>'pm_advancedsearch4'),$_smarty_tpl);?>
<?php }?>)</small><?php }?></h4><?php }?>
		<div class="block_content">
<?php }?>
<?php }} ?>