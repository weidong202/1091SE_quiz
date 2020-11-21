<?php
require("pri_Model.php");

$uID=(int)$_GET['sid'];
$act =$_GET['act'];
$msg = "Message:$uid, Action: $act completed.";

if ($uid>0) {
	switch($act) {
		case 'approve':
			setApprove($uid);
			
            break;
            
		case 'disapprove':
			setDisApprove($uid);
            break;

		default:
			$msg="Invalid action. Ignored.";
			break;
	}
}
header("Location: pri_View.php?m=$msg");
?>