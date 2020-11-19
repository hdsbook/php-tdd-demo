<?php

namespace bridge\abstraction;

use bridge\implementation\SelfIntroInterface;

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
        echo $introMethod->selfIntro($this);
    }
}
