<?php

require('../../connectdb.php');
echo "<br>";

$invoice_id                  = $_REQUEST['invoice_id'];
$emp_id                      = $_REQUEST['emp_id'];
$cus_tel                     = $_REQUEST['cus_tel'];
$date                   = $_REQUEST['date'];

$sql = "
    INSERT INTO invoice
    VALUES ('$invoice_id', '$emp_id', '$cus_tel', '$date');
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
<a href="../../form/insert/formInsert_invoice.php">go to form insert invoice</a>