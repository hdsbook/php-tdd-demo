<?php

class BulletPool
{
    private $freeBullets = [];
    private $occupiedBullets = [];

    public function __construct()
    {
        //
    }

    public function get()
    {
        if (count($this->freeBullets)) {
            $bullet = array_pop($this->freeBullets);
            $bulletKey = spl_object_hash($bullet);
            $this->occupiedBullets[$bulletKey] = $bullet;
        } else {
            $bullet = new Bullet();
        }
        return $bullet;
    }

    public function recycle(Bullet $bullet)
    {
        $bulletKey = spl_object_hash($bullet);
        if (isset($this->occupiedBullets[$bulletKey])) {
            unset($this->occupiedBullets[$bulletKey]);
            $this->freeBullets[$bulletKey] = $bullet;
        }
    }
}
