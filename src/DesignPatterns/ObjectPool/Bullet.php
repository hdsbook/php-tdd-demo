<?php

namespace Src\DesignPatterns\ObjectPool;

class Bullet
{
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = date('Y-m-d H:i:s');
    }

    public function shoot()
    {
        echo 'shoot';
    }
}
