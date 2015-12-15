<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:34:31
         compiled from "/srv/www/helveti/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_criterions_colorsquare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:475562959546105374ea427-72670504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a5b60d0700d39839624af6c891764381c48fda8' => 
    array (
      0 => '/srv/www/helveti/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_criterions_colorsquare.tpl',
      1 => 1413762221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '475562959546105374ea427-72670504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'criterions_group' => 0,
    'as_search' => 0,
    'criterion' => 0,
    'criterion_can_hide' => 0,
    'hide_next_criterion' => 0,
    'as_criterion_is_selected' => 0,
    'col_img_dir' => 0,
    'img_col_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546105378f6863_70846090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546105378f6863_70846090')) {function content_546105378f6863_70846090($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/tools/smarty/plugins/modifier.escape.php';
?>

<?php if ($_smarty_tpl->tpl_vars['criterions_group']->value['display_type']==7){?>
	<?php if (isset($_smarty_tpl->tpl_vars['as_search']->value['criterions'][$_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']])){?>
		<div class="PM_ASCriterionStepEnable">
		<?php if (sizeof($_smarty_tpl->tpl_vars['as_search']->value['criterions'][$_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']])){?>
			<ul id="PM_ASCriterionGroupColor_<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
" class="PM_ASCriterionGroupColor<?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','>=')){?> color_to_pick_list<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['criterion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['criterion']->_loop = false;
 $_smarty_tpl->tpl_vars['criterion_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['as_search']->value['criterions'][$_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['criterions']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->key => $_smarty_tpl->tpl_vars['criterion']->value){
$_smarty_tpl->tpl_vars['criterion']->_loop = true;
 $_smarty_tpl->tpl_vars['criterion_key']->value = $_smarty_tpl->tpl_vars['criterion']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['criterions']['index']++;
?>
				<?php if (isset($_smarty_tpl->tpl_vars['as_search']->value['selected_criterion'][$_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']])&&in_array($_smarty_tpl->tpl_vars['criterion']->value['id_criterion'],$_smarty_tpl->tpl_vars['as_search']->value['selected_criterion'][$_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']])){?>
						<?php $_smarty_tpl->tpl_vars['as_criterion_is_selected'] = new Smarty_variable('1', null, 0);?>
					<?php }else{ ?>
						<?php $_smarty_tpl->tpl_vars['as_criterion_is_selected'] = new Smarty_variable('0', null, 0);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['criterion_can_hide']->value&&$_smarty_tpl->tpl_vars['criterions_group']->value['max_display']>0&&($_smarty_tpl->getVariable('smarty')->value['foreach']['criterions']['index']+1)>$_smarty_tpl->tpl_vars['criterions_group']->value['max_display']){?>
						<?php $_smarty_tpl->tpl_vars['hide_next_criterion'] = new Smarty_variable('1', null, 0);?>
					<?php }else{ ?>
						<?php $_smarty_tpl->tpl_vars['hide_next_criterion'] = new Smarty_variable('0', null, 0);?>
				<?php }?>
				<li<?php if ($_smarty_tpl->tpl_vars['hide_next_criterion']->value||!$_smarty_tpl->tpl_vars['criterion']->value['nb_product']){?> class="<?php if ($_smarty_tpl->tpl_vars['hide_next_criterion']->value){?>PM_ASCriterionHide<?php }?><?php if (!$_smarty_tpl->tpl_vars['criterion']->value['nb_product']){?><?php if ($_smarty_tpl->tpl_vars['hide_next_criterion']->value){?> <?php }?>PM_ASCriterionDisable<?php }?>"<?php }?>>
					<a href="<?php if (isset($_smarty_tpl->tpl_vars['criterion']->value['id_seo'])&&$_smarty_tpl->tpl_vars['criterion']->value['id_seo']!=false&&isset($_smarty_tpl->tpl_vars['criterion']->value['seo_page_url'])&&$_smarty_tpl->tpl_vars['criterion']->value['seo_page_url']!=false){?><?php echo $_smarty_tpl->tpl_vars['criterion']->value['seo_page_url'];?>
<?php }else{ ?>javascript:void(0)<?php }?>" data-id-criterion-group="<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
" class="PM_ASCriterionLink <?php if ($_smarty_tpl->tpl_vars['as_criterion_is_selected']->value){?>PM_ASCriterionLinkSelected<?php }?><?php if (!$_smarty_tpl->tpl_vars['criterions_group']->value['is_multicriteria']){?> PM_ASNotMulticriteria<?php }?>" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['criterion']->value['value'], 'htmlall', 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['as_search']->value['display_nb_result_criterion']){?> (<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['criterion']->value['nb_product'], 'htmlall', 'UTF-8');?>
)<?php }?>" style="background:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['criterion']->value['color'], 'htmlall', 'UTF-8');?>
<?php if (file_exists((($_smarty_tpl->tpl_vars['col_img_dir']->value).($_smarty_tpl->tpl_vars['criterion']->value['id_criterion_linked'])).('.jpg'))){?> url(<?php echo $_smarty_tpl->tpl_vars['img_col_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['criterion']->value['id_criterion_linked'];?>
.jpg)<?php }?>;<?php if ($_smarty_tpl->tpl_vars['criterion']->value['color']=="#ffffff"){?>border: 1px solid #ccc;<?php }?>"></a>
					<input type="hidden" name="as4c[<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['criterion']->value['id_criterion'];?>
" <?php if (!$_smarty_tpl->tpl_vars['as_criterion_is_selected']->value){?>disabled="disabled"<?php }?> />
				</li>
			<?php } ?>
			</ul>
			<?php if ($_smarty_tpl->tpl_vars['hide_next_criterion']->value){?>
				<p class="PM_ASCriterionHideToogle<?php if ($_smarty_tpl->tpl_vars['as_search']->value['show_hide_crit_method']==2){?>Click<?php }?><?php if ($_smarty_tpl->tpl_vars['as_search']->value['show_hide_crit_method']==1){?>Hover<?php }?> PM_ASCriterionHideToogle_<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
"><a href="javascript:void(0);" class="PM_ASCriterionHideToogleLink" ><span class="PM_ASShow"><?php echo smartyTranslate(array('s'=>'Show all','mod'=>'pm_advancedsearch4'),$_smarty_tpl);?>
</span><?php if ($_smarty_tpl->tpl_vars['as_search']->value['show_hide_crit_method']==2){?><span class="PM_ASHide"><?php echo smartyTranslate(array('s'=>'Hide','mod'=>'pm_advancedsearch4'),$_smarty_tpl);?>
</span><?php }?></a></p>
			<?php }?>
		<?php }else{ ?>
			<p class="PM_ASCriterionNoChoice"><?php echo smartyTranslate(array('s'=>'No choice available on this group','mod'=>'pm_advancedsearch4'),$_smarty_tpl);?>
</p>
		<?php }?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['as_search']->value['step_search']){?>
		<div data-id-criterion-group="<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
" class="PM_ASCriterionStepDisable" <?php if (isset($_smarty_tpl->tpl_vars['as_search']->value['criterions'][$_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']])){?> style="display:none;"<?php }?>>
			<p><?php echo smartyTranslate(array('s'=>'Select above criteria','mod'=>'pm_advancedsearch4'),$_smarty_tpl);?>
</p>
		</div>
	<?php }?>
<?php }?><?php }} ?>