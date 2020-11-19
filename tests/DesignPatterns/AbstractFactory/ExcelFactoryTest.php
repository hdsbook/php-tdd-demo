<?php

namespace Tests\DesignPatterns\AbstractFactory;

use Src\DesignPatterns\AbstractFactory\ExcelFactory\ExcelReaderFactory;
use Src\DesignPatterns\AbstractFactory\ExcelFactory\ExcelWriterFactory;
use PHPUnit\Framework\TestCase;

/**
 * ExcelFactoryTest
 * @group ExcelFactory
 * @covers ExcelFactory
 */
class ExcelFactoryTest extends TestCase
{
    /** @covers ExcelReaderFactory */
    public function testReaderFactory()
    {
        $excelFactory = new ExcelReaderFactory();

        $excel5Reader = $excelFactory->Excel5();
        $actual = $excel5Reader->excelToArray('舊版檔案', ['一些資料']);
        $this->assertEquals('正在讀取 舊版檔案.xls …', $actual);

        $excel2007Reader = $excelFactory->Excel2007();
        $actual = $excel2007Reader->excelToArray('新版檔案', ['一些資料']);
        $this->assertEquals('正在讀取 新版檔案.xlsx …', $actual);
    }

    /** @covers ExcelWriterFactory */
    public function testWriterFactory()
    {
        $excelFactory = new ExcelWriterFactory();
        $excel5Writer = $excelFactory->Excel5();
        $actual = $excel5Writer->arrayToExcel('舊版檔案', ['一些資料']);
        $this->assertEquals('正在寫入 舊版檔案.xls …', $actual);

        $excel2007Writer = $excelFactory->Excel2007();
        $actual = $excel2007Writer->arrayToExcel('新版檔案', ['一些資料']);
        $this->assertEquals('正在寫入 新版檔案.xlsx …', $actual);
    }
}
