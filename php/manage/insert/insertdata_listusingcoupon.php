<?php

require('../../connectdb.php');
echo "<br>";

$listUsingCoupon_NO     = $_REQUEST['listUsingCoupon_NO'];
$invoice_id             = $_REQUEST['invoice_id'];
$cou_id                 = $_REQUEST['cou_id'];

$sql = "
    INSERT INTO listusingcoupon
    VALUES ('$listUsingCoupon_NO', '$invoice_id', '$cou_id');
";

$objQuery = mysqli_query($conn, $sql);

if($objQuery) {
    echo "***เพิ่มข้อมูลใหม่ในตาราง listusingcoupon : สำเร็จ***";
} else {
    echo "***เพิ่มข้อมูลใหม่ในตาราง listusingcoupon : ไม่สำเร็จ***";
}

mysqli_close($conn);
?>
<br>
<a href="../../form/insert/formInsert_listusingcoupon.php">go to form insert using coupon</a>