<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:40:01
         compiled from "/srv/www/helveti/themes/leodig/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:579137785546106810fa3c4-06175693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef943ba8201c8abb1b773dbeadfa8b7a390c9ce3' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/modules/blockwishlist/my-account.tpl',
      1 => 1400606814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '579137785546106810fa3c4-06175693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlist_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54610681128156_08085760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610681128156_08085760')) {function content_54610681128156_08085760($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a href="<?php echo $_smarty_tpl->tpl_vars['wishlist_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<span class="fa fa-gift"></span>
		<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>