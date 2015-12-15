<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:52:55
         compiled from "/srv/www/helveti/helveti.cz/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_criterions_slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1150775135566718f7d39a22-50041685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ab5c8e77618473728114081f37d597408f0cccf' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_criterions_slider.tpl',
      1 => 1414453605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1150775135566718f7d39a22-50041685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'criterions_group' => 0,
    'as_search' => 0,
    'criterion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718f7ef4a47_61663871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718f7ef4a47_61663871')) {function content_566718f7ef4a47_61663871($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
?>

<?php if ($_smarty_tpl->tpl_vars['criterions_group']->value['display_type']==5){?>
	<?php if (isset($_smarty_tpl->tpl_vars['as_search']->value['criterions'][$_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']])){?>
		<div class="PM_ASCriterionStepEnable">
		<?php if (sizeof($_smarty_tpl->tpl_vars['as_search']->value['criterions'][$_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']])){?>
			<?php  $_smarty_tpl->tpl_vars['criterion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['criterion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['as_search']->value['criterions'][$_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->key => $_smarty_tpl->tpl_vars['criterion']->value){
$_smarty_tpl->tpl_vars['criterion']->_loop = true;
?>
				<?php if ((isset($_smarty_tpl->tpl_vars['criterion']->value['cur_min'])&&isset($_smarty_tpl->tpl_vars['criterion']->value['cur_max'])&&$_smarty_tpl->tpl_vars['criterion']->value['cur_min']==0&&$_smarty_tpl->tpl_vars['criterion']->value['cur_max']==0)||(isset($_smarty_tpl->tpl_vars['criterion']->value['min'])&&isset($_smarty_tpl->tpl_vars['criterion']->value['max'])&&$_smarty_tpl->tpl_vars['criterion']->value['min']==0&&$_smarty_tpl->tpl_vars['criterion']->value['max']==0)){?>
					<p class="PM_ASCriterionNoChoice"><?php echo smartyTranslate(array('s'=>'No choice available on this group','mod'=>'pm_advancedsearch4'),$_smarty_tpl);?>
</p>
					<input type="hidden" name="as4c[<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
][]" id="PM_ASInputCritRange<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['criterion']->value['cur_min'])){?><?php echo floatval($_smarty_tpl->tpl_vars['criterion']->value['cur_min']);?>
-<?php echo floatval($_smarty_tpl->tpl_vars['criterion']->value['cur_max']);?>
<?php }?>" />
				<?php }else{ ?>
					<div class="PM_ASCritRange" data-id-criterion-group="<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
" id="PM_ASCritRange<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
"></div>
					<span class="PM_ASCritRangeValue" id="PM_ASCritRangeValue<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
">
		
						<?php if (isset($_smarty_tpl->tpl_vars['criterion']->value['cur_min'])&&$_smarty_tpl->tpl_vars['criterion']->value['cur_min']!=$_smarty_tpl->tpl_vars['criterion']->value['cur_max']){?>
							<?php echo floatval($_smarty_tpl->tpl_vars['criterion']->value['cur_min']);?>
 - <?php if (isset($_smarty_tpl->tpl_vars['criterions_group']->value['left_range_sign'])){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['criterions_group']->value['left_range_sign'], 'htmlall', 'UTF-8');?>
<?php }?><?php echo floatval($_smarty_tpl->tpl_vars['criterion']->value['cur_max']);?>
<?php if (isset($_smarty_tpl->tpl_vars['criterions_group']->value['right_range_sign'])){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['criterions_group']->value['right_range_sign'], 'htmlall', 'UTF-8');?>
<?php }?>
						<?php }else{ ?>
						<?php echo floatval(((round(($_smarty_tpl->tpl_vars['criterion']->value['min']/10),0))*10));?>
 - <?php if (isset($_smarty_tpl->tpl_vars['criterions_group']->value['left_range_sign'])){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['criterions_group']->value['left_range_sign'], 'htmlall', 'UTF-8');?>
<?php }?><?php echo floatval(round(((round(($_smarty_tpl->tpl_vars['criterion']->value['max']/10),0))*10),2));?>
<?php if (isset($_smarty_tpl->tpl_vars['criterions_group']->value['right_range_sign'])){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['criterions_group']->value['right_range_sign'], 'htmlall', 'UTF-8');?>
<?php }?>
						<?php }?>
					</span>
					<input type="hidden" name="as4c[<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
][]" id="PM_ASInputCritRange<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['criterion']->value['cur_min'])){?><?php echo floatval($_smarty_tpl->tpl_vars['criterion']->value['cur_min']);?>
-<?php echo floatval($_smarty_tpl->tpl_vars['criterion']->value['cur_max']);?>
<?php }?>" />
					<script type="text/javascript">
							$jqPm( "#PM_ASCritRange<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
" ).slider({
								range: true,
								min: <?php echo floatval(((round(($_smarty_tpl->tpl_vars['criterion']->value['min']/10),0))*10));?>
,
								max: <?php echo floatval(((round(($_smarty_tpl->tpl_vars['criterion']->value['max']/10),0))*10));?>
,
								step: <?php echo floatval($_smarty_tpl->tpl_vars['criterion']->value['step']);?>
,
								values: [ <?php if (isset($_smarty_tpl->tpl_vars['criterion']->value['cur_min'])&&$_smarty_tpl->tpl_vars['criterion']->value['cur_min']!=$_smarty_tpl->tpl_vars['criterion']->value['cur_max']){?><?php echo floatval($_smarty_tpl->tpl_vars['criterion']->value['cur_min']);?>
, <?php echo floatval($_smarty_tpl->tpl_vars['criterion']->value['cur_max']);?>
<?php }else{ ?><?php echo floatval($_smarty_tpl->tpl_vars['criterion']->value['min']);?>
, <?php echo floatval($_smarty_tpl->tpl_vars['criterion']->value['max']);?>
<?php }?> ],
								slide: function( event, ui ) {
									$jqPm( "#PM_ASCritRangeValue<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
" ).html( "" + Math.round(ui.values[ 0 ]*100)/100 + " - " + "<?php if (isset($_smarty_tpl->tpl_vars['criterions_group']->value['left_range_sign'])){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['criterions_group']->value['left_range_sign'], 'htmlall', 'UTF-8');?>
<?php }?>" + Math.round(ui.values[ 1 ]*100)/100 + "<?php if (isset($_smarty_tpl->tpl_vars['criterions_group']->value['right_range_sign'])){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['criterions_group']->value['right_range_sign'], 'htmlall', 'UTF-8');?>
<?php }?>" );
									$jqPm( "#PM_ASInputCritRange<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
" ).val( "" + Math.round(ui.values[ 0 ]*100)/100 + "-" + Math.round(ui.values[ 1 ]*100)/100 );
								},
								stop: function(event, ui) {
									<?php if ($_smarty_tpl->tpl_vars['as_search']->value['step_search']){?>
										nextStep(<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
,$('#PM_ASInputCritRange<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['criterions_group']->value['id_criterion_group']);?>
'),null,<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['search_method']);?>
);
									<?php }else{ ?>
										<?php if (intval($_smarty_tpl->tpl_vars['as_search']->value['search_method'])===1){?>
											$jqPm('#PM_ASForm_<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
').ajaxSubmit(as4_getASFormOptions(<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
));
										<?php }?>
										<?php if (intval($_smarty_tpl->tpl_vars['as_search']->value['search_method'])===2&&$_smarty_tpl->tpl_vars['as_search']->value['dynamic_criterion']){?>
											$jqPm('#PM_ASForm_<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
').ajaxSubmit(as4_getASFormDynamicCriterionOptions(<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
));
										<?php }?>
									<?php }?>
									setTimeout( function() {
										changeHash(<?php echo intval($_smarty_tpl->tpl_vars['as_search']->value['id_search']);?>
);
									},500);
								}
							});
					</script>
				<?php }?>
			<?php } ?>
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