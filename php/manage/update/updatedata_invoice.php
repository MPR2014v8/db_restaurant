<?php

require("../../connectdb.php");

$invoice_id                 = $_REQUEST['invoice_id'];
$emp_id                     = $_REQUEST['emp_id'];
$cus_tel                    = $_REQUEST['cus_tel'];
$dateNtime                  = $_REQUEST['dateNtime'];

$sql = "
    UPDATE invoice
    SET emp_id = '" . $emp_id . "',
    cus_tel = '" . $cus_tel . "',
    dateNtime = '" . $dateNtime . "'
    WHERE invoice_id = '" . $invoice_id . "';
";

$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

if ($objQuery) {
	echo "Record " . $invoice_id . " was Updated.";
} else {
	echo "Error : Update";
}

mysqli_close($conn);

?>
<br>
<a href="../../show/selectAll_invoice.php">Return form table invoice</a>