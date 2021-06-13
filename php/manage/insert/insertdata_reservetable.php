<?php

require('../../connectdb.php');
echo "<br>";

$table_id     = $_REQUEST['table_id'];
$zone       = $_REQUEST['zone'];

$sql = "
    INSERT INTO reservetable
    VALUES ('$table_id', '$zone');
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
<a href="../../form/insert/formInsert_reservetable.php">go to form insert reserve table</a>