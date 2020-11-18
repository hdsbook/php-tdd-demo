<?php

namespace App\DesignPatterns\Strategy;

class Traveler
{

    protected $name;

    /**
     * 交通方式
     *
     * @var TransportStrategyInterface
     */
    protected $transMethod;

    public function __construct($name, TransportStrategyInterface $transMethod)
    {
        $this->name = $name;
        $this->transMethod = $transMethod;
    }

    public function getName()
    {
        return $this->name;
    }

    public function travelTo($place)
    {
        return $this->name . ' 選擇' . $this->transMethod->goToPlace($place);
    }
}
