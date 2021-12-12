<?php

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
      $controller = 'HomeController';
    }

    if (!class_exists($controller)) {
      $controller = 'ErroController';
      $method = 'index';
    }

    call_user_func_array(array(new $controller, $method), array());
  }
}
