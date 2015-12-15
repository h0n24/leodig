<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:34:33
         compiled from "/srv/www/helveti/themes/leodig/modules/blockcontactinfos/blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29708249546105396d4273-88299266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2c43895b0d16709a3b82a3eb0d933bd6d4d18a' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/modules/blockcontactinfos/blockcontactinfos.tpl',
      1 => 1412334120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29708249546105396d4273-88299266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54610539842461_60267634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610539842461_60267634')) {function content_54610539842461_60267634($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_function_mailto')) include '/srv/www/helveti/tools/smarty/plugins/function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<div id="block_contact_infos">
	<h3 class="title_block"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h3>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!=''){?><p><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, 'htmlall', 'UTF-8');?>
</p><?php }?>
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!=''){?><li class="link"><span class="fa fa-map-marker"> </span> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, 'htmlall', 'UTF-8');?>
</li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!=''){?><li class="link"><span class="fa fa-mobile-phone"> </span><?php echo smartyTranslate(array('s'=>'Phone','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, 'htmlall', 'UTF-8');?>
</li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!=''){?><li class="link"><span class="fa fa-envelope"> </span><?php echo smartyTranslate(array('s'=>'Email','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
: <?php echo smarty_function_mailto(array('address'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, 'htmlall', 'UTF-8'),'encode'=>"hex"),$_smarty_tpl);?>
</li><?php }?>
	</ul>
</div>
<!-- /MODULE Block contact infos -->
<?php }} ?>