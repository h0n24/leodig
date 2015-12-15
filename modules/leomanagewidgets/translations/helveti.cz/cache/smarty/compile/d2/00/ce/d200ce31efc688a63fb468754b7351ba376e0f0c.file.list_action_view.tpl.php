<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:53:09
         compiled from "/srv/www/helveti/helveti.cz/admin6105/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117102851566719052d7a45-58783921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd200ce31efc688a63fb468754b7351ba376e0f0c' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/admin6105/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1400605624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117102851566719052d7a45-58783921',
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
  'unifunc' => 'content_566719052e8db0_05899440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566719052e8db0_05899440')) {function content_566719052e8db0_05899440($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>