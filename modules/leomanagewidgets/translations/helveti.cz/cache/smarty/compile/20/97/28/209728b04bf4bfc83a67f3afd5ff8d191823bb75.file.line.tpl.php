<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 20:29:37
         compiled from "/srv/www/helveti/helveti.cz/modules/ulozenka/tpl/line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196536075656672fa13422b0-71032621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '209728b04bf4bfc83a67f3afd5ff8d191823bb75' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/ulozenka/tpl/line.tpl',
      1 => 1401788192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196536075656672fa13422b0-71032621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pobocka' => 0,
    'cena' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56672fa138af36_63047754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56672fa138af36_63047754')) {function content_56672fa138af36_63047754($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pobocka']->value['name'], 'htmlall', 'UTF-8');?>
  <?php echo smartyTranslate(array('s'=>'Postage','mod'=>'ulozenka'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['cena']->value;?>
<?php }} ?>