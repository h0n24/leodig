<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:34:33
         compiled from "/srv/www/helveti/themes/leodig/modules/blocknewsletter/blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1748782446546105397689f4-39613208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecd545e6d833393d4e73bdcf1019ffed8b3134b1' => 
    array (
      0 => '/srv/www/helveti/themes/leodig/modules/blocknewsletter/blocknewsletter.tpl',
      1 => 1414283233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1748782446546105397689f4-39613208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5461053989c224_41013240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5461053989c224_41013240')) {function content_5461053989c224_41013240($_smarty_tpl) {?>

<!-- Block Newsletter module-->

<div id="newsletter_block_left" class="block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</p>
	<div class="block_content">
	<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value){?>
		<p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>warning<?php }else{ ?>success<?php }?>"><?php echo smartyTranslate(array('s'=>"Newsletter:",'js'=>1,'mod'=>"blocknewsletter"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<?php }?>
	<div class="description">
		<p><?php echo smartyTranslate(array('s'=>'Přihlaste se do našeho newsletteru a budete o všem vědět první.'),$_smarty_tpl);?>
</p>
	</div>
		<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//helveti.us1.list-manage.com/subscribe/post?u=a498c800c1b24be2fa8b07349&amp;id=a1a04e710a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
     
    <div id="mce-responses" class="clear">
        <div class="response warning" id="mce-error-response" style="display:none"></div>
        <div class="response success" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_a498c800c1b24be2fa8b07349_a1a04e710a" tabindex="-1" value=""></div>
    <div class="mc-field-group">
    <input type="email" value="" name="EMAIL" class="required email inputNew" id="mce-EMAIL" placeholder="Váš email">
</div>
     <input type="submit" value="ok" name="subscribe" id="mc-embedded-subscribe" class="button_mini btn btn-theme-primary"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
	</div>
</div>
<!-- /Block Newsletter module-->

<script type="text/javascript">
    var placeholder = "<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
";
        $(document).ready(function() {
            $('#newsletter-input').on({
                focus: function() {
                    if ($(this).val() == placeholder) {
                        $(this).val('');
                    }
                },
                blur: function() {
                    if ($(this).val() == '') {
                        $(this).val(placeholder);
                    }
                }
            });

        });
</script>
<?php }} ?>