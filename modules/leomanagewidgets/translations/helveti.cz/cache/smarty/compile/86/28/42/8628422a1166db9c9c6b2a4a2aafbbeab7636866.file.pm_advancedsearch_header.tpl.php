<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 18:53:00
         compiled from "/srv/www/helveti/helveti.cz/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1965376757566718fc2ea7e1-59814512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8628422a1166db9c9c6b2a4a2aafbbeab7636866' => 
    array (
      0 => '/srv/www/helveti/helveti.cz/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_header.tpl',
      1 => 1413762222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1965376757566718fc2ea7e1-59814512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ASSearchUrlForm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566718fc301130_75920001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566718fc301130_75920001')) {function content_566718fc301130_75920001($_smarty_tpl) {?><!-- MODULE PM_AdvancedSearch4 || Presta-Module.com -->
<script type="text/javascript">
var ASPath = '<?php echo @constant('__PS_BASE_URI__');?>
modules/pm_advancedsearch4/';
var ASSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['ASSearchUrlForm']->value;?>
';
var ASParams = {};
var ASHash = {};
var ASPSVersion = '<?php echo @constant('_PS_VERSION_');?>
';
$(document).ready(function() { asInitAsHashChange(); });
</script>
<!-- MODULE PM_AdvancedSearch4 || Presta-Module.com --><?php }} ?>