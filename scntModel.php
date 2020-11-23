<?php
  require('dbconnect.php');
  function t_insert_comment($tea_visit_comment, $tea_sign, $sid){
    global $db;
    $sql = "UPDATE se_quiz_stu_apply SET tea_visit_comment='$tea_visit_comment', tea_sign='$tea_sign' WHERE sid=$sid;";
    mysqli_query($db, $sql) or die("Insert failed, SQL query error");
  }
  function sc_insert_comment($sc_comment, $sc_sign, $sc_apply, $sc_apply_money, $sid){
    global $db;
    $sql = "UPDATE se_quiz_stu_apply SET sc_comment='$sc_comment', sc_apply = '$sc_apply', sc_apply_money = '$sc_apply_money', sc_sign='$sc_sign' WHERE sid=$sid;";
    mysqli_query($db, $sql) or die("Insert failed, SQL query error");
  }
?>