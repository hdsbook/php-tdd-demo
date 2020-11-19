<?php

require __DIR__ . '../../autoload.php';

use factoryMethod\GunCreator;
use factoryMethod\ShooterCreator;

$shooterCreator = new ShooterCreator();
$shooter = $shooterCreator->create();
$shooter->intro();

$gunCreator = new GunCreator();
$gun = $gunCreator->create();
$gun->intro();


/**
 * results
 *
 * 這是一把槍
 * 這是一位射手
 */
?>
<pre>
    Factory method 或稱 "工廠方法模式"

    定義一個用於創建物件的介面，讓子類別決定實例化哪一個類別。
    工廠方法讓類別的實例化延遲到其子類別。
    『工廠方法模式』定義了一個建立物件的介面，但由次類別決定要實體化的 類別為何者。

    捨棄使用 new 的誘惑。
    用一個 create 方法來建立同一體系的物件。
</pre>

<a href="https://www.notion.so/23-Factory-Method-b764fbc3a6c44e0c9d0e065f28a60cac" target="_blank">更多…</a>