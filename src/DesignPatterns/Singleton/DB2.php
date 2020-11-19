<?php

namespace singleton;

class DB2
{
    use Singleton;

    public function doSomething()
    {
        echo __CLASS__ . ' do something<br>';
    }
}
