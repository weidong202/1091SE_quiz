<?php
    require('dbconnect.php');
function insert_comment($tea_visit_comment){
    global $db;
    $sql = "INSERT into se_quiz_stu_apply (tea_visit_comment) VALUES (?)";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "s", $tea_visit_comment);
    mysqli_stmt_execute($stmt);
}

?>