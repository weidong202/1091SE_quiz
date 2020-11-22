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
    秘書意見： <input name="sc_comment" type="text" id="sc_comment" /> <br>
    秘書簽章： <input name="sc_sign" type="text" id="sc_sign" /> <br>

    <input type="submit" name="Submit" value="送出" />
    <!-- <button><a href="login.php">取消</a><br></button> -->
    <br>
  </form>
  </tr>
  </table>
  <table class="tb" border="1">
      <tr>
        <td>申請人（學生）</td>
        <td></td>
        <td>學號</td>
        <td>107</td>
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
        
      <tr>
      </tr>
        <td>導師訪視說明</td>
        <td></td>
        <td>導師簽章</td>
        <td></td>
      </tr>
      <tr>
        <td rowspan="2">秘書審核</td>
        <td>審核結果</td>
        <td colspan="3"></td>
      </tr>
      <tr>
        <td>審查意見</td>
        <td colspan="3"></td>
      </tr>
      <tr>
        <td>秘書簽章</td>
        <td></td>
        <td>校長簽核</td>
        <td></td>
      </tr>
    </table>
</body>

</html>