<?php

require __DIR__ . '../../autoload.php';

use templateMethod\StudentClassNotify;
use templateMethod\TeacherClassNotify;

$notifier = '課程管理者';
$className = '國文課';

$teaNotify = new TeacherClassNotify($notifier, $className);
$stuNotify = new StudentClassNotify($notifier, $className);

$teaNotify->notify();
$stuNotify->notify();

/**
 * result:
 * 正在取得課程資訊...
 * 取得通知對象為：授課教師
 * ---進行通知，通知內容如下：---
 * 來自 課程管理者 的課程通知！
 * 課程名稱：國文課
 * 課程時間：今天下午兩點 ~ 三點
 * 您為此課程的授課教師！
 * 請準時前往授課！
 *
 * 正在取得課程資訊...
 * 取得通知對象為：課程學生
 * ---進行通知，通知內容如下：---
 * 來自 課程管理者 的課程通知！
 * 課程名稱：國文課
 * 課程時間：今天下午兩點 ~ 三點
 * 請攜帶課程講義，準時前往上課！
 */
?>
<pre>
    Template Method 或稱 "樣版方法模式"
    定義一操作演算法的骨架，將一些步驟延遲到子類別中實作
    不改變演算法結構的前提下，允許重新定義可變的子步驟

    控制不同過程中的共同序列

    使用情境：
    1. 遇到一系列步驟構成的過程需要執行
    2. 整個過程從高層次上看是相同的
    3. 但有些步驟的實作可能不同

    如：
    1. 類似產品生產的SOP
    2. 各種SQL資料庫的底層實作

    先定義步驟序列，然後覆蓋(overwrite)那些需要改變的步驟
    透過 Template Method 支援概念上相同而各步驟實作不同的系統時，我們還可以避免冗餘的出現
</pre>

<a href="https://www.notion.so/19-Template-Method-c321ef5353dd425e89b3205fc5b28dc6" target="_blank">
    更多…
</a>