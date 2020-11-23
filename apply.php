<?php
  session_start();

  if (!isSet($_SESSION["loginProfile"])) {
    header("Location: loginUI.php");
  }

  require('studentModel.php');

  $detail = array('fa_name' => $_POST['fa_name'], 'ma_name' => $_POST['ma_name'], 'income_type' => $_POST['income_type']);
  insert($detail);
  header("Location:student_mainUI.php");
?>