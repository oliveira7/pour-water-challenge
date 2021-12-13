<?php

namespace App\Router;

class Router
{
  public function start($urlGet)
  {

    if (isset($urlGet['method'])) {
      $method = $urlGet['method'];
    } else {
      $method = 'create';
    }

    if (isset($urlGet['page'])) {
      $controller = ucfirst($urlGet['page'] . 'Controller');
    } else {
      $controller = 'ReservoirController';
    }

    if (!class_exists('App\\Controller\\' . $controller)) {
      $controller = 'ErroController';
      $method = 'index';
    }
    $controller = 'App\\Controller\\' . $controller;

    call_user_func_array(array(new $controller, $method), array());
  }
}
