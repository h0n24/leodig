<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:52:56
         compiled from "/srv/www/helveti/helveti.cz/modules/noxtabs/views/templates/hook/product-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:952058512566718f8c4ce32-07700773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33576f65fa855f8b576431254ddf6ea3c3aaf277' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/noxtabs/views/templates/hook/product-tab.tpl',
      1 => 1414772345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '952058512566718f8c4ce32-07700773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'zalozky' => 0,
    'zalozka' => 0,
    'obsah' => 0,
    'heureka' => 0,
    'nbComments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718f8cd4666_68199005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718f8cd4666_68199005')) {function content_566718f8cd4666_68199005($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['zalozka'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zalozka']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zalozky']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zalozka']->key => $_smarty_tpl->tpl_vars['zalozka']->value){
$_smarty_tpl->tpl_vars['zalozka']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs']==1){?>
	<li><a id="noxTab_<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs'];?>
" href="#noxTab<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs'];?>
"><?php echo $_smarty_tpl->tpl_vars['zalozka']->value['nazev'];?>
 (<?php echo $_smarty_tpl->tpl_vars['obsah']->value[0]['pocet'];?>
)</a></li>
<?php }elseif($_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs']==3){?>
	<li><a id="noxTab_<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs'];?>
" href="#noxTab<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs'];?>
"><?php echo $_smarty_tpl->tpl_vars['zalozka']->value['nazev'];?>
 (<?php echo count($_smarty_tpl->tpl_vars['heureka']->value);?>
)</a></li>
<?php }elseif($_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs']==22){?>
	<li><a id="noxTab_<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs'];?>
" href="#idTab5"><?php echo $_smarty_tpl->tpl_vars['zalozka']->value['nazev'];?>
 <?php if ($_smarty_tpl->tpl_vars['nbComments']->value>0){?> (<?php echo $_smarty_tpl->tpl_vars['nbComments']->value;?>
)<?php }?></a></li>
<?php }else{ ?>
	<li><a id="noxTab_<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs'];?>
" href="#noxTab<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs'];?>
"><?php echo $_smarty_tpl->tpl_vars['zalozka']->value['nazev'];?>
</a></li>
<?php }?>
<?php } ?>


<?php }} ?>