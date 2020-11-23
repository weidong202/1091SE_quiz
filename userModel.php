<?php
  require_once('dbconnect.php');

  function select_user() {
    global $db;
    $sql = "SELECT sid, name FROM se_quiz_people";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return $result;
  }

  function getUserProfile($account, $password) {
    global $db;
    $sql = "SELECT * FROM user WHERE account = ? and password = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $account, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
      // return user profile
      $ret = array('account' => $account, 'password' => $password, 'sid' => $row['sid'], 'name' => $row['name']);
    } else {
      $ret = NULL;
    }
    return $ret;
  }
?>