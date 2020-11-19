<?php

require __DIR__ . '../../autoload.php';

use singleton\DB;
use singleton\DB2;

$db = DB::getInstance();
$db1_2 = DB::getInstance();

$db2 = DB2::getInstance();
$db2_2 = DB2::getInstance();

$db->doSomething();
$db2->doSomething();

// 下面這行將會失敗，因為不能不透過 getInstance 實體化
// $dbFail = new DB();

/**
 * result:
 * singleton\DB 已被建構
 * singleton\DB2 已被建構
 * singleton\DB do something
 * singleton\DB2 do something
 */

?>
<pre>
    Singleton 或稱 "單例模式"
</pre>

<a href="https://www.notion.so/Newpattern-15218afb7e1a4e6082e8253cc1bd2bd9" target="_blank">更多…</a>