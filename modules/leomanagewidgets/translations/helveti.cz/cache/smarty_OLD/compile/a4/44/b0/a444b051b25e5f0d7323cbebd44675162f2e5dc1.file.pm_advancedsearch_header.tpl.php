<?php /* Smarty version Smarty-3.1.14, created on 2014-11-10 19:34:28
         compiled from "/srv/www/helveti/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37665825546105347f9803-86631448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a444b051b25e5f0d7323cbebd44675162f2e5dc1' => 
    array (
      0 => '/srv/www/helveti/modules/pm_advancedsearch4/views/templates/hook/pm_advancedsearch_header.tpl',
      1 => 1413762222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37665825546105347f9803-86631448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ASSearchUrlForm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546105348238a7_83820365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546105348238a7_83820365')) {function content_546105348238a7_83820365($_smarty_tpl) {?><!-- MODULE PM_AdvancedSearch4 || Presta-Module.com -->
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