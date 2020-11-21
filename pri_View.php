<?php
//session_start();
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



$result=getApplyDetail(1);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>核決系統</title>
<style type="text/css">
td {
	padding-left: 10px;
	padding-right: 10px;
	text-align: center;

}
</style>
</head>

<body>

<p>Online application</p>
<hr />
<div><?php echo $msg; ?></div><hr>
<!--<a href="loginForm.php">logout</a> | <!--<a href="todoAddForm.php?id=-1">Add Task</a> <br><br>-->
<table height="150" border="1">
  <tr>
    <th>學號</th>
    <th>姓名</th>
    <th>父親</th>
	<th>母親</th>
    <th>收入</th>
	<th>導師意見</th>
    <th>導師簽章</th>      
    <th>秘書審核結果</th>      
    <th>核定金額</th>
    <th>審查意見</th>    
    <th>秘書簽章</th>       
	<th>校長核決</th>
	<th>approve</th>
	<!--<th>disapprove</th>-->
  </tr>
<?php


while ($rs=mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>" , $rs['sid'] , "</td>";
	echo "<td>" , $rs['name'], "</td>";
    echo "<td>" , $rs['fa_name'], "</td>";
    echo "<td>" , $rs['ma_name'], "</td>";
    echo "<td>" , $rs['income_type'], "</td>";
    echo "<td>" , $rs['tea_visit_comment'], "</td>";
    echo "<td>" , $rs['tea_sign'], "</td>";
    echo "<td>" , $rs['sc_apply'], "</td>";
    echo "<td>" , $rs['sc_apply_money'], "</td>";
    echo "<td>" , $rs['sc_comment'], "</td>";
    echo "<td>" , $rs['sc_sign'], "</td>";
    echo "<td>" , $rs['pri_sign'], "</td>";
	echo "<td><a href='pri_Control.php?act=approve&id={$rs['sid']}'>決行</a>&nbsp";
	echo "<a href='pri_Control.php?act=disapprove&id={$rs['sid']}'>否決</a></td>";
    
	// echo "<td>";

	// 	echo "<a href='pri_Control.php?act=approve&id={$rs['sid']}'>決行</a>  ";	
    // 	echo "<a href='pri_Control.php?act=disapprove&id={$rs['sid']}'>否決</a>  " ;

	// echo "</td>";
	echo "</tr>";
}

?>
</table>
</body>
</html>
