<?php


require __DIR__ . '../../autoload.php';

use bridge\abstraction\Student;
use bridge\abstraction\Teacher;
use bridge\implementation\BriefSelfIntro;
use bridge\implementation\DetailedSelfIntro;

$student = new Student('子路', '舞劍');
$teacher = new Teacher('孔子', '彈琴');

$teacher->selfIntro(new BriefSelfIntro());
$teacher->selfIntro(new DetailedSelfIntro());

$student->selfIntro(new BriefSelfIntro());
$student->selfIntro(new DetailedSelfIntro());

/**
 * results:
 * 大家好，我叫孔子！
 * 大家好，我叫孔子，我是一位教師，我的興趣是彈琴
 * 大家好，我叫子路！
 * 大家好，我叫子路，我是一位學生，我的興趣是舞劍
 */

?>
<pre>
    Bridge 或稱 "橋接模式"

    bridge 將 抽象上的變化 與 實作上的變化 分開

    抽象：abstraction
    實作：implementation

    以此範例來說，抽象就是指教師與學生，為抽象類別(使用者)的衍生物件
    而自我介紹，就是此物件的一組實作
    若不用bridge，使用者與自我介紹的方式將會有 n * n 種不同的結果 (組合爆炸)
    使用 bridge 後，能夠產生 1 + 1 > 2 的效果
    且抽象層的變化與實作層的變化是互相獨立的

    p.s. 這個模式感覺就是考慮物件多型的 strategy 模式
</pre>

<a href="https://www.notion.so/10-Bridge-c8e5c179471547639097fccd8799e0f2" target="_blank">
    更多…
</a>