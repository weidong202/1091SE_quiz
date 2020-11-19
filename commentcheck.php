<?php
session_start();
require("userModel.php");

$tea_comment = $_POST['tea_comment'];

if (checkUserIDPwd($userName, $passWord)) {
	$_SESSION['uID'] = $userName;
	header("Location: todoListView.php");
} else {
	$_SESSION['uID']="";
	header("Location: loginForm.php");
}
?>
