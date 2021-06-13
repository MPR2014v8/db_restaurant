<?php

require('../../connectdb.php');
echo "<br>";

$emp_id     = $_REQUEST['emp_id'];
$name       = $_REQUEST['name'];
$role_id    = $_REQUEST['role_id'];
$salary     = $_REQUEST['salary'];
$email      = $_REQUEST['email'];

$sql = "
    INSERT INTO employee
    VALUES ('$emp_id', '$name', '$role_id', '$salary', '$email');
";

$objQuery = mysqli_query($conn, $sql);

if($objQuery) {
    echo "***เพิ่มข้อมูลใหม่ในตาราง role : สำเร็จ***";
} else {
    echo "***เพิ่มข้อมูลใหม่ในตาราง role : ไม่สำเร็จ***";
}

mysqli_close($conn);
echo "<br>";
echo "***การทำงานสิ้นสุดแล้ว***";

?>
<br>
<a href="../../form/insert/formInsert_employee.php">go to form insert employee</a>