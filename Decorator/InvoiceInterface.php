<?php


namespace Decorator;


interface InvoiceInterface
{
    /**
     * @return integer
     */
    public function totalPrice(): int;

    /**
     * @return array
     */
    public function items(): array;
}