<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 19:02:59
         compiled from "/srv/www/helveti/helveti.cz/admin6105/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29412386056671b5303f6c9-72873959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a8ef61bff449f752383a00abbc089f75a3e53ea' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/admin6105/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1410561989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29412386056671b5303f6c9-72873959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56671b53060067_72323143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56671b53060067_72323143')) {function content_56671b53060067_72323143($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)){?>
	<div class="cat_bar">
		<span style="color: #3C8534;"><?php echo smartyTranslate(array('s'=>'Current category'),$_smarty_tpl);?>
 :</span>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>