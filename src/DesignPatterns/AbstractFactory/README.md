# Abstract Factory 或稱 "抽象工廠模式"

> 為建立一組相關或相依的物件提供一個抽象介面，以協調物件的初始化

此範例若單純以 switch 實踐，可能要寫為：

```
$excelObj = null;
switch ($purpose) {
    case 'read':
        $excelObj = ($ext == 'xls') ?
            new Excel5Reader() :
            new Excel2007Reader();
        break;
    case 'write':
        $excelObj = ($ext == 'xls') ?
            new Excel5Writer() :
            new Excel2007Writer();
        break;
}
```

或許上例程式碼看上去精簡許多，不用再製造那麼多的 class

但是 選擇 讀/寫 與 選擇 新/舊版 的程式已經耦合在一起了

且未來若要調整選擇的邏輯，則需 "兩頭改"

並且這樣的寫法等於將選擇的邏輯放到了主程式由主程式負責，降低主程式的可讀性與內聚性


採用了 abstract factory (ExcelFactory) 後，選擇的實作被抽象化、物件的實體化過程被封裝起來了

主程式甚至不需要知道自己用的是什麼具體物件，只需要信任並知道如何使用來自抽象工廠生產出來的物件

物件的實體化過程也交由衍生自抽象工廠的具體工廠 (ExcelReaderFactory、ExcelWriterFactory) 來負責

[更多…](https://www.notion.so/11-Abstract-Factory-a8866fab16c043c7802b9952d5f44a94)