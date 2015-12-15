<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:34:32
         compiled from "/srv/www/helveti/themes/leodig/modules/sendtoafriend/sendtoafriend-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:609495669546105389d2637-44876925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1b0260e61f7062b415c9d0156a0a658bd1108c3' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/modules/sendtoafriend/sendtoafriend-extra.tpl',
      1 => 1409419249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '609495669546105389d2637-44876925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'stf_secure_key' => 0,
    'stf_product' => 0,
    'stf_product_cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54610538b3b084_19024274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54610538b3b084_19024274')) {function content_54610538b3b084_19024274($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/tools/smarty/plugins/modifier.escape.php';
?>
<script text="javascript">

$('document').ready(function(){
	$('#send_friend_button').fancybox({
		'hideOnContentClick': false
	});

	$('#sendEmail').click(function(){
		var datas = [];
		$('#send_friend_form_content').find(':input').each(function(index){
			var o = {};
			o.key = $(this).attr('name');
			o.value = $(this).val();
			if (o.value != '')
				datas.push(o);
		});
		if (datas.length >= 3)
		{
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
sendtoafriend_ajax.php",
				type: "POST",
				headers: {"cache-control": "no-cache"},
				data: {action: 'sendToMyFriend', secure_key: '<?php echo $_smarty_tpl->tpl_vars['stf_secure_key']->value;?>
', friend: unescape(JSON.stringify(datas).replace(/\\u/g, '%u'))},
				dataType: "json",
				success: function(result){
					$.fancybox.close();
				}
			});
		}
		else
			$('#send_friend_form_error').text("<?php echo smartyTranslate(array('s'=>'You did not fill required fields','mod'=>'sendtoafriend','js'=>1),$_smarty_tpl);?>
");
	});
});

</script>
<li class="sendtofriend">
	<a id="send_friend_button" href="#send_friend_form">
		<span class="poslat-emailem"><?php echo smartyTranslate(array('s'=>'Poslat emailem','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</span>
		<span class="poslat-emailem-tlacitko"><?php echo smartyTranslate(array('s'=>'Email','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</span>
	</a>
</li>

<div style="display: none;">
	<div id="send_friend_form" class="form-horizontal">
			<h2 class="title"><?php echo smartyTranslate(array('s'=>'Send to a friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</h2>
			<div class="row">
				<div class="product clearfix form-group">
					<div class="col-sm-5">
						<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['stf_product']->value->link_rewrite,$_smarty_tpl->tpl_vars['stf_product_cover']->value,'home_default'), ENT_QUOTES, 'UTF-8', true);?>
"  alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stf_product']->value->name, 'html', 'UTF-8');?>
" />
					</div>
					<div class="product_desc col-sm-7">
						<h3 class="product_name"><?php echo $_smarty_tpl->tpl_vars['stf_product']->value->name;?>
</h3>
						<?php echo $_smarty_tpl->tpl_vars['stf_product']->value->description_short;?>

					</div>
				</div>
			</div>	
			<div class="send_friend_form_content" id="send_friend_form_content">
				<div id="send_friend_form_error"></div>
				<div class="form_container">
					<p class="intro_form"><?php echo smartyTranslate(array('s'=>'Recipient','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 :</p>
					<div class="text form-group">
						<label class="control-label col-sm-4" for="friend_name"><?php echo smartyTranslate(array('s'=>'Name of your friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 <sup class="required">*</sup> :</label>
						<div class="col-sm-6">
							<input class="form-control" id="friend_name" name="friend_name" type="text" value=""/>
						</div>
					</div>
					<div class="text form-group">
						<label class="control-label col-sm-4" for="friend_email"><?php echo smartyTranslate(array('s'=>'E-mail address of your friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 <sup class="required">*</sup> :</label>
						<div class="col-sm-6">
							<input class="form-control" id="friend_email" name="friend_email" type="text" value=""/>
						</div>
					</div>
					<p class="txt_required"><sup class="required">*</sup> <?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</p>
				</div>
				<p class="submit">
					<input id="id_product_comment_send" name="id_product" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['stf_product']->value->id;?>
" />
					<a href="#" onclick="$.fancybox.close();"><?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</a>&nbsp;<?php echo smartyTranslate(array('s'=>'or','mod'=>'sendtoafriend'),$_smarty_tpl);?>
&nbsp;
					<input id="sendEmail" class="button" name="sendEmail" type="submit" value="<?php echo smartyTranslate(array('s'=>'Send','mod'=>'sendtoafriend'),$_smarty_tpl);?>
" />
				</p>
			</div>
	</div>
</div>
<?php }} ?>