## 天瓏圖書爬蟲API

本範例實作自 [WadeHuang1993](https://github.com/WadeHuang1993/test-automation-dojo/tree/main/originPHP/Src/BookCrawlers) 提供的練習案例

### 爬蟲測試案例的目錄如下

src/BookCrawlers

裡面包含專門向天瓏圖書爬取資料的爬蟲 TenlongCrawler.php。

tests/BookCrawlers

裡面包含 天瓏圖書爬蟲 的測試案例： TenlongCrawlerTest.php

### 實作爬蟲API

1. 傳入書名關鍵字 => 回傳書本資訊 (單本)
2. 傳入類別名 => 回傳書單 (多本)

### 使用到兩個套件

- [guzzlehttp/guzzle](https://github.com/guzzle/guzzle) 用來抓取網頁 HTML
  - `composer require guzzlehttp/guzzle`
- [voku/simple_html_dom](https://github.com/voku/simple_html_dom) 用來解析 HTML 內容
  - `composer require voku/simple_html_dom && composer require voku/portable-utf8`


### 執行測試案例

```bash
vendor/bin/phpunit tests/BookCrawlers/
```