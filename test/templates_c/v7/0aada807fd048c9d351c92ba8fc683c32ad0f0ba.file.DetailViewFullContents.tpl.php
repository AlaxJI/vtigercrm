<?php /* Smarty version Smarty-3.1.7, created on 2019-08-07 22:49:00
         compiled from "/private/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15966545085d4b2b2cdb22c9-38515292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aada807fd048c9d351c92ba8fc683c32ad0f0ba' => 
    array (
      0 => '/private/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewFullContents.tpl',
      1 => 1508495595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15966545085d4b2b2cdb22c9-38515292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d4b2b2cdb9c4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d4b2b2cdb9c4')) {function content_5d4b2b2cdb9c4($_smarty_tpl) {?>



<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
</form>
<?php }} ?>