<?php


namespace Command;


use Command\Messenger\MessengerInterface;

class Message
{
    protected array $messages = [];

    public function addMessage(MessengerInterface $message)
    {
        $this->messages[] = $message;
    }

    public function executeMessage()
    {
        foreach ($this->messages as $message){
            $status = false;
            while ( ! $status ){
                $status = $message->sendMessage();
            }
        }
    }
}