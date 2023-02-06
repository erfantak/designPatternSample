<?php

namespace FactoryMethod\Stationery\Factory;

use FactoryMethod\Stationery\EraserInterface;
use FactoryMethod\Stationery\PencilInterface;

interface StationeryFactoryInterface
{
    public function createPencil(): PencilInterface;
    public function createEraser(): EraserInterface;
}
