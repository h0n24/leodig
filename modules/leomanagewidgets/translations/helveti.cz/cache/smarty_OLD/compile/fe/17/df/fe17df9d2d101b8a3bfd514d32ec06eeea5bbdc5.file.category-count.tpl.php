<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:42:57
         compiled from "/srv/www/helveti/themes/leodig/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19776379205461073149e629-56592812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe17df9d2d101b8a3bfd514d32ec06eeea5bbdc5' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/category-count.tpl',
      1 => 1411202147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19776379205461073149e629-56592812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546107314f4003_99375337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546107314f4003_99375337')) {function content_546107314f4003_99375337($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'Žádné produkty'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'%d','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<span class="w-normal"> <?php echo smartyTranslate(array('s'=>'Produkt'),$_smarty_tpl);?>
</span>
	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'%d','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<span class="w-normal"> <?php echo smartyTranslate(array('s'=>'Produktů'),$_smarty_tpl);?>
</span>
	<?php }?>
<?php }?><?php }} ?>