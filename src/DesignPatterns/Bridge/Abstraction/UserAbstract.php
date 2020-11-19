<?php

namespace Src\DesignPatterns\Bridge\Abstraction;

use Src\DesignPatterns\Bridge\Implementation\SelfIntroInterface;

/**
 * 使用者
 */
abstract class UserAbstract
{
    public $name;         // 姓名
    public $habit;        // 興趣
    protected $jobName;   // 職業名稱

    public function __construct(String $name, String $habit)
    {
        $this->name = $name;
        $this->habit = $habit;
    }

    public function getJobName()
    {
        return $this->jobName;
    }

    /**
     * 自我介紹
     *
     * @param SelfIntroInterface $introMethod 自我介紹的方式
     */
    public function selfIntro(SelfIntroInterface $introMethod)
    {
        return $introMethod->selfIntro($this);
    }
}
