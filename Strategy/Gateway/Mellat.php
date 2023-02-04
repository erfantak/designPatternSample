<?php


namespace Strategy\Gateway;


class Mellat implements GatewayInterface
{
    public function initPayment($data)
    {
        var_dump($data);
    }

    public function verifyPayment($data)
    {
        var_dump($data);
    }
}