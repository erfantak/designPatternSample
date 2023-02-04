<?php


namespace Observer\Service;


use Observer\Observable;

class MailService implements ObserverInterface
{
    public function update(Observable $observable)
    {
        echo 'send Mail Successfully. Event: '. $observable->getEvent().'<br>';
    }
}