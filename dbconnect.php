<?php
  /*
  連線資料庫用的副程式
  */
  $host = 'localhost'; // 執行 DB Server 的主機
  $user = 'root';
  $pwd = '';
  $dbName = '1091se';

  $db = mysqli_connect($host, $user, $pwd, $dbName);

  if ($db) {
    // mysqli_query(資料庫連線, "utf8") 為執行 sql 語法的函式
    mysqli_query($db, "SET NAMES utf8"); // 設定編碼為 unicode utf8
    // echo "connect success";
  } else {
    // mysqli_connect_error() 顯示連線錯誤訊息
    echo '連線失敗'.mysqli_connect_error();
  }
?>