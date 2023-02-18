<?php

use Command\Message;
use Command\Messenger\Email;
use Command\Messenger\SMS;
use Decorator\Invoice;
use Decorator\Items\Apartment;
use Decorator\Items\Car;
use FactoryMethod\Stationery\Factory\GraphiteStationeryFactory;
use FactoryMethod\Stationery\Factory\WoodStationeryFactory;
use Observer\Publisher;
use Observer\Service\MailService;
use Observer\Service\PushNotificationService;
use Observer\Service\SMSService;
use singleton\DatabaseConnection;
use Strategy\Gateway\Mellat;
use Strategy\Payment;

require __DIR__ . '/vendor/autoload.php';

//Strategy
echo '<br>';
echo 'Strategy Pattern';
echo '<br>';
$payment = new Payment();
$payment->setGateway(new Mellat());
$payment->initPayment(['userId' => 123]);
$payment->verifyPayment(['paymentId' => 123]);


//Observer
echo '<br>';
echo 'Observer Pattern';
echo '<br>';
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
echo '<br>';
echo 'Decorator Pattern';
echo '<br>';
$invoice = new Invoice();
$invoice = new Car($invoice);
$invoice = new Apartment($invoice);
var_dump($invoice->totalPrice(), '<br>', $invoice->items());


//FactoryMethod
echo '<br>';
echo 'FactoryMethod Pattern';
echo '<br>';
$factory = new WoodStationeryFactory();
$pencil = $factory->createPencil();
echo $pencil->getMaterial(); // Wood
echo '<br>';
$eraser = $factory->createEraser();
echo $eraser->getMaterial(); // Rubber
echo '<br>';
$factory = new GraphiteStationeryFactory();
$pencil = $factory->createPencil();
echo $pencil->getMaterial(); // Graphite
echo '<br>';
$eraser = $factory->createEraser();
echo $eraser->getMaterial(); // Plastic
echo '<br>';


// Singleton
echo '<br>';
echo 'Singleton Pattern';
echo '<br>';
$DBConnection1 = DatabaseConnection::getInstance();
$DBConnection2 = DatabaseConnection::getInstance();

var_dump($DBConnection1, $DBConnection2);



//Command
echo '<br>';
echo 'Command Pattern';
echo '<br>';

$message = new Message();
$message->addMessage( new SMS() );
$message->addMessage( new Email() );

$message->executeMessage();