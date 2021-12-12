<?php

namespace App\Services;

class FileService
{
  private string $file;

  function __construct(string $file)
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
