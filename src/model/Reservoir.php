<?php

namespace App\Model;

use App\Service\ReservoirService;

class Reservoir
{
  private $silhouettes;
  private $water;

  public function __construct($silhouettes)
  {
    $this->silhouettes = $silhouettes;
    $this->water = 0;
  }

  public function getWater(): int
  {
    return $this->water;
  }

  public function pour(): void
  {
    $silhouettes = $this->silhouettes;

    foreach ($silhouettes as $key => $silhouette) {
      $arrayRight = array_slice($silhouettes, $key);
      $arrayLeft = array_slice($silhouettes,  0, $key);

      if (!empty($arrayRight) && !empty($arrayLeft)) {
        $reservoir = new ReservoirService();
        $left = $reservoir->biggest($arrayLeft);
        $right = $reservoir->biggest($arrayRight);
        $difference = $reservoir->smallest($left, $right) - $silhouette;
        if ($difference > 0)
          $this->water += $difference;
      }
    }
  }
}
