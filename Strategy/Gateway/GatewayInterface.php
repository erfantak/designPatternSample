<?php


namespace Strategy\Gateway;


interface GatewayInterface
{
    public function initPayment($data);

    public function verifyPayment($data);
}