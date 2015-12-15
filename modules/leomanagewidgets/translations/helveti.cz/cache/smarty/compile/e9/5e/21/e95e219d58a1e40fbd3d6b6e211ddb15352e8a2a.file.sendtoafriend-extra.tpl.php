<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:52:56
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/modules/sendtoafriend/sendtoafriend-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1962187295566718f8abb2d5-07831406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e95e219d58a1e40fbd3d6b6e211ddb15352e8a2a' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/modules/sendtoafriend/sendtoafriend-extra.tpl',
      1 => 1437551124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1962187295566718f8abb2d5-07831406',
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
  'unifunc' => 'content_566718f8b6ccd0_16917523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718f8b6ccd0_16917523')) {function content_566718f8b6ccd0_16917523($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
?>
<script type="text/javascript">

$('document').ready(function(){
    $('#send_friend_button').fancybox({
        'hideOnContentClick': false
    });

    $('#sendEmail').click(function(){
        
        var name = $('#friend_name').val();
        var email = $('#friend_email').val();
        var id_product = $('#id_product_comment_send').val();
        if (name && email && !isNaN(id_product))
        {
            $.ajax({
                url: "<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
sendtoafriend_ajax.php",
                type: "POST",
                headers: {"cache-control": "no-cache"},
                data: {action: 'sendToMyFriend', secure_key: '<?php echo $_smarty_tpl->tpl_vars['stf_secure_key']->value;?>
', name: name, email: email, id_product: id_product},
                dataType: "json",
                success: function(result) {
                    $.fancybox.close();
                    var msg = result ? "<?php echo smartyTranslate(array('s'=>'Your e-mail has been sent successfully','mod'=>'sendtoafriend'),$_smarty_tpl);?>
" : "<?php echo smartyTranslate(array('s'=>'Your e-mail could not be sent. Please check the e-mail address and try again.','mod'=>'sendtoafriend'),$_smarty_tpl);?>
";
                    var title = "<?php echo smartyTranslate(array('s'=>'Send to a friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
";
                    fancyMsgBox(msg, title);
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