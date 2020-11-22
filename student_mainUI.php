<?php
  session_start();
  require('studentModel.php');
  require('userModel.php');

  if (!isSet($_SESSION["loginProfile"])) {
    header("Location: loginUI.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="ui.css">
</head>
<body>
  <div id="banner">
    <h1>申請狀態</h1>
    <h2><a href="logout.php">&#128075;</a></h2>
  </div>

  <table class="tb">
    <tr>
      <th>姓名</th>
      <th>申請補助種類</th>
      <th>導師簽章</th>
      <th>秘書審核</th>
      <th>校長簽核</th>
      <th>刪除</th>
    </tr>

    <?php
      $result = select_history();
      
      while ($rs = mysqli_fetch_assoc($result)) {
        // $sid = get_sid();
        $user = select_user();
        $u = mysqli_fetch_assoc($user);
        echo "<tr><td>" . $u['name'] . "</td>";
        echo "<td>" . $rs['income_type'] . "</td>";
        if ($rs['tea_sign'] == 0) {
          echo "<td>" . "未審核" . "</td>";
        } else {
          echo "<td>" . $rs['tea_sign'] . "</td>";
        }
        if ($rs['sc_sign'] == 0) {
          echo "<td>" . "未審核" . "</td>";
        } else {
          echo "<td>" . $rs['sc_sign'] . "</td>";
        }
        if ($rs['pri_sign'] == 0) {
          echo "<td>" . "未審核" . "</td>";
        } else {
          echo "<td>" . $rs['pri_sign'] . "</td>";
        }
        echo "<td><a href='delete.php?sid=" . $rs['sid'] . "'>刪除</a></td></tr>";
      }
    ?>
    <input class="add" type="button" onclick="location.href='student_applyUI.php'" value="申請">
  </table>
</body>
</html>