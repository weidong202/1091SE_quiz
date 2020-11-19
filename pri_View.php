<?php
session_start();
// if (! isset($_SESSION['id']) or $_SESSION['id']<="") {
// 	header("Location: loginForm.php");
// } 

// if ($_SESSION['id']=='boss'){
	$priMode = 1;
// } else {
	// $priMode = 0;
// }
require("pri_Model.php");

if (isset($_GET['m'])){
	$msg="<font color='red'>" . $_GET['m'] . "</font>";
} else {
    $msg="Welcome! Principal";
}



getApplyDetail($priMode);
//$jobStatus = array('未完成','已完成','已結案','已取消');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>Online application</p>
<hr />
<div><?php echo $msg; ?></div><hr>
<a href="loginForm.php">logout</a> | <!--<a href="todoAddForm.php?id=-1">Add Task</a> <br><br>-->
<table width="200" border="1">
  <tr>
    <td>sid</td>
    <td>name</td>
    <td>fa_name</td>
	<td>ma_name</td>
    <td>income_type</td>
	<td>tea_visit_comment</td>
    <td>tea_sign</td>      <!---->
    <td>sc_apply</td>      <!---->
    <td>sc_apply_money</td><!---->
    <td>sc_comment</td>    <!---->
    <td>sc_sign</td>       <!---->
	<td>pri_sign</td>
  </tr>
<?php

while (	$rs=mysqli_fetch_assoc($result)) {
    /*
	switch($rs['urgent']) {
		case '緊急':
			$bgColor="#ff9999";
			$timeLimit = 60;
			break;
		case '重要':
			$bgColor="#99ff99";
			$timeLimit = 120;
			break;
		default:
			$bgColor="#ffffff";
			$timeLimit = 180;
			break;
	}

	if ($rs['diff']>$timeLimit) {
		$fontColor="red";
	} else {
		$fontColor="black";		
    }
    //sid,	name, fa_name, ma_name, income_type, tea_visit_comment, tea_sign, sc_apply, sc_apply_money, sc_comment, sc_sign, pri_sign
*/
	echo "<tr style='background-color:$bgColor;'><td>" . $rs['id'] . "</td>";
	echo "<td>" , ($rs['sid']), "</td>";
    echo "<td>" , ($rs['fa_name']), "</td>";
    echo "<td>" , ($rs['ma_name']), "</td>";
    echo "<td>" , ($rs['income_type']), "</td>";
    echo "<td>" , ($rs['tea_visit_comment']), "</td>";
    echo "<td>" , ($rs['tea_sign']), "</td>";
    echo "<td>" , ($rs['sc_apply']), "</td>";
    echo "<td>" , ($rs['sc_apply_money']), "</td>";
    echo "<td>" , ($rs['sc_comment']), "</td>";
    echo "<td>" , ($rs['sc_sign']), "</td>";
    echo "<td>" , ($rs['pri_sign']), "</td>";
    

    
	echo "<td><font color='$fontColor'>{$rs['diff']}</font></td><td>";
    switch($rs['pri_admit']) {
		case 0:
			if ($priMode) {
				echo "<a href='pri_Control.php?act=cancel&id={$rs['id']}'>決行</a>  ";	
                echo "<a href='pri_Control.php?act=cancel&id={$rs['id']}'>否決</a>  " ;
			} else {
				//echo "<a href='todoSetControl.php?act=finish&id={$rs['id']}'>Finish</a>  ";
			}

			break;
		default:
			break;
	}
	echo "</td></tr>";
}
?>
</table>
</body>
</html>
