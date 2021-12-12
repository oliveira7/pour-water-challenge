<?php

class Reservoir
{
  private array $silhouettes;
  private int $water;

  public function __construct(array $silhouettes)
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

    $biggest = fn ($array) => max($array);
    $smallest = fn ($leftValue, $rightValue) => $leftValue > $rightValue ? $rightValue : $leftValue;

    foreach ($silhouettes as $key => $silhouette) {
      $arrayRight = array_slice($silhouettes, $key);
      $arrayLeft = array_slice($silhouettes,  0, $key);

      if (!empty($arrayRight) && !empty($arrayLeft)) {
        $difference = $smallest($biggest($arrayLeft), $biggest($arrayRight)) - $silhouette;
        if ($difference > 0)
          $this->water += $difference;
      }
    }
  }
}
