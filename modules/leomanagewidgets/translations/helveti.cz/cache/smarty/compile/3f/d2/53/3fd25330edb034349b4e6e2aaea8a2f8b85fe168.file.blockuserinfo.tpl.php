<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 20:43:13
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/modules/blockuserinfo/blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1186893103566718fc35e941-97319062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fd25330edb034349b4e6e2aaea8a2f8b85fe168' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/modules/blockuserinfo/blockuserinfo.tpl',
      1 => 1449603789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1186893103566718fc35e941-97319062',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718fc3f0190_48341610',
  'variables' => 
  array (
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'logged' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718fc3f0190_48341610')) {function content_566718fc3f0190_48341610($_smarty_tpl) {?>

<!-- Block user information module HEADER -->
<ul id="header_user_info" class="links hidden-xs hidden-sm pull-left header_user_info-left">
	<li>	
		<a href="tel:774774763" title="phone" class="phone-link-up"><i class="fa fa-phone"></i><?php echo smartyTranslate(array('s'=>'774 272 737','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a> |
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('7');?>
" title="Vše o nákupu" class="cerveny-link-up"><?php echo smartyTranslate(array('s'=>'Vše o nákupu','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>      
		<a href="http://www.helveti.cz/blog/" title="Blog" class="cerveny-link-up"><?php echo smartyTranslate(array('s'=>'Blog','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
	</li>
</ul>
	
<div id="header_user" class="<?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>header_user_catalog <?php }?>pull-right">
	<a data-toggle="dropdown" class="groupe-btn dropdown hidden-md hidden-lg" title="<?php echo smartyTranslate(array('s'=>'Quick link','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" href="#"><span class="fa fa-user"></span></a>
	<ul id="header_nav" class="links groupe-content">
		
		<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a></li>
			<li ><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" ><span class="fa fa-user"></span><?php echo smartyTranslate(array('s'=>'My Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="logout" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
		<?php }else{ ?>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="login" rel="nofollow"><span class="fa fa-lock"></span><?php echo smartyTranslate(array('s'=>'Login','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>					
						
		<?php }?>
		
	</ul>
			
</div>

<!-- /Block user information module HEADER --><?php }} ?>