<?php

require('../../connectdb.php');
echo "<br>";

$role_id = $_REQUEST['role_id'];
$name = $_REQUEST['name'];

$sql = "
    INSERT INTO role
    VALUES ('$role_id', '$name');
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
<a href="../../form/insert/formInsert_role.php">go to form insert role</a>
