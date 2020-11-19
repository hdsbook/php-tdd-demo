<?php

namespace templateMethod;

class StudentClassNotify extends ClassNotifyTemplate
{
    protected function getNotifyUsers()
    {
        echo '取得通知對象為：課程學生<br>';
    }

    protected function makeNotifyContent()
    {
        $this->notifyContent .= "請攜帶課程講義，準時前往上課！<br>";
    }
}
