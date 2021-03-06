<?php

namespace Src\DesignPatterns\AbstractFactory\ExcelFactory;

use Src\DesignPatterns\AbstractFactory\Excel2007\Excel2007Reader;
use Src\DesignPatterns\AbstractFactory\Excel5\Excel5Reader;

/**
 * 試算表取讀器工廠 (實體工廠)
 */
class ExcelReaderFactory implements ExcelFactory
{
    public function Excel5()
    {
        return new Excel5Reader();
    }

    public function Excel2007()
    {
        return new Excel2007Reader();
    }
}
