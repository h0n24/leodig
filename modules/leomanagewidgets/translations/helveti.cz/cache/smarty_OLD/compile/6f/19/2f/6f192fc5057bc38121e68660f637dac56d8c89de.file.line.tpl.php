<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:41:50
         compiled from "/srv/www/helveti/modules/ulozenka/tpl/line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1877045688546106ee26a483-94504558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f192fc5057bc38121e68660f637dac56d8c89de' => 
    array (
      0 => '/srv/www/helveti/modules/ulozenka/tpl/line.tpl',
      1 => 1401788192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1877045688546106ee26a483-94504558',
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
  'unifunc' => 'content_546106ee29c5d1_50909995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546106ee29c5d1_50909995')) {function content_546106ee29c5d1_50909995($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/tools/smarty/plugins/modifier.escape.php';
?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pobocka']->value['name'], 'htmlall', 'UTF-8');?>
  <?php echo smartyTranslate(array('s'=>'Postage','mod'=>'ulozenka'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['cena']->value;?>
<?php }} ?>