<?php
  session_start();
  if (!isSet($_SESSION["loginProfile"])) {
    header("Location: loginUI.php");
  } 

  require("pri_Model.php");

  if (isset($_GET['m'])){
    $msg = "<font color='red'>" . $_GET['m'] . "</font>";
  } else {
    $msg = "Welcome! Principal";
  }

  $result = getApplyDetail(1);
?>
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> -->
<!DOCTYPE html>
<html lang="en">
<!-- <html xmlns="http://www.w3.org/1999/xhtml"> -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>核決系統</title>
    <link rel="stylesheet" href="ui.css">
    <!-- <style type="text/css">
      td {
        padding-left: 10px;
        padding-right: 10px;
        text-align: center;
      }
    </style> -->
  </head>

  <body>
  <div id="banner">
    <h1>核決</h1>
    <h2><a href="logout.php">&#128075;</a></h2>
  </div>

  <p>Online application</p>
  <hr />
  <div><?php echo $msg; ?></div><hr>
  <table class="priTable" border="1">
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
      <th>核決</th>
      <!--<th>disapprove</th>-->
    </tr>
  <?php


  while ($rs = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" , $rs['sid'] , "</td>";
    // echo "<td>" , $rs['name'], "</td>";
    echo "<td></td>";
    echo "<td>" , $rs['fa_name'], "</td>";
    echo "<td>" , $rs['ma_name'], "</td>";
    echo "<td>" , $rs['income_type'], "</td>";
    echo "<td>" , $rs['tea_visit_comment'], "</td>";
    if ($rs['tea_sign'] == 0) {
      echo "<td>" . "未審核" . "</td>";
    } else {
      echo "<td>審核通過</td>";
    }
    if ($rs['sc_apply'] == 0) {
      echo "<td>" . "未審核" . "</td>";
    } else {
      echo "<td>審核通過</td>";
    }
    echo "<td>" , $rs['sc_apply_money'], "</td>";
    echo "<td>" , $rs['sc_comment'], "</td>";
    if ($rs['sc_sign'] == 0) {
      echo "<td>" . "未審核" . "</td>";
    } else {
      echo "<td>審核通過</td>";
    }
    if ($rs['pri_sign'] == 0) {
      echo "<td>" . "未審核" . "</td>";
    } else {
      echo "<td>審核通過</td>";
    }

    echo "<td><a href='pri_Control.php?act=approve&sid={$rs['sid']}'>決行</a>&nbsp";
    echo "<a href='pri_Control.php?act=disapprove&sid={$rs['sid']}'>否決</a></td></tr>";
  }

  ?>
  </table>
  </body>
</html>
