<?php
      include_once 'vtlib/Vtiger/Module.php';
      require_once('vtlib/Vtiger/Package.php');

      $Vtiger_Utils_Log = true;

      $MODULENAME = 'MyModule';

      $oldInstance = Vtiger_Module::getInstance($MODULENAME);
      if ($oldInstance) $oldInstance->delete();

      $moduleInstance = new Vtiger_Module();
      $moduleInstance->name = $MODULENAME;
      $moduleInstance->parent = 'Tools';
      $moduleInstance->save();
      $moduleInstance->initTables();

      $info_block = new Vtiger_Block();
      $info_block->label = 'LBL_' . strtoupper($moduleInstance->name) . '_INFORMATION';
      $moduleInstance->addBlock($info_block);

      $contactModule = Vtiger_Module::getInstance('Contacts');
      $relLabel ='Contacts';
      $moduleInstance->setRelatedList( $contactModule, $relLabel, Array('ADD', 'SELECT'));

      $name_filed = new Vtiger_Field();
      $name_filed->name = 'name';
      $name_filed->label = 'Name';
      $name_filed->uitype = 2;
      $name_filed->summaryfield =1;
      $name_filed->column = $name_filed->name;
      $name_filed->columntype = 'VARCHAR(255)';
      $name_filed->typeofdata = 'V~M';
      $info_block->addField($name_filed);
      $moduleInstance->setEntityIdentifier($name_filed);

      $status_field = new Vtiger_Field();
      $status_field->name = 'is_active_status';
      $status_field->label = 'Status';
      $status_field->uitype = 16;
      $status_field->summaryfield =1;
      $status_field->column = $status_field->name;
      $status_field->columntype = 'VARCHAR(255)';
      $status_field->typeofdata = 'V~M';
      $info_block->addField($status_field);
      $status_field->setPicklistValues(Array('Активно', 'Неактивно'));

      $order_field = new Vtiger_Field();
      $order_field->name = 'salesorderid';
      $order_field->label = 'Sales order';
      $order_field->uitype = 10;
      $order_field->summaryfield =1;
      $order_field->column = $order_field->name;
      $order_field->columntype = 'INT(19)';
      $order_field->typeofdata = 'I~M';
      $info_block->addField($order_field);
      $order_field->setRelatedModules(Array('SalesOrder'));

      $date_field = new Vtiger_Field();
      $date_field->name = 'date';
      $date_field->label = 'Date';
      $date_field->uitype = 5;
      $date_field->column = $date_field->name;
      $date_field->columntype = 'DATE';
      $date_field->typeofdata = 'D~O';
      $info_block->addField($date_field);

      $responsible_field = new Vtiger_Field();
      $responsible_field->name = 'responsible';
      $responsible_field->label = 'Ответственный';
      $responsible_field->table = 'vtiger_crmentity';
      $responsible_field->column = 'smownerid';
      $responsible_field->uitype = 53;
      $responsible_field->typeofdata = 'V~M';
      $info_block->addField($responsible_field);

      //second block
      $description_block = new Vtiger_Block();
      $description_block->label = 'LBL_' . strtoupper($moduleInstance->name) . '_DESCRIPTION';
      $moduleInstance->addBlock($description_block);

      $description_field = new Vtiger_Field();
      $description_field->name = 'description';
      $description_field->label = 'Description';
      $description_field->column = $description_field->name;
      $description_field->columntype = 'VARCHAR(255)';
      $description_field->uitype = 19;
      $description_field->typeofdata = 'V~O';
      $description_block->addField($description_field);

      $filter1 = new Vtiger_Filter();
      $filter1->name = 'All';
      $filter1->isdefault = true;
      $moduleInstance->addFilter($filter1);
      $filter1->addField($name_filed)->addField($order_field,1)->addField($status_field, 2);

      //настройка совместного доступа (права доступа устанавливаются по умолчанию).
      $moduleInstance->setDefaultSharing();

      //инициализация Веб-сервиса (автоматический вызов API)
      $moduleInstance->initWebservice();

      $package = new Vtiger_Package();
      $package->export($moduleInstance, 'test/vtlib', 'MyModule.zip', false);