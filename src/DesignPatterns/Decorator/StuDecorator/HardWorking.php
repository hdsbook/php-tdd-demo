<?php

namespace decorator\StuDecorator;

use decorator\StudentInterface;

class HardWorking implements StudentInterface
{
    public function __construct(StudentInterface $stu)
    {
        $this->stu = $stu;
    }

    public function study()
    {
        $this->review();
        $this->stu->study();
        $this->recheckAns();
        $this->preview();
    }

    // decorate functions start -------------
    private function recheckAns()
    {
        echo '檢查答案…<br>';
    }

    private function review()
    {
        echo '複習今天的課程內容<br>';
    }

    private function preview()
    {
        echo '預習明天的課程內容<br>';
    }
    // decorate functions end -------------
}
