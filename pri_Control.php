<?php
  require("pri_Model.php");

  $msgID = (int)$_GET['sid'];
  $act = $_GET['act'];
  $msg = "Message: $msgID, Action: $act completed.";

  if ($msgID > 0) {
    switch($act) {
      case 'approve':
        setApprove($msgID);
          break;

      case 'disapprove':
        setDisApprove($msgID);
          break;

      default:
        $msg = "Invalid action. Ignored.";
        break;
    }
  }
  header("Location: pri_View.php?m=$msg");
?>