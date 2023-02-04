<?php


namespace Observer;


interface Observable
{
    public function attach($service);

    public function detach($service);

    public function notify();
}