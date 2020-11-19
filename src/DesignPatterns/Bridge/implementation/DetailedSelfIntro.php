<?php

namespace bridge\implementation;

use bridge\abstraction\UserAbstract;

/**
 * 詳細自我介紹
 */
class DetailedSelfIntro implements SelfIntroInterface
{
    public function selfIntro(UserAbstract $user): string
    {
        return "大家好，我叫{$user->name}，我是一位{$user->getJobName()}，我的興趣是{$user->habit}<br>";
    }
}
