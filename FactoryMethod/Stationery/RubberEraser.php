<?php

namespace FactoryMethod\Stationery;

class RubberEraser implements EraserInterface
{
    public function getMaterial(): string
    {
        return 'Rubber';
    }
}
