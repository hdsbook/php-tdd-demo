<?php

namespace App\DesignPatterns\AbstractFactory\Excel2007;

/**
 * 2007 版試算表 writer
 */
class Excel2007Writer
{
    private $ext = 'xlsx';

    public function arrayToExcel($fileName, $data)
    {
        return "正在寫入 {$fileName}.{$this->ext} …";
    }
}
