<?php /* Smarty version Smarty-3.1.7, created on 2019-08-07 22:42:41
         compiled from "/private/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/SPTips/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16827709555d4b29b1990444-85487981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af394a6b5b8b1e453491945cbe730b552728227b' => 
    array (
      0 => '/private/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/SPTips/Index.tpl',
      1 => 1565157384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16827709555d4b29b1990444-85487981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'CURRENT_PROVIDER_ID' => 0,
    'EXISTING_PROVIDERS' => 0,
    'CURRENT_PROVIDER' => 0,
    'KEY' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d4b29b1a2b63',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d4b29b1a2b63')) {function content_5d4b29b1a2b63($_smarty_tpl) {?><div class="container-fluid"><div class="contents tabbable"><ul class="nav nav-tabs massEditTabs" style="margin-bottom: 0;"><li class="active"><a href="#providersTab" data-toggle="tab"><strong><?php echo vtranslate('LBL_AVAILABLE_PROVIDERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li id="assignedToRoleTab"><a href="#rulesTab" data-toggle="tab"><strong><?php echo vtranslate('LBL_RULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li></ul></div><div class="tab-content layoutContent padding20 themeTableColor overflowVisible"><div class="tab-pane active" id="providersTab"><div id="pickListValuesTable"><div class=" vt-default-callout vt-info-callout"><h4 class="vt-callout-header"><span class="fa fa-info-circle">&nbsp;&nbsp;</span><?php echo vtranslate('LBL_INFORMATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><p><?php echo vtranslate('LBL_PROVIDERS_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div><div class="controls fieldValue col-sm-6"><?php if (empty($_smarty_tpl->tpl_vars['CURRENT_PROVIDER_ID']->value)){?><h5><?php echo vtranslate('LBL_SELECT_PROVIDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><?php }?><select id="existingProviders" class="select2" name="modulesList" style="min-width: 250px;"><?php if (empty($_smarty_tpl->tpl_vars['CURRENT_PROVIDER_ID']->value)){?><option value=''></option><?php }?><?php  $_smarty_tpl->tpl_vars['CURRENT_PROVIDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['EXISTING_PROVIDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->key => $_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->value){
$_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->value;?>
" data-viewmodule="<?php echo $_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->value;?>
" data-provider_id="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['KEY']->value==$_smarty_tpl->tpl_vars['CURRENT_PROVIDER_ID']->value){?>selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php } ?></select><button id="selectProvider" class="btn btn-default"><strong><?php echo vtranslate('LBL_SELECT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div><div class="tab-pane form-horizontal row" id="rulesTab"><div id="rulesContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ListRules.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div></div>	
<?php }} ?>