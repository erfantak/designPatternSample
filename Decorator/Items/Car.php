<?php


namespace Decorator\Items;


class Car extends Items
{
    public function totalPrice(): int
    {
        return $this->invoice->totalPrice() + 10000000;
    }

    public function items(): array
    {
        return $this->invoice->items() + ['Car' => 'Benz'];
    }
}