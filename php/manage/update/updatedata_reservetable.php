<?php

require("../../connectdb.php");

$table_id                 = $_REQUEST['table_id'];
$zone                     = $_REQUEST['zone'];

$sql = "
    UPDATE reservetable
    SET zone = '" . $zone . "'
    WHERE table_id = '" . $table_id . "';
";

$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

if ($objQuery) {
	echo "Record " . $table_id . " was Updated.";
} else {
	echo "Error : Update";
}

mysqli_close($conn);

?>
<br>
<a href="../../show/selectAll_reservetable.php">Return form table reservetable</a>