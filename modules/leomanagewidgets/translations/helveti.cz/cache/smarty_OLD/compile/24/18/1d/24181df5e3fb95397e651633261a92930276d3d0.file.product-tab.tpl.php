<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:34:32
         compiled from "/srv/www/helveti/modules/noxtabs/views/templates/hook/product-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50634333054610538bf6c39-61977277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24181df5e3fb95397e651633261a92930276d3d0' => 
    array (
      0 => '/srv/www/helveti/modules/noxtabs/views/templates/hook/product-tab.tpl',
      1 => 1414772345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50634333054610538bf6c39-61977277',
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
  'unifunc' => 'content_54610538d5d961_08045190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610538d5d961_08045190')) {function content_54610538d5d961_08045190($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['zalozka'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zalozka']->_loop = false;
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