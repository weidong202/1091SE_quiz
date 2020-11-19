<?php
require_once("dbconnect.php");
/*
pri_admit 
0:未核, 1:決行, 2:否決
*/
function getApplyDetail($id) { //
	global $conn;
        $sql = "select sid,	name, fa_name, ma_name, income_type, tea_visit_comment, tea_sign, sc_apply, sc_apply_money, sc_comment, sc_sign, pri_sign from se_quiz_stu_apply where id=$id;";
		mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
}

function setApprove($id) {  //決行
	global $conn;
	$sql = "update se_quiz_people set pri_admit = 1 where id=$id and pri_admit = 0;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	
}

function setDisApprove($id) {  //否決
	global $conn;
	$sql = "update se_quiz_people set pri_admit = 2 where id=$id and pri_admit = 0;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	
}

?>
