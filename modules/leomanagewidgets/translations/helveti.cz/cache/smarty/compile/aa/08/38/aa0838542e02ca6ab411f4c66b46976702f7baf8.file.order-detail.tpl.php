<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:56:07
         compiled from "/srv/www/helveti/helveti.cz/modules/add_gopay_new/views/templates/order-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:789628619566719b70f3f31-38575989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa0838542e02ca6ab411f4c66b46976702f7baf8' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/add_gopay_new/views/templates/order-detail.tpl',
      1 => 1449270100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '789628619566719b70f3f31-38575989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ps_16' => 0,
    'order' => 0,
    'opc' => 0,
    'link' => 0,
    'name_gopay' => 0,
    'ADD_GOPAY_STATUS_' => 0,
    'ADD_GOPAY_STATUS_CHOSEN_' => 0,
    'ADD_GOPAY_STATUS_TIMEOUT_' => 0,
    '_PS_OS_ERROR_' => 0,
    'ADD_GOPAY_STATUS_CANCELED_' => 0,
    'INLINE_MODE' => 0,
    'list_recurrents' => 0,
    'list' => 0,
    'id_session' => 0,
    'carrier' => 0,
    'shop_name' => 0,
    'invoice' => 0,
    'invoiceAllowed' => 0,
    'img_dir' => 0,
    'is_guest' => 0,
    'order_history' => 0,
    'state' => 0,
    'followup' => 0,
    'inv_adr_fields' => 0,
    'field_item' => 0,
    'address_invoice' => 0,
    'address_words' => 0,
    'word_item' => 0,
    'invoiceAddressFormatedValues' => 0,
    'dlv_adr_fields' => 0,
    'address_delivery' => 0,
    'deliveryAddressFormatedValues' => 0,
    'HOOK_ORDERDETAILDISPLAYED' => 0,
    'return_allowed' => 0,
    'priceDisplay' => 0,
    'use_tax' => 0,
    'currency' => 0,
    'products' => 0,
    'product' => 0,
    'group_use_tax' => 0,
    'productId' => 0,
    'productAttributeId' => 0,
    'customizedDatas' => 0,
    'customizationPerAddress' => 0,
    'customizationId' => 0,
    'customization' => 0,
    'type' => 0,
    'CUSTOMIZE_FILE' => 0,
    'datas' => 0,
    'pic_dir' => 0,
    'data' => 0,
    'CUSTOMIZE_TEXTFIELD' => 0,
    'customizationFieldName' => 0,
    'productQuantity' => 0,
    'discounts' => 0,
    'discount' => 0,
    'line' => 0,
    'messages' => 0,
    'message' => 0,
    'errors' => 0,
    'error' => 0,
    'message_confirmation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566719b7f06aa8_33910816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566719b7f06aa8_33910816')) {function content_566719b7f06aa8_33910816($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_replace')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_function_counter')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/function.counter.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.regex_replace.php';
?>

<?php if (!$_smarty_tpl->tpl_vars['ps_16']->value){?>

<?php if (isset($_smarty_tpl->tpl_vars['order']->value)){?>
<form action="<?php if (isset($_smarty_tpl->tpl_vars['opc']->value)&&$_smarty_tpl->tpl_vars['opc']->value){?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
<?php }?>" method="post" class="submit">
	<div>
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" name="id_order"/>
		<p class="title_block">
			<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Reorder'),$_smarty_tpl);?>
" name="submitReorder" class="button exclusive" />
			<?php echo smartyTranslate(array('s'=>'Order Reference %s - placed on','sprintf'=>$_smarty_tpl->tpl_vars['order']->value->getUniqReference()),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl);?>

					<?php if ($_smarty_tpl->tpl_vars['order']->value->module==$_smarty_tpl->tpl_vars['name_gopay']->value&&($_smarty_tpl->tpl_vars['order']->value->current_state==$_smarty_tpl->tpl_vars['ADD_GOPAY_STATUS_']->value||$_smarty_tpl->tpl_vars['order']->value->current_state==$_smarty_tpl->tpl_vars['ADD_GOPAY_STATUS_CHOSEN_']->value||$_smarty_tpl->tpl_vars['order']->value->current_state==$_smarty_tpl->tpl_vars['ADD_GOPAY_STATUS_TIMEOUT_']->value||$_smarty_tpl->tpl_vars['order']->value->current_state==$_smarty_tpl->tpl_vars['_PS_OS_ERROR_']->value||$_smarty_tpl->tpl_vars['order']->value->current_state==$_smarty_tpl->tpl_vars['ADD_GOPAY_STATUS_CANCELED_']->value)){?>
						<p style="margin-top:10px;">
							<a  href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('add_gopay_new','repeatPayment',array('orderId'=>$_tmp1,'paymentChannel'=>'ACCOUNT'),true);?>
"
								title="<?php echo smartyTranslate(array('s'=>'Pay with Gopay','mod'=>'add_gopay_new'),$_smarty_tpl);?>
"
								class="button"
								id="butmk_<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
"
								<?php if ($_smarty_tpl->tpl_vars['INLINE_MODE']->value){?>onClick="inlineFunction(this.href);"<?php }?>
							>
							<?php echo smartyTranslate(array('s'=>'Again, pay with Gopay','mod'=>'add_gopay_new'),$_smarty_tpl);?>

						</a></p>

					<?php }?>
		</p>
	</div>
</form>




<?php if (count($_smarty_tpl->tpl_vars['list_recurrents']->value)>0){?>
	<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Follow your order\'s recurrent payments','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</h1>
	<div class="table_block">
		<table class="detail_step_by_step table table-bordered">
			<thead>
				<tr>
					<th class="first_item"><?php echo smartyTranslate(array('s'=>'Payment date','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</th>
					<th class="first_item"><?php echo smartyTranslate(array('s'=>'Payment ID','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</th> 
					<th class="first_item"><?php echo smartyTranslate(array('s'=>'Result Payment','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_recurrents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['list']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['list']->iteration=0;
 $_smarty_tpl->tpl_vars['list']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["listRecurrents"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['list']->iteration++;
 $_smarty_tpl->tpl_vars['list']->index++;
 $_smarty_tpl->tpl_vars['list']->first = $_smarty_tpl->tpl_vars['list']->index === 0;
 $_smarty_tpl->tpl_vars['list']->last = $_smarty_tpl->tpl_vars['list']->iteration === $_smarty_tpl->tpl_vars['list']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["listRecurrents"]['first'] = $_smarty_tpl->tpl_vars['list']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["listRecurrents"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["listRecurrents"]['last'] = $_smarty_tpl->tpl_vars['list']->last;
?>
				<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['listRecurrents']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['listRecurrents']['last']){?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['listRecurrents']['index']%2){?>alternate_item<?php }else{ ?>item<?php }?>">
					<td class="step-by-step-date"><?php echo Tools::displayDate($_smarty_tpl->tpl_vars['list']->value['date_add'],@constant('null'),true);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['list']->value['id_session'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['list']->value['recurrence_state'];?>
</td> 
				</tr>
			<?php } ?>
			<?php if ($_smarty_tpl->tpl_vars['id_session']->value){?>
				<tr>
					<td colspan="3" style="text-align:right">
						<div class="conf" id="conf_<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" style="display:none"><?php echo smartyTranslate(array('s'=>'Recurring payments were terminated','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</div>
						<div class="error" id="error_<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" style="display:none"></div>
						<p style="margin-top:10px;">
							<a  href="#"
								title="<?php echo smartyTranslate(array('s'=>'Cancel recurrent','mod'=>'add_gopay_new'),$_smarty_tpl);?>
"
								class="btn btn-default button button-small"
								id="cancel_recurr_<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
"
								onclick="if (confirm('<?php echo smartyTranslate(array('s'=>'Update selected items?','mod'=>'add_gopay_new'),$_smarty_tpl);?>
'))cancelRecurrent(<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
, <?php echo $_smarty_tpl->tpl_vars['id_session']->value;?>
); return false;"
								
							>
								<span><?php echo smartyTranslate(array('s'=>'Cancel recurrent','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span>
							</a>
						</p>
					</td>
				</tr>
			<?php }?>
			</tbody>
		</table>
	</div>
<?php }?>



<div class="info-order">
<?php if ($_smarty_tpl->tpl_vars['carrier']->value->id){?><p><strong><?php echo smartyTranslate(array('s'=>'Carrier'),$_smarty_tpl);?>
</strong> <?php if ($_smarty_tpl->tpl_vars['carrier']->value->name=="0"){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['carrier']->value->name, 'htmlall', 'UTF-8');?>
<?php }?></p><?php }?>
<p><strong><?php echo smartyTranslate(array('s'=>'Payment method'),$_smarty_tpl);?>
</strong> <span class="color-myaccount"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['order']->value->payment, 'htmlall', 'UTF-8');?>
</span></p>
<?php if ($_smarty_tpl->tpl_vars['invoice']->value&&$_smarty_tpl->tpl_vars['invoiceAllowed']->value){?>
<p>
	<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/pdf.gif" alt="" class="icon" />
	<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true);?>
?id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
<?php if ($_smarty_tpl->tpl_vars['is_guest']->value){?>&secure_key=<?php echo $_smarty_tpl->tpl_vars['order']->value->secure_key;?>
<?php }?>"><?php echo smartyTranslate(array('s'=>'Download your invoice as a PDF file.'),$_smarty_tpl);?>
</a>
</p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['order']->value->recyclable){?>
<p><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/recyclable.gif" alt="" class="icon" />&nbsp;<?php echo smartyTranslate(array('s'=>'You have given permission to receive your order in recycled packaging.'),$_smarty_tpl);?>
</p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['order']->value->gift){?>
	<p><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/gift.gif" alt="" class="icon" />&nbsp;<?php echo smartyTranslate(array('s'=>'You have requested gift wrapping for this order.'),$_smarty_tpl);?>
</p>
	<p><?php echo smartyTranslate(array('s'=>'Message'),$_smarty_tpl);?>
 <?php echo nl2br($_smarty_tpl->tpl_vars['order']->value->gift_message);?>
</p>
<?php }?>
</div>

<?php if (count($_smarty_tpl->tpl_vars['order_history']->value)){?>
<h3><?php echo smartyTranslate(array('s'=>'Follow your order\'s status step-by-step'),$_smarty_tpl);?>
</h3>
<div class="table_block">
	<table class="detail_step_by_step std">
		<thead>
			<tr>
				<th class="first_item"><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</th>
				<th class="last_item"><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_history']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['state']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['state']->iteration=0;
 $_smarty_tpl->tpl_vars['state']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value){
$_smarty_tpl->tpl_vars['state']->_loop = true;
 $_smarty_tpl->tpl_vars['state']->iteration++;
 $_smarty_tpl->tpl_vars['state']->index++;
 $_smarty_tpl->tpl_vars['state']->first = $_smarty_tpl->tpl_vars['state']->index === 0;
 $_smarty_tpl->tpl_vars['state']->last = $_smarty_tpl->tpl_vars['state']->iteration === $_smarty_tpl->tpl_vars['state']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['first'] = $_smarty_tpl->tpl_vars['state']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['last'] = $_smarty_tpl->tpl_vars['state']->last;
?>
			<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['last']){?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['index']%2){?>alternate_item<?php }else{ ?>item<?php }?>">
				<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['state']->value['date_add'],'full'=>1),$_smarty_tpl);?>
</td>
				<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['state']->value['ostate_name'], 'htmlall', 'UTF-8');?>
</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['followup']->value)){?>
<p class="bold"><?php echo smartyTranslate(array('s'=>'Click the following link to track the delivery of your order'),$_smarty_tpl);?>
</p>
<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['followup']->value, 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['followup']->value, 'htmlall', 'UTF-8');?>
</a>
<?php }?>

<div class="adresses_bloc clearfix">
<br />
<ul class="address item <?php if ($_smarty_tpl->tpl_vars['order']->value->isVirtual()){?>full_width<?php }?>">
	<li class="address_title"><?php echo smartyTranslate(array('s'=>'Billing'),$_smarty_tpl);?>
</li>
	<?php  $_smarty_tpl->tpl_vars['field_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inv_adr_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_item']->key => $_smarty_tpl->tpl_vars['field_item']->value){
$_smarty_tpl->tpl_vars['field_item']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['field_item']->value=="company"&&isset($_smarty_tpl->tpl_vars['address_invoice']->value->company)){?><li class="address_company"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->company, 'htmlall', 'UTF-8');?>
</li>
		<?php }elseif($_smarty_tpl->tpl_vars['field_item']->value=="address2"&&$_smarty_tpl->tpl_vars['address_invoice']->value->address2){?><li class="address_address2"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->address2, 'htmlall', 'UTF-8');?>
</li>
		<?php }elseif($_smarty_tpl->tpl_vars['field_item']->value=="phone_mobile"&&$_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile){?><li class="address_phone_mobile"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile, 'htmlall', 'UTF-8');?>
</li>
		<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['address_words'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['field_item']->value), null, 0);?>
				<li><?php  $_smarty_tpl->tpl_vars['word_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['word_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address_words']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['word_item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['word_item']->key => $_smarty_tpl->tpl_vars['word_item']->value){
$_smarty_tpl->tpl_vars['word_item']->_loop = true;
 $_smarty_tpl->tpl_vars['word_item']->index++;
 $_smarty_tpl->tpl_vars['word_item']->first = $_smarty_tpl->tpl_vars['word_item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["word_loop"]['first'] = $_smarty_tpl->tpl_vars['word_item']->first;
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['word_loop']['first']){?> <?php }?><span class="address_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['invoiceAddressFormatedValues']->value[smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','')], 'htmlall', 'UTF-8');?>
</span><?php } ?></li>
		<?php }?>

	<?php } ?>
</ul>
<ul class="address alternate_item" <?php if ($_smarty_tpl->tpl_vars['order']->value->isVirtual()){?>style="display:none;"<?php }?>>
	<li class="address_title"><?php echo smartyTranslate(array('s'=>'Delivery'),$_smarty_tpl);?>
</li>
	<?php  $_smarty_tpl->tpl_vars['field_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dlv_adr_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_item']->key => $_smarty_tpl->tpl_vars['field_item']->value){
$_smarty_tpl->tpl_vars['field_item']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['field_item']->value=="company"&&isset($_smarty_tpl->tpl_vars['address_delivery']->value->company)){?><li class="address_company"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_delivery']->value->company, 'htmlall', 'UTF-8');?>
</li>
		<?php }elseif($_smarty_tpl->tpl_vars['field_item']->value=="address2"&&$_smarty_tpl->tpl_vars['address_delivery']->value->address2){?><li class="address_address2"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_delivery']->value->address2, 'htmlall', 'UTF-8');?>
</li>
		<?php }elseif($_smarty_tpl->tpl_vars['field_item']->value=="phone_mobile"&&$_smarty_tpl->tpl_vars['address_delivery']->value->phone_mobile){?><li class="address_phone_mobile"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_delivery']->value->phone_mobile, 'htmlall', 'UTF-8');?>
</li>
		<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['address_words'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['field_item']->value), null, 0);?> 
				<li><?php  $_smarty_tpl->tpl_vars['word_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['word_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address_words']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['word_item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['word_item']->key => $_smarty_tpl->tpl_vars['word_item']->value){
$_smarty_tpl->tpl_vars['word_item']->_loop = true;
 $_smarty_tpl->tpl_vars['word_item']->index++;
 $_smarty_tpl->tpl_vars['word_item']->first = $_smarty_tpl->tpl_vars['word_item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["word_loop"]['first'] = $_smarty_tpl->tpl_vars['word_item']->first;
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['word_loop']['first']){?> <?php }?><span class="address_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deliveryAddressFormatedValues']->value[smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','')], 'htmlall', 'UTF-8');?>
</span><?php } ?></li>
		<?php }?>
	<?php } ?>
</ul>
</div>
<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDERDETAILDISPLAYED']->value;?>

<?php if (!$_smarty_tpl->tpl_vars['is_guest']->value){?><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post"><?php }?>
<div id="order-detail-content" class="table_block">
	<table class="std">
		<thead>
			<tr>
				<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?><th class="first_item"><input type="checkbox" /></th><?php }?>
				<th class="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?>item<?php }else{ ?>first_item<?php }?>"><?php echo smartyTranslate(array('s'=>'Reference'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Product'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</th>
				<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?>
					<th class="item"><?php echo smartyTranslate(array('s'=>'Returned'),$_smarty_tpl);?>
</th>
				<?php }?>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Unit price'),$_smarty_tpl);?>
</th>
				<th class="last_item"><?php echo smartyTranslate(array('s'=>'Total price'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tfoot>
			<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value&&$_smarty_tpl->tpl_vars['use_tax']->value){?>
				<tr class="item">
					<td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value||$_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?><?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()&&$_smarty_tpl->tpl_vars['return_allowed']->value){?>7<?php }else{ ?>6<?php }?><?php }else{ ?>5<?php }?>">
						<?php echo smartyTranslate(array('s'=>'Total products (tax excl.)'),$_smarty_tpl);?>
 <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
					</td>
				</tr>
			<?php }?>
			<tr class="item">
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value||$_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?><?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()&&$_smarty_tpl->tpl_vars['return_allowed']->value){?>7<?php }else{ ?>6<?php }?><?php }else{ ?>5<?php }?>">
					<?php echo smartyTranslate(array('s'=>'Total products'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value){?><?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?>: <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
				</td>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['order']->value->total_discounts>0){?>
			<tr class="item">
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value||$_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?><?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()&&$_smarty_tpl->tpl_vars['return_allowed']->value){?>7<?php }else{ ?>6<?php }?><?php }else{ ?>5<?php }?>">
					<?php echo smartyTranslate(array('s'=>'Total vouchers:'),$_smarty_tpl);?>
 <span class="price-discount"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_discounts,'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'convert'=>1),$_smarty_tpl);?>
</span>
				</td>
			</tr>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['order']->value->total_wrapping>0){?>
			<tr class="item">
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value||$_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?><?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()&&$_smarty_tpl->tpl_vars['return_allowed']->value){?>7<?php }else{ ?>6<?php }?><?php }else{ ?>5<?php }?>">
					<?php echo smartyTranslate(array('s'=>'Total gift wrapping cost:'),$_smarty_tpl);?>
 <span class="price-wrapping"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_wrapping,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
				</td>
			</tr>
			<?php }?>
			<tr class="item">
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value||$_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?><?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()&&$_smarty_tpl->tpl_vars['return_allowed']->value){?>7<?php }else{ ?>6<?php }?><?php }else{ ?>5<?php }?>">
					<?php echo smartyTranslate(array('s'=>'Total shipping'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value){?><?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?>: <span class="price-shipping"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_shipping,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
				</td>
			</tr>
			<tr class="totalprice item">
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value||$_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?><?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()&&$_smarty_tpl->tpl_vars['return_allowed']->value){?>7<?php }else{ ?>6<?php }?><?php }else{ ?>5<?php }?>">
					<?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
 <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_paid,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
				</td>
			</tr>
		</tfoot>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']++;
?>
			<?php if (!isset($_smarty_tpl->tpl_vars['product']->value['deleted'])){?>
				<?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
				<?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_attribute_id'], null, 0);?>
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['customizedDatas'])){?>
					<?php $_smarty_tpl->tpl_vars['productQuantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_quantity']-$_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'], null, 0);?>
				<?php }else{ ?>
					<?php $_smarty_tpl->tpl_vars['productQuantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_quantity'], null, 0);?>
				<?php }?>
				<!-- Customized products -->
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['customizedDatas'])){?>
					<tr class="item">
						<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?><td class="order_cb"></td><?php }?>
						<td><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['product_reference']){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_reference'], 'htmlall', 'UTF-8');?>
<?php }else{ ?>--<?php }?></label></td>
						<td class="bold">
							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_name'], 'htmlall', 'UTF-8');?>
</label>
						</td>
						<td><input class="order_qte_input"  name="order_qte_input[<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['index'];?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']);?>
" /><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']);?>
</span></label></td>
						<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['product']->value['qty_returned'];?>

							</td>
						<?php }?>
						<td>
							<label class="price" for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
								<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value){?>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

								<?php }else{ ?>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

								<?php }?>
							</label>
						</td>
						<td>
							<label class="price" for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
								<?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])){?>
									<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value){?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization_wt'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

									<?php }else{ ?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

									<?php }?>
								<?php }else{ ?>
									<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value){?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

									<?php }else{ ?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

									<?php }?>
								<?php }?>
							</label>
						</td>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['customizationPerAddress'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customizationPerAddress']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizedDatas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customizationPerAddress']->key => $_smarty_tpl->tpl_vars['customizationPerAddress']->value){
$_smarty_tpl->tpl_vars['customizationPerAddress']->_loop = true;
?>
						<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_smarty_tpl->tpl_vars['customizationId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customizationPerAddress']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value){
$_smarty_tpl->tpl_vars['customization']->_loop = true;
 $_smarty_tpl->tpl_vars['customizationId']->value = $_smarty_tpl->tpl_vars['customization']->key;
?>
						<tr class="alternate_item">
							<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?><td class="order_cb"><input type="checkbox" id="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" name="customization_ids[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
][]" value="<?php echo intval($_smarty_tpl->tpl_vars['customizationId']->value);?>
" /></td><?php }?>
							<td colspan="2">
							<?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datas']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
$_smarty_tpl->tpl_vars['datas']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['CUSTOMIZE_FILE']->value){?>
								<ul class="customizationUploaded">
									<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
										<li><img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
_small" alt="" class="customizationUploaded" /></li>
									<?php } ?>
								</ul>
								<?php }elseif($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value){?>
								<ul class="typedText"><?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

									<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['customizationFieldName'] = new Smarty_variable(("Text #").($_smarty_tpl->tpl_vars['data']->value['id_customization_field']), null, 0);?>
										<li><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['customizationFieldName']->value : $tmp);?>
 : <?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
</li>
									<?php } ?>
								</ul>
								<?php }?>
							<?php } ?>
							</td>
							<td>
								<input class="order_qte_input" name="customization_qty_input[<?php echo intval($_smarty_tpl->tpl_vars['customizationId']->value);?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['customization']->value['quantity']);?>
" /><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['customization']->value['quantity']);?>
</span></label>
							</td>
							<td colspan="2"></td>
						</tr>
						<?php } ?>
					<?php } ?>
				<?php }?>
				<!-- Classic products -->
				<?php if ($_smarty_tpl->tpl_vars['product']->value['product_quantity']>$_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']){?>
					<tr class="item">
						<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?><td class="order_cb"><input type="checkbox" id="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" name="ids_order_detail[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
]" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" /></td><?php }?>
						<td><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['product_reference']){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_reference'], 'htmlall', 'UTF-8');?>
<?php }else{ ?>--<?php }?></label></td>
						<td class="bold">
							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
								<?php if ($_smarty_tpl->tpl_vars['product']->value['download_hash']&&$_smarty_tpl->tpl_vars['invoice']->value&&$_smarty_tpl->tpl_vars['product']->value['display_filename']!=''&&$_smarty_tpl->tpl_vars['product']->value['product_quantity_refunded']==0&&$_smarty_tpl->tpl_vars['product']->value['product_quantity_return']==0){?>
									<?php if (isset($_smarty_tpl->tpl_vars['is_guest']->value)&&$_smarty_tpl->tpl_vars['is_guest']->value){?>
									<a href="<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['filename'], 'htmlall', 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['download_hash'], 'htmlall', 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,null,"key=".$_tmp2."-".$_tmp3."&amp;id_order=".((string)$_smarty_tpl->tpl_vars['order']->value->id)."&secure_key=".((string)$_smarty_tpl->tpl_vars['order']->value->secure_key)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Download this product'),$_smarty_tpl);?>
">
									<?php }else{ ?>
										<a href="<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['filename'], 'htmlall', 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['download_hash'], 'htmlall', 'UTF-8');?>
<?php $_tmp5=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,null,"key=".$_tmp4."-".$_tmp5), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Download this product'),$_smarty_tpl);?>
">
									<?php }?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/download_product.gif" class="icon" alt="<?php echo smartyTranslate(array('s'=>'Download product'),$_smarty_tpl);?>
" />
									</a>
									<?php if (isset($_smarty_tpl->tpl_vars['is_guest']->value)&&$_smarty_tpl->tpl_vars['is_guest']->value){?>
										<a href="<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['filename'], 'htmlall', 'UTF-8');?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['download_hash'], 'htmlall', 'UTF-8');?>
<?php $_tmp7=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,null,"key=".$_tmp6."-".$_tmp7."&id_order=".((string)$_smarty_tpl->tpl_vars['order']->value->id)."&secure_key=".((string)$_smarty_tpl->tpl_vars['order']->value->secure_key)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Download this product'),$_smarty_tpl);?>
"> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_name'], 'htmlall', 'UTF-8');?>
 	</a>
									<?php }else{ ?>
									<a href="<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['filename'], 'htmlall', 'UTF-8');?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['download_hash'], 'htmlall', 'UTF-8');?>
<?php $_tmp9=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,null,"key=".$_tmp8."-".$_tmp9), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Download this product'),$_smarty_tpl);?>
"> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_name'], 'htmlall', 'UTF-8');?>
 	</a>
									<?php }?>
								<?php }else{ ?>
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_name'], 'htmlall', 'UTF-8');?>

								<?php }?>
							</label>
						</td>
						<td><input class="order_qte_input" name="order_qte_input[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['productQuantity']->value);?>
" /><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['productQuantity']->value);?>
</span></label></td>
						<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['product']->value['qty_returned'];?>

							</td>
						<?php }?>
						<td>
							<label class="price" for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
							<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value){?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

							<?php }?>
							</label>
						</td>
						<td>
							<label class="price" for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
							<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value){?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

							<?php }?>
							</label>
						</td>
					</tr>
				<?php }?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value){
$_smarty_tpl->tpl_vars['discount']->_loop = true;
?>
			<tr class="item">
				<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['discount']->value['name'], 'htmlall', 'UTF-8');?>
</td>
				<td><?php echo smartyTranslate(array('s'=>'Voucher'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['discount']->value['name'], 'htmlall', 'UTF-8');?>
</td>
				<td><span class="order_qte_span editable">1</span></td>
				<td>&nbsp;</td>
				<td><?php if ($_smarty_tpl->tpl_vars['discount']->value['value']!=0.00){?>-<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</td>
				<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?>
				<td>&nbsp;</td>
				<?php }?>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
	<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?>
	<div id="returnOrderMessage">
		<h3><?php echo smartyTranslate(array('s'=>'Merchandise return'),$_smarty_tpl);?>
</h3>
		<p><?php echo smartyTranslate(array('s'=>'If you wish to return one or more products, please mark the corresponding boxes and provide an explanation for the return. When complete, click the button below.'),$_smarty_tpl);?>
</p>
		<p class="textarea">
			<textarea cols="67" rows="3" name="returnText"></textarea>
		</p>
		<p class="submit">
			<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Make an RMA slip'),$_smarty_tpl);?>
" name="submitReturnMerchandise" class="button_large" />
			<input type="hidden" class="hidden" value="<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
" name="id_order" />
		</p>
	</div>
	<br />
	<?php }?>
	</form>
<div class="table_block">
<?php if (count($_smarty_tpl->tpl_vars['order']->value->getShipping())>0){?>
	<table class="std">
		<thead>
			<tr>
				<th class="first_item"><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Carrier'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Weight'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Shipping cost'),$_smarty_tpl);?>
</th>
				<th class="last_item"><?php echo smartyTranslate(array('s'=>'Tracking number'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value->getShipping(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
			<tr class="item">
				<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['line']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['line']->value['carrier_name'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['line']->value['weight']>0){?><?php echo sprintf("%.3f",$_smarty_tpl->tpl_vars['line']->value['weight']);?>
 <?php echo Configuration::get('PS_WEIGHT_UNIT');?>
<?php }else{ ?>-<?php }?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod()==@constant('PS_TAX_INC')){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl);?>
<?php }?></td>
				<td>
					<span id="shipping_number_show"><?php if ($_smarty_tpl->tpl_vars['line']->value['tracking_number']){?><?php if ($_smarty_tpl->tpl_vars['line']->value['url']&&$_smarty_tpl->tpl_vars['line']->value['tracking_number']){?><a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['line']->value['url'],'@',$_smarty_tpl->tpl_vars['line']->value['tracking_number']);?>
"><?php echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];?>
<?php }?><?php }else{ ?>-<?php }?></span>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }?>
</div>
<br />
<?php if (!$_smarty_tpl->tpl_vars['is_guest']->value){?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value)){?>
	<h3><?php echo smartyTranslate(array('s'=>'Messages'),$_smarty_tpl);?>
</h3>
	<div class="table_block">
		<table class="detail_step_by_step std">
			<thead>
				<tr>
					<th class="first_item" style="width:150px;"><?php echo smartyTranslate(array('s'=>'From'),$_smarty_tpl);?>
</th>
					<th class="last_item"><?php echo smartyTranslate(array('s'=>'Message'),$_smarty_tpl);?>
</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['message']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['message']->iteration=0;
 $_smarty_tpl->tpl_vars['message']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
 $_smarty_tpl->tpl_vars['message']->iteration++;
 $_smarty_tpl->tpl_vars['message']->index++;
 $_smarty_tpl->tpl_vars['message']->first = $_smarty_tpl->tpl_vars['message']->index === 0;
 $_smarty_tpl->tpl_vars['message']->last = $_smarty_tpl->tpl_vars['message']->iteration === $_smarty_tpl->tpl_vars['message']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['first'] = $_smarty_tpl->tpl_vars['message']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['last'] = $_smarty_tpl->tpl_vars['message']->last;
?>
				<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['last']){?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['index']%2){?>alternate_item<?php }else{ ?>item<?php }?>">
					<td>
						<?php if (isset($_smarty_tpl->tpl_vars['message']->value['elastname'])&&$_smarty_tpl->tpl_vars['message']->value['elastname']){?>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value['efirstname'], 'htmlall', 'UTF-8');?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value['elastname'], 'htmlall', 'UTF-8');?>

						<?php }elseif($_smarty_tpl->tpl_vars['message']->value['clastname']){?>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value['cfirstname'], 'htmlall', 'UTF-8');?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value['clastname'], 'htmlall', 'UTF-8');?>

						<?php }else{ ?>
							<b><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
</b>
						<?php }?>
						<br />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>1),$_smarty_tpl);?>

					</td>
					<td><?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value['message'], 'htmlall', 'UTF-8'));?>
</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value){?>
		<div class="error">
			<p><?php if (count($_smarty_tpl->tpl_vars['errors']->value)>1){?><?php echo smartyTranslate(array('s'=>'There are %d errors','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There is %d error','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php }?></p>
			<ol>
			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
			<?php } ?>
			</ol>
		</div>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['message_confirmation']->value)&&$_smarty_tpl->tpl_vars['message_confirmation']->value){?>
	<p class="success">
		<?php echo smartyTranslate(array('s'=>'Message successfully sent'),$_smarty_tpl);?>

	</p>
	<?php }?>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std" id="sendOrderMessage">
		<h3><?php echo smartyTranslate(array('s'=>'Add a message'),$_smarty_tpl);?>
</h3>
		<p><?php echo smartyTranslate(array('s'=>'If you would like to add a comment about your order, please write it in the field below.'),$_smarty_tpl);?>
</p>
		<p>
		<label for="id_product"><?php echo smartyTranslate(array('s'=>'Product'),$_smarty_tpl);?>
</label>
			<select name="id_product" style="width:300px;">
				<option value="0"><?php echo smartyTranslate(array('s'=>'-- Choose --'),$_smarty_tpl);?>
</option>
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']++;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_name'];?>
</option>
				<?php } ?>
			</select>
		</p>
		<p class="textarea">
			<textarea cols="67" rows="3" name="msgText"></textarea>
		</p>
		<p class="submit">
			<input type="hidden" name="id_order" value="<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
" />
			<input type="submit" class="button" name="submitMessage" value="<?php echo smartyTranslate(array('s'=>'Send'),$_smarty_tpl);?>
"/>
		</p>
	</form>
<?php }else{ ?>
<p><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/infos.gif" alt="" class="icon" />&nbsp;<?php echo smartyTranslate(array('s'=>'You cannot return merchandise with a guest account'),$_smarty_tpl);?>
</p>
<?php }?>
<?php }?>


<?php }else{ ?>
	



<div class="box box-small clearfix">
<?php if (isset($_smarty_tpl->tpl_vars['order']->value)){?>
<form id="submitReorder" action="<?php if (isset($_smarty_tpl->tpl_vars['opc']->value)&&$_smarty_tpl->tpl_vars['opc']->value){?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
<?php }?>" method="post" class="submit">
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" name="id_order"/>
		<input type="hidden" value="" name="submitReorder"/>
		
			<a href="#" onclick="$(this).closest('form').submit(); return false;" class="button btn btn-default button-medium pull-right"><span><?php echo smartyTranslate(array('s'=>'Reorder'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></a>
	
</form>
		<p class="dark">
			<strong><?php echo smartyTranslate(array('s'=>'Order Reference %s - placed on','sprintf'=>$_smarty_tpl->tpl_vars['order']->value->getUniqReference()),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl);?>
</strong>
					<?php if ($_smarty_tpl->tpl_vars['order']->value->module==$_smarty_tpl->tpl_vars['name_gopay']->value&&($_smarty_tpl->tpl_vars['order']->value->current_state==$_smarty_tpl->tpl_vars['ADD_GOPAY_STATUS_']->value||$_smarty_tpl->tpl_vars['order']->value->current_state==$_smarty_tpl->tpl_vars['ADD_GOPAY_STATUS_CHOSEN_']->value||$_smarty_tpl->tpl_vars['order']->value->current_state==$_smarty_tpl->tpl_vars['ADD_GOPAY_STATUS_TIMEOUT_']->value||$_smarty_tpl->tpl_vars['order']->value->current_state==$_smarty_tpl->tpl_vars['_PS_OS_ERROR_']->value||$_smarty_tpl->tpl_vars['order']->value->current_state==$_smarty_tpl->tpl_vars['ADD_GOPAY_STATUS_CANCELED_']->value)){?>
						<p style="margin-top:10px;">
							<a  href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
<?php $_tmp10=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('add_gopay_new','repeatPayment',array('orderId'=>$_tmp10,'paymentChannel'=>'ACCOUNT'),true);?>
"
								title="<?php echo smartyTranslate(array('s'=>'Pay with Gopay','mod'=>'add_gopay_new'),$_smarty_tpl);?>
"
								class="button"
								id="butmk_<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
"
								<?php if ($_smarty_tpl->tpl_vars['INLINE_MODE']->value){?>onClick="inlineFunction(this.href);"<?php }?>
							>
							<?php echo smartyTranslate(array('s'=>'Again, pay with Gopay','mod'=>'add_gopay_new'),$_smarty_tpl);?>

						</a></p>

					<?php }?>
		</p>
</div>



<?php if (count($_smarty_tpl->tpl_vars['list_recurrents']->value)>0){?>
	<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Follow your order\'s recurrent payments','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</h1>
	<div class="table_block">
		<table class="detail_step_by_step table table-bordered">
			<thead>
				<tr>
					<th class="first_item"><?php echo smartyTranslate(array('s'=>'Payment date','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</th>
					<th class="first_item"><?php echo smartyTranslate(array('s'=>'Payment ID','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</th> 
					<th class="first_item"><?php echo smartyTranslate(array('s'=>'Result Payment','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_recurrents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['list']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['list']->iteration=0;
 $_smarty_tpl->tpl_vars['list']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["listRecurrents"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['list']->iteration++;
 $_smarty_tpl->tpl_vars['list']->index++;
 $_smarty_tpl->tpl_vars['list']->first = $_smarty_tpl->tpl_vars['list']->index === 0;
 $_smarty_tpl->tpl_vars['list']->last = $_smarty_tpl->tpl_vars['list']->iteration === $_smarty_tpl->tpl_vars['list']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["listRecurrents"]['first'] = $_smarty_tpl->tpl_vars['list']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["listRecurrents"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["listRecurrents"]['last'] = $_smarty_tpl->tpl_vars['list']->last;
?>
				<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['listRecurrents']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['listRecurrents']['last']){?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['listRecurrents']['index']%2){?>alternate_item<?php }else{ ?>item<?php }?>">
					<td class="step-by-step-date"><?php echo Tools::displayDate($_smarty_tpl->tpl_vars['list']->value['date_add'],@constant('null'),true);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['list']->value['id_session'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['list']->value['recurrence_state'];?>
</td> 
				</tr>
			<?php } ?>
			<?php if ($_smarty_tpl->tpl_vars['id_session']->value){?>
				<tr>
					<td colspan="3" style="text-align:right">
						<div class="conf" id="conf_<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" style="display:none"><?php echo smartyTranslate(array('s'=>'Recurring payments were terminated','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</div>
						<div class="error" id="error_<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" style="display:none"></div>
						<p style="margin-top:10px;">
							<a  href="#"
								title="<?php echo smartyTranslate(array('s'=>'Cancel recurrent','mod'=>'add_gopay_new'),$_smarty_tpl);?>
"
								class="btn btn-default button button-small"
								id="cancel_recurr_<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
"
								onclick="if (confirm('<?php echo smartyTranslate(array('s'=>'Update selected items?','mod'=>'add_gopay_new'),$_smarty_tpl);?>
'))cancelRecurrent(<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
, <?php echo $_smarty_tpl->tpl_vars['id_session']->value;?>
); return false;"
								
							>
								<span><?php echo smartyTranslate(array('s'=>'Cancel recurrent','mod'=>'add_gopay_new'),$_smarty_tpl);?>
</span>
							</a>
						</p>
					</td>
				</tr>
			<?php }?>
			</tbody>
		</table>
	</div>
<?php }?>




<div class="info-order box">
	<?php if ($_smarty_tpl->tpl_vars['carrier']->value->id){?><p><strong class="dark"><?php echo smartyTranslate(array('s'=>'Carrier'),$_smarty_tpl);?>
</strong> <?php if ($_smarty_tpl->tpl_vars['carrier']->value->name=="0"){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'html', 'UTF-8');?>
<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['carrier']->value->name, 'html', 'UTF-8');?>
<?php }?></p><?php }?>
	<p><strong class="dark"><?php echo smartyTranslate(array('s'=>'Payment method'),$_smarty_tpl);?>
</strong> <span class="color-myaccount"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['order']->value->payment, 'html', 'UTF-8');?>
</span></p>
	<?php if ($_smarty_tpl->tpl_vars['invoice']->value&&$_smarty_tpl->tpl_vars['invoiceAllowed']->value){?>
	<p>
		<i class="icon-file-text"></i>
		<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true);?>
?id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
<?php if ($_smarty_tpl->tpl_vars['is_guest']->value){?>&secure_key=<?php echo $_smarty_tpl->tpl_vars['order']->value->secure_key;?>
<?php }?>"><?php echo smartyTranslate(array('s'=>'Download your invoice as a PDF file.'),$_smarty_tpl);?>
</a>
	</p>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['order']->value->recyclable){?>
	<p><i class="icon-repeat"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'You have given permission to receive your order in recycled packaging.'),$_smarty_tpl);?>
</p>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['order']->value->gift){?>
		<p><i class="icon-gift"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'You have requested gift wrapping for this order.'),$_smarty_tpl);?>
</p>
		<p><strong class="dark"><?php echo smartyTranslate(array('s'=>'Message'),$_smarty_tpl);?>
</strong> <?php echo nl2br($_smarty_tpl->tpl_vars['order']->value->gift_message);?>
</p>
	<?php }?>
</div>

<?php if (count($_smarty_tpl->tpl_vars['order_history']->value)){?>
<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Follow your order\'s status step-by-step'),$_smarty_tpl);?>
</h1>
<div class="table_block">
	<table class="detail_step_by_step table table-bordered">
		<thead>
			<tr>
				<th class="first_item"><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</th>
				<th class="last_item"><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_history']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['state']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['state']->iteration=0;
 $_smarty_tpl->tpl_vars['state']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value){
$_smarty_tpl->tpl_vars['state']->_loop = true;
 $_smarty_tpl->tpl_vars['state']->iteration++;
 $_smarty_tpl->tpl_vars['state']->index++;
 $_smarty_tpl->tpl_vars['state']->first = $_smarty_tpl->tpl_vars['state']->index === 0;
 $_smarty_tpl->tpl_vars['state']->last = $_smarty_tpl->tpl_vars['state']->iteration === $_smarty_tpl->tpl_vars['state']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['first'] = $_smarty_tpl->tpl_vars['state']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['last'] = $_smarty_tpl->tpl_vars['state']->last;
?>
			<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['last']){?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['index']%2){?>alternate_item<?php }else{ ?>item<?php }?>">
				<td class="step-by-step-date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['state']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>
				<td><span class="label<?php if ($_smarty_tpl->tpl_vars['state']->value['id_order_state']==1||$_smarty_tpl->tpl_vars['state']->value['id_order_state']==10||$_smarty_tpl->tpl_vars['state']->value['id_order_state']==11){?> label-info<?php }elseif($_smarty_tpl->tpl_vars['state']->value['id_order_state']==5||$_smarty_tpl->tpl_vars['state']->value['id_order_state']==2||$_smarty_tpl->tpl_vars['state']->value['id_order_state']==12){?> label-success<?php }elseif($_smarty_tpl->tpl_vars['state']->value['id_order_state']==6||$_smarty_tpl->tpl_vars['state']->value['id_order_state']==7||$_smarty_tpl->tpl_vars['state']->value['id_order_state']==8){?> label-danger<?php }elseif($_smarty_tpl->tpl_vars['state']->value['id_order_state']==3||$_smarty_tpl->tpl_vars['state']->value['id_order_state']==9||$_smarty_tpl->tpl_vars['state']->value['id_order_state']==4){?> label-warning<?php }?>" <?php if ($_smarty_tpl->tpl_vars['state']->value['id_order_state']>12){?>style="background-color:#3F4147;"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['state']->value['ostate_name'], 'html', 'UTF-8');?>
</span>
                    </td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['followup']->value)){?>
<p class="bold"><?php echo smartyTranslate(array('s'=>'Click the following link to track the delivery of your order'),$_smarty_tpl);?>
</p>
<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['followup']->value, 'html', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['followup']->value, 'html', 'UTF-8');?>
</a>
<?php }?>

<div class="adresses_bloc">
	<div class="row">
		<div class="col-xs-12 col-sm-6"<?php if ($_smarty_tpl->tpl_vars['order']->value->isVirtual()){?> style="display:none;"<?php }?>>
			<ul class="address alternate_item box">
				<li><h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Delivery address'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['address_delivery']->value->alias;?>
)</h3></li>
				<?php  $_smarty_tpl->tpl_vars['field_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dlv_adr_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_item']->key => $_smarty_tpl->tpl_vars['field_item']->value){
$_smarty_tpl->tpl_vars['field_item']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['field_item']->value=="company"&&isset($_smarty_tpl->tpl_vars['address_delivery']->value->company)){?><li class="address_company"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_delivery']->value->company, 'html', 'UTF-8');?>
</li>
					<?php }elseif($_smarty_tpl->tpl_vars['field_item']->value=="address2"&&$_smarty_tpl->tpl_vars['address_delivery']->value->address2){?><li class="address_address2"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_delivery']->value->address2, 'html', 'UTF-8');?>
</li>
					<?php }elseif($_smarty_tpl->tpl_vars['field_item']->value=="phone_mobile"&&$_smarty_tpl->tpl_vars['address_delivery']->value->phone_mobile){?><li class="address_phone_mobile"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_delivery']->value->phone_mobile, 'html', 'UTF-8');?>
</li>
					<?php }else{ ?>
							<?php $_smarty_tpl->tpl_vars['address_words'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['field_item']->value), null, 0);?> 
							<li><?php  $_smarty_tpl->tpl_vars['word_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['word_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address_words']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['word_item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['word_item']->key => $_smarty_tpl->tpl_vars['word_item']->value){
$_smarty_tpl->tpl_vars['word_item']->_loop = true;
 $_smarty_tpl->tpl_vars['word_item']->index++;
 $_smarty_tpl->tpl_vars['word_item']->first = $_smarty_tpl->tpl_vars['word_item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["word_loop"]['first'] = $_smarty_tpl->tpl_vars['word_item']->first;
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['word_loop']['first']){?> <?php }?><span class="address_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deliveryAddressFormatedValues']->value[smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','')], 'html', 'UTF-8');?>
</span><?php } ?></li>
					<?php }?>
				<?php } ?>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-6">
			<ul class="address item <?php if ($_smarty_tpl->tpl_vars['order']->value->isVirtual()){?>full_width<?php }?> box">
				<li><h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Invoice address'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['address_invoice']->value->alias;?>
)</h3></li>
				<?php  $_smarty_tpl->tpl_vars['field_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inv_adr_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_item']->key => $_smarty_tpl->tpl_vars['field_item']->value){
$_smarty_tpl->tpl_vars['field_item']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['field_item']->value=="company"&&isset($_smarty_tpl->tpl_vars['address_invoice']->value->company)){?><li class="address_company"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->company, 'html', 'UTF-8');?>
</li>
					<?php }elseif($_smarty_tpl->tpl_vars['field_item']->value=="address2"&&$_smarty_tpl->tpl_vars['address_invoice']->value->address2){?><li class="address_address2"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->address2, 'html', 'UTF-8');?>
</li>
					<?php }elseif($_smarty_tpl->tpl_vars['field_item']->value=="phone_mobile"&&$_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile){?><li class="address_phone_mobile"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile, 'html', 'UTF-8');?>
</li>
					<?php }else{ ?>
							<?php $_smarty_tpl->tpl_vars['address_words'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['field_item']->value), null, 0);?>
							<li><?php  $_smarty_tpl->tpl_vars['word_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['word_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address_words']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['word_item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['word_item']->key => $_smarty_tpl->tpl_vars['word_item']->value){
$_smarty_tpl->tpl_vars['word_item']->_loop = true;
 $_smarty_tpl->tpl_vars['word_item']->index++;
 $_smarty_tpl->tpl_vars['word_item']->first = $_smarty_tpl->tpl_vars['word_item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["word_loop"]['first'] = $_smarty_tpl->tpl_vars['word_item']->first;
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['word_loop']['first']){?> <?php }?><span class="address_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['invoiceAddressFormatedValues']->value[smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','')], 'html', 'UTF-8');?>
</span><?php } ?></li>
					<?php }?>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDERDETAILDISPLAYED']->value;?>

<?php if (!$_smarty_tpl->tpl_vars['is_guest']->value){?><form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), 'html', 'UTF-8');?>
" method="post"><?php }?>
<div id="order-detail-content" class="table_block table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?><th class="first_item"><input type="checkbox" /></th><?php }?>
				<th class="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?>item<?php }else{ ?>first_item<?php }?>"><?php echo smartyTranslate(array('s'=>'Reference'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Product'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</th>
				<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?>
					<th class="item"><?php echo smartyTranslate(array('s'=>'Returned'),$_smarty_tpl);?>
</th>
				<?php }?>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Unit price'),$_smarty_tpl);?>
</th>
				<th class="last_item"><?php echo smartyTranslate(array('s'=>'Total price'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tfoot>
			<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value&&$_smarty_tpl->tpl_vars['use_tax']->value){?>
				<tr class="item">
					<td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?>2<?php }else{ ?>1<?php }?>">
						<strong><?php echo smartyTranslate(array('s'=>'Items (tax excl.)'),$_smarty_tpl);?>
</strong>
					</td>
					<td colspan="<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?>5<?php }else{ ?>4<?php }?>">
						<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
					</td>
				</tr>
			<?php }?>
			<tr class="item">
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?>2<?php }else{ ?>1<?php }?>">
					<strong><?php echo smartyTranslate(array('s'=>'Items'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value){?><?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?> </strong>
				</td>
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?>5<?php }else{ ?>4<?php }?>">
					<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
				</td>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['order']->value->total_discounts>0){?>
			<tr class="item">
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?>2<?php }else{ ?>1<?php }?>">
					<strong><?php echo smartyTranslate(array('s'=>'Total vouchers'),$_smarty_tpl);?>
</strong>
				</td>
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?>5<?php }else{ ?>4<?php }?>">
					<span class="price-discount"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_discounts,'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'convert'=>1),$_smarty_tpl);?>
</span>
				</td>
			</tr>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['order']->value->total_wrapping>0){?>
			<tr class="item">
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?>2<?php }else{ ?>1<?php }?>">
					<strong><?php echo smartyTranslate(array('s'=>'Total gift wrapping cost'),$_smarty_tpl);?>
</strong>
				</td>
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?>5<?php }else{ ?>4<?php }?>">
					<span class="price-wrapping"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_wrapping,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
				</td>
			</tr>
			<?php }?>
			<tr class="item">
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?>2<?php }else{ ?>1<?php }?>">
					<strong><?php echo smartyTranslate(array('s'=>'Shipping & handling'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value){?><?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?> </strong>
				</td>
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?>5<?php }else{ ?>4<?php }?>">
					<span class="price-shipping"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_shipping,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
				</td>
			</tr>
			<tr class="totalprice item">
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?>2<?php }else{ ?>1<?php }?>">
					<strong><?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
</strong>
				</td>
				<td colspan="<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?>5<?php }else{ ?>4<?php }?>">
					<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_paid,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
				</td>
			</tr>
		</tfoot>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']++;
?>
			<?php if (!isset($_smarty_tpl->tpl_vars['product']->value['deleted'])){?>
				<?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
				<?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_attribute_id'], null, 0);?>
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['customizedDatas'])){?>
					<?php $_smarty_tpl->tpl_vars['productQuantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_quantity']-$_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'], null, 0);?>
				<?php }else{ ?>
					<?php $_smarty_tpl->tpl_vars['productQuantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_quantity'], null, 0);?>
				<?php }?>
				<!-- Customized products -->
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['customizedDatas'])){?>
					<tr class="item">
						<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?><td class="order_cb"></td><?php }?>
						<td><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['product_reference']){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_reference'], 'html', 'UTF-8');?>
<?php }else{ ?>--<?php }?></label></td>
						<td class="bold">
							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_name'], 'html', 'UTF-8');?>
</label>
						</td>
						<td>
						<input class="order_qte_input form-control grey"  name="order_qte_input[<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['index'];?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']);?>
" />
							<div class="clearfix return_quantity_buttons">
								<a href="#" class="return_quantity_down btn btn-default button-minus"><span><i class="icon-minus"></i></span></a>
								<a href="#" class="return_quantity_up btn btn-default button-plus"><span><i class="icon-plus"></i></span></a>
							</div>                        
							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']);?>
</span></label></td>
						<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['product']->value['qty_returned'];?>

							</td>
						<?php }?>
						<td>
							<label class="price" for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
								<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value){?>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

								<?php }else{ ?>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

								<?php }?>
							</label>
						</td>
						<td>
							<label class="price" for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
								<?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])){?>
									<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value){?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization_wt'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

									<?php }else{ ?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

									<?php }?>
								<?php }else{ ?>
									<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value){?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

									<?php }else{ ?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

									<?php }?>
								<?php }?>
							</label>
						</td>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['customizationPerAddress'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customizationPerAddress']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizedDatas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customizationPerAddress']->key => $_smarty_tpl->tpl_vars['customizationPerAddress']->value){
$_smarty_tpl->tpl_vars['customizationPerAddress']->_loop = true;
?>
						<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_smarty_tpl->tpl_vars['customizationId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customizationPerAddress']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value){
$_smarty_tpl->tpl_vars['customization']->_loop = true;
 $_smarty_tpl->tpl_vars['customizationId']->value = $_smarty_tpl->tpl_vars['customization']->key;
?>
						<tr class="alternate_item">
							<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?><td class="order_cb"><input type="checkbox" id="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" name="customization_ids[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
][]" value="<?php echo intval($_smarty_tpl->tpl_vars['customizationId']->value);?>
" /></td><?php }?>
							<td colspan="2">
							<?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datas']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
$_smarty_tpl->tpl_vars['datas']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['CUSTOMIZE_FILE']->value){?>
								<ul class="customizationUploaded">
									<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
										<li><img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
_small" alt="" class="customizationUploaded" /></li>
									<?php } ?>
								</ul>
								<?php }elseif($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value){?>
								<ul class="typedText"><?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

									<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['customizationFieldName'] = new Smarty_variable(("Text #").($_smarty_tpl->tpl_vars['data']->value['id_customization_field']), null, 0);?>
										<li><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['customizationFieldName']->value : $tmp);?>
 : <?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
</li>
									<?php } ?>
								</ul>
								<?php }?>
							<?php } ?>
							</td>
							<td>
								<input class="order_qte_input form-control grey" name="customization_qty_input[<?php echo intval($_smarty_tpl->tpl_vars['customizationId']->value);?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['customization']->value['quantity']);?>
" />
								<div class="clearfix return_quantity_buttons">
									<a href="#" class="return_quantity_down btn btn-default button-minus"><span><i class="icon-minus"></i></span></a>
									<a href="#" class="return_quantity_up btn btn-default button-plus"><span><i class="icon-plus"></i></span></a>
								</div>
								<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['customization']->value['quantity']);?>
</span></label>
							</td>
							<td colspan="2"></td>
						</tr>
						<?php } ?>
					<?php } ?>
				<?php }?>
				<!-- Classic products -->
				<?php if ($_smarty_tpl->tpl_vars['product']->value['product_quantity']>$_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']){?>
					<tr class="item">
						<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?><td class="order_cb"><input type="checkbox" id="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" name="ids_order_detail[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
]" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" /></td><?php }?>
						<td><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['product_reference']){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_reference'], 'html', 'UTF-8');?>
<?php }else{ ?>--<?php }?></label></td>
						<td class="bold">
							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
								<?php if ($_smarty_tpl->tpl_vars['product']->value['download_hash']&&$_smarty_tpl->tpl_vars['invoice']->value&&$_smarty_tpl->tpl_vars['product']->value['display_filename']!=''&&$_smarty_tpl->tpl_vars['product']->value['product_quantity_refunded']==0&&$_smarty_tpl->tpl_vars['product']->value['product_quantity_return']==0){?>
									<?php if (isset($_smarty_tpl->tpl_vars['is_guest']->value)&&$_smarty_tpl->tpl_vars['is_guest']->value){?>
									<a href="<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['filename'], 'html', 'UTF-8');?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['download_hash'], 'html', 'UTF-8');?>
<?php $_tmp12=ob_get_clean();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,null,"key=".$_tmp11."-".$_tmp12."&amp;id_order=".((string)$_smarty_tpl->tpl_vars['order']->value->id)."&secure_key=".((string)$_smarty_tpl->tpl_vars['order']->value->secure_key)), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Download this product'),$_smarty_tpl);?>
">
									<?php }else{ ?>
										<a href="<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['filename'], 'html', 'UTF-8');?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['download_hash'], 'html', 'UTF-8');?>
<?php $_tmp14=ob_get_clean();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,null,"key=".$_tmp13."-".$_tmp14), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Download this product'),$_smarty_tpl);?>
">
									<?php }?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/download_product.gif" class="icon" alt="<?php echo smartyTranslate(array('s'=>'Download product'),$_smarty_tpl);?>
" />
									</a>
									<?php if (isset($_smarty_tpl->tpl_vars['is_guest']->value)&&$_smarty_tpl->tpl_vars['is_guest']->value){?>
										<a href="<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['filename'], 'html', 'UTF-8');?>
<?php $_tmp15=ob_get_clean();?><?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['download_hash'], 'html', 'UTF-8');?>
<?php $_tmp16=ob_get_clean();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,null,"key=".$_tmp15."-".$_tmp16."&id_order=".((string)$_smarty_tpl->tpl_vars['order']->value->id)."&secure_key=".((string)$_smarty_tpl->tpl_vars['order']->value->secure_key)), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Download this product'),$_smarty_tpl);?>
"> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_name'], 'html', 'UTF-8');?>
 	</a>
									<?php }else{ ?>
									<a href="<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['filename'], 'html', 'UTF-8');?>
<?php $_tmp17=ob_get_clean();?><?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['download_hash'], 'html', 'UTF-8');?>
<?php $_tmp18=ob_get_clean();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,null,"key=".$_tmp17."-".$_tmp18), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Download this product'),$_smarty_tpl);?>
"> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_name'], 'html', 'UTF-8');?>
 	</a>
									<?php }?>
								<?php }else{ ?>
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_name'], 'html', 'UTF-8');?>

								<?php }?>
							</label>
						</td>
						<td class="return_quantity">
							<input class="order_qte_input form-control grey" name="order_qte_input[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['productQuantity']->value);?>
" />
							<div class="clearfix return_quantity_buttons">
								<a href="#" class="return_quantity_down btn btn-default button-minus"><span><i class="icon-minus"></i></span></a>
								<a href="#" class="return_quantity_up btn btn-default button-plus"><span><i class="icon-plus"></i></span></a>
							</div>
							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['productQuantity']->value);?>
</span></label></td>
						<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()){?>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['product']->value['qty_returned'];?>

							</td>
						<?php }?>
						<td class="price">
							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
							<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value){?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

							<?php }?>
							</label>
						</td>
						<td class="price">
							<label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
							<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value){?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

							<?php }else{ ?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

							<?php }?>
							</label>
						</td>
					</tr>
				<?php }?>
			<?php }?>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value){
$_smarty_tpl->tpl_vars['discount']->_loop = true;
?>
			<tr class="item">
				<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['discount']->value['name'], 'html', 'UTF-8');?>
</td>
				<td><?php echo smartyTranslate(array('s'=>'Voucher'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['discount']->value['name'], 'html', 'UTF-8');?>
</td>
				<td><span class="order_qte_span editable">1</span></td>
				<td>&nbsp;</td>
				<td><?php if ($_smarty_tpl->tpl_vars['discount']->value['value']!=0.00){?>-<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</td>
				<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?>
				<td>&nbsp;</td>
				<?php }?>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?>
	<div id="returnOrderMessage">
		<h3 class="page-heading bottom-indent"><?php echo smartyTranslate(array('s'=>'Merchandise return'),$_smarty_tpl);?>
</h3>
		<p><?php echo smartyTranslate(array('s'=>'If you wish to return one or more products, please mark the corresponding boxes and provide an explanation for the return. When complete, click the button below.'),$_smarty_tpl);?>
</p>
		<p class="form-group">
			<textarea class="form-control" cols="67" rows="3" name="returnText"></textarea>
		</p>
		<p class="form-group">
			<button type="submit" name="submitReturnMerchandise" class="btn btn-default button button-small"><span><?php echo smartyTranslate(array('s'=>'Make an RMA slip'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></button>
			<input type="hidden" class="hidden" value="<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
" name="id_order" />
		</p>
	</div>
<?php }?>
</form>
<?php if (count($_smarty_tpl->tpl_vars['order']->value->getShipping())>0){?>
	<table class="table table-bordered footab">
		<thead>
			<tr>
				<th class="first_item"><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</th>
				<th class="item" data-sort-ignore="true"><?php echo smartyTranslate(array('s'=>'Carrier'),$_smarty_tpl);?>
</th>
				<th data-hide="phone" class="item"><?php echo smartyTranslate(array('s'=>'Weight'),$_smarty_tpl);?>
</th>
				<th data-hide="phone" class="item"><?php echo smartyTranslate(array('s'=>'Shipping cost'),$_smarty_tpl);?>
</th>
				<th data-hide="phone" class="last_item" data-sort-ignore="true"><?php echo smartyTranslate(array('s'=>'Tracking number'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value->getShipping(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
			<tr class="item">
				<td data-value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['line']->value['date_add'],"/[\-\:\ ]/",'');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['line']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['line']->value['carrier_name'];?>
</td>
				<td data-value="<?php if ($_smarty_tpl->tpl_vars['line']->value['weight']>0){?><?php echo sprintf("%.3f",$_smarty_tpl->tpl_vars['line']->value['weight']);?>
<?php }else{ ?>0<?php }?>"><?php if ($_smarty_tpl->tpl_vars['line']->value['weight']>0){?><?php echo sprintf("%.3f",$_smarty_tpl->tpl_vars['line']->value['weight']);?>
 <?php echo Configuration::get('PS_WEIGHT_UNIT');?>
<?php }else{ ?>-<?php }?></td>
				<td data-value="<?php if ($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod()==@constant('PS_TAX_INC')){?><?php echo $_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_incl'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_excl'];?>
<?php }?>"><?php if ($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod()==@constant('PS_TAX_INC')){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl);?>
<?php }?></td>
				<td>
					<span id="shipping_number_show"><?php if ($_smarty_tpl->tpl_vars['line']->value['tracking_number']){?><?php if ($_smarty_tpl->tpl_vars['line']->value['url']&&$_smarty_tpl->tpl_vars['line']->value['tracking_number']){?><a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['line']->value['url'],'@',$_smarty_tpl->tpl_vars['line']->value['tracking_number']);?>
"><?php echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];?>
<?php }?><?php }else{ ?>-<?php }?></span>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['is_guest']->value){?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value)){?>
	<h3 class="page-heading"><?php echo smartyTranslate(array('s'=>'Messages'),$_smarty_tpl);?>
</h3>
	 <div class="table_block">
		<table class="detail_step_by_step table table-bordered">
			<thead>
				<tr>
					<th class="first_item" style="width:150px;"><?php echo smartyTranslate(array('s'=>'From'),$_smarty_tpl);?>
</th>
					<th class="last_item"><?php echo smartyTranslate(array('s'=>'Message'),$_smarty_tpl);?>
</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['message']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['message']->iteration=0;
 $_smarty_tpl->tpl_vars['message']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
 $_smarty_tpl->tpl_vars['message']->iteration++;
 $_smarty_tpl->tpl_vars['message']->index++;
 $_smarty_tpl->tpl_vars['message']->first = $_smarty_tpl->tpl_vars['message']->index === 0;
 $_smarty_tpl->tpl_vars['message']->last = $_smarty_tpl->tpl_vars['message']->iteration === $_smarty_tpl->tpl_vars['message']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['first'] = $_smarty_tpl->tpl_vars['message']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['last'] = $_smarty_tpl->tpl_vars['message']->last;
?>
				<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['last']){?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['index']%2){?>alternate_item<?php }else{ ?>item<?php }?>">
					<td>
						<strong class="dark">
							<?php if (isset($_smarty_tpl->tpl_vars['message']->value['elastname'])&&$_smarty_tpl->tpl_vars['message']->value['elastname']){?>
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value['efirstname'], 'html', 'UTF-8');?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value['elastname'], 'html', 'UTF-8');?>

							<?php }elseif($_smarty_tpl->tpl_vars['message']->value['clastname']){?>
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value['cfirstname'], 'html', 'UTF-8');?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value['clastname'], 'html', 'UTF-8');?>

							<?php }else{ ?>
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'html', 'UTF-8');?>

							<?php }?>
						</strong>
						<br />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>1),$_smarty_tpl);?>

					</td>
					<td><?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value['message'], 'html', 'UTF-8'));?>
</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value){?>
		<div class="alert alert-danger">
			<p><?php if (count($_smarty_tpl->tpl_vars['errors']->value)>1){?><?php echo smartyTranslate(array('s'=>'There are %d errors','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There is %d error','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php }?></p>
			<ol>
			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
			<?php } ?>
			</ol>
		</div>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['message_confirmation']->value)&&$_smarty_tpl->tpl_vars['message_confirmation']->value){?>
	<p class="alert alert-success">
		<?php echo smartyTranslate(array('s'=>'Message successfully sent'),$_smarty_tpl);?>

	</p>
	<?php }?>
	<form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true), 'html', 'UTF-8');?>
" method="post" class="std" id="sendOrderMessage">
		<h3 class="page-heading bottom-indent"><?php echo smartyTranslate(array('s'=>'Add a message'),$_smarty_tpl);?>
</h3>
		<p><?php echo smartyTranslate(array('s'=>'If you would like to add a comment about your order, please write it in the field below.'),$_smarty_tpl);?>
</p>
		<p class="form-group">
		<label for="id_product"><?php echo smartyTranslate(array('s'=>'Product'),$_smarty_tpl);?>
</label>
			<select name="id_product" class="form-control">
				<option value="0"><?php echo smartyTranslate(array('s'=>'-- Choose --'),$_smarty_tpl);?>
</option>
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']++;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_name'];?>
</option>
				<?php } ?>
			</select>
		</p>
		<p class="form-group">
			<textarea class="form-control" cols="67" rows="3" name="msgText"></textarea>
		</p>
		<div class="submit">
			<input type="hidden" name="id_order" value="<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
" />
			<input type="submit" class="unvisible" name="submitMessage" value="<?php echo smartyTranslate(array('s'=>'Send'),$_smarty_tpl);?>
"/>
			<button type="submit" name="submitMessage" class="button btn btn-default button-medium"><span><?php echo smartyTranslate(array('s'=>'Send'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></button>
		</div>
	</form>
<?php }else{ ?>
<p class="alert alert-info"><i class="icon-info-sign"></i><?php echo smartyTranslate(array('s'=>'You cannot return merchandise with a guest account'),$_smarty_tpl);?>
</p>
<?php }?>
<?php }?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['INLINE_MODE']->value){?>
<script src="https://gate.gopay.cz/gp-gw/js/embed.js"></script>
<?php }?><?php }} ?>