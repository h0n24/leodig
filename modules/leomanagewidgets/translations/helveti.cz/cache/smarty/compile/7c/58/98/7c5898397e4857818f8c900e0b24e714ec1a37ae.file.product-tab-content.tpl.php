<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:52:56
         compiled from "/srv/www/helveti/helveti.cz/modules/noxtabs/views/templates/hook/product-tab-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2049674724566718f8e8f750-59420582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c5898397e4857818f8c900e0b24e714ec1a37ae' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/noxtabs/views/templates/hook/product-tab-content.tpl',
      1 => 1414932493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2049674724566718f8e8f750-59420582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'zalozky' => 0,
    'zalozka' => 0,
    'heureka' => 0,
    'recenze' => 0,
    'klad' => 0,
    'zapor' => 0,
    'obsah' => 0,
    'o' => 0,
    'video' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718f8f15938_12303172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718f8f15938_12303172')) {function content_566718f8f15938_12303172($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['zalozka'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zalozka']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zalozky']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zalozka']->key => $_smarty_tpl->tpl_vars['zalozka']->value){
$_smarty_tpl->tpl_vars['zalozka']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['zalozka']->value['typ']==2){?>
	<div id="noxTab<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs'];?>
" class="rte typ-<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['typ'];?>
 typ-pro-<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['typ_pro'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs']==3){?>
			<?php  $_smarty_tpl->tpl_vars['recenze'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recenze']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['heureka']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recenze']->key => $_smarty_tpl->tpl_vars['recenze']->value){
$_smarty_tpl->tpl_vars['recenze']->_loop = true;
?>
				<div class="heureka_hodnoceni">
					<div class="heureka_jmeno"><?php echo $_smarty_tpl->tpl_vars['recenze']->value['jmeno'];?>
</div>
					<div class="heureka_hvezdy"><?php echo $_smarty_tpl->tpl_vars['recenze']->value['procenta'];?>
% <span class="heureka_star heureka_star<?php echo $_smarty_tpl->tpl_vars['recenze']->value['hvezdy'];?>
"></span></div>
					<div class="heureka_datum"><?php echo $_smarty_tpl->tpl_vars['recenze']->value['datum'];?>
</div>
					<div class="heureka_text"><?php echo $_smarty_tpl->tpl_vars['recenze']->value['text'];?>
</div>
					<div class="heureka_klady">
						<?php  $_smarty_tpl->tpl_vars['klad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['klad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recenze']->value['klady']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['klad']->key => $_smarty_tpl->tpl_vars['klad']->value){
$_smarty_tpl->tpl_vars['klad']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['klad']->value){?>
								<span class="plus"><?php echo $_smarty_tpl->tpl_vars['klad']->value;?>
</span><br/>
							<?php }?>
						<?php } ?>
					</div>
					<div class="heureka_zapory">
						<?php  $_smarty_tpl->tpl_vars['zapor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zapor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recenze']->value['zapory']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zapor']->key => $_smarty_tpl->tpl_vars['zapor']->value){
$_smarty_tpl->tpl_vars['zapor']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['zapor']->value){?>
								<span class="minus"><?php echo $_smarty_tpl->tpl_vars['zapor']->value;?>
</span><br/>
							<?php }?>
						<?php } ?>
						
					</div>
					<div class="clearfix"></div>
				</div>
			<?php } ?>
		<?php }else{ ?>
		<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['obsah'];?>

		<?php }?>
	</div>
<?php }else{ ?>
	<div id="noxTab<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs'];?>
" class="rte typ-<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['typ'];?>
 typ-pro-<?php echo $_smarty_tpl->tpl_vars['zalozka']->value['typ_pro'];?>
">
		<p>
			<?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['obsah']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value){
$_smarty_tpl->tpl_vars['o']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs']==$_smarty_tpl->tpl_vars['o']->value['noxtab']){?>
					<?php if ($_smarty_tpl->tpl_vars['zalozka']->value['id_noxtabs']==1){?>
					<div class="videa_modul">
						<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['o']->value['videa']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value){
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>	
							<?php if ($_smarty_tpl->tpl_vars['video']->value){?>
								<div class="video-container">
								<iframe width="640" height="360" src="//www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['video']->value;?>
" frameborder="0" allowfullscreen></iframe>
								</div>
							<?php }?>
						<?php } ?>
					</div>
					<?php }else{ ?>
						<?php echo $_smarty_tpl->tpl_vars['o']->value['obsah'];?>

					<?php }?>
				<?php }?>
			<?php } ?>
		</p>
	</div>
<?php }?>
<?php } ?>
<?php }} ?>