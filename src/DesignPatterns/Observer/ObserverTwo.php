<?php

namespace observer;

class ObserverTwo implements \SplObserver
{
    /**
     * 監視事件發生，進行更新
     *
     * @param \SplSubject $observable
     * @return void
     */
    public function update(\SplSubject $observable)
    {
        echo 'get data ' .  $observable->getDataTwo() . ' and do something else...<br>';
    }
}
