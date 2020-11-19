# Decorator 或稱 "裝飾模式"

> 動態地給一個物件增加職責
>
> 就增加功能來說，裝飾模式相比產生子類別更為靈活
>
> ConcreteComponent 讓 Decorator 物件為自己增加功能。


## Component

- `StudentInterface`: interface
- `Student`: concrete component, implements `StudentInterface`

## Decorator 繼承關係

- `StuDecorator`: abstract, implements `StudentInterface`
  - `HardWorking`: concrete decorator, extends `StuDecorator`
  - `Lazy`: concrete decorator, extends `StuDecorator`


[更多…](https://www.notion.so/17-Decorator-7e382966369e4d4088433122ae51570f)