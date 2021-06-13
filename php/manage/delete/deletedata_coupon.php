<?php

$delete_ID  = $_REQUEST['cou_id'];

require('../../connectdb.php');

$sql = "
    DELETE FROM coupon
    WHERE cou_id Like '" . $delete_ID . "';
";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "Record " . $delete_ID . " was Deleted.";
} else {
    echo "Error : Delete";
}

mysqli_close($conn);
?>
<br>
<a href="../../show/selectAll_coupon.php">Return form table coupon</a>