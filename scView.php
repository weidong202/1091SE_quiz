<?php
session_start();
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Teacher</title>
</head>

<body>
  <h1>秘書簽注</h1>
  <form method="post" action="scntController.php">

    申請者學號： <input name="sid" type="int" id="sid" /><br>
    審查結果: <input name = "money" type = "int" id = "sc_apply_money"
    秘書意見： <input name="sc_comment" type="text" id="sc_comment" /> <br>
    秘書簽章： <input name="sc_sign" type="text" id="sc_sign" /> <br>

    <input type="submit" name="Submit" value="送出" />
    <!-- <button><a href="login.php">取消</a><br></button> -->
    <br>
  </form>
  </tr>
  </table>
</body>

</html>