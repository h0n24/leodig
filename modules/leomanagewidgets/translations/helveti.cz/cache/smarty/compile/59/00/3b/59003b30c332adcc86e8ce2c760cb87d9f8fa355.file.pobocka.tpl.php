<?php /* Smarty version Smarty-3.1.14, created on 2015-12-10 17:55:15
         compiled from "/srv/www/helveti/helveti.cz/modules/ulozenka/tpl/pobocka.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3018522125669ae73c1fe94-17570684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59003b30c332adcc86e8ce2c760cb87d9f8fa355' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/ulozenka/tpl/pobocka.tpl',
      1 => 1414777782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3018522125669ae73c1fe94-17570684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showtext' => 0,
    'pobocka' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5669ae73c9f503_65315781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5669ae73c9f503_65315781')) {function content_5669ae73c9f503_65315781($_smarty_tpl) {?>     <?php if ($_smarty_tpl->tpl_vars['showtext']->value){?>
<br/>
<div class="box">
	<p><strong>Informace k vyzvednutí</strong></p>
     <?php echo smartyTranslate(array('s'=>'We will inform you as soon as your order is ready','mod'=>'ulozenka'),$_smarty_tpl);?>
<br /><br />
     <?php }?>
      <a href='<?php echo $_smarty_tpl->tpl_vars['pobocka']->value['link'];?>
' target='_blank'><?php echo $_smarty_tpl->tpl_vars['pobocka']->value['name'];?>
</a><br />
       <?php echo $_smarty_tpl->tpl_vars['pobocka']->value['zip'];?>
 <?php echo $_smarty_tpl->tpl_vars['pobocka']->value['town'];?>
<br />
       tel: <?php echo $_smarty_tpl->tpl_vars['pobocka']->value['phone'];?>
<br />
       <?php echo $_smarty_tpl->tpl_vars['pobocka']->value['street'];?>
<br /><br />
       <?php echo $_smarty_tpl->tpl_vars['pobocka']->value['provoz'];?>
<br />
       
      
      <br />
      <?php echo $_smarty_tpl->tpl_vars['pobocka']->value['map'];?>


</div>
<?php }} ?>