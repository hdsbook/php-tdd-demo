<?php

namespace decorator;

class Student implements StudentInterface
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function study()
    {
        echo "{$this->name}開始寫作業<br>";
    }
}
