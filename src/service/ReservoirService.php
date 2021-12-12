<?php

namespace App\Services;

use App\Models\Reservoir;

class ReservoirService
{
  public function contentTreatment(array $cases): array
  {
    $response = [];

    for ($position = 2; $position <= $cases[0] * 2; $position += 2) {
      $case = explode(" ", $cases[$position]);
      $reservoir = new Reservoir($case);
      $reservoir->pour();
      array_push($response, $reservoir->getWater());
    }

    return $response;
  }
}
