<?php

namespace Strategy;


use Strategy\Gateway\GatewayInterface;
use Strategy\Gateway\Mellat;

class Payment
{
    private $gateway;

    public function setGateway(GatewayInterface $gateway)
    {
        $this->gateway = $gateway;
    }

    public function initPayment($data)
    {
        $this->gateway->initPayment($data);
    }

    public function verifyPayment($data)
    {
        $this->gateway->verifyPayment($data);
    }
}

