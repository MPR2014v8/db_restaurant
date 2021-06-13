<?php

$delete_ID_listReserveTable_NO  = $_REQUEST['listReserveTable_NO'];

require('../../connectdb.php');

$sql = "
    DELETE FROM listreservetable
    WHERE listReserveTable_NO = '" . $delete_ID_listReserveTable_NO . "';
";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "Record " . $delete_ID_listReserveTable_NO . " was Deleted.";
} else {
    echo "Error : Delete";
}

mysqli_close($conn);
?>
<br>
<a href="../../show/selectAll_listreservetable.php">Return form table list reserve table</a>