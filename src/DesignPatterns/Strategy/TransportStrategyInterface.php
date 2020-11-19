<?php

namespace Src\DesignPatterns\Strategy;

/**
 * 交通方式
 */
interface TransportStrategyInterface
{
    public function goToPlace(String $place);
}
