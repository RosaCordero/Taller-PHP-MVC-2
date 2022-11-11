<?php


require_once '../config/router.php';
require_once '../controllers/ReportesController.php';

$router = new router();
$router->resolve($_SERVER);
$router->get('/', function () {
    echo "Hola mundo";
});

$router->post('/reportes', [ReportesController::class, 'getTimestamps']);

