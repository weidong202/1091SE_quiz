<?php
  session_start();
  require('studentModel.php');
  // require('userModel.php');

  if (!isSet($_SESSION["loginProfile"])) {
    header("Location: loginUI.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>申請</title>
  <link rel="stylesheet" href="ui.css">
</head>
<body>
  <div id="banner">
    <h1>貧困學生補助經費申請表</h1>
  </div>
  <form action="apply.php" method="post">
  <table class="tb" border="1">
      <tr>
        <td>申請人（學生）</td>
        <td><?php echo $_SESSION["loginProfile"]['name'] ?></td>
        <td>學號</td>
        <td><?php echo $_SESSION["loginProfile"]['sid'] ?></td>
      </tr>

      <tr>
        <td rowspan="3">家庭狀況</td>
        <td>稱謂</td>
        <td colspan="2">姓名</td>
      </tr>

      <tr>
        <td>父</td>
        <td colspan="2"><input class="e" type="text" name="fa_name"></td>
      </tr>

      <tr>
        <td>母</td>
        <td colspan="2"><input class="e" type="text" name="ma_name"></td>
      </tr>

      <tr>
        <td>申請補助種類</td>
        <td colspan="3">
        <input type="radio" name="income_type" value="低收入戶"> 低收入戶<br>
        <input type="radio" name="income_type" value="中低收入戶"> 中低收入戶<br>
        <input type="radio" name="income_type" value="家庭突發因素"> 家庭突發因素<br>
        </td>
      </tr>

      <input class="submit" type="submit" value="OK">
    </table>
  </form>
  <form action="student_mainUI.php" method="post">
    <input class="back" type="submit" value="BACK">
  </form>
</body>
</html>