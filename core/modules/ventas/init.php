<?php
// init.php
// archivo iniciarlizador del modulo
// librerias requeridas
// * Database
// * Session

include "core/modules/".Module::$module."/model/UserData.php";
include "core/modules/".Module::$module."/model/ProductData.php";
include "core/modules/".Module::$module."/model/CategoryData.php";
include "core/modules/".Module::$module."/model/OperationTypeData.php";
include "core/modules/".Module::$module."/model/OperationData.php";
include "core/modules/".Module::$module."/model/SellData.php";
include "core/modules/".Module::$module."/model/SpentData.php";

include "core/modules/".Module::$module."/model/PostData.php";

session_start();
ob_start();

Module::loadLayout("index");

?>