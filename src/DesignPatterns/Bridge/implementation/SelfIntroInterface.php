<?php

namespace bridge\implementation;

use bridge\abstraction\UserAbstract;

/**
 * 自我介紹
 */
interface SelfIntroInterface
{
    public function selfIntro(UserAbstract $user): string;
}
