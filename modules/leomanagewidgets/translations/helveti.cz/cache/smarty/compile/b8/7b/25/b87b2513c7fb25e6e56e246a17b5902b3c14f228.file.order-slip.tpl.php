<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 22:58:02
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/order-slip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:583777064566b46eaef6228-21106792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b87b2513c7fb25e6e56e246a17b5902b3c14f228' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/order-slip.tpl',
      1 => 1411869695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '583777064566b46eaef6228-21106792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'ordersSlip' => 0,
    'slip' => 0,
    'img_dir' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566b46eb0e16f7_56126551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566b46eb0e16f7_56126551')) {function content_566b46eb0e16f7_56126551($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1><?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>
</h1>
<p><?php echo smartyTranslate(array('s'=>'Credit slips you have received after cancelled orders'),$_smarty_tpl);?>
.</p>
<div class="block-center" id="block-history">
	<?php if ($_smarty_tpl->tpl_vars['ordersSlip']->value&&count($_smarty_tpl->tpl_vars['ordersSlip']->value)){?>
	<table id="order-list" class="std table-bordered">
		<thead>
			<tr>
				<th class="first_item"><?php echo smartyTranslate(array('s'=>'Credit slip'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Order'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Date issued'),$_smarty_tpl);?>
</th>
				<th class="last_item"><?php echo smartyTranslate(array('s'=>'View credit slip'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['slip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordersSlip']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slip']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['slip']->iteration=0;
 $_smarty_tpl->tpl_vars['slip']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slip']->key => $_smarty_tpl->tpl_vars['slip']->value){
$_smarty_tpl->tpl_vars['slip']->_loop = true;
 $_smarty_tpl->tpl_vars['slip']->iteration++;
 $_smarty_tpl->tpl_vars['slip']->index++;
 $_smarty_tpl->tpl_vars['slip']->first = $_smarty_tpl->tpl_vars['slip']->index === 0;
 $_smarty_tpl->tpl_vars['slip']->last = $_smarty_tpl->tpl_vars['slip']->iteration === $_smarty_tpl->tpl_vars['slip']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['slip']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['slip']->last;
?>
			<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }else{ ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2){?>alternate_item<?php }?>">
				<td class="bold"><span class="color-myaccount"><?php echo smartyTranslate(array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip'])),$_smarty_tpl);?>
</span></td>
				<td class="history_method"><a class="color-myaccount" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order']);?>
, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail'), ENT_QUOTES, 'UTF-8', true);?>
');"><?php echo smartyTranslate(array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order'])),$_smarty_tpl);?>
</a></td>
				<td class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['slip']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>
				<td class="history_invoice">
					<a href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order_slip']);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-order-slip',true,null,"id_order_slip=".$_tmp1), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Credit slip'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip'])),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/pdf.gif" alt="<?php echo smartyTranslate(array('s'=>'Order slip'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip'])),$_smarty_tpl);?>
" class="icon" /></a>
					<a href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order_slip']);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-order-slip',true,null,"id_order_slip=".$_tmp2), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Credit slip'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip'])),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'PDF'),$_smarty_tpl);?>
</a>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<div id="block-order-detail" class="hidden">&nbsp;</div>
	<?php }else{ ?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'You have not received any credit slips.'),$_smarty_tpl);?>
</p>
	<?php }?>
</div>
<ul class="footer_links clearfix cart_navigation">
	<li class="f_left"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" class="zpet-do-obchodu"><span class="fa fa-chevron-left"></span><?php echo smartyTranslate(array('s'=>'Back to your account'),$_smarty_tpl);?>
</a></li>
	<li class="f_right"><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" class="zpet-do-obchodu"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
<span class="fa fa-chevron-right"></span></a></li>
</ul>
<?php }} ?>