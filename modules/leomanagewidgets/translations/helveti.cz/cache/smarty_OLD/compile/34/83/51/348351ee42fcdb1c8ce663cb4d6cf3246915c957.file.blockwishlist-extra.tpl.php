<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:34:32
         compiled from "/srv/www/helveti/themes/leodig/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129099214054610538a72d91-05499711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '348351ee42fcdb1c8ce663cb4d6cf3246915c957' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1412111611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129099214054610538a72d91-05499711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54610538aabbf2_31992000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610538aabbf2_31992000')) {function content_54610538aabbf2_31992000($_smarty_tpl) {?>

<p class="buttons_bottom_block">
	
	<a  href="#" id="wishlist_button wishlist_button<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
" class="btn-tooltip" onclick="LeoWishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), 1 ); return false;" title="<?php echo smartyTranslate(array('s'=>'Přidat do seznamu přání','mod'=>'blockwishlist'),$_smarty_tpl);?>
"><i class="fa fa-heart"></i><?php echo smartyTranslate(array('s'=>'Přidat do seznamu přání','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
</p>
<?php }} ?>