# Laravel 8 IP 位址的不可變值對象

引入 darsyn 的 ip 套件來擴增 IP 位址的不可變值對象，IPv4 位址由一個網路和一個主電腦部分組成（根據位址類別而定）。根據起始幾個位元定義不同位址類別：A、B、C、D 或 E。 IPv4 位址總數為 4 294 967 296。IPv6 位址的主電腦部分（或它的一部分）將衍生自 MAC 位址或其他介面 ID。
根據子網路字首，IPv6 有比 IPv4 更複雜的架構。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/ip-address/check/` 來進行 IP 位址檢查。

----

## 畫面截圖
![](https://i.imgur.com/31LxNB6.png)
> IPv4 位址的文字形式為 nnn.nnn.nnn.nnn，其中 0<=nnn<=255，每一個 n 是一個十進位數。可以省略前導零。最大列印字元數是 15，不計算遮罩
