<?php


namespace Decorator;


class Invoice implements InvoiceInterface
{
    public function totalPrice(): int
    {
        return 0;
    }

    public function items(): array
    {
        return [];
    }
}