<?php


namespace Observer;


use Observer\Service\ObserverInterface;

class Publisher implements Observable
{
    /**
     * @var ObserverInterface[]
     */
    protected $services = [];

    protected $event;

    public function attach($service)
    {
        $serviceKey = spl_object_hash($service);
        $this->services[$serviceKey] = $service;
    }

    public function detach($service)
    {
        $serviceKey = spl_object_hash($service);
        unset($this->services[$serviceKey]);
    }

    public function notify()
    {
        foreach ($this->services as $service) {
            $service->update($this);
        }
    }

    public function setEvent($event)
    {
        $this->event = $event;
        $this->notify();
    }

    public function getEvent()
    {
        return $this->event;
    }
}