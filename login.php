<?php
  ob_start();
  session_start();

  require('userModel.php');
  $account = $_POST['account'];
  $password = $_POST['password'];

  $userProfile = getUserProfile($account, $password);
  if ($userProfile) {
    $_SESSION['loginProfile'] = $userProfile;
    if ($_SESSION['loginProfile']['account'] == 'root') {
      echo $_SESSION['loginProfile']['account'];
      echo $_SESSION['loginProfile']['sid'];
      echo $_SESSION['loginProfile']['name'];
      echo $_SESSION['loginProfile']['password'];
      // header("Location: student_mainUI.php");
    }
  } else {
    echo "<script>alert('Login failed'); location.href = 'loginUI.php';</script>";
  }
  ob_end_flush();
?>