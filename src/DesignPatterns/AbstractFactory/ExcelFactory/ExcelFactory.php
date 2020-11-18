<?php

namespace App\DesignPatterns\AbstractFactory\ExcelFactory;

/**
 * 試算表工廠 (抽象工廠)
 */
interface ExcelFactory
{
    public function Excel5();

    public function Excel2007();
}
