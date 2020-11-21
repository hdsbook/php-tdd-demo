<?php

namespace Src\DesignPatterns\TemplateMethod;

/**
 * 課程學員通知
 */
class StudentClassNotify extends ClassNotifyTemplate
{
    protected function getNotifyUsers()
    {
        $this->notifyTarget = '課程學生';
    }

    protected function makeNotifyContent()
    {
        $this->notifyContent .= "請攜帶課程講義，準時前往上課！<br>";
    }
}
