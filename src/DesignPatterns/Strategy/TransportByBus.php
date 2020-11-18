<?php

namespace App\DesignPatterns\Strategy;

class TransportByBus implements TransportStrategyInterface
{
    public function goToPlace(string $place)
    {
        return " 搭巴士 去 {$place}";
    }
}
