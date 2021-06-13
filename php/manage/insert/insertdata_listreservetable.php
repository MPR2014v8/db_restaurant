<?php

require('../../connectdb.php');
echo "<br>";

$listReserveTable_NO     = $_REQUEST['listReserveTable_NO'];
$invoice_id              = $_REQUEST['invoice_id'];
$table_id                = $_REQUEST['table_id'];

$sql = "
    INSERT INTO listreservetable
    VALUES ('$listReserveTable_NO', '$invoice_id', '$table_id');
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
<a href="../../form/insert/formInsert_listreservetable.php">go to form insert list reserve table</a>