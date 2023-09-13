<html>
    <head><title>Add Student</title></head>
    <body>        
        <center>
            <h1>Add Student</h1>
            <form action="do_add_student.php" method="post">
                <table width="40%" border="1">
                    <tr><td>Student Code:</td><td><input type="text" name="student_code" /></td></tr>
                    <tr><td>Student Name:</td><td><input type="text" name="student_name" /></td></tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <select name="Gender">
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                            </select>
                        </td>
                    </tr>
                    <tr><td colspan="2"><input type="submit" value="ADD" /></td></tr>
                </table>
            </form>
        </center>
    </body>
</html>