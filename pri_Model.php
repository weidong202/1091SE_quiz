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

function setApprove($sid) {  //決行
	global $db;
	$sql = "update se_quiz_people set pri_admit = 1 where sid=$sid and pri_admit = 0;";
	$result = mysqli_query($db,$sql) or die("MySQL query error"); //執行SQL
	return $result;
}

function setDisApprove($sid) {  //否決
	global $db;
	$sql = "update se_quiz_people set pri_admit = 2 where sid=$sid and pri_admit = 0;";
	$result = mysqli_query($db,$sql) or die("MySQL query error"); //執行SQL
	return $result;
}

?>
