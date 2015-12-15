<?php /* Smarty version Smarty-3.1.14, created on 2015-12-09 11:57:17
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12560307945668090d76b598-48636522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9226bc966f9dbbbd9957891e68b988530c65f00' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/password.tpl',
      1 => 1411299596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12560307945668090d76b598-48636522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'confirmation' => 0,
    'customer_email' => 0,
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5668090d812698_19203665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5668090d812698_19203665')) {function content_5668090d812698_19203665($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
?>

<div class="kosik-container kosik-container-password">

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Forgot your password'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<h1><?php echo smartyTranslate(array('s'=>'Forgot your password?'),$_smarty_tpl);?>
</h1>
<div class="clearfix">	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value==1){?>
<p class="success"><?php echo smartyTranslate(array('s'=>'Your password has been successfully reset and a confirmation has been sent to your email address:'),$_smarty_tpl);?>
 <?php if (isset($_smarty_tpl->tpl_vars['customer_email']->value)){?><?php echo stripslashes(smarty_modifier_escape($_smarty_tpl->tpl_vars['customer_email']->value, 'htmlall', 'UTF-8'));?>
<?php }?></p>
<?php }elseif(isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value==2){?>
<p class="success"><?php echo smartyTranslate(array('s'=>'A confirmation email has been sent to your address:'),$_smarty_tpl);?>
 <?php if (isset($_smarty_tpl->tpl_vars['customer_email']->value)){?><?php echo stripslashes(smarty_modifier_escape($_smarty_tpl->tpl_vars['customer_email']->value, 'htmlall', 'UTF-8'));?>
<?php }?></p>
<?php }else{ ?>
<p><?php echo smartyTranslate(array('s'=>'Please enter the email address you used to register. We will then send you a new password. '),$_smarty_tpl);?>
</p>
<form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['request_uri']->value, 'htmlall', 'UTF-8');?>
" method="post" class="std form-horizontal" id="form_forgotpassword">
	<fieldset>
		<div class="text form-group">
			<label class="control-label col-sm-4" for="email"><?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>
</label>
			<div class="col-sm-6">
				<input class="form-control" type="text" id="email" name="email" value="<?php if (isset($_POST['email'])){?><?php echo stripslashes(smarty_modifier_escape($_POST['email'], 'htmlall', 'UTF-8'));?>
<?php }?>" />
			</div>
		</div>
	</fieldset>
	<div class="text form-group">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Back to Login'),$_smarty_tpl);?>
" rel="nofollow" class="zpet_na_login"><i class="fa fa-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Back to Login'),$_smarty_tpl);?>
</a>

			<div class="submit">
				<input type="submit" class="button submit-password" value="<?php echo smartyTranslate(array('s'=>'Retrieve Password'),$_smarty_tpl);?>
" />
			</div>
		</div>
</form>
<?php }?>
<div class="clear footer_links">
	
</div>

</div>
<?php }} ?>