<?php

namespace Src\DesignPatterns\ObjectPool;

use Countable;

class BulletPool implements Countable
{
    private $freeBullets = [];
    private $occupiedBullets = [];

    public function get()
    {
        if (count($this->freeBullets)) {
            $bullet = array_pop($this->freeBullets);
        } else {
            $bullet = new Bullet();
        }

        $bulletKey = spl_object_hash($bullet);
        $this->occupiedBullets[$bulletKey] = $bullet;
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

    public function count()
    {
        return count($this->freeBullets) + count($this->occupiedBullets);
    }
}
