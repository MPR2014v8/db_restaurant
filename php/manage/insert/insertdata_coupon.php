<?php

require('../../connectdb.php');
echo "<br>";

$cou_id     = $_REQUEST['cou_id'];
$discount       = $_REQUEST['discount'];

$sql = "
    INSERT INTO coupon
    VALUES ('$cou_id', '$discount');
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
<a href="../../form/insert/formInsert_coupon.php">go to form insert coupon</a>