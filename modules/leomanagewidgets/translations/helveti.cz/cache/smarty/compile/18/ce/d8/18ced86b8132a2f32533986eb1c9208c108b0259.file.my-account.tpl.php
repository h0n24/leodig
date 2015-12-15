<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 19:10:22
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15423117856671d0e7be956-68322764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18ced86b8132a2f32533986eb1c9208c108b0259' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/modules/blockwishlist/my-account.tpl',
      1 => 1400606814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15423117856671d0e7be956-68322764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlist_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56671d0e806e39_69546780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56671d0e806e39_69546780')) {function content_56671d0e806e39_69546780($_smarty_tpl) {?>

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