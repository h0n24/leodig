<?php /* Smarty version Smarty-3.1.14, created on 2015-12-10 23:29:54
         compiled from "/srv/www/helveti/helveti.cz/modules/add_gopay_new/views/templates/back/recurrence_period.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3358551565669fce2eb7b24-04424098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bebf474efb374dbca24f178c600955dfa5f7cfb3' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/add_gopay_new/views/templates/back/recurrence_period.tpl',
      1 => 1449270100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3358551565669fce2eb7b24-04424098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recurrent_periodes' => 0,
    'period' => 0,
    'RECURRENCE_PERIOD' => 0,
    'period_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5669fce2efe861_53809921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5669fce2efe861_53809921')) {function content_5669fce2efe861_53809921($_smarty_tpl) {?><span style="margin-left:10px;" id="span_ewery"><?php echo smartyTranslate(array('s'=>'ewery','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span><select name="recurrence_period" class="display_inline" id="recurrence_period" style="margin-left:20px; width: 55px !important;"><?php $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['period']->step = 1;$_smarty_tpl->tpl_vars['period']->total = (int)ceil(($_smarty_tpl->tpl_vars['period']->step > 0 ? $_smarty_tpl->tpl_vars['recurrent_periodes']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['recurrent_periodes']->value)+1)/abs($_smarty_tpl->tpl_vars['period']->step));
if ($_smarty_tpl->tpl_vars['period']->total > 0){
for ($_smarty_tpl->tpl_vars['period']->value = 1, $_smarty_tpl->tpl_vars['period']->iteration = 1;$_smarty_tpl->tpl_vars['period']->iteration <= $_smarty_tpl->tpl_vars['period']->total;$_smarty_tpl->tpl_vars['period']->value += $_smarty_tpl->tpl_vars['period']->step, $_smarty_tpl->tpl_vars['period']->iteration++){
$_smarty_tpl->tpl_vars['period']->first = $_smarty_tpl->tpl_vars['period']->iteration == 1;$_smarty_tpl->tpl_vars['period']->last = $_smarty_tpl->tpl_vars['period']->iteration == $_smarty_tpl->tpl_vars['period']->total;?><option value="<?php echo $_smarty_tpl->tpl_vars['period']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['RECURRENCE_PERIOD']->value==$_smarty_tpl->tpl_vars['period']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['period']->value;?>
</option><?php }} ?></select><span style="margin-left:10px;" id="span_period"><?php echo $_smarty_tpl->tpl_vars['period_name']->value;?>
</span><?php }} ?>