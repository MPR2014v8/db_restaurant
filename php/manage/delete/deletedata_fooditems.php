<?php

$delete_ID  = $_REQUEST['item_id'];

require('../../connectdb.php');

$sql = "
    DELETE FROM fooditems
    WHERE item_id Like '" . $delete_ID . "';
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
<a href="../../show/selectAll_fooditems.php">Return form table fooditems</a>
