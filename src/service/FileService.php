<?php

namespace src\service;

class FileService
{
  private $file;

  function __construct($file)
  {
    $this->file = $file;
  }

  public function read(): array
  {
    $cases = [];

    if ($file = fopen($this->file, "r")) {
      while (!feof($file)) {
        $line = fgets($file);
        array_push($cases, str_replace("\r\n", "", $line));
      }
      fclose($file);
    }

    return $cases;
  }
}
