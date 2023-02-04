<?php


namespace Observer\Service;


use Observer\Observable;

class PushNotificationService implements ObserverInterface
{
    public function update(Observable $observable)
    {
        echo 'send Notification Successfully. Event: '. $observable->getEvent().'<br>';
    }
}