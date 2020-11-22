<?php
require("dbconnect.php");
/*
pri_admit 
0:未核, 1:決行, 2:否決
*/
function getApplyDetail($sid) { //
	global $db;
    $sql = "SELECT * FROM se_quiz_stu_apply where '$sid'";
	$result = mysqli_query($db,$sql) or die("DB Error: Cannot retrieve message.");
	//$rs=mysqli_fetch_assoc($result);
	return $result;
}

function setApprove($uid) {  //決行
	global $db;
	$sql = "UPDATE se_quiz_stu_apply SET pri_sign = '1' WHERE se_quiz_stu_apply.sid = '$uid'";
	//$sql = "update se_quiz_stu_apply set pri_sign = 1 where sid=$uid and pri_sign = 0;";
	//UPDATE `se_quiz_stu_apply` SET `pri_sign` = '1' WHERE `se_quiz_stu_apply`.`sid` = 0;
	$result = mysqli_query($db,$sql) or die("MySQL query error"); //執行SQL
	return $result;
}

function setDisApprove($uid) {  //否決
	global $db;
	$sql = "update se_quiz_stu_apply set pri_sign = 2 where sid=$uid and pri_sign = 0;";
	$result = mysqli_query($db,$sql) or die("MySQL query error"); //執行SQL
	return $result;
}

?>
