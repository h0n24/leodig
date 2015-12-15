<?php /* Smarty version Smarty-3.1.14, created on 2015-12-10 17:42:22
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/identity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16481773945669ab6edaca37-30062242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54261e7600407ef011282f08ccc7a8d4ad87d8a6' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/identity.tpl',
      1 => 1416167195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16481773945669ab6edaca37-30062242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'confirmation' => 0,
    'pwd_changed' => 0,
    'email' => 0,
    'genders' => 0,
    'gender' => 0,
    'days' => 0,
    'v' => 0,
    'sl_day' => 0,
    'months' => 0,
    'k' => 0,
    'sl_month' => 0,
    'years' => 0,
    'sl_year' => 0,
    'newsletter' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5669ab6f095251_20008252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5669ab6f095251_20008252')) {function content_5669ab6f095251_20008252($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Your personal information'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1><?php echo smartyTranslate(array('s'=>'Your personal information'),$_smarty_tpl);?>
</h1>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value){?>
	<p class="success">
		<?php echo smartyTranslate(array('s'=>'Your personal information has been successfully updated.'),$_smarty_tpl);?>

		<?php if (isset($_smarty_tpl->tpl_vars['pwd_changed']->value)){?><br /><?php echo smartyTranslate(array('s'=>'Your password has been sent to your email:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<?php }?>
	</p>
<?php }else{ ?>
	<h3><?php echo smartyTranslate(array('s'=>'Please be sure to update your personal information if it has changed.'),$_smarty_tpl);?>
</h3>
	
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std kosik-container">
		<div class="panel panel-default"><div class="panel-body">
			<div class="form-horizontal form_content">

					<p class="required"><sup>*</sup><?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>
</p>
					<div class="form-group">
						<label class="col-md-4 control-label"><?php echo smartyTranslate(array('s'=>'Title'),$_smarty_tpl);?>
</label>
						<div class="col-md-6">
							<?php  $_smarty_tpl->tpl_vars['gender'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gender']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['genders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gender']->key => $_smarty_tpl->tpl_vars['gender']->value){
$_smarty_tpl->tpl_vars['gender']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['gender']->key;
?>
								<input type="radio" name="id_gender" id="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['gender']->value->id);?>
" <?php if (isset($_POST['id_gender'])&&$_POST['id_gender']==$_smarty_tpl->tpl_vars['gender']->value->id){?>checked="checked"<?php }?> />
								<label for="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" class="top"><?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>
</label>
							<?php } ?>
						</div>
					</div>

					<div class="required text form-group">
						<label for="firstname" class="col-md-4 control-label"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-md-6">
							<input class="form-control" type="text" id="firstname" name="firstname" value="<?php echo $_POST['firstname'];?>
" />
						</div>
					</div>
					<div class="required text form-group">
						<label for="lastname" class="col-md-4 control-label"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-md-6">
							<input class="form-control" type="text" name="lastname" id="lastname" value="<?php echo $_POST['lastname'];?>
" />
						</div>	
					</div>
					<div class="required text form-group">
						<label for="email" class="col-md-4 control-label"><?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-md-6">
							<input class="form-control" type="text" name="email" id="email" value="<?php echo $_POST['email'];?>
" />
						</div>
					</div>
					<div class="required text form-group">
						<label for="old_passwd" class="col-md-4 control-label"><?php echo smartyTranslate(array('s'=>'Current Password'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<div class="col-md-6">
							<input class="form-control" type="password" name="old_passwd" id="old_passwd" />
						</div>
					</div>
					<div class="password form-group">
						<label for="passwd" class="col-md-4 control-label"><?php echo smartyTranslate(array('s'=>'New Password'),$_smarty_tpl);?>
</label>
						<div class="col-md-6">
							<input  class="form-control"type="password" name="passwd" id="passwd" />
						</div>
					</div>
					<div class="password form-group">
						<label for="confirmation" class="col-md-4 control-label"><?php echo smartyTranslate(array('s'=>'Confirmation'),$_smarty_tpl);?>
</label>
						<div class="col-md-6">
							<input class="form-control" type="password" name="confirmation" id="confirmation" />
						</div>
					</div>
					<div class="select form-group">
						<label class="col-md-4 control-label"><?php echo smartyTranslate(array('s'=>'Date of Birth'),$_smarty_tpl);?>
</label>
						<div class="col-md-6">
							<div class="row">
								<div class="col-sm-3 col-xs-12">
									<select class="form-control" name="days" id="days">
										<option value="">-</option>
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_day']->value==$_smarty_tpl->tpl_vars['v']->value)){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;&nbsp;</option>
										<?php } ?>
									</select>
								</div>
								
								<div class="col-sm-6 col-xs-12">
									<select class="form-control" id="months" name="months">
										<option value="">-</option>
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_month']->value==$_smarty_tpl->tpl_vars['k']->value)){?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
&nbsp;</option>
										<?php } ?>
									</select>
								</div>
								<div class="col-sm-3 col-xs-12">
									<select class="form-control" id="years" name="years">
										<option value="">-</option>
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_year']->value==$_smarty_tpl->tpl_vars['v']->value)){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;&nbsp;</option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>	
					</div>
					<?php if ($_smarty_tpl->tpl_vars['newsletter']->value){?>
					<div class="form-group newsletter-checkbox">
						<div class="col-sm-8 col-md-offset-4">
							<div class="checkbox">
								<label for="newsletter">
									<input type="checkbox" id="newsletter" name="newsletter" value="1" <?php if (isset($_POST['newsletter'])&&$_POST['newsletter']==1){?> checked="checked"<?php }?> autocomplete="off"/>						
								<?php echo smartyTranslate(array('s'=>'Sign up for our newsletter!'),$_smarty_tpl);?>
</label>
							</div>
						</div>
					</div>
					
					<?php }?>
					<div class="submit form-group">
						<div class="col-sm-8 col-sm-offset-4">
							<input type="submit" class="button" name="submitIdentity" value="<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
" />
						</div>	
					</div>
					<div id="security_informations">
						<?php echo smartyTranslate(array('s'=>'[Insert customer data privacy clause here, if applicable]'),$_smarty_tpl);?>

					</div>
			</div>		
		</div></div>
	</form>
<?php }?>
<div class="clearfix">	</div>

<ul class="footer_links clearfix cart_navigation">
	<li class="pull-left"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" class="zpet-do-obchodu"><span class="fa fa-chevron-left"></span> <?php echo smartyTranslate(array('s'=>'Back to your account'),$_smarty_tpl);?>
</a></li>
	<li class="pull-right"><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" class="zpet-do-obchodu"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
 <span class="fa fa-chevron-right"></span></a></li>
</ul>
<?php }} ?>