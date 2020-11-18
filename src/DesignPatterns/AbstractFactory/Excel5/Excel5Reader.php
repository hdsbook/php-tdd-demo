<?php

namespace App\DesignPatterns\AbstractFactory\Excel5;

/**
 * 1993 試算表 reader
 */
class Excel5Reader
{
    private $ext = 'xls';

    public function excelToArray($fileName)
    {
        return "正在讀取 {$fileName}.{$this->ext} …";
    }
}
