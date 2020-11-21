<?php

use PHPUnit\Framework\TestCase;
use Src\DesignPatterns\Observer\Observable;
use Src\DesignPatterns\Observer\ObserverOne;
use Src\DesignPatterns\Observer\ObserverTwo;

/**
 * ObserverTest
 */
class ObserverTest extends TestCase
{
    public function testAttach()
    {
        $observable = new Observable();
        $observerOne = new ObserverOne();
        $observerTwo = new ObserverTwo();

        $this->expectOutputString(
            "get data one and do something...<br>" .
                "get data two and do something else...<br>"
        );

        $observable->attach($observerOne);
        $observable->attach($observerTwo);
        $observable->notify();
    }

    public function testDetach()
    {
        $observable = new Observable();
        $observerOne = new ObserverOne();
        $observerTwo = new ObserverTwo();

        $this->expectOutputString(
            "get data two and do something else...<br>"
        );

        $observable->attach($observerOne);
        $observable->attach($observerTwo);
        $observable->detach($observerOne);
        $observable->notify();
    }
}
