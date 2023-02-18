<?php


namespace Command\Messenger;


class Email implements MessengerInterface
{
    public function sendMessage()
    {
        echo 'Send Email';
        return true;
    }
}