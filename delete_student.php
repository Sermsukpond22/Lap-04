<?php
require("connect_db.php");
$student_code = $_POST["student_code"];

$sql = "DELETE FROM student WHERE student_code='$student_code'";
mysqli_query($conn, $sql);
header("location: student_list.php");
exit(0);
?>