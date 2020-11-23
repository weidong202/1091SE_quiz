<?php
require('dbconnect.php');
function t_insert_comment($tea_visit_comment, $tea_sign, $sid){
    global $conn;
    echo $tea_visit_comment;
    echo $tea_sign;
    $sql = "UPDATE se_quiz_stu_apply SET tea_visit_comment='$tea_visit_comment', tea_sign='$tea_sign' WHERE sid=$sid;";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error");
}
function sc_insert_comment($sc_comment, $sc_sign, $sc_apply_money, $sid){
    global $conn;
    $sql = "UPDATE se_quiz_stu_apply SET sc_comment='$sc_comment', sc_apply_money = '$sc_apply_money', sc_sign='$sc_sign' WHERE sid=$sid;";
    mysqli_query($conn, $sql) or die("Insert failed, SQL query error");
}
function getApplyDetail($sid) { //
	global $conn;
    $sql = "SELECT * FROM se_quiz_stu_apply where '$sid'";
	$result = mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	//$rs=mysqli_fetch_assoc($result);
	return $result;
}

?>