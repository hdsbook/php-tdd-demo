<?php

use decorator\StuDecorator\HardWorking;
use decorator\StuDecorator\Lazy;
use decorator\Student;

require __DIR__ . '../../autoload.php';

echo '大雄唸書流程：<br>';
$lazyStu = new Lazy(new Student('大雄'));
$lazyStu->study();
echo '------------<br>';

echo '靜香唸書流程：<br>';
$goodStu = new HardWorking(new Student('靜香'));
$goodStu->study();

?>
<pre>
    Decorator 或稱 "裝飾模式"
    動態地給一個物件增加職責
    就增加功能來說，裝飾模式相比產生子類別更為靈活
    ConcreteComponent 讓 Decorator 物件為自己增加功能。
</pre>

<a href="https://www.notion.so/17-Decorator-7e382966369e4d4088433122ae51570f" target="_blank">
    更多…
</a>