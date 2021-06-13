<?php

require("../../connectdb.php");

$item_id     = $_REQUEST['item_id'];
$name       = $_REQUEST['name'];

$sql = "
    UPDATE fooditems
    SET name = '" . $name . "'
    WHERE item_id = '" . $item_id . "';
";

$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

if ($objQuery) {
	echo "Record " . $item_id . " was Updated.";
} else {
	echo "Error : Update";
}

mysqli_close($conn);

?>
<br>
<a href="../../show/selectAll_fooditems.php">Return form table fooditems</a>