<?php

namespace observer;

class ObserverOne implements \SplObserver
{
    /**
     * 監視事件發生，進行更新
     *
     * @param \SplSubject $observable
     * @return void
     */
    public function update(\SplSubject $observable)
    {
        echo 'get data ' .  $observable->getDataOne() . ' and do something...<br>';
    }
}
