<?php

namespace Src\DesignPatterns\Bridge\Implementation;

use Src\DesignPatterns\Bridge\Abstraction\UserAbstract;

/**
 * 自我介紹
 */
interface SelfIntroInterface
{
    public function selfIntro(UserAbstract $user): string;
}
