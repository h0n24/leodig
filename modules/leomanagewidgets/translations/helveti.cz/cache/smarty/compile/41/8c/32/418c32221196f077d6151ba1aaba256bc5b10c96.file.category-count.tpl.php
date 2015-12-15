<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:53:11
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138828048256671907a8c5c0-16489109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '418c32221196f077d6151ba1aaba256bc5b10c96' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/category-count.tpl',
      1 => 1411202147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138828048256671907a8c5c0-16489109',
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
  'unifunc' => 'content_56671907ab8e49_95694944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56671907ab8e49_95694944')) {function content_56671907ab8e49_95694944($_smarty_tpl) {?>
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