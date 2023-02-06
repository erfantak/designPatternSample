<?php

namespace FactoryMethod\Stationery\Factory;

use FactoryMethod\Stationery\RubberEraser;
use FactoryMethod\Stationery\WoodPencil;

class WoodStationeryFactory implements StationeryFactoryInterface
{
    public function createPencil(): WoodPencil
    {
        return new WoodPencil();
    }

    public function createEraser(): RubberEraser
    {
        return new RubberEraser();
    }
}
