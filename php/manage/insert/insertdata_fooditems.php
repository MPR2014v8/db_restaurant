<?php

require('../../connectdb.php');
echo "<br>";

$item_id     = $_REQUEST['item_id'];
$name       = $_REQUEST['name'];

$sql = "
    INSERT INTO fooditems
    VALUES ('$item_id', '$name');
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
<a href="../../form/insert/formInsert_fooditems.php">go to form insert items</a>