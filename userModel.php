<?php
require_once('dbconnect.php');

function select_user() {
    global $db;
    $sql = "SELECT sid, name FROM se_quiz_people";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt); // 得到資料
    return $result;
  }
?>