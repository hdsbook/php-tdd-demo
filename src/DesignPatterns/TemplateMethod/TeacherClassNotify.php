<?php

namespace Src\DesignPatterns\TemplateMethod;

/**
 * 課程教師通知
 */
class TeacherClassNotify extends ClassNotifyTemplate
{
    protected function getNotifyUsers()
    {
        $this->notifyTarget = '授課教師';
    }

    protected function makeNotifyContent()
    {
        $this->notifyContent .= "您為此課程的授課教師！<br>";
        $this->notifyContent .= "請準時前往授課！<br>";
    }
}
