<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:52:56
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:904049237566718f8b936a7-76076128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fb2d4d13e7436277e4fd548c0e84f37c08e0a93' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1415725512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '904049237566718f8b936a7-76076128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718f8bb3254_50300953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718f8bb3254_50300953')) {function content_566718f8bb3254_50300953($_smarty_tpl) {?>

<p class="buttons_bottom_block">
	
	<a  href="#" id="wishlist_button wishlist_button<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
" class="btn-tooltip" onclick="LeoWishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), 1 ); return false;" title="<?php echo smartyTranslate(array('s'=>'Přidat do seznamu přání','mod'=>'blockwishlist'),$_smarty_tpl);?>
"><i class="fa fa-heart"></i><?php echo smartyTranslate(array('s'=>'Přidat na seznam přání','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
</p>
<?php }} ?>