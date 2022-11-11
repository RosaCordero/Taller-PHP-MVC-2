<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
header('Content-Type: application/json');
ini_set('error_log', '../php_log.log');
error_log("Incio de APP!");
require_once '../vendor/autoload.php';
require_once '../libs/connection/Connection.php';
require_once '../libs/connection/BaseConnection.php';
require "../config/bootstrap.php";
require_once '../config/config.php';




require '../config/router.php';
require '../routes/api.php';


//$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//$uri = explode('/', $uri);
//
//if (isset($uri[2])  || !isset($uri[3])) {
//    header("HTTP/1.1 404 Not Found");
//    exit();
//}
//
//if($uri[2] == 'Account'){
//    require PROJECT_ROOT_PATH . "/Controller/Api/UserController.php";
//    $objFeedController = new UserController();
//$strMethodName = $uri[3] . 'Action';
//$objFeedController->{$strMethodName}();
//}
//
//
//
//
//$objFeedController = new UserController();
//$strMethodName = $uri[3] . 'Action';
//$objFeedController->{$strMethodName}();
