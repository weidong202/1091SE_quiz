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
      // echo $_SESSION['loginProfile']['sid'];
      // echo $_SESSION['loginProfile']['name'];
      // echo $_SESSION['loginProfile']['password'];
      header("Location: student_mainUI.php");
    }
    if ($_SESSION['loginProfile']['account'] == 'pri') {
      header("Location: pri_View.php");
    }
    if ($_SESSION['loginProfile']['account'] == 'teacher') {
      header("Location: teaView.php");
    }
    if ($_SESSION['loginProfile']['account'] == 'sc') {
      header("Location: scView.php");
    }
  } else {
    echo "<script>alert('Login failed'); location.href = 'loginUI.php';</script>";
  }
  ob_end_flush();
?>