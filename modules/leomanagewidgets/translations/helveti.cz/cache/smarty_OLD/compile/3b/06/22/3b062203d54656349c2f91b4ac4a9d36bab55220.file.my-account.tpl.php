<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:40:01
         compiled from "/srv/www/helveti/themes/leodig/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46660623154610681131145-23084070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b062203d54656349c2f91b4ac4a9d36bab55220' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1415472886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46660623154610681131145-23084070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5461068115a204_53448117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5461068115a204_53448117')) {function content_5461068115a204_53448117($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
	<span class="fa fa-envelope"></span>
		<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>

	</a>
</li>
<?php }} ?>