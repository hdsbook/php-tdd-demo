<?php

use observer\Observable;
use observer\ObserverOne;
use observer\ObserverTwo;

require __DIR__ . '../../autoload.php';

$observable = new Observable();

$observerOne = new ObserverOne();
$observerTwo = new ObserverTwo();

$observable->attach($observerOne);
$observable->attach($observerTwo);
$observable->notify();

$observable->detach($observerOne);
$observable->notify();

/**
 * result:
 *
 * get data one and do something...
 * get data two and do something else...
 * get data two and do something else...
 */

?>

<pre>
    Observer 或稱 "觀察者模式"
    定義物件間的一種一對多的相依關係
    當一個物件的狀態發生改變時，所有相依於它的物件都將得到通知並自動更新

    Subject 在所監視的事件發生時通知 Observer
    Observer 向 Subject 註冊，在得到通知時從 Subject 獲取資訊

    將通知者與被通知者解耦
    subject: 主題; observer: 觀察者

    php 的標準庫中，已經定義了 SplObserver 和 SplSubject 兩個 Interface 來快速規範 observer 模式的介面

    可能可以應用的情境如：
    (1) 服務註冊時，進行子項目的初始化 (如學員報名課程，觸發進行各項作業的初始化…)
    (2) 服務解除時，解除子項目 (如刪除課程時，刪除學員各項作業)
    (3) 每日通知觸發時，進行不同通知的發送 (如發送今日課程通知、未完成作業通知、課程報名通知、考試通知…)
</pre>

<a href="https://www.notion.so/18-Observer-751c3839bb0d4dc7829ad8d896180aa9" target="_blank">
    更多…
</a>