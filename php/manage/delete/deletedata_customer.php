<?php

$delete_ID  = $_REQUEST['cus_tel'];

require('../../connectdb.php');

$sql = "
    DELETE FROM customer
    WHERE cus_tel Like '" . $delete_ID . "';
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
<a href="../../show/selectAll_customer.php">Return form modify customer</a>
