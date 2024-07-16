# Laravel 11 IP 位址的不可變值對象

引入 darsyn 的 ip 套件來擴增 IP 位址的不可變值對象，IPv4 指的是支援 32 位元位址的版本，IPv6 是使用 128 位元位址格式的新版本，IPv4 與 IPv6 兩者目的相同，即：使用唯一辨識碼標示連線至網路的設備。不過，IPv4 能提供的位址僅四十億多組，隨著連線至網路的設備變多，就出現了解決 IP 位址短缺問題的 IPv6。

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
![](https://i.imgur.com/z38A1Pm.png)
> IPv4 位址的文字形式為 nnn.nnn.nnn.nnn，其中 0<=nnn<=255，每一個 n 是一個十進位數。可以省略前導零。最大列印字元數是 15，不計算遮罩
