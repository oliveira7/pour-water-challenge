<?php

class HomeController
{
  public function create()
  {
    try {
      $loader = new \Twig\Loader\FilesystemLoader('public/view');
      $twig = new \Twig\Environment($loader);
      $template = $twig->load('create.html');
      $content = $template->render();
      
      echo $content;
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  public function store()
  {
    $fileService = new FileService($_FILES['cases']['tmp_name']);
    $cases = $fileService->read();
    $reservoirService = new ReservoirService();
    $response = $reservoirService->contentTreatment($cases);

    var_dump($response);
  }
}
