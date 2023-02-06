<?php

namespace FactoryMethod\Stationery;

class PlasticEraser implements EraserInterface
{
    public function getMaterial(): string
    {
        return 'Plastic';
    }
}
