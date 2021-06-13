<?php

$delete_ID_listSale_NO  = $_REQUEST['listSale_NO'];

require('../../connectdb.php');

$sql = "
    DELETE FROM listsale
    WHERE listSale_NO = '" . $delete_ID_listSale_NO . "';
";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "Record " . $delete_ID_listSale_NO . " was Deleted.";
} else {
    echo "Error : Delete";
}

mysqli_close($conn);
?>
<br>
<a href="../../show/selectAll_listsale.php">Return form table list sale</a>
