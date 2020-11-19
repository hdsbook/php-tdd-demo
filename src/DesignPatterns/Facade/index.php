<?php

require __DIR__ . '../../autoload.php';

use facade\Facade;

$facade = new Facade();
$facade->doSomeThing();

?>
<pre>
    Facade 或稱 "外觀模式"
    facade 中文有外表、浮面、表面的意思

    Facade 模式定義了一個更高層的介面(為子系統中的一組介面定義一個統一介面)，使子系統更容易使用。
</pre>
<a href="https://www.notion.so/Facade-f5aed9a17bb04b6280a33dacc35d610a" target="_blank">
    更多…
</a>