<?php

include_once 'config.php';
include_once 'include/Webservices/Relation.php';

include_once 'includes/main/WebUI.php';

include_once 'vtlib/Vtiger/Module.php';
require_once("vtlib/Vtiger/Package.php");

error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");

$Vtiger_Utils_Log = true;

$MODULENAME = "Classroom";

$oldInstance = Vtiger_Module::getInstance($MODULENAME);
if ($oldInstance) $oldInstance->delete();

$moduleInstance       = new Vtiger_Module();
$moduleInstance->name = $MODULENAME;
$moduleInstance->parent = "Tools";
$moduleInstance->save();
$moduleInstance->initTables();
$menuInstance = Vtiger_Menu::getInstance('MARKETING');
print_r($menuInstance);
$menuInstance->addModule($moduleInstance);

$infoBlock        = new Vtiger_Block();
$infoBlock->label = "LBL_".strtoupper($moduleInstance->name)."_INFORMATION";
$moduleInstance->addBlock($infoBlock);

// Связываем с контактами - учениками, которые будут учиться
$contactModule = Vtiger_Module::getInstance("Contacts");
$relLabel      = "Contacts";
$moduleInstance->setRelatedList($contactModule, $relLabel, Array("ADD", "SELECT"));

/**
 *  Наименование или № класса
 */
$nameIsField               = new Vtiger_Field();
$nameIsField->name         = "name";
$nameIsField->label        = "Name";
$nameIsField->uitype       = 2;
$nameIsField->summaryfield = 1;
$nameIsField->column       = $nameIsField->name;
$nameIsField->columntype   = "VARCHAR(255)";
$nameIsField->typeofdata   = "V~M";
$infoBlock->addField($nameIsField);
$moduleInstance->setEntityIdentifier($nameIsField);

/**
 *  Состояние класса
 */
$statusIsField               = new Vtiger_Field();
$statusIsField->name         = "classroom_status";
$statusIsField->label        = "Status";
$statusIsField->uitype       = 16;
$statusIsField->summaryfield = 1;
$statusIsField->column       = $statusIsField->name;
$statusIsField->columntype   = "VARCHAR(255)";
$statusIsField->typeofdata   = "V~M";
$infoBlock->addField($statusIsField);
$statusIsField->setPicklistValues(Array("Открыт", "Закрыт"));

/**
 * Тип класса
 */
$typeIsField               = new Vtiger_Field();
$typeIsField->name         = "classroom_type";
$typeIsField->label        = "Type";
$typeIsField->uitype       = 16;
$typeIsField->summaryfield = 1;
$typeIsField->column       = $typeIsField->name;
$typeIsField->columntype   = "VARCHAR(255)";
$typeIsField->typeofdata   = "V~M";
$infoBlock->addField($typeIsField);
$typeIsField->setPicklistValues(Array("Открытый", "Закрытый"));

/**
 * Минимальное кол-во учащихся
 */
$minCountOfPupilsIsField               = new Vtiger_Field();
$minCountOfPupilsIsField->name         = "min_pupils";
$minCountOfPupilsIsField->label        = "Minimum pupils";
$minCountOfPupilsIsField->uitype       = 1;
$minCountOfPupilsIsField->summaryfield = 1;
$minCountOfPupilsIsField->column       = $minCountOfPupilsIsField->name;
$minCountOfPupilsIsField->columntype   = "INT(11)";
$minCountOfPupilsIsField->typeofdata   = "I~M";
$infoBlock->addField($minCountOfPupilsIsField);

/**
 * Максимальное кол-во учащихся
 */
$maxCountOfPupilsIsField               = new Vtiger_Field();
$maxCountOfPupilsIsField->name         = "max_pupils";
$maxCountOfPupilsIsField->label        = "Maximum pupils";
$maxCountOfPupilsIsField->uitype       = 1;
$maxCountOfPupilsIsField->summaryfield = 1;
$maxCountOfPupilsIsField->column       = $maxCountOfPupilsIsField->name;
$maxCountOfPupilsIsField->columntype   = "INT(11)";
$maxCountOfPupilsIsField->typeofdata   = "I~M";
$infoBlock->addField($maxCountOfPupilsIsField);

/**
 * Ответственный: руководитель, учитель или педагог
 */
$assignedUserIsField             = new Vtiger_Field();
$assignedUserIsField->name       = "assigned_user";
$assignedUserIsField->label      = "Assigned User";
$assignedUserIsField->table      = "vtiger_crmentity";
$assignedUserIsField->column     = "smownerid";
$assignedUserIsField->uitype     = 53;
$assignedUserIsField->typeofdata = "V~M";
$infoBlock->addField($assignedUserIsField);

//second block
$descriptionBlock        = new Vtiger_Block();
$descriptionBlock->label = "LBL_".strtoupper($moduleInstance->name)."_DESCRIPTION";
$moduleInstance->addBlock($descriptionBlock);

/**
 * Описание класса
 */
$descriptionIsField             = new Vtiger_Field();
$descriptionIsField->name       = "description";
$descriptionIsField->label      = "Description";
$descriptionIsField->table      = "vtiger_crmentity";
$descriptionIsField->column     = $descriptionIsField->name;
$descriptionIsField->uitype     = 19;
$descriptionIsField->typeofdata = "V~O";
$descriptionBlock->addField($descriptionIsField);

// Фильтры
$filter1            = new Vtiger_Filter();
$filter1->name      = "All";
$filter1->isdefault = true;
$moduleInstance->addFilter($filter1);
$filter1->addField($nameIsField)
    ->addField($statusIsField, 1)
    ->addField($typeIsField, 2);

//настройка совместного доступа (права доступа устанавливаются по умолчанию).
$moduleInstance->setDefaultSharing();

//инициализация Веб-сервиса (автоматический вызов API)
$moduleInstance->initWebservice();

$focus = CRMEntity::getInstance($MODULENAME);

echo "init pack<br/>";
$package = new Vtiger_Package();
echo "before pack<br/>";
$package->export($moduleInstance, "test/vtlib", "Classroom.zip", false);
echo "after pack<br/>";
