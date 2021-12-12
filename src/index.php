<?php
require_once 'router/Router.php';

require_once 'controller/ReservoirController.php';
require_once 'controller/ErroController.php';

require_once 'service/TwigService.php';
require_once 'service/FileService.php';
require_once 'service/ReservoirService.php';

require_once 'model/Reservoir.php';

require_once '../vendor/autoload.php';

$page = file_get_contents('public/view/template.html');

ob_start();
$router = new Router;
$router->start($_GET);
$response = ob_get_contents();
ob_end_clean();

$pageReady = str_replace('{{dinamic}}', $response, $page);

echo $pageReady;
