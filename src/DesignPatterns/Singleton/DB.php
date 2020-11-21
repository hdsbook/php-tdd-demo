<?php

namespace Src\DesignPatterns\Singleton;

class DB
{
    private static $instance;

    private function __clone()
    {
        // 私有化，避免 instance 被 clone
    }

    private function __sleep()
    {
        // 私有化，防止序列化
    }

    private function __wakeup()
    {
        // 私有化，防止反序列化
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
