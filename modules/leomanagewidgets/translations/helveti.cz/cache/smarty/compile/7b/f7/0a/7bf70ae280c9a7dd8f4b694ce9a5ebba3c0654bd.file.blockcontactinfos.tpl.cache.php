<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:53:06
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/modules/blockcontactinfos/blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44831440756671902e1c960-77236230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bf70ae280c9a7dd8f4b694ce9a5ebba3c0654bd' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/modules/blockcontactinfos/blockcontactinfos.tpl',
      1 => 1412334120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44831440756671902e1c960-77236230',
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
  'unifunc' => 'content_56671902ea0816_54339400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56671902ea0816_54339400')) {function content_56671902ea0816_54339400($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_function_mailto')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/function.mailto.php';
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