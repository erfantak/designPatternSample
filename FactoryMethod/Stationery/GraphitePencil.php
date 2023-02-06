<?php

namespace FactoryMethod\Stationery;


class GraphitePencil implements PencilInterface
{
    public function getMaterial(): string
    {
        return 'Graphite';
    }
}
