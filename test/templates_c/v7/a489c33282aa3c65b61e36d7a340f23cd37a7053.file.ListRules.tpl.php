<?php /* Smarty version Smarty-3.1.7, created on 2019-08-07 22:42:41
         compiled from "/private/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/SPTips/ListRules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6374838285d4b29b1a33454-43128152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a489c33282aa3c65b61e36d7a340f23cd37a7053' => 
    array (
      0 => '/private/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/SPTips/ListRules.tpl',
      1 => 1565157384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6374838285d4b29b1a33454-43128152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'EXISTING_PROVIDERS' => 0,
    'CURRENT_PROVIDER_ID' => 0,
    'CURRENT_PROVIDER' => 0,
    'KEY' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d4b29b1a49f0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d4b29b1a49f0')) {function content_5d4b29b1a49f0($_smarty_tpl) {?>
<div class="col-sm-12 col-xs-12 "><div class=" vt-default-callout vt-info-callout"><h4 class="vt-callout-header"><span class="fa fa-info-circle">&nbsp;</span><?php echo vtranslate('LBL_INFORMATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><ul><li><?php echo vtranslate('LBL_DIFFERENT_RULES_FOR_PROVIDERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li><li><?php echo vtranslate('LBL_AUTOCOMPLETE_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li></ul></div><div id="listview-actions" class="listview-actions-container"><label class="muted control-label"><?php echo vtranslate('LBL_PROVIDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;&nbsp;</label><select name="existingProviders" class="select2" style="min-width: 250px;"><?php  $_smarty_tpl->tpl_vars['CURRENT_PROVIDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['EXISTING_PROVIDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->key => $_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->value){
$_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->key;
?><?php if (empty($_smarty_tpl->tpl_vars['CURRENT_PROVIDER_ID']->value)){?><option value=''></option><?php }?><option value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->value;?>
" data-viewmodule="<?php echo $_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->value;?>
" data-provider_id="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['KEY']->value==$_smarty_tpl->tpl_vars['CURRENT_PROVIDER_ID']->value){?>selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['CURRENT_PROVIDER']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php } ?></select><button id="addRule" class="btn btn-default pull-right"><strong><?php echo vtranslate('LBL_CREATE_RULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><br><br><button id="editProvider" type="button" class="btn btn-default pull-right"><strong><?php echo vtranslate('LBL_EDIT_PROVIDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><div class="list-content row"><div class="col-sm-12 col-xs-12 "><div id="table-content" class="table-container" style="padding-top:0px !important;"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("RulesTable.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div id="scroller_wrapper" class="bottom-fixed-scroll"><div id="scroller" class="scroller-div"></div></div></div></div></div></div><?php }} ?>