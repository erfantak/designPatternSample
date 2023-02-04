<?php


namespace Observer\Service;


use Observer\Observable;

interface ObserverInterface
{
    public function update(Observable $observable);
}