<?php

namespace facade;

use facade\system_api\Api1;
use facade\system_api\Api2;

class Facade
{
    public function doSomeThing()
    {
        $api1 = new Api1();
        $api2 = new Api2();

        $api1->doSomeThing();
        $api2->doSomeThing();
    }
}
