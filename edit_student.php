<?php
require("connect_db.php");
$student_code = $_GET["student_code"];
$sql = "SELECT * FROM student WHERE student_code = '$student_code'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<html>
    <head><title>Edit Student</title></head>
    <body>        
        <center>
            <h1>Edit Student</h1>
            <form action="do_edit_student.php" method="post">
                <table width="40%" border="1">
                    <tr><td>Student Code:</td><td><input type="text" name="student_code" value="<?php echo $row["student_code"];?>" readonly /></td></tr>
                    <tr><td>Student Name:</td><td><input type="text" name="student_name" value="<?php echo $row["student_name"];?>" /></td></tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <select name="Gender">
                                <option value="F"<?php if($row["Gender"]=="F") echo " selected";?>>Female</option>
                                <option value="M"<?php if($row["Gender"]=="M") echo " selected";?>>Male</option>
                            </select>
                        </td>
                    </tr>
                    <tr><td colspan="2" style="text-align:center;"><input type="submit" value="ADD" /></td></tr>
                </table>
            </form>
        </center>
    </body>
</html>