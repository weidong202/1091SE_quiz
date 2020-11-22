<?php
  session_start();
  $_SESSION['loginProfile'] = NULL;

  echo "<script>alert('You Are Logged Out！'); location.href = 'loginUI.php';</script>";
?>