<?php

use src\service\ReservoirService;
use PHPUnit\Framework\TestCase;

class ReservoirServiceTest extends TestCase
{

  public function testReservoirServiceContentTreatment()
  {
    $reservoirService = new ReservoirService();

    $cases = [
      "7",
      "9",
      "5 4 3 2 1 2 3 4 5",
      "30",
      "7 10 2 5 13 3 4 10 5 9 4 2 6 5 18 6 8 6 15 4 20 4 8 9 5 21 4 7 19 2",
      "1",
      "10",
      "10",
      "1 2 3 4 5 6 7 8 9 10",
      "10",
      "10 9 8 7 6 5 4 3 2 1",
      "15",
      "10 10 10 10 10 10 10 10 10 10 10 10 10 10 10",
      "20",
      "1 2 3 4 5 6 7 8 9 10 10 9 8 7 6 5 4 3 2 1"
    ];

    $amountOfWater = [
      16,
      214,
      0,
      0,
      0,
      0,
      0
    ];

    $response = $reservoirService->contentTreatment($cases);

    $this->assertEquals($amountOfWater, $response);
  }
}
