<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:52:56
         compiled from "/srv/www/helveti/helveti.cz/themes/leodig/modules/productcomments/productcomments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:652613891566718f8cef4c0-85040758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c49d2967f58c813c63c44203aaf9627ffd62495' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/themes/leodig/modules/productcomments/productcomments.tpl',
      1 => 1411322867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '652613891566718f8cef4c0-85040758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productcomments_controller_url' => 0,
    'secure_key' => 0,
    'productcomments_url_rewriting_activated' => 0,
    'moderation_active' => 0,
    'comments' => 0,
    'comment' => 0,
    'too_early' => 0,
    'logged' => 0,
    'allow_guests' => 0,
    'product' => 0,
    'productcomment_cover' => 0,
    'link' => 0,
    'criterions' => 0,
    'criterion' => 0,
    'id_product_comment_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718f8e57748_63979274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718f8e57748_63979274')) {function content_566718f8e57748_63979274($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_date_format')) include '/srv/www/helveti/helveti.cz/tools/smarty/plugins/modifier.date_format.php';
?>
<script type="text/javascript">
var productcomments_controller_url = '<?php echo $_smarty_tpl->tpl_vars['productcomments_controller_url']->value;?>
';
var confirm_report_message = '<?php echo smartyTranslate(array('s'=>'Are you sure you want report this comment?','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
';
var secure_key = '<?php echo $_smarty_tpl->tpl_vars['secure_key']->value;?>
';
var productcomments_url_rewrite = '<?php echo $_smarty_tpl->tpl_vars['productcomments_url_rewriting_activated']->value;?>
';
var productcomment_added = '<?php echo smartyTranslate(array('s'=>'Your comment has been added!','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
';
var productcomment_added_moderation = '<?php echo smartyTranslate(array('s'=>'Your comment has been added and will be available once approved by a moderator','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
';
var productcomment_title = '<?php echo smartyTranslate(array('s'=>'New comment','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
';
var productcomment_ok = '<?php echo smartyTranslate(array('s'=>'OK','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
';
var moderation_active = <?php echo $_smarty_tpl->tpl_vars['moderation_active']->value;?>
;
</script>

<div id="idTab5">
	<div id="product_comments_block_tab">
	<?php if ($_smarty_tpl->tpl_vars['comments']->value){?>
		<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['comment']->value['content']){?>
			<div class="comment clearfix">
				<div class="comment_avatar"></div>
				<div class="comment_informations">
					<div class="comment_author">
						
						<div class="comment_author_infos">
							<strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['customer_name'], 'html', 'UTF-8');?>
</strong>
							<h4 class="title_block"><?php echo $_smarty_tpl->tpl_vars['comment']->value['title'];?>
</h4>
							<em><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['date_add'],"j. n. Y");?>
</em>
						</div>
					</div>
					<div class="comment_details">
						
						<p><?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['content'], 'html', 'UTF-8'));?>
</p>
						<ul>
							<?php if ($_smarty_tpl->tpl_vars['comment']->value['total_advice']>0){?>
								<li><?php echo smartyTranslate(array('s'=>'%1$d out of %2$d people found this review useful.','sprintf'=>array($_smarty_tpl->tpl_vars['comment']->value['total_useful'],$_smarty_tpl->tpl_vars['comment']->value['total_advice']),'mod'=>'productcomments'),$_smarty_tpl);?>
</li>
							<?php }?>
							
						</ul>
					</div>
				</div>
			</div>
			<?php }?>
		<?php } ?>
        <?php if ((!$_smarty_tpl->tpl_vars['too_early']->value&&($_smarty_tpl->tpl_vars['logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))){?>
		<p class="align_center">
			<a id="new_comment_tab_btn" class="open-comment-form" href="#new_comment_form"><?php echo smartyTranslate(array('s'=>'Write your review','mod'=>'productcomments'),$_smarty_tpl);?>
 !</a>
		</p>
        <?php }?>
	<?php }else{ ?>
		<?php if ((!$_smarty_tpl->tpl_vars['too_early']->value&&($_smarty_tpl->tpl_vars['logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))){?>
		<p class="align_center">
			<a id="new_comment_tab_btn" class="open-comment-form" href="#new_comment_form"><?php echo smartyTranslate(array('s'=>'Be the first to write your review','mod'=>'productcomments'),$_smarty_tpl);?>
 !</a>
		</p>
		<?php }else{ ?>
		<p class="align_center"><?php echo smartyTranslate(array('s'=>'No customer comments for the moment.','mod'=>'productcomments'),$_smarty_tpl);?>
</p>
		<?php }?>
	<?php }?>	
	</div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value){?>
<!-- Fancybox -->
<div style="display: none;">
	<div id="new_comment_form">
		<form id="id_new_comment_form" action="#">
			<h2 class="title"><?php echo smartyTranslate(array('s'=>'Write your review','mod'=>'productcomments'),$_smarty_tpl);?>
</h2>
			<?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value){?>
			<div class="product row clearfix">
				<div class="col-md-5 col-xs-12">
					<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['productcomment_cover']->value,'home_default'), ENT_QUOTES, 'UTF-8', true);?>
"  alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'html', 'UTF-8');?>
" />
				</div>
				<div class="col-md-7 col-xs-12">
					<div class="product_desc">
						<p class="product_name"><strong><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</strong></p>
						<?php echo $_smarty_tpl->tpl_vars['product']->value->description_short;?>

					</div>
				</div>
			</div>
			<?php }?>
			<div class="new_comment_form_content">
				<h2><?php echo smartyTranslate(array('s'=>'Write your review','mod'=>'productcomments'),$_smarty_tpl);?>
</h2>

				<div id="new_comment_form_error" class="error" style="display: none; padding: 15px 25px">
					<ul></ul>
				</div>

				<?php if (count($_smarty_tpl->tpl_vars['criterions']->value)>0){?>
					<ul id="criterions_list">
					<?php  $_smarty_tpl->tpl_vars['criterion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['criterion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['criterions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->key => $_smarty_tpl->tpl_vars['criterion']->value){
$_smarty_tpl->tpl_vars['criterion']->_loop = true;
?>
						<li>
							<label><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['criterion']->value['name'], 'html', 'UTF-8');?>
:</label>
							<div class="star_content">
								<input class="star" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="1" />
								<input class="star" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="2" />
								<input class="star" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="3" checked="checked" />
								<input class="star" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="4" />
								<input class="star" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="5" />
							</div>
							<div class="clearfix"></div>
						</li>
					<?php } ?>
					</ul>
				<?php }?>

				<label for="comment_title"><?php echo smartyTranslate(array('s'=>'Title','mod'=>'productcomments'),$_smarty_tpl);?>
: <sup class="required">*</sup></label>
				<input id="comment_title" name="title" type="text" value=""/>

				<label for="content"><?php echo smartyTranslate(array('s'=>'Comment','mod'=>'productcomments'),$_smarty_tpl);?>
: <sup class="required">*</sup></label>
				<textarea id="content" name="content"></textarea>

				<?php if ($_smarty_tpl->tpl_vars['allow_guests']->value==true&&$_smarty_tpl->tpl_vars['logged']->value==0){?>
				<label><?php echo smartyTranslate(array('s'=>'Your name','mod'=>'productcomments'),$_smarty_tpl);?>
: <sup class="required">*</sup></label>
				<input id="commentCustomerName" name="customer_name" type="text" value=""/>
				<?php }?>

				<div id="new_comment_form_footer">
					<input id="id_product_comment_send" name="id_product" type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['id_product_comment_form']->value;?>
' />
					<p class="required pull-left"><sup>*</sup> <?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'productcomments'),$_smarty_tpl);?>
</p>
					<p class="pull-right">
						<button class="button" id="submitNewMessage" name="submitMessage" type="submit"><?php echo smartyTranslate(array('s'=>'Send','mod'=>'productcomments'),$_smarty_tpl);?>
</button>&nbsp;
						<?php echo smartyTranslate(array('s'=>'or','mod'=>'productcomments'),$_smarty_tpl);?>
&nbsp;<a class="button" href="#" onclick="$.fancybox.close();"><?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'productcomments'),$_smarty_tpl);?>
</a>
					</p>
					<div class="clearfix"></div>
				</div>
			</div>
		</form><!-- /end new_comment_form_content -->
	</div>
</div>
<!-- End fancybox -->
<?php }?><?php }} ?>