<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:54:06
         compiled from "/srv/www/helveti/helveti.cz/admin6105/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4586753015667193eecce42-79066663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f37e823eb904b0db04b54519b1fa91692f88ef07' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/admin6105/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1400605624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4586753015667193eecce42-79066663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5667193eefbb69_69430806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5667193eefbb69_69430806')) {function content_5667193eefbb69_69430806($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>