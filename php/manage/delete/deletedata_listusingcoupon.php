<?php

$delete_ID_listUsingCoupon_NO  = $_REQUEST['listUsingCoupon_NO'];

require('../../connectdb.php');

$sql = "
    DELETE FROM listusingcoupon
    WHERE listUsingCoupon_NO = '" . $delete_ID_listUsingCoupon_NO . "';
";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "Record " . $delete_ID_listUsingCoupon_NO . " was Deleted.";
} else {
    echo "Error : Delete";
}

mysqli_close($conn);
?>
<br>
<a href="../../show/selectAll_listusingcoupon.php">Return form table list using coupon</a>