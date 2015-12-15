<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:54:11
         compiled from "/srv/www/helveti/helveti.cz/modules/noxhtmlblock/views/templates/hook/cmsfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7450839565667194367beb4-05598843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60c296f22437073fdddafdd1eb50b9be53413517' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/noxhtmlblock/views/templates/hook/cmsfooter.tpl',
      1 => 1411654745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7450839565667194367beb4-05598843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms' => 0,
    'recenze' => 0,
    'klad' => 0,
    'zapor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5667194371fd53_90664919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5667194371fd53_90664919')) {function content_5667194371fd53_90664919($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['cms']->value->id==9||$_smarty_tpl->tpl_vars['cms']->value->id==14||$_smarty_tpl->tpl_vars['cms']->value->id==7){?>

	<div id="blok_staticke_info">
	<div id="heureka_last2">
			<h3>Zákaznící nás mají rádi:</h3>
			<?php  $_smarty_tpl->tpl_vars['recenze'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recenze']->_loop = false;
 $_from = Store::heurekaHodnoceni(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
					<div class="heureka_text"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['recenze']->value['text'],60,"...",true);?>
</div>
				</div>
			<?php } ?>
		</div>

	</div>

<?php }?><?php }} ?>