<?php /* Smarty version Smarty-3.1.7, created on 2019-08-07 22:42:41
         compiled from "/private/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/SPTips/RulesTable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1968148335d4b29b1a4fb74-69167228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9cf3eddb4a33adeaee48b9914a0f1ac61b910ca' => 
    array (
      0 => '/private/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/SPTips/RulesTable.tpl',
      1 => 1565157384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1968148335d4b29b1a4fb74-69167228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'EXISTING_RULES' => 0,
    'ITEM' => 0,
    'RULE_ID' => 0,
    'MODULE_NAME' => 0,
    'SOURCE_FIELD' => 0,
    'SOURCE_PROVIDER_FIELD' => 0,
    'DEPENDENT_FIELDS' => 0,
    'LABEL' => 0,
    'FIELD' => 0,
    'PROVIDER_FIELDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d4b29b1a7407',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d4b29b1a7407')) {function content_5d4b29b1a7407($_smarty_tpl) {?>
<table id="listview-table" class="table listview-table rulesTable"><thead><tr class="listViewContentHeader"><th style="width:25%"><?php echo vtranslate('LBL_EXISTING_RULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody class="overflow-y"><tr class="listViewEntries"><td class="listViewEntryValue"></td><td class="listViewEntryValue"><?php echo vtranslate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td class="listViewEntryValue"><?php echo vtranslate('LBL_SELECTED_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td class="listViewEntryValue"><?php echo vtranslate('LBL_FILL_IN_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td></tr><?php  $_smarty_tpl->tpl_vars['ITEM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ITEM']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['EXISTING_RULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->key => $_smarty_tpl->tpl_vars['ITEM']->value){
$_smarty_tpl->tpl_vars['ITEM']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['ITEM']->key;
?><?php $_smarty_tpl->tpl_vars['RULE_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['ITEM']->value->get('ruleId'), null, 0);?><?php $_smarty_tpl->tpl_vars['DEPENDENT_FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['ITEM']->value->get('targetFields'), null, 0);?><?php $_smarty_tpl->tpl_vars['PROVIDER_FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['ITEM']->value->get('targetProviderFields'), null, 0);?><?php $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['ITEM']->value->get('sourceModule'), null, 0);?><?php $_smarty_tpl->tpl_vars['SOURCE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['ITEM']->value->get('sourceField'), null, 0);?><?php $_smarty_tpl->tpl_vars['SOURCE_PROVIDER_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['ITEM']->value->get('sourceProviderField'), null, 0);?><tr class="listViewEntries"><td width="10%"><div class="table-actions" style = "width:60px"><a href="index.php?module=SPTips&view=EditRules&parent=Settings&record=<?php echo $_smarty_tpl->tpl_vars['RULE_ID']->value;?>
"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a role="javascript:void(0)" class="deleteRule" data-rule-id="<?php echo $_smarty_tpl->tpl_vars['RULE_ID']->value;?>
"><i class="fa fa-trash"></i></a></div></td><td class="listViewEntryValue"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="listViewEntryValue"><?php echo vtranslate($_smarty_tpl->tpl_vars['SOURCE_FIELD']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;&nbsp;<i class="fa fa-arrow-left">&nbsp;&nbsp;</i><?php echo vtranslate($_smarty_tpl->tpl_vars['SOURCE_PROVIDER_FIELD']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td class="listViewEntryValue"><ul class="lists-menu"><?php  $_smarty_tpl->tpl_vars['LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['DEPENDENT_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LABEL']->key => $_smarty_tpl->tpl_vars['LABEL']->value){
$_smarty_tpl->tpl_vars['LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD']->value = $_smarty_tpl->tpl_vars['LABEL']->key;
?><li style="font-size:12px;" class="listViewFilter" ><?php echo vtranslate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;&nbsp;<i class="fa fa-arrow-left">&nbsp;&nbsp;</i> <?php echo vtranslate($_smarty_tpl->tpl_vars['PROVIDER_FIELDS']->value[$_smarty_tpl->tpl_vars['FIELD']->value],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li><?php } ?></ul></td></tr><?php } ?></tbody></table><?php }} ?>