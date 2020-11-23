<?php
  session_start();
  require('studentModel.php');

  if (!isSet($_SESSION["loginProfile"])) {
    header("Location: loginUI.php");
  }
?>
  <?php
    $sid = (int)$_GET['sid'];

    if (delete($sid)) {
      header("Location:student_mainUI.php");
    } else {
      echo "sorry, internal error, please try again...";
    }
  ?>