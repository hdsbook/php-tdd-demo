<?php

namespace Src\DesignPatterns\TemplateMethod;

/**
 * class ClassNotifyTemplate 課程通知流程
 */
abstract class ClassNotifyTemplate
{

    /**
     * 通知者姓名
     *
     * @var string
     */
    protected $notifier;

    /**
     * 通知對象
     *
     * @var string
     */
    protected $notifyTarget;

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

    public final function __construct($notifier, $classData)
    {
        $this->classData = $classData;
        $this->notifier = $notifier;
    }

    /**
     * 課程通知
     *
     * @return array
     */
    public final function notify()
    {
        // 1. 取得通知對象
        $this->getNotifyUsers();
        // 2. 添加 課程資訊 到 通知內文
        $this->makeNotifyPrefix();
        // 3. 添加 其它通知內文
        $this->makeNotifyContent();
        // 4. 發送通知
        return $this->sendNotify();
    }

    /**
     * 取得通知對象
     */
    protected abstract function getNotifyUsers();

    /**
     * 建立通知前綴內容
     */
    protected final function makeNotifyPrefix()
    {
        $this->notifyContent .= "來自 {$this->notifier} 的課程通知！<br>";
        $this->notifyContent .= "課程代碼：{$this->classData['id']}<br>";
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
        return [
            'notifier' => $this->notifier,
            'notifyTarget' => $this->notifyTarget,
            'notifyContent' => $this->notifyContent,
        ];
    }
}
