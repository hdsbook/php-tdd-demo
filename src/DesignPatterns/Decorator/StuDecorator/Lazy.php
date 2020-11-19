<?php

namespace decorator\StuDecorator;

use decorator\StudentInterface;

class Lazy implements StudentInterface
{
    public function __construct(StudentInterface $stu)
    {
        $this->stu = $stu;
    }

    public function study()
    {
        $this->playGame();
        $this->daze();
        $this->stu->study();
        $this->fellAsleep();
    }

    // decorate functions start -------------
    private function playGame()
    {
        echo '玩一下遊戲<br>';
    }

    private function daze()
    {
        echo '發呆中…<br>';
    }

    private function fellAsleep()
    {
        echo '睡著了…<br>';
    }
    // decorate functions end -------------
}
