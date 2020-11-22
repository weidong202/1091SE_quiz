<?php
require("scntModel.php");
$sid = $_POST['sid'];

//老師
if (isset($_POST['tea_visit_comment'])) {
  echo "test";
  $tea_visit_comment = mysqli_escape_string($conn, $_POST['tea_visit_comment']);
  $tea_sign = mysqli_escape_string($conn, $_POST['tea_sign']);
  t_insert_comment($tea_visit_comment, $tea_sign, $sid);
} else {  //秘書
  echo "test222";
  $sc_comment = mysqli_escape_string($conn, $_POST['sc_comment']);
  $sc_sign = mysqli_escape_string($conn, $_POST['sc_sign']);
  sc_insert_comment($sc_comment, $sc_sign, $sid);
}
echo "Message: Completed.";
?>