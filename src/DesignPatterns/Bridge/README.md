# Bridge 或稱 "橋接模式"

> bridge 將 `抽象上的變化` 與 `實作上的變化` 分開
>
> 抽象：abstraction
>
> 實作：implementation

bridge 模式經常與 adapter 模式結合 (複合設計模式)

使用情境：A+B才是一個完整的物件，但是A和B又分別有各種不同的實現時

參考資料：https://ithelp.ithome.com.tw/articles/10207956

---

以此範例來說，抽象就是指教師與學生，為抽象類別(使用者)的衍生物件

而自我介紹，就是此物件的一組實作

若不用bridge，使用者與自我介紹的方式將會有 n * n 種不同的結果 (組合爆炸)

使用 bridge 後，能夠產生 1 + 1 > 2 的效果，且抽象層的變化與實作層的變化是互相獨立的

p.s. 這個模式感覺就是考慮物件多型的 strategy 模式

[更多…](https://www.notion.so/10-Bridge-c8e5c179471547639097fccd8799e0f2)