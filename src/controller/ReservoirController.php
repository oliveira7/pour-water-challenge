<?php

namespace App\Controller;

use App\Service\FileService;
use App\Service\ReservoirService;
use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class ReservoirController
{
  public function create()
  {
    try {
      $loader = new FilesystemLoader('public/view');
      $twig = new Environment($loader);
      $template = $twig->load('create.html');
      $content = $template->render();

      echo $content;
    } catch (\Exception $e) {
      echo $e->getMessage();
    }
  }

  public function store()
  {
    try {
      $loader = new FilesystemLoader('public/view');
      $twig = new Environment($loader);
      $template = $twig->load('water.html');

      if (empty($_FILES['cases'])) {
        throw new \Exception('Arquivo inexistente');
      }

      if ($_FILES['cases']['type'] !== 'text/plain') {
        throw new \Exception('Formato do arquivo inválido');
      }

      $fileService = new FileService($_FILES['cases']['tmp_name']);
      $cases = $fileService->read();
      $reservoirService = new ReservoirService();
      $amoutOfWater = $reservoirService->contentTreatment($cases);

      echo $template->render(['amoutOfWater' => $amoutOfWater]);
    } catch (\Exception $e) {
      echo $e->getMessage();
    }
  }
}
