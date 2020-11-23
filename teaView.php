<?php
session_start();
require("dbconnect.php");
?>
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Teacher</title>
  <link rel="stylesheet" href="ui.css">
</head>

<body>
  <h1>導師簽注</h1>
  <h2><a href="logout.php">&#128075;</a></h2>
  <form method="post" action="scntController.php">

    申請者學號： <input name="sid" type="int" id="sid" /><br>
    導師訪視說明： <input name="tea_visit_comment" type="text" id="tea_visit_comment" /> <br>
    導師簽章： <input name="tea_sign" type="text" id="tea_sign" /> <br>

    <input type="submit" name="Submit" value="送出" />
    <!-- <button><a href="login.php">取消</a><br></button> -->
    <br>
  </form>
  </tr>
  </table>
</body>

</html>