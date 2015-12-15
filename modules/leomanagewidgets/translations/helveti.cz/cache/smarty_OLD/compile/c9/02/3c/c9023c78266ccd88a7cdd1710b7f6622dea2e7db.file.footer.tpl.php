<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:34:33
         compiled from "/srv/www/helveti/modules/leocustomajax/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176211291654610539c73be3-53184085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9023c78266ccd88a7cdd1710b7f6622dea2e7db' => 
    array (
      0 => '/srv/www/helveti/modules/leocustomajax/footer.tpl',
      1 => 1400606619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176211291654610539c73be3-53184085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leo_customajax_pn' => 0,
    'leo_customajax_rt' => 0,
    'leo_customajax_img' => 0,
    'leo_customajax_tran' => 0,
    'leo_customajax_qv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54610539d4d4b8_26424415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610539d4d4b8_26424415')) {function content_54610539d4d4b8_26424415($_smarty_tpl) {?><script type="text/javascript">
	var leoOption = {
		productNumber:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_pn']->value){?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_pn']->value;?>
<?php }else{ ?>0<?php }?>,
		productRating:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_rt']->value){?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_rt']->value;?>
<?php }else{ ?>0<?php }?>,
		productInfo:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_img']->value){?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_img']->value;?>
<?php }else{ ?>0<?php }?>,
		productTran:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_tran']->value){?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_tran']->value;?>
<?php }else{ ?>0<?php }?>,
		productQV:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_qv']->value){?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_qv']->value;?>
<?php }else{ ?>0<?php }?>
	}
    $(document).ready(function(){	
		var leoCustomAjax = new $.LeoCustomAjax();
        leoCustomAjax.processAjax();
    });
</script>
<?php }} ?>