<?php

namespace FactoryMethod\Stationery;

class WoodPencil implements PencilInterface
{
    public function getMaterial(): string
    {
        return 'Wood';
    }
}
