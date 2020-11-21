# php 測試練習

## src/：

- [Collection](/src/Collection/)
- Design Patterns
  - [AbstractFactory](/src/DesignPatterns/AbstractFactory)
  - [Adapter](/src/DesignPatterns/Adapter)
  - [Bridge](/src/DesignPatterns/Bridge)
  - [Decorator](/src/DesignPatterns/Decorator)
  - [Facade](/src/DesignPatterns/Facade)
  - [FactoryMethod](/src/DesignPatterns/FactoryMethod)
  - [ObjectPool](/src/DesignPatterns/ObjectPool)
  - [Observer](/src/DesignPatterns/Observer)
  - [Singleton](/src/DesignPatterns/Singleton)
  - [Strategy](/src/DesignPatterns/Strategy)
  - [TemplateMethod](/src/DesignPatterns/TemplateMethod)
- [Calculator](/src/Calculator.php)

## tests/：

- [Collection](/tests/Collection/)
- Design Patterns
  - [AbstractFactory](/tests/DesignPatterns/AbstractFactory)
  - [Adapter](/tests/DesignPatterns/Adapter)
  - [Bridge](/tests/DesignPatterns/Bridge)
  - [Decorator](/tests/DesignPatterns/Decorator)
  - [Facade](/tests/DesignPatterns/Facade)
  - [FactoryMethod](/tests/DesignPatterns/FactoryMethod)
  - [ObjectPool](/tests/DesignPatterns/ObjectPool)
  - [Observer](/tests/DesignPatterns/Observer)
  - [Singleton](/tests/DesignPatterns/Singleton)
  - [Strategy](/tests/DesignPatterns/Strategy)
  - [TemplateMethod](/tests/DesignPatterns/TemplateMethod)
- [Calculator](/tests/CalculatorTest.php)

## 運行

1. 必需先裝好 php, composer
2. 執行：`composer install`
3. 執行：`composer dump-autoload`
4. 執行下列任一指令查看測試結果：
   - `php vendor/bin/phpunit tests/ --color`
   - `php vendor/bin/phpunit tests/ --testdox --color`
5. 執行以下指令並以瀏覽器開啟 report/index.html 可查看測試覆蓋率
   - `php vendor/bin/phpunit tests/ --coverage-html report/`