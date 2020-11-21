<?php

namespace Src\DesignPatterns\Facade;

use Src\DesignPatterns\Facade\SystemApis\Api2;
use Src\DesignPatterns\Facade\SystemApis\Api3;

class FacadeB
{
    public function doSomeThing()
    {
        $api2 = new Api2();
        $api3 = new Api3();

        $result = [];
        $result[] = $api2->doSomeThing();
        $result[] = $api3->doSomeThing();
        return $result;
    }
}
