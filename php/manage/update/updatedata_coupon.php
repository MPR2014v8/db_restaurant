<?php

require("../../connectdb.php");

$cou_id     = $_REQUEST['cou_id'];
$discount   = $_REQUEST['discount'];

$sql = "
    UPDATE coupon
    SET discount = '" . $discount . "'
    WHERE cou_id = '" . $cou_id . "';
";

$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

if ($objQuery) {
	echo "Record " . $cou_id . " was Updated.";
} else {
	echo "Error : Update";
}

mysqli_close($conn);

?>
<br>
<a href="../../show/selectAll_coupon.php">Return form table coupon</a>