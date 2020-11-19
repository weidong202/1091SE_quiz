<?php
//   session_start();
  require('studentModel.php');

//   if (!isSet($_SESSION["loginProfile"])) {
//     header("Location: loginUI.php");
//   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>申請</title>
  <!-- <link rel="stylesheet" href="ui.css"> -->
</head>
<body>
  <div id="banner">
    <h1>貧困學生補助經費申請表</h1>
  </div>
  <form action="apply.php" method="post">
  <table class="tb">
      <tr>
        <th>父親姓名</th>
        <th>母親姓名</th>
        <th>申請補助種類</th>
      </tr>

      <tr>
        <td><input class="e" type="text" name="fa_name"></td>
        <td><input class="e" type="text" name="ma_name"></td>
        <td>
          <select name="income_type">
            <option value="低收入戶">低收入戶</option>
            <option value="中低收入戶">中低收入戶</option>
            <option value="家庭突發因素">家庭突發因素</option>
          </select>
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