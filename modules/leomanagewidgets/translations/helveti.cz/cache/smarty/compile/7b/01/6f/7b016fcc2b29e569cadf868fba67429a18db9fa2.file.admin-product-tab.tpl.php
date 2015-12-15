<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:54:43
         compiled from "/srv/www/helveti/helveti.cz/modules/noxtabs/views/templates/admin/admin-product-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11959490165667196395e714-92426770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b016fcc2b29e569cadf868fba67429a18db9fa2' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/noxtabs/views/templates/admin/admin-product-tab.tpl',
      1 => 1416439122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11959490165667196395e714-92426770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'zalozky' => 0,
    'zalozka' => 0,
    'obsah' => 0,
    'o' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566719639e04a4_54542380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566719639e04a4_54542380')) {function content_566719639e04a4_54542380($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['zalozky']->value){?>
		<h4>Extra záložky</h4>
		<div class="separation"></div>
	<?php  $_smarty_tpl->tpl_vars['zalozka'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zalozka']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zalozky']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zalozka']->key => $_smarty_tpl->tpl_vars['zalozka']->value){
$_smarty_tpl->tpl_vars['zalozka']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['zalozka']->value['typ']==1){?>
		<p><strong><?php echo $_smarty_tpl->tpl_vars['zalozka']->value['nazev'];?>
</strong></p>
		<textarea id="obsah" rows="10" cols="120" name="noxTab<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs'];?>
" id="noxTab<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs'];?>
"><?php if ($_smarty_tpl->tpl_vars['obsah']->value){?><?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['obsah']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value){
$_smarty_tpl->tpl_vars['o']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['o']->value['noxtab']==$_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs']){?><?php echo $_smarty_tpl->tpl_vars['o']->value['obsah'];?>
<?php }?><?php } ?><?php }?></textarea>
		<br/>
		<?php if ($_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs']==1){?><p><strong>Poznámka: </strong>Jeden link videa na jeden řádek. Videa vkládejte ve tvaru linku z Youtube (http://www.youtube.com/watch?v=2M6LhWfzyFY nebo http://youtu.be/2M6LhWfzyFY)<br/><br/>Pokud chcete všechny videa smazat vyplňte 0.</p><?php }?><br/>
	<?php }?>
	<?php } ?>
<?php }else{ ?>
	Zatím nebyla vytvořena žádná nová záložka!
<?php }?>
<?php }} ?>