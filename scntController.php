<?php
require("scntModel.php");
$sid = $_POST['sid'];

// 老師
if (isset($_POST['tea_visit_comment'])) {
  $tea_visit_comment = mysqli_escape_string($db, $_POST['tea_visit_comment']);
  $tea_sign = mysqli_escape_string($db, $_POST['tea_sign']);
  t_insert_comment($tea_visit_comment, $tea_sign, $sid);
} else {  // 秘書
  $sc_comment = mysqli_escape_string($db, $_POST['sc_comment']);
  $sc_sign = mysqli_escape_string($db, $_POST['sc_sign']);
  $sc_apply = mysqli_escape_string($db, $_POST['sc_apply']);
  $sc_apply_money = mysqli_escape_string($db, $_POST['sc_apply_money']);
  sc_insert_comment($sc_comment, $sc_sign, $sc_apply, $sc_apply_money, $sid);
}
echo "Message: Completed.";
?>