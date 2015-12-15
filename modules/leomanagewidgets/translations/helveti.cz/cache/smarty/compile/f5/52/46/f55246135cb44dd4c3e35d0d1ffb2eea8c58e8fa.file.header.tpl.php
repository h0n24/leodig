<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:52:55
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/layout/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217378338566718f767b2e0-24594063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f55246135cb44dd4c3e35d0d1ffb2eea8c58e8fa' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/layout/default/header.tpl',
      1 => 1411196750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217378338566718f767b2e0-24594063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_LEFT_COLUMN' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'page_name' => 0,
    'LAYOUT_COLUMN_SPANS' => 0,
    'classfix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718f7717f66_06951505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718f7717f66_06951505')) {function content_566718f7717f66_06951505($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&empty($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)){?>
<?php $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'] = new Smarty_variable(array(3,9,0), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'];?>
<?php }elseif(empty($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)){?>
<?php $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'] = new Smarty_variable(array(0,9,3), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'];?>
<?php }elseif(empty($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&empty($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)){?>
<?php $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'] = new Smarty_variable(array(0,12,0), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'];?>
<?php }else{ ?>
<?php $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'] = new Smarty_variable(array(3,6,3), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'];?>
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='product'&&$_smarty_tpl->tpl_vars['page_name']->value!='order'&&$_smarty_tpl->tpl_vars['page_name']->value!='authentication'&&$_smarty_tpl->tpl_vars['page_name']->value!='order-confirmation'&&$_smarty_tpl->tpl_vars['page_name']->value!='validation'&&$_smarty_tpl->tpl_vars['page_name']->value!='payment')){?>

<?php if ($_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[0]){?>
<!-- Left -->
<section id="left_column" class="column sidebar col-md-<?php echo $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[0];?>
">

		<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

</section>
<?php }?>
<?php }else{ ?>
<?php $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'] = new Smarty_variable(array(0,12,0), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['LAYOUT_COLUMN_SPANS'] = clone $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS'];?>
<?php }?>

<!-- Center -->
<section id="center_column" class="col-md-<?php echo $_smarty_tpl->tpl_vars['LAYOUT_COLUMN_SPANS']->value[1];?>
">
	<div class="<?php if ($_smarty_tpl->tpl_vars['classfix']->value==0){?>maincontainer <?php }?>clearfix"><?php }} ?>