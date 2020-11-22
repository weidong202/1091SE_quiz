<?php
    require('dbconnect.php');
function t_insert_comment($tea_visit_comment, $tea_sign, $sid){
    global $conn;
    $sql = "UPDATE se_quiz_stu_apply SET tea_visit_commet='$tea_visit_comment', tea_sign='$tea_sign' WHERE sid=$sid;";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error");
}
function sc_insert_comment($sc_comment, $sc_sign, $sid){
    global $conn;
    $sql = "UPDATE se_quiz_stu_apply SET sc_comment='$sc_comment', sc_sign='$sc_sign' WHERE sid=$sid;";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error");
}
?>