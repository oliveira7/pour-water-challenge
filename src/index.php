<?php

namespace App;

use App\Router\Router;

require_once  '../vendor/autoload.php';

$page = file_get_contents('public/view/template.html');

ob_start();
$router = new Router;
$router->start($_GET);
$response = ob_get_contents();
ob_end_clean();

$pageReady = str_replace('{{dinamic}}', $response, $page);

echo $pageReady;
