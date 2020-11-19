<?php

class Bullet
{
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = date('Y-m-d H:i:s');
        echo 'bullet created at ' . $this->createdAt . '<br>';
    }
}
