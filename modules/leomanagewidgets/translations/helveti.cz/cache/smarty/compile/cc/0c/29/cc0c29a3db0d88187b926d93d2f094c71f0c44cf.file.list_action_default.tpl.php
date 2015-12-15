<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:54:38
         compiled from "/srv/www/helveti/helveti.cz/admin6105/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5397457805667195e2dcda0-85478690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc0c29a3db0d88187b926d93d2f094c71f0c44cf' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/admin6105/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1400605624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5397457805667195e2dcda0-85478690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5667195e329fa7_57439476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5667195e329fa7_57439476')) {function content_5667195e329fa7_57439476($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>>
	<img src="../img/admin/asterisk.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>