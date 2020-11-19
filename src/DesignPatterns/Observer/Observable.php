<?php

namespace observer;

/**
 * 被觀察者 Subject
 */
class Observable implements \SplSubject
{
    /**
     * 觀察者們
     *
     * @var \SplObserver[]
     */
    private $observers = [];

    /**
     * 資料成員1
     *
     * @var string
     */
    private $dataOne = 'one';

    /**
     * 資料成員2
     *
     * @var string
     */
    private $dataTwo = 'two';

    /**
     * 附加觀察者
     *
     * @param \SplObserver $observer
     * @return void
     */
    public function attach(\SplObserver $observer)
    {
        $id = spl_object_hash($observer);
        $this->observers[$id] = $observer;
    }

    /**
     * 取消觀察者
     *
     * @param \SplObserver $observer
     * @return void
     */
    public function detach(\SplObserver $observer)
    {
        $id = spl_object_hash($observer);
        if (isset($this->observers[$id])) {
            unset($this->observers[$id]);
        }
    }

    /**
     * 通知觀察者們進更動作
     *
     * @return void
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * 取得資料1
     *
     * @return string
     */
    public function getDataOne()
    {
        return $this->dataOne;
    }

    /**
     * 取得資料2
     *
     * @return string
     */
    public function getDataTwo()
    {
        return $this->dataTwo;
    }
}
