<?php
require("connect_db.php");
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
echo "<center>";
echo "<table border=1 width=40%>";
echo "<tr><th>Student Code</th><th>Student Name</th><th>Gender</th><th>Edit</th><th>Delete</th></tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["student_code"]."</td><td>"
    .$row["student_name"]."</td><td>"
    .$row["gender"]."</td><td><a href=edit_student.php?student_code=".$row["student_code"].">Edit</a></td>"
    ."<td><a href=delete_student.php?student_code=".$row["student_code"].">Delete</a></td></tr>";
}
echo "</table><br>";
echo "<a href=add_student.php>Add Student</a>";
echo "</center>";
?>