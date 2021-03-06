<?php

namespace Tests\DesignPatterns\Strategy;

use Src\DesignPatterns\Strategy\TransportByBus;
use Src\DesignPatterns\Strategy\TransportByTrain;
use Src\DesignPatterns\Strategy\Traveler;
use PHPUnit\Framework\TestCase;

class TravelerTest extends TestCase
{
    /**
     * @var Traveler $busTraveler
     */
    private $busTraveler;

    /**
     * @var Traveler $trainTraveler
     */
    private $trainTraveler;

    protected function setUp(): void
    {
        parent::setUp();

        $takeBusStrategy = new TransportByBus();
        $takeTrainStrategy = new TransportByTrain();

        $this->busTraveler = new Traveler('阿里巴巴', $takeBusStrategy);
        $this->trainTraveler = new Traveler('動力火車', $takeTrainStrategy);;
    }

    public function testGetName()
    {
        $this->assertSame('阿里巴巴', $this->busTraveler->getName());
        $this->assertSame('動力火車', $this->trainTraveler->getName());
    }

    public function testTravelTo()
    {
        $this->assertSame(
            "阿里巴巴 選擇 搭巴士 去 台北",
            $this->busTraveler->travelTo('台北')
        );
        $this->assertSame(
            "動力火車 選擇 搭火車 去 台中",
            $this->trainTraveler->travelTo('台中')
        );
    }
}
