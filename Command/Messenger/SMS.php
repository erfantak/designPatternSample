<?php


namespace Command\Messenger;


class SMS implements MessengerInterface
{
    public function sendMessage()
    {
        echo 'Send SMS';
    }
}