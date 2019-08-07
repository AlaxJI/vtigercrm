<?php

/**
 * Учебная комната - класс
 *
 * @author alaxji
 */
include_once "modules/Vtiger/CRMEntity.php";

class Classroom extends Vtiger_CRMEntity
{
    //таблица с полями Модуля
    var $table_name       = "vtiger_classroom";
    var $table_index      = "classroomid";
    var $customFieldTable = array("vtiger_classroomcf", "classroomid");
    var $tab_name         = array("vtiger_crmentity", "vtiger_classroom", "vtiger_classroomcf");
    var $tab_name_index   = array(
        "vtiger_crmentity"      => "crmid",
        "vtiger_classroom"   => "classroomid",
        "vtiger_classroomcf" => "classroomid"
        );

}