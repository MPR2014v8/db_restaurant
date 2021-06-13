<?php

require('../../connectdb.php');
echo "<br>";

$listSale_NO    = $_REQUEST['listSale_NO'];
$invoice_id     = $_REQUEST['invoice_id'];
$item_id        = $_REQUEST['item_id'];
$number         = $_REQUEST['number'];

$sql = "
    INSERT INTO listsale
    VALUES ('$listSale_NO', '$invoice_id', '$item_id', '$number');
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
<a href="../../form/insert/formInsert_listsale.php">go to form insert sale</a>