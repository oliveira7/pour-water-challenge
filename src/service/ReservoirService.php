<?php

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

  public function smallest(int $leftValue, int $rightValue): int
  {
    return $leftValue > $rightValue ? $rightValue : $leftValue;
  }

  public function biggest(array $array): int
  {
    return max($array);
  }
}
