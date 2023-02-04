<?php


namespace Decorator\Items;


use Decorator\InvoiceInterface;

abstract class Items implements InvoiceInterface
{
    protected InvoiceInterface $invoice;

    public function __construct(InvoiceInterface $invoice)
    {
        $this->invoice = $invoice;
    }
}