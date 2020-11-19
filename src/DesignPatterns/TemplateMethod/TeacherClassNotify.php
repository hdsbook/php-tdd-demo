<?php

namespace templateMethod;

class TeacherClassNotify extends ClassNotifyTemplate
{
    protected function getNotifyUsers()
    {
        echo '取得通知對象為：授課教師<br>';
    }

    protected function makeNotifyContent()
    {
        $this->notifyContent .= "您為此課程的授課教師！<br>";
        $this->notifyContent .= "請準時前往授課！<br>";
    }
}
