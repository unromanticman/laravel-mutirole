# laravel-mutirole
laravel mutirole

使用Laravel內建功能達到多種使用者權限驗證&登入

請看這隻檔案範例：
/app/Http/Controllers/UserCheckController.php 

clone完專案後請先mirgate 然後手動在user資料表加入 role 這欄位 如下

<img width="600" src="http://i.imgur.com/zQkmCqK.png">

之後可以執行這些路由：

列出目前登入使用者資訊:<br>
'API/User/checkUser/'  

使用者登入:<br>
'API/User/userLogin/'

使用者註冊:<br>
'API/User/userRegister/'

使用者登出:<br>
'API/User/userLogout/'

可以直接透過GET使用 參數則參考 /app/Http/Controllers/UserCheckController.php 

這裡面所request的input自行帶入

且注意註冊時因有自己的SQL欄位role 所以要把他加入註冊時的欄位，在建立時才會把role insert進資料表

<img width="700" src="http://i.imgur.com/4zzLl9q.png">





