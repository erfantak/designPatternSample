<?php

namespace FactoryMethod\Stationery\Factory;

use FactoryMethod\Stationery\EraserInterface;
use FactoryMethod\Stationery\GraphitePencil;
use FactoryMethod\Stationery\PencilInterface;
use FactoryMethod\Stationery\PlasticEraser;

class GraphiteStationeryFactory implements StationeryFactoryInterface
{
    public function createPencil(): PencilInterface
    {
        return new GraphitePencil();
    }

    public function createEraser(): EraserInterface
    {
        return new PlasticEraser();
    }
}
