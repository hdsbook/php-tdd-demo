<?php

namespace Src\DesignPatterns\Bridge\Implementation;

use Src\DesignPatterns\Bridge\Abstraction\UserAbstract;

/**
 * 簡單自我介紹
 */
class BriefSelfIntro implements SelfIntroInterface
{
    public function selfIntro(UserAbstract $user): string
    {
        return "大家好，我叫{$user->name}！";
    }
}
