<?php
//echo $_SERVER['REQUEST_URI'];

define("APP_PATH",dirname(dirname(__FILE__)));

//add database connection

include APP_PATH."/model/model.php";
include APP_PATH."/controller/controller.php";
include APP_PATH."/route/router.php";


?>