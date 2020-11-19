<?php
  require_once('dbconnect.php');

  // 新增資料
  function insert($profile) {
    global $db;
    $sql = "INSERT INTO se_quiz_stu_apply (fa_name, ma_name, income_type) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $profile['fa_name'], $profile['ma_name'], $profile['income_type']);
    mysqli_stmt_execute($stmt);
  }

  // 更新資料表
//   function update($profile, $id) {
//     global $db;
//     $sql = "UPDATE todo SET title = ?, content = ?, importance = ?, assign = ?, returned = ? WHERE id = ?";
//     $stmt = mysqli_prepare($db, $sql);
//     mysqli_stmt_bind_param($stmt, "sssssi", $profile['title'], $profile['content'], $profile['importance'], $profile['assign'], $profile['returned'], $id);
//     mysqli_stmt_execute($stmt);
//   }

//   function update_check($returned, $id) {
//     global $db;
//     $sql = "UPDATE todo SET returned = ? WHERE id = ?";
//     $stmt = mysqli_prepare($db, $sql);
//     mysqli_stmt_bind_param($stmt, "si", $returned, $id);
//     mysqli_stmt_execute($stmt);
//   }

  // 刪除資料
  function delete($sid) {
    global $db;
    $sql = "DELETE FROM se_quiz_stu_apply WHERE sid = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "i", $sid);
    return mysqli_stmt_execute($stmt);
  }

  // 取得所有資料
  function select() {
    global $db;
    $sql = "SELECT name, income_type, tea_sign, sc_sign, pri_sign FROM se_quiz_stu_apply";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt); // 得到資料
    return $result;
  }

  function select_history() {
    global $db;
    $sql = "SELECT sid, income_type, tea_sign, sc_sign, pri_sign FROM se_quiz_stu_apply";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt); // 得到資料
    return $result;
  }
  function get_sid(){
    global $db;
    $sql = "SELECT sid FROM se_quiz_stu_apply";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt); // 得到資料
    return $result; 
  }
?>
