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
  function update($profile, $id) {
    global $db;
    $sql = "UPDATE todo SET title = ?, content = ?, importance = ?, assign = ?, returned = ? WHERE id = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "sssssi", $profile['title'], $profile['content'], $profile['importance'], $profile['assign'], $profile['returned'], $id);
    mysqli_stmt_execute($stmt);
  }

  function update_status($id) {
    global $db;
    $sql = "UPDATE todo SET status = 1, returned = '已完成' WHERE id = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
  }

  function update_status_back($id) {
    global $db;
    $sql = "UPDATE todo SET status = 0, returned = '未完成' WHERE id = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
  }

  function update_check($returned, $id) {
    global $db;
    $sql = "UPDATE todo SET returned = ? WHERE id = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "si", $returned, $id);
    mysqli_stmt_execute($stmt);
  }

  /*
  // 更改資料表 增加欄位
  function add() {
    global $db;
    $sql = "ALTER TABLE todo ADD school VARCHAR(15)";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_execute($stmt);
  }

  // 更改資料表 刪除欄位
  function drop() {
    global $db;
    $sql = "ALTER TABLE todo DROP school";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_execute($stmt);
  }
  */

  // 刪除資料
  function delete($id) {
    global $db;
    $sql = "DELETE FROM todo WHERE id = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
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

  function select_boss() {
    global $db;
    $sql = "SELECT * FROM todo ORDER BY returned, CASE importance WHEN '緊急' THEN 1 WHEN '重要' THEN 2 WHEN '一般' THEN 3 END";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt); // 得到資料
    return $result;
  }

  function select_history() {
    global $db;
    $sql = "SELECT name, income_type, tea_sign, sc_sign, pri_sign FROM se_quiz_stu_apply";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt); // 得到資料
    return $result;
  }

  // 取得所選資料
  function get_list_by_id($id) {
    global $db;
    $sql = "SELECT * FROM todo WHERE id = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return $result;
  }
?>
