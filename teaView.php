<?php
session_start();
require("scntModel.php");
$result=getApplyDetail(1);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Teacher</title>
</head>
<!-- action="scntController.php" -->
<body>
  <h1>導師簽注</h1>
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
  <form method="post" action="scntController.php"> 
    <table height="150" border="1">
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
  </form>
<?php
while ($rs=mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>" , "<input name=sid type=int id=sid />" , "</td>";
	echo "<td>" , $rs['name'], "</td>";
    echo "<td>" , $rs['fa_name'], "</td>";
    echo "<td>" , $rs['ma_name'], "</td>";
    echo "<td>" , $rs['income_type'], "</td>";
    echo "<td>" , "<input name=tea_visit_comment type=text id=tea_visit_comment />", "</td>";
    echo "<td>" , "<input type=checkbox name=tea_sign value=1>agree<br><input type=checkbox name=tea_sign value=2>disagree", "</td>";
    echo "<td>" , $rs['sc_apply'], "</td>";
    echo "<td>" , $rs['sc_apply_money'], "</td>";
    echo "<td>" , $rs['sc_comment'], "</td>";
    echo "<td>" , $rs['sc_sign'], "</td>";
    echo "<td>" , $rs['pri_sign'], "</td>";
	echo "<td>" , " <input type=submit name=SubmitButton value=送出 />&nbsp";
    
	// echo "<td>";

	// 	echo "<a href='pri_Control.php?act=approve&sid={$rs['sid']}'>決行</a>  ";	
    // 	echo "<a href='pri_Control.php?act=disapprove&sid={$rs['sid']}'>否決</a>  " ;

	// echo "</td>";
	echo "</tr>";
}

?>
</body>
</html>
