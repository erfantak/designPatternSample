<?php


namespace Observer\Service;


use Observer\Observable;

class SMSService implements ObserverInterface
{
    public function update(Observable $observable)
    {
        echo 'send SMS Successfully. Event: '. $observable->getEvent().'<br>';
    }
}