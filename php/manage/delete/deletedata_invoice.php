<?php

$delete_ID_invoice_id  = $_REQUEST['invoice_id'];

require('../../connectdb.php');

$sql = "
    DELETE FROM invoice
    WHERE invoice_id = '" . $delete_ID_invoice_id . "';
";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "Record " . $delete_ID_invoice_id . " was Deleted.";
} else {
    echo "Error : Delete";
}

mysqli_close($conn);
?>
<br>
<a href="../../show/selectAll_invoice.php">Return form table invoice</a>