<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:54:06
         compiled from "/srv/www/helveti/helveti.cz/admin6105/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20689375865667193ee52310-74756382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a7e14af6087b58101ed305ab7edb684fef1ee2e' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/admin6105/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1400605624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20689375865667193ee52310-74756382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5667193eec0946_97125624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5667193eec0946_97125624')) {function content_5667193eec0946_97125624($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>