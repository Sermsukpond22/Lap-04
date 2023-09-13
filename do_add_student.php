<?php
require("connect_db.php");
$student_code = $_POST["student_code"];
$student_name = $_POST["student_name"];
$gender = $_POST["Gender"];

$sql = "SELECT * FROM student WHERE student_code = '$student_code'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    echo "Student Code: $student_code is exist";
    exit(0);
}

$sql = "INSERT INTO student(student_code, student_name, Gender)";
$sql .= " VALUES ('$student_code', '$student_name', '$Gender')";
mysqli_query($conn, $sql);
header("location: student_list.php");
exit(0);
?>