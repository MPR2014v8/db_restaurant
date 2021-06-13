<?php

require("../../connectdb.php");

$cus_tel     = $_REQUEST['cus_tel'];
$name   = $_REQUEST['name'];

$sql = "
    UPDATE customer
    SET name = '" . $name . "'
    WHERE cus_tel = '" . $cus_tel . "';
";

$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

if ($objQuery) {
	echo "Record " . $cus_tel . " was Updated.";
} else {
	echo "Error : Update";
}

mysqli_close($conn);

?>
<br>
<a href="../../show/selectAll_customer.php">Return form table customer</a>