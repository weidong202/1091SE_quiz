<?php
  session_start();
  require("scntModel.php");

  if (!isSet($_SESSION["loginProfile"])) {
    header("Location: loginUI.php");
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Teacher</title>
  <link rel="stylesheet" href="ui.css">
</head>

<body>
  <div id="banner">
    <h1>秘書簽注</h1>
    <h2><a href="logout.php">&#128075;</a></h2>
  </div>

  <form method="post" action="scntController.php">
    申請者學號： <input name="sid" type="int" id="sid" /><br>
    審查結果： <input name = "sc_apply" type = "radio" value="1" />准予補助
    <input name="sc_apply_money" type="int" id="sc_apply_money" />元
    <input name = "sc_apply" type = "radio" id = "sc_apply" value="0" />未符合補助條件<br>
    秘書意見： <input name="sc_comment" type="text" id="sc_comment" /> <br>
    秘書簽章： <input name="sc_sign" type="text" id="sc_sign" /> <br>

    <input type="submit" name="Submit" value="送出" />
    <br>
  </form>
</body>

</html>