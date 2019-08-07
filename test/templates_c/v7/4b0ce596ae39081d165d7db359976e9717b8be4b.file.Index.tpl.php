<?php /* Smarty version Smarty-3.1.7, created on 2019-08-07 22:42:39
         compiled from "/private/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/SPCMLConnector/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15922793305d4b29af05acd0-74587968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b0ce596ae39081d165d7db359976e9717b8be4b' => 
    array (
      0 => '/private/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/SPCMLConnector/Index.tpl',
      1 => 1565097192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15922793305d4b29af05acd0-74587968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'WIDTHTYPE' => 0,
    'MODEL' => 0,
    'USERS' => 0,
    'USER_MODEL' => 0,
    'USER_NAME' => 0,
    'LISTVIEW_HEADERS' => 0,
    'COLUMN_NAME' => 0,
    'LISTVIEW_HEADER' => 0,
    'NEXT_SORT_ORDER' => 0,
    'SORT_IMAGE' => 0,
    'LISTVIEW_ENTRIES' => 0,
    'LISTVIEW_ENTRY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d4b29af0addc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d4b29af0addc')) {function content_5d4b29af0addc($_smarty_tpl) {?><div class="container-fluid"><div class="widget_header"><h3><?php echo vtranslate('LBL_CML_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><hr><form id="cmlSettingsForm"><div class="blockData"><div class="row form-group"><div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel"><label class="muted control-label"><?php echo vtranslate('LBL_ADMIN_LOGIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class=" col-lg-4 col-md-4 col-sm-4"><input class="inputElement" type="text" name="adminLogin" id="adminLogin" value="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getAdminLogin();?>
"></div></div></div><div class="row form-group"><div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel"><label class="muted control-label"><?php echo vtranslate('LBL_ADMIN_PASSWORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class=" col-lg-4 col-md-4 col-sm-4"><input class="inputElement" type="text" name="adminPassword" id="adminPassword" value="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getAdminPassword();?>
"></div></div></div><div class="row form-group"><div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel"><label class="muted control-label"><?php echo vtranslate('LBL_WEBSITE_URL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class=" col-lg-4 col-md-4 col-sm-4"><input class="inputElement" type="text" name="websiteURL" id="websiteURL" value="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getSiteUrl();?>
"></div></div></div><div class="row form-group"><div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel"><label class="muted control-label"><?php echo vtranslate('LBL_ASSIGNED_USER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class=" col-lg-4 col-md-4 col-sm-4"><select name="assignedUser" id="assignedUser" class="select2 inputElement"><?php  $_smarty_tpl->tpl_vars['USER_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['USERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_MODEL']->key => $_smarty_tpl->tpl_vars['USER_MODEL']->value){
$_smarty_tpl->tpl_vars['USER_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['USER_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('user_name'), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODEL']->value->getAssignedUser()==$_smarty_tpl->tpl_vars['USER_NAME']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['USER_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></select></div></div></div></div><div class="row"><div class="span6 padding1per"><button class="btn addButton pull-right" style="margin-right:50%;" type="submit" name="saveCmlSettings"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div class="span6">&nbsp;</div></div></form><div class="widget_header"><h3><?php echo vtranslate('LBL_STATUSES_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><hr><button id="editStatus" class="btn addButton"  onclick="location.href='index.php?module=SPCMLConnector&view=List&parent=Settings'"><strong><?php echo vtranslate('LBL_EDIT_STATUSES_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button id="history" class="btn addButton pull-right"  onclick="location.href='index.php?module=SPCMLConnector&view=History&parent=Settings'"><strong><?php echo vtranslate('LBL_TRANSACTION_HISTORY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><br><br><table class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
?><th nowrap <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last){?> colspan="2" <?php }?> class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><a href="javascript:void(0);" class="listViewHeaderValues" data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('column')){?><?php echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;?>
<?php }else{ ?>ASC<?php }?>" data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('column');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('column')){?><img class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
 icon-white"><?php }?></a></th><?php } ?></tr></thead><?php  $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = true;
?><tr class="listViewEntries" data-id='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
'><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
?><td class="listViewEntryValue  nowrap"><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><?php } ?></tr><?php } ?></table></div>	
<?php }} ?>