<?php

use Strategy\Gateway\Mellat;
use Strategy\Payment;

require __DIR__ . '/vendor/autoload.php';

//Strategy
$payment = new Payment();
$payment->setGateway(new Mellat());
$payment->initPayment(['userId' => 123]);
$payment->verifyPayment(['paymentId' => 123]);


