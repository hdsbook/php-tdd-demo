<?php

namespace templateMethod;

abstract class ClassNotifyTemplate
{

    /**
     * 通知者姓名
     *
     * @var string
     */
    protected $notifier;

    /**
     * 課程資訊
     *
     * @var array
     */
    protected $classData;

    /**
     * 通知內文
     *
     * @var string
     */
    protected $notifyContent = "";

    public final function __construct($notifier, $className)
    {
        $this->classData['name'] = $className;
        $this->notifier = $notifier;
    }

    /**
     * 取得課程資訊
     */
    protected function getClassInfo()
    {
        echo '正在取得課程資訊...<br>';
        $this->classData['time'] = "今天下午兩點 ~ 三點";
    }

    /**
     * 取得通知對向
     */
    protected abstract function getNotifyUsers();

    /**
     * 建立通知前綴內容
     */
    protected final function makeNotifyPrefix()
    {
        $this->notifyContent .= "來自 {$this->notifier} 的課程通知！<br>";
        $this->notifyContent .= "課程名稱：{$this->classData['name']}<br>";
        $this->notifyContent .= "課程時間：{$this->classData['time']}<br>";
    }

    /**
     * 建立通知內容
     */
    protected abstract function makeNotifyContent();

    /**
     * 發送通知
     */
    protected function sendNotify()
    {
        echo '---進行通知，通知內容如下：---<br>';
        echo $this->notifyContent;
        echo "<hr>";
    }

    public final function notify()
    {
        $this->getClassInfo();
        $this->getNotifyUsers();
        $this->makeNotifyPrefix();
        $this->makeNotifyContent();
        $this->sendNotify();
    }
}
