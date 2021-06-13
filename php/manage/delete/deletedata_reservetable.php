<?php

$delete_ID  = $_REQUEST['table_id'];

require('../../connectdb.php');

$sql = "
    DELETE FROM reservetable
    WHERE table_id Like '" . $delete_ID . "';
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
<a href="../../show/selectAll_reservetable.php">Return form table reservetable</a>
