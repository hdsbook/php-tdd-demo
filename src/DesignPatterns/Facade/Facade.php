<?php

namespace Src\DesignPatterns\Facade;

use Src\DesignPatterns\Facade\SystemApis\Api1;
use Src\DesignPatterns\Facade\SystemApis\Api2;

class Facade
{
    public function doSomeThing()
    {
        $api1 = new Api1();
        $api2 = new Api2();

        $result = [];
        $result[] = $api1->doSomeThing();
        $result[] = $api2->doSomeThing();
        return $result;
    }
}
