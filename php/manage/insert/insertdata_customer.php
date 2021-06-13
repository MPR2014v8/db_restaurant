<?php

require('../../connectdb.php');
echo "<br>";

$cus_tel     = $_REQUEST['cus_tel'];
$name       = $_REQUEST['name'];

$sql = "
    INSERT INTO customer
    VALUES ('$cus_tel', '$name');
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
<a href="../../form/insert/formInsert_customer.php">go to form insert customer</a>