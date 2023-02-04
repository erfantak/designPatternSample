<?php


namespace Decorator\Items;


class Apartment extends Items
{
    public function totalPrice(): int
    {
        return $this->invoice->totalPrice() + 500000000;
    }

    public function items(): array
    {
        return $this->invoice->items() + ['Apartment' => 'Apartment'];
    }
}