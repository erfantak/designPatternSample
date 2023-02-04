<?php

use Decorator\Invoice;
use Decorator\Items\Apartment;
use Decorator\Items\Car;
use Observer\Publisher;
use Observer\Service\MailService;
use Observer\Service\PushNotificationService;
use Observer\Service\SMSService;
use Strategy\Gateway\Mellat;
use Strategy\Payment;

require __DIR__ . '/vendor/autoload.php';

//Strategy
$payment = new Payment();
$payment->setGateway(new Mellat());
$payment->initPayment(['userId' => 123]);
$payment->verifyPayment(['paymentId' => 123]);


//Observer
$MailService = new MailService();
$smsService = new SMSService();
$PushNotificationService = new PushNotificationService();

$publisher = new Publisher();
$publisher->attach($MailService);
$publisher->attach($smsService);
$publisher->attach($PushNotificationService);

$publisher->setEvent('Run something...');

$publisher->detach($smsService);
$publisher->detach($PushNotificationService);

$publisher->setEvent('Run another event...');

//Decorator
$invoice = new Invoice();
$invoice = new Car($invoice);
$invoice = new Apartment($invoice);
var_dump($invoice->totalPrice(), '<br>', $invoice->items());