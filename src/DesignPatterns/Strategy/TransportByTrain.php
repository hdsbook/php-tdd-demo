<?php

namespace Src\DesignPatterns\Strategy;

class TransportByTrain implements TransportStrategyInterface
{
    public function goToPlace(string $place)
    {
        return " 搭火車 去 {$place}";
    }
}
